<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $mesage = '';
    if(isset($_POST['add_place'])){
        $name = $_POST['name'];
        $status = $_POST['status'];

        $result = $db->insert("INSERT INTO places(name, status) VALUES('$name', '$status')");
        
        if($result){
            $mesage = "Place Added Successfully";
        }
    }
    if(isset($_POST['update_place'])){
        $name = $_POST['name'];
        $status = $_POST['status'];
        $id = $_POST['id'];
        $result = $db->update("UPDATE places SET name = '$name', status = '$status' WHERE id='$id' ");
        
        if($result){
            $mesage = "Place Update Successfully";
        }
    }
    if(isset($_POST['delete_place'])){
        $id = $_POST['id'];
        $delete = $db->delete("DELETE FROM places WHERE id='$id'");
        if($delete){
            $mesage = "Place Deleted Successfully";
        }
    }
    $places = $db->select("SELECT * FROM places");
?>

<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
        <?php if($mesage != ''): ?>
        <h4 class="bg-primary text-light p-2 rounded"><?php echo $mesage; ?></h4>
    <?php endif; ?>
            <h4 class="card-title">Place List</h4>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Place ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($places !== false && $places->num_rows > 0){ while($place = $places->fetch_assoc()){  ?>
                        <tr>
                            <td class="py-1"> <?php echo $place['id']; ?> </td>
                            <td class="py-1" title="<?php echo $place['description']; ?>"> <?php echo $place['name']; ?> </td>
                            <td class="py-1"> <?php echo $place['status'] == 1 ? 'Publish':'Unpublish'; ?> </td>
                            <td class="py-1">
                                <a href="editplace.php?id=<?php echo $place['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger" 
                                onclick="
                                event.preventDefault();
                                document.getElementById('place_from<?php echo $place['id']; ?>').submit();"
                                >Delete
                            </a>
                            <form action="" method="POST" id="place_from<?php echo $place['id']; ?>" class="d-none">
                                <input type="hidden" name="id" value="<?php echo $place['id']; ?>">
                                <input type="hidden" name="delete_place">
                            </form>
                            </td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>

</script>
<?php require 'footer.php'; ?>