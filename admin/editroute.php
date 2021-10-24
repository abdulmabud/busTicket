<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $cityList = [];
    $cites = $db->select("SELECT name FROM places WHERE status = 1");
    while($cites !== false && $city = $cites->fetch_assoc()){
        array_push($cityList, $city['name']);
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $route = $db->select("SELECT * FROM routes WHERE id = '$id' ")->fetch_assoc();
    }
?>
<div class="col-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Route</h4>
            <form action="route.php" method="POST" class="forms-sample col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="from">From</label>
                    <select class="form-control form-control-lg" name="from" id="from">
                        <?php foreach($cityList as $city){ ?>
                            <option <?php echo $route['cityF'] == $city ? 'Selected':'' ?>><?php echo $city; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="to">To</label>
                    <select class="form-control form-control-lg" name="to" id="to">
                        <?php foreach($cityList as $city){ ?>
                            <option <?php echo $route['cityT'] == $city ? 'Selected':'' ?>><?php echo $city; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="busType">Bus Type</label>
                    <select class="form-control form-control-lg" name="bus_type" id="busType">
                        <option value="acBus">Ac Bus</option>
                        <option <?php echo $route['busType'] == 'nonAcBus' ? 'Selected':'' ?> value="nonAcBus">No Ac Bus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fare">Fare</label>
                    <input type="number" class="form-control" name="fare" value="<?php echo $route['fare']; ?>" id="fare" placeholder="Fare Amount" required/>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control form-control-lg" name="status" id="status">
                        <option value="1">Publish</option>
                        <option <?php echo $route['status'] == 0 ? 'Selected':'' ?> value="0">Unpublish</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $route['id']; ?>">
                <button type="submit" class="btn btn-primary mr-2" name="update_route"> Add Route </button>
                <button class="btn btn-light"><a href="route.php">Cancel</a></button>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>