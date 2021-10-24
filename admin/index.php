<?php require 'header.php'; ?>
<?php
  $db = new Database();
  $date = date('Y-m-d');
  $buses = $db->select("SELECT * FROM bus WHERE busDate >= '$date' ORDER BY busDate ASC");
  
?>
<div class="main-panel">
  <div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
      <h3 class="mb-0"> Hi, welcome back! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Bus Ticket
          Dashboard.</span>
      </h3>
    </div>

    <!-- upcoming bus list -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <?php if($message != ''): ?>
          <h4 class="bg-primary text-light p-2 rounded"><?php echo $message; ?></h4>
          <?php endif; ?>
          <h4 class="card-title">Today and Upcoming Bus List</h4>
          </p>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="py-2">Bus ID</th>
                  <th>Name</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Date</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <?php while($bus = $buses->fetch_assoc()){ ?>
                <tr>
                  <td class="py2"> <?php echo $bus['id']; ?> </td>
                  <td class="py-1"> <?php echo $bus['busName']; ?> </td>
                  <td class="py-1"> <?php echo $bus['busDesA']; ?> </td>
                  <td class="py-1"> <?php echo $bus['busDesB']; ?> </td>
                  <td class="py-1"> <?php echo $bus['busDate']; ?> </td>
                  <td class="py-1"> <?php echo $bus['busTime']; ?> </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--end upcoming bus list -->
    <div class="row">
      <div class="col-xl-4 col-md-6 grid-margin stretch-card">
        <!--datepicker-->
        <div class="card">
          <div class="card-body">
            <div id="inline-datepicker" class="datepicker table-responsive"></div>
          </div>
        </div>
        <!--datepicker ends-->
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="d-sm-flex justify-content-center">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Abdul Mabud 2021</span>
    </div>
  </footer>
</div>
<!-- main-panel ends -->
</div>

<?php require 'footer.php'; ?>