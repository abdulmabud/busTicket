<?php require 'header.php'; ?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $db = new Database();
        $place = $db->select("SELECT * FROM places WHERE id ='$id' ")->fetch_assoc();
    }
?>
<div class="col-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Place</h4>
            <form action="place.php" method="POST" class="forms-sample col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $place['name']; ?>" id="exampleInputName1" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                        <option value="1">Publish</option>
                        <option value="0" <?php echo $place['status'] == 0 ? 'Selected':''; ?>>Unpublish</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $place['id']; ?>">
                <button type="submit" class="btn btn-primary mr-2" name="update_place"> Update Place </button>
                <button class="btn btn-light"><a href="place.php">Cancel</a></button>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>