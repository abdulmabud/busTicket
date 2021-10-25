<?php include 'header.php'; ?>
<?php
    if($_SESSION['isLogged'] != true){
        header('Location: login.php');
    }

?>
<!-- TxnId and Phone number submit -->
<?php 

if(isset($_POST['txn-submit'])){
  
    $txnId = $_POST['txnId'];
    
    $email =  $_SESSION['email'];
    $userAllSeat="";
    $count = 0;
    $totalFare = 0;

    $seatOne = $_SESSION['numOne'];
    $seatTwo = $_SESSION['numTwo'];
    $seatThree = $_SESSION['numThree'];
    $seatFour = $_SESSION['numFour'];
    $seatFive = $_SESSION['numFive'];
    $seatSix = $_SESSION['numSix'];
    $seatSeven = $_SESSION['numSeven'];
    $seatEight = $_SESSION['numEight'];
    
    $seatNine = $_SESSION['numNine'];
     $seatTen = $_SESSION['numTen'];
     $seatEleven = $_SESSION['numEleven'];
     $seatTwelve = $_SESSION['numTwelve'];
      
      
   $seatThirteen   = $_SESSION['numThirteen'];
   $seatFourteen   = $_SESSION['numFourteen']; 
   $seatFifteen   = $_SESSION['numFifteen']; 
   $seatSixteen   = $_SESSION['numSixteen']; 
   $seatSeventeen   = $_SESSION['numSeventeen']; 
   $seatEightteen   = $_SESSION['numEightteen'];  
   $seatNineteen   = $_SESSION['numNineteen']; 
   $seatTwenty   = $_SESSION['numTwenty']; 
   $seatTwentyone   = $_SESSION['numTwentyone']; 
   $seatTwentytwo   = $_SESSION['numTwentytwo'];  
   $seatTwentythree   = $_SESSION['numTwentythree']; 
   $seatTwentyfour   = $_SESSION['numTwentyfour']; 
   $seatTwentyfive   = $_SESSION['numTwentyfive']; 
   $seatTwentysix   = $_SESSION['numTwentysix']; 
   $seatTwentyseven   = $_SESSION['numTwentyseven'];
   $seatTwentyeight   = $_SESSION['numTwentyeight']; 
   $seatTwentynine   = $_SESSION['numTwentynine']; 
   $seatThirty   = $_SESSION['numThirty'];
   $seatThirtyone   = $_SESSION['numThirtyone']; 
   $seatThirtytwo   = $_SESSION['numThirtytwo']; 
   $seatThirtythree   = $_SESSION['numThirtythree']; 
   $seatThirtyfour   = $_SESSION['numThirtyfour']; 
   $seatThirtyfive   = $_SESSION['numThirtyfive']; 
   $seatThirtysix   = $_SESSION['numThirtysix']; 
   $seatThirtyseven   = $_SESSION['numThirtyseven']; 
   $seatThirtyeight   = $_SESSION['numThirtyeight']; 
   $seatThirtynine   = $_SESSION['numThirtynine']; 
   $seatFourty   = $_SESSION['numFourty'];
     
        
      if ($_SESSION['oneSeat']=="checked"){
          $sql = "select * from seat where state='$seatOne'";         
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){                 
                  if($row['val'] != 1){                     
                      $count = $count + 1;                     
                        $userAllSeat = $userAllSeat."a1, ";                      
                        $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatOne'";
        
                      if (mysqli_query($db, $sql)) { echo ""; }
                      else { echo "Error updating record: " . mysqli_error($db); }
                    }
              }
          
          $sql = "UPDATE seat SET val = 1 WHERE state='$seatOne'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
            
         
       }
    
    // set user disAmount 0 while he get one discount
    $email = $_SESSION['email'];
    
    $sql = "SELECT disAmount FROM users WHERE email='$email'";
    $dis_result = mysqli_query($db, $sql);
    while($roww = mysqli_fetch_assoc($dis_result)){
        $disAmount = $roww['disAmount'];
    }
    if($disAmount != 0){
       $sql = "UPDATE users SET disAmount = '0' WHERE email = '$email'";
            mysqli_query($db, $sql); 
    }
    
    
    
  
     if ($_SESSION['twoSeat']=="checked"){         
         $sql = "select * from seat where state='$seatTwo'";     
          $result = mysqli_query($db, $sql);
         

              while($row = mysqli_fetch_assoc($result)){
            
                  if($row['val'] != 1){
                    
                     $count = $count + 1;
            
                       $userAllSeat = $userAllSeat."a2, "; 
                     
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwo'";
        
                  if (mysqli_query($db, $sql)) { echo ""; }
                  else { echo "Error updating record: " . mysqli_error($db); }
                          }
              }
          
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }  
         
       }
     if ($_SESSION['threeSeat']=="checked"){
         
          $sql = "select * from seat where state='$seatThree'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."a3, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                      
                  }
              }
          
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['fourSeat']=="checked"){
          
         $sql = "select * from seat where state='$seatFour'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."a4, "; 
                      $count = $count + 1;
                      
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['fiveSeat']=="checked"){
          
         $sql = "select * from seat where state='$seatFive'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b1, "; 
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                      
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['sixSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSix'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b2, "; 
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['sevenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSeven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b3, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSeven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                      
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSeven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['eightSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatEight'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b4, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatEight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatEight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['nineSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatNine'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c1, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatNine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatNine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['tenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c2, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['elevenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatEleven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatEleven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatEleven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twelveSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwelve'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c4, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwelve'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwelve'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['thirteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['fourteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatFourteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFourteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFourteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['fifteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatFifteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFifteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFifteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['sixteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSixteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSixteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSixteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['seventeenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSeventeen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e1, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSeventeen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSeventeen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['eightteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatEightteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e2, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatEightteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatEightteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['nineteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatNineteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatNineteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatNineteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twentySeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwenty'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwenty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwenty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twentyoneSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyone'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twentytwoSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentytwo'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentythreeSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentythree'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
                  
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentyfourSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyfour'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentyfiveSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyfive'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g1, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentysixSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentysix'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g2, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentysevenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyseven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentyeightSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyeight'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentynineSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentynine'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentynine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentynine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['thirtySeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirty'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h2, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['thirtyoneSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyone'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtytwoSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtytwo'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h4, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtythreeSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtythree'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
                  
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtyfourSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyfour'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtyfiveSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyfive'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtysixSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtysix'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i4, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtysevenSeat']=="checked"){
     
        $sql = "select * from seat where state='$seatThirtyseven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j1, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtyeightSeat']=="checked"){
     
        $sql = "select * from seat where state='$seatThirtyeight'";
          
          $result = mysqli_query($db, $sql);
         
              while($row = mysqli_fetch_assoc($result)){
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtynineSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtynine'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtynine'";
              
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtynine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['fourtySeat']=="checked"){
          
        $sql = "select * from seat where state='$seatFourty'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFourty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFourty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    
 
    
    $fare =  $_SESSION['fare'];
  
   
    
    
    
    
    
    $totalFare = $count * $fare;
    
    
    $phone = $_POST['phone'];
    
   $busId = $_SESSION['idVal'];
    
    $sql = "INSERT INTO payment(phone,ticket,amount,txnId,email, busId) VALUES('$phone','$userAllSeat','$totalFare','$txnId','$email','$busId')";
    
    if (mysqli_query($db, $sql)) {  }
           else { echo "Error updating record: " . mysqli_error($db); }
    
    // database for cancel ticket
    
    $sql = "INSERT INTO cancel(phone,ticket,amount,txnId,email, busId) VALUES('$phone','$userAllSeat','$totalFare','$txnId','$email','$busId')";
    
    if (mysqli_query($db, $sql)) { }
           else { echo "Error updating record: " . mysqli_error($db); }
    
    // insert database for user profile stauts change pending or reject his ticket
    
    
    $busDate = $_SESSION['busDate'];
    $busTime = $_SESSION['busTime'];
    $busDesA=  $_SESSION['busDesA']; 
    $busDesB = $_SESSION['busDesB'];
    
    
   
    $sql =  "INSERT INTO report(email,ticket, status, busDate, busTime, busDesA, busDesB) VALUES(
    '$email','$userAllSeat','Pending', '$busDate', '$busTime', '$busDesA', '$busDesB')";
    
    mysqli_query($db, $sql);
    
    $message = 'TxnId and Phone number submited successfully';
    
      }



?>
<!-- End TxnId and Phone number submit -->
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

    <?php if(isset($message) && $message != '' ): ?>
    <div class="bg-primary" style="padding: 10px; margin: 10px 0; border-radius: 10px;">
        <h3><?php echo $message; ?></h3>
        <h4>Your Ticket is now pending. Check it later for Aproved</h4>
    </div>
    <?php $message=''; endif; ?>
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
        $sql = "SELECT * FROM report WHERE email = '$email' ORDER BY id DESC";
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