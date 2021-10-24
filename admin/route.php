<?php require 'header.php'; ?>
<?php
    $db = new Database();
    $mesage = '';
    if(isset($_POST['add_route'])){
        $from = $_POST['from'];
        $to = $_POST['to'];
        $busType = $_POST['bus_type'];
        $fare = $_POST['fare'];
        $status = $_POST['status'];

        $result = $db->insert("INSERT INTO routes(cityF, cityT, busType, fare, status) VALUES('$from', '$to', '$busType', '$fare', '$status')");
        
        if($result){
            $mesage = "Route Added Successfully";
        }
    }
    if(isset($_POST['update_route'])){
        $id = $_POST['id'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        $busType = $_POST['bus_type'];
        $fare = $_POST['fare'];
        $status = $_POST['status'];
        $result = $db->update("UPDATE routes SET cityF = '$from', cityT = '$to', busType = '$busType', fare = '$fare', status = '$status' WHERE id='$id' ");
        
        if($result){
            $mesage = "Route Update Successfully";
        }
    }
    if(isset($_POST['delete_route'])){
        $id = $_POST['id'];
        $delete = $db->delete("DELETE FROM routes WHERE id='$id'");
        if($delete){
            $mesage = "Route Deleted Successfully";
        }
    }
    $routes = $db->select("SELECT * FROM routes");
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
                            <th>Route ID</th>
                            <th>From,</th>
                            <th>To</th>
                            <th>Bus Type</th>
                            <th>Fare</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($routes !== false && $routes->num_rows > 0){ while($route = $routes->fetch_assoc()){  ?>
                        <tr>
                            <td class="py-1"> <?php echo $route['id']; ?> </td>
                            <td class="py-1"> <?php echo $route['cityF']; ?> </td>
                            <td class="py-1"> <?php echo $route['cityT']; ?> </td>
                            <td class="py-1"> <?php echo $route['busType'] == 'acBus' ? 'Ac Bus':'Non Ac Bus'; ?> </td>
                            <td class="py-1"> <?php echo $route['fare']; ?> </td>
                            <td class="py-1"> <?php echo $route['status'] == 1 ? 'Publish':'Unpublish'; ?> </td>
                            <td class="py-1">
                                <a href="editroute.php?id=<?php echo $route['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger" 
                                onclick="
                                event.preventDefault();
                                document.getElementById('route_from<?php echo $route['id']; ?>').submit();"
                                >Delete
                            </a>
                            <form action="" method="POST" id="route_from<?php echo $route['id']; ?>" class="d-none">
                                <input type="hidden" name="id" value="<?php echo $route['id']; ?>">
                                <input type="hidden" name="delete_route">
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