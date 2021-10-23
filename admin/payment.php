<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $placeList = [];
    $places = $db->select("SELECT DISTINCT name FROM places WHERE status=1");
    while ($places !== false && $place = $places->fetch_assoc()){
        array_push($placeList, $place['name']);
    }
?>
<div class="col-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Payment Confirmation</h4>
            <form action="#" method="POST" class="forms-sample col-md-6 offset-md-3" id="payment_confirmation">
                <div class="form-group">
                    <label for="destinationFrom">From</label>
                    <select class="form-control form-control-lg" name="from" id="destinationFrom">
                         <?php foreach ($placeList as $place) { ?>
                            <option><?php echo $place; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="destinationTo">To</label>
                    <select class="form-control form-control-lg" name="from" id="destinationTo">
                         <?php foreach ($placeList as $place) { ?>
                            <option><?php echo $place; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Date</label>
                    <input type="date" class="form-control" name="date" id="selectedDate" required
                        style="padding: 7px 12px;" />
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="add_place">List of Bus</button>
              <button class="btn btn-light"><a href="index.php">Cancel</a></button>
            </form>

            <div id="buslist"></div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
<script>
    $('#payment_confirmation').submit(e =>{
        e.preventDefault();
        var destinationFrom = $('#destinationFrom').val();
        var destinationTo = $('#destinationTo').val();
        var selectedDate = $('#selectedDate').val();
        // var selectedDate = $('#selectedDate');
        // console.log(destinationFrom.val());
        $.ajax({
            url: 'inc/ajax/paymentbuslist.php',
            method: 'POST',
            cache: false,
            // data
            data: {destinationFrom: destinationFrom, destinationTo: destinationTo, selectedDate: selectedDate},
            success: (resposne => {
                $('#buslist').html(resposne);
            })
        });
    });
    </script>