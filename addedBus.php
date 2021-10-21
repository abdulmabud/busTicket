<?php include 'header.php'; ?>
<?php
    if(isset($_POST['submit'])){        
        $busDesA = $_POST['from'];
        $busDesB = $_POST['to'];       
        $busDate = $_POST['busDate'];
        $busTime = $_POST['busTime'];
        $busType = $_POST['busType'];

       if($busDesA=='dhaka1' || $busDesA=='dhaka2'){           
            $busDesA = 'dhaka';       
        }
        if($busDesB=='dhaka1' || $busDesB=='dhaka2'){           
            $busDesB ='dhaka';           
        }
        
        $_SESSION['busDesA'] = $busDesA;
        $_SESSION['busDesB'] = $busDesB;
        
        if($busDesA=="dhaka" && $busDesB=="dhaka"){
            echo "</br>";
            echo "Please select right desination";
            echo "</br>";           
            return false;
            echo "<a href='addBus.php'>Want to add more bus</a>" ;
            return false;
        }
          
    /*  
    // check the bus is already created or not
        
        
        $_SESSION['busIsCreate'] = 'A2'.".".$busDate.".".$busTime.".".$busDesA.".".$busDesB;
        
        $val2 = $_SESSION['busIsCreate'];
        
        
        $result = mysqli_query($db, "select * from seat where state='$val2'");
        
        
        if (mysqli_num_rows($result) > 0) {
        
        
            echo "</br>";
            
            echo "Bus is already eixts";
            
                    echo "</br>";

            
            
                echo "<a href='addBus.php'>Want to add more bus</a>" ;

            
            return false;
            
        }
            
        
        */
    
        // check the last id of bus database
        
        
        $sql = "SELECT * FROM bus";
        $result = mysqli_query($db, $sql);      
        while($row = mysqli_fetch_assoc($result)){          
            $busLastId = $row['id'];
            $busId = $busLastId + 1;           
        }
        
    // for database table creation 
        
        
    //    $sql  = "CREATE TABLE $busName(
    //
    //    id int(10) AUTO_INCREMENT PRIMARY KEY,
    //    state varchar(255),
    //    val int(10) DEFAULT 0,
    //    busDate varchar(255) DEFAULT '$busDate',
    //
    //    busTime varchar(255) DEFAULT '$busTime'
    //    
    //    
    //
    //
    //)";
    //    
    //    
    //    if(mysqli_query($db, $sql)){
    //        
    //        echo "table created";
    //    }
    //    
    //    else{
    //        echo "Error ".mysqli_error($db);
    //        
    //        echo "<br>";
    //    }
    //    
        $sql = "INSERT INTO seat(state, busId) VALUES ('A1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('A2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('A3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('A4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('B1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('B2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('B3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('B4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('C1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('C2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('C3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('C4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('D1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('D2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('D3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('D4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('E1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('E2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('E3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('E4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('F1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('F2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('F3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('F4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('G1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('G2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('G3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('G4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('H1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('h2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('H3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('H4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('I1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('I2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('I3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('I4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('J1.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('J2.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('J3.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId),('J4.$busDate.$busTime.$busDesA.$busDesB.$busLastId', $busId)";
        
        
        
        if(mysqli_query($db, $sql)){  
            echo "<br>";
        }  
        else{
            echo "Error ".mysqli_error($db);
        }
           
        // Code for bus database 
        
        $busName = $_POST['busName'];
        $busDes = $busDesA.$busDesB;
        
        $sql = "INSERT INTO bus(busName,busDesA,busDesB,busDate,busTime, busType) VALUES('$busName','$busDesA','$busDesB','$busDate','$busTime', '$busType')";
        
        if(mysqli_query($db, $sql)){           
            echo "<br>";                      
        }
        
        else{
            echo "Error ".mysqli_error($db);
        }
      
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Added Bus Page</title>
</head>

<body>
    <div class="container">
        <p>Bus Added</p>
        <a href="addBus.php">Want to add more bus</a>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>