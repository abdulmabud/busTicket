<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $cityList = [];
    $cites = $db->select("SELECT name FROM places WHERE status = 1");
    while($cites !== false && $city = $cites->fetch_assoc()){
        array_push($cityList, $city['name']);
    }
?>
<div class="col-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Route</h4>
            <form action="route.php" method="POST" class="forms-sample col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="from">From</label>
                    <select class="form-control form-control-lg" name="from" id="from">
                        <?php foreach($cityList as $city){ ?>
                            <option><?php echo $city; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="to">To</label>
                    <select class="form-control form-control-lg" name="to" id="to">
                        <?php foreach($cityList as $city){ ?>
                            <option><?php echo $city; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="busType">Bus Type</label>
                    <select class="form-control form-control-lg" name="bus_type" id="busType">
                        <option value="acBus">Ac Bus</option>
                        <option value="nonAcBus">No Ac Bus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fare">Fare</label>
                    <input type="number" class="form-control" name="fare" id="fare" placeholder="Fare Amount" required/>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control form-control-lg" name="status" id="status">
                        <option value="1">Publish</option>
                        <option value="0">Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="add_route"> Add Route </button>
                <button class="btn btn-light"><a href="route.php">Cancel</a></button>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>