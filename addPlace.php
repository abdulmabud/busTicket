<?php include 'header.php'; ?>

<?php

$c="";
if(isset($_POST['addPlace-submit'])){
    
    $cityF = $_POST['cityF'];
    $cityT = $_POST['cityT'];
    $fare = $_POST['fare'];
    
    
    $sql = "INSERT INTO place(cityF, cityT,fare) VALUES('$cityF', '$cityT','$fare')";
    
    if(mysqli_query($db, $sql)){
        
        $c = "Inserted";
        
    }
    
    else{
        
        echo "Error ".mysqli_error($db);
    }
    
    
}


?>

<style>


    
input[type=text]{
    width: 150%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    
    input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    
 label{
        font-size: 150%;
    }


</style>


<div class="container">
    


<form action="" method="post">
    
    <table style="margin-left:320px";>
        
        <tr>
             <td><label for="" style="margin-right:10px";>From</label> </td>
           <td><input type="text" name="cityF" placeholder="From" required></td>
           
        </tr>
        <tr>
            
             <td><label for="">To</label> </td>
           <td><input type="text" name="cityT" placeholder="To" required></td>
           
            
        </tr>
        
        
        <tr>
            
             <td><label for="">Fare</label> </td>
           <td><input type="text" name="fare" placeholder="New fare or Updated fare" required></td>
           
            
        </tr>
        
        <tr>
            
            <td></td>
            <td><input type="submit" value="Submit" name="addPlace-submit"></td>
        </tr>
        
        
        
    </table>
    <br>
    <h2 style="text-align:center";><?php echo $c; ?></h2>
    
</form>

</div>


<?php include 'footer.php'; ?>