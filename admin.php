<?php include 'header.php'; ?>
<?php
   if($_SESSION['adminLog']==false){       
       header('Location: login.php');
   }
?>

<style>
    input[type=button] {
        color: white;
        font-size: 150%;
        background-color: #408965;
        padding: 5px 5px;
        width: 200px;
    }

    tr:nth-child(odd) {
        background-color: #8b8fe5;
    }

    tr:nth-child(even) {
        background-color: #32bdd8;
    }

    .le {

        font-size: 150%;
        font-weight: bold;
    }
</style>


<div class="container">
    <form action="" method="post">
        <table class="table">
            <tr>
                <td class="le">Want To Add New Bus</td>
                <td><a href="addBus.php"><input type="button" value="Add Bus"></a></td>
            </tr>
            <tr>
                <td class="le">Want To Add New Route</td>
                <td><a href="addPlace.php"><input type="button" value="Add Route"></a></td>
            </tr>
            <tr>
                <td class="le">Want To Update Fare</td>
                <td><a href="addPlace.php"><input type="button" value="Update Fare"></a></td>
            </tr>
            <tr>
                <td class="le">Want To Add New Counter</td>
                <td><a href="CRegistration.php"><input type="button" value="Add Counter"></a></td>
            </tr>
            <tr>
                <td class="le">Want To Add New Counter Admin</td>
                <td><a href="CARegtration.php"><input type="button" value="Add Counter Admin"></a></td>
            </tr>
        </table>
    </form>
</div>
<?php include 'footer.php'; ?>