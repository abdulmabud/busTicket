<?php require 'header.php'; ?>
<div class="col-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Place</h4>
            <form action="place.php" method="POST" class="forms-sample col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                        <option value="1">Publish</option>
                        <option value="0">Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="add_place"> Add Place </button>
                <button class="btn btn-light"><a href="place.php">Cancel</a></button>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>