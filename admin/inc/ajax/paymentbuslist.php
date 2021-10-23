<?php require '../database.php'; ?>
<?php
    $busDesA = $_POST['destinationFrom'];
    $busDesB = $_POST['destinationTo'];
    $date = $_POST['selectedDate'];
    $_SESSION['busDesA'] = $busDesA;
    $_SESSION['busDesB'] = $busDesB;
    $_SESSION['busDate'] = $date;
    $db = new Database();
    $buses = $db->select("SELECT * FROM bus WHERE busDate='$date' AND busDesA='$busDesA' AND busDesB='$busDesB'");
?>

<h4 class="card-title">Bus List</h4>
</p>
<div class="table-responsive">
    <form action="pendingpayment.php" method="post">
    <table class="table table-striped">
        <thead>
            <?php while($buses !== false && $bus = $buses->fetch_assoc()){ ?>  
            <tr>
            <th>Bus Name</th>
            <th>Bus Type</th>
            <th>Bus Date</th>
            <th>Bus Time</th>
            <th>Bus From</th>
            <th>Bus To</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-1"> <?php echo $bus['busName']; ?> </td>
                <td class="py-1"> <?php echo $bus['busType']; ?> </td>
                <td class="py-1"> <?php echo $bus['busDate']; ?> </td>
                <td class="py-1"> <?php echo $bus['busTime']; ?> </td>
                <td class="py-1"> <?php echo $bus['busDesA']; ?> </td>
                <td class="py-1"> <?php echo $bus['busDesB']; ?> </td>
                <td class="py-1">
                    <input type="hidden" value="<?php echo $bus['id']; ?>" name="idVal">
                    <input type="hidden" value="<?php echo $bus['busTime']; ?>" name="bTime">
                    <input type="submit" class="btn btn-success" name="buslist-submit" value="Pending Payment">
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </form>
    <?php if($buses == false){echo "No Pending Payment or Bus !!";} ?>
</div>