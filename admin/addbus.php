<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $fromCities = $db->select("SELECT DISTINCT cityF FROM place");
    $toCities = $db->select("SELECT DISTINCT cityT FROM place");
?>
<div class="col-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Bus</h4>
            <form action="bus.php" method="POST" class="forms-sample col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">From</label>
                    <select class="form-control form-control-lg" name="city_from" id="exampleFormControlSelect1">
                        <?php while($fromCity = $fromCities->fetch_assoc()){ ?>
                        <option><?php echo $fromCity['cityF'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">To</label>
                    <select class="form-control form-control-lg" name="city_to" id="exampleFormControlSelect2">
                        <?php while($toCity = $toCities->fetch_assoc()){ ?>
                        <option><?php echo $toCity['cityT'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Bus Type</label>
                    <select class="form-control form-control-lg" name="bus_type" id="exampleFormControlSelect3">                
                        <option value="acBus">Ac Bus</option>
                        <option value="nonAcBus">Non Ac Bus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Date</label>
                    <input type="date" class="form-control" name="date" id="exampleInputName2" required
                        style="padding: 7px 12px;" />
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Time</label>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="time"
                                    id="membershipRadios1" value="7.00 AM" checked /> 7.00 AM </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="time"
                                    id="membershipRadios2" value="2.00 PM" /> 2.00 PM </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="time"
                                    id="membershipRadios2" value="10.00 PM" /> 10.00 PM </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="add_bus"> Add Bus </button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>