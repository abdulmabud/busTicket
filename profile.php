<?php include 'header.php'; ?>
<?php 
    if(!isset($_GET['id'])){
        $_GET['id'] = '';
    }
    else{
         $id = $_GET['id'];
        $sql = "DELETE FROM report WHERE id = '$id'";
        mysqli_query($db, $sql);
    }
    if(isset($_POST['discount-submit'])){
        $code = $_POST['code'];
        require_once('function.php');
        
        $disAmount = discount($code);
        $disStatus = status($code);
        $email = $_SESSION['email'];
        
        $sql = "UPDATE users SET disAmount = '$disAmount', disStatus = '$disStatus' WHERE email = '$email'";
        mysqli_query($db, $sql);  
    }
        
    require_once('function.php');
    $status = Ustatus();
?>

<style>
    tr:nth-child(odd) {
        background-color: #8aaca1;
        font-size: 140%;
    }

    tr:nth-child(even) {
        background-color: #b0c4c3;
        font-size: 140%;
    }
</style>

<div class="container">
    <?php
        $email =  $_SESSION['email'];
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $sql);
    ?>

    <?php while($row = mysqli_fetch_assoc($result)): ?>

    <table class="table">
        <tr>
            <td>Name</td>
            <td><?php echo $row['username']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <?php 
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM report WHERE email = '$email'";
        $result = mysqli_query($db, $sql); 
    ?>

    <?php while($row = mysqli_fetch_array($result)): ?>
    <table class="table">
        <tr>
            <td><label for="">Your Ticket Status</label></td>
            <td><?php echo $row['status']; ?></td>
        </tr>
        <tr>
            <td><label for="">Bus Date</label></td>
            <td><?php echo $row['busDate']; ?></td>
        </tr>
        <tr>
            <td><label for="">Bus Time</label></td>
            <td><?php echo $row['busTime']; ?></td>
        </tr>
        <tr>
            <td><label for="">Bus From</label></td>
            <td><?php echo $row['busDesA']; ?></td>
        </tr>
        <tr>
            <td><label for="">Bus To</label></td>
            <td><?php echo $row['busDesB']; ?></td>
        </tr>
        <tr>
            <td><label for="">Your Ticket</label></td>
            <td><?php echo $row['ticket']; ?></td>
        </tr>
        <tr>
            <td>
                <a href="profile.php?id=<?php echo $row['id']; ?>"><input type="submit"
                        class="btn btn-danger align-center" value="Delete" name="delete-report"></a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php include 'footer.php'; ?>