<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $mesage = '';
    if(isset($_POST['add_bus'])){
        $name = $_POST['name'];
        $cityFrom = $_POST['city_from'];
        $cityTo = $_POST['city_to'];
        $busType = $_POST['bus_type'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $busResult = $db->insert("INSERT INTO bus(busName, busDesA, busDesB, busDate, busTime, busType) VALUES('$name', '$cityFrom', '$cityTo', '$date', '$time','$busType')");
        $busId = $db->getLastId();
        $busLastId = $busId - 1;
        $seatResult = $db->insert("INSERT INTO seat(state, busId) VALUES('A1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('A2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('A3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('A4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('B1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('B2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('B3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('B4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('C1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('C2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('C3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('C4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('D1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('D2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('D3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('D4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('E1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('E2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('E3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('E4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('F1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('F2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('F3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('F4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('G1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('G2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('G3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('G4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('H1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('h2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('H3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('H4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('I1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('I2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('I3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('I4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('J1.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('J2.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('J3.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId'),('J4.$date.$time.$cityFrom.$cityTo.$busLastId', '$busId') ");
        if($busResult && $seatResult){
            $mesage = "Bus Added Successfully";
        }else{
            
        }
    }
    $buses = $db->select("SELECT * FROM bus");
?>

<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
        <?php if($mesage != ''): ?>
        <h4 class="bg-primary text-light p-2 rounded"><?php echo $mesage; ?></h4>
    <?php endif; ?>
            <h4 class="card-title">Bus List</h4>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Bus ID</th>
                            <th>Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($bus = $buses->fetch_assoc()){ ?>
                        <tr>
                            <td class="py-1"> <?php echo $bus['id']; ?> </td>
                            <td class="py-1"> <?php echo $bus['busName']; ?> </td>
                            <td class="py-1"> <?php echo $bus['busDesA']; ?> </td>
                            <td class="py-1"> <?php echo $bus['busDesB']; ?> </td>
                            <td class="py-1"> <?php echo $bus['busDate']; ?> </td>
                            <td class="py-1"> <?php echo $bus['busTime']; ?> </td>
                            <td class="py-1">
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>