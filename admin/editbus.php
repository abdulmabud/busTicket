<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $placeList = [];
    $places = $db->select("SELECT DISTINCT name FROM places");
    while($places !== false && $place = $places->fetch_assoc()){
        array_push($placeList, $place['name']);
    }
    
    if($_GET['id']){
        $id = $_GET['id'];
        $bus = $db->select("SELECT * FROM bus WHERE id= '$id' ")->fetch_assoc();
    }
?>
<div class="col-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Bus</h4>
            <form action="bus.php" method="POST" class="forms-sample col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $bus['busName']; ?>" id="name" placeholder="Name" required/>
                </div>
                <?php  ?>
               
                    
                <div class="form-group">
                    <label for="from">From</label>
                    <select class="form-control form-control-lg" name="city_from" id="from">
                        <?php foreach($placeList as $place){ ?>
                            <option <?php echo $bus['busDesA'] == $place ? 'selected':''; ?>> <?php echo $place; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="to">To</label>
                    <select class="form-control form-control-lg" name="city_to" id="to">
                    <?php foreach($placeList as $place){ ?>
                            <option <?php echo $bus['busDesB'] == $place ? 'selected':''; ?>> <?php echo $place; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="busType">Bus Type</label>
                    <select class="form-control form-control-lg" name="bus_type" id="busType">                
                        <option value="acBus">Ac Bus</option>
                        <option <?php echo $bus['busType'] == 'nonAcBus' ? 'selected':''; ?> value="nonAcBus">Non Ac Bus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Date</label>
                    <input type="date" class="form-control" name="date" value="<?php echo $bus['busDate']; ?>" id="exampleInputName2" required
                        style="padding: 7px 12px;" />
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Time</label>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="time"
                                    id="membershipRadios1" <?php echo $bus['busTime'] == '7.00 AM' ? 'checked':''; ?> value="7.00 AM" checked /> 7.00 AM </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="time"
                                    id="membershipRadios2" <?php echo $bus['busTime'] == '2.00 PM' ? 'checked':''; ?> value="2.00 PM" /> 2.00 PM </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="time"
                                    id="membershipRadios2" <?php echo $bus['busTime'] == '10.00 PM' ? 'checked':''; ?> value="10.00 PM" /> 10.00 PM </label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $bus['id']; ?>">
                <button type="submit" class="btn btn-primary mr-2" name="update_bus"> Update Bus </button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>