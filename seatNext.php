<?php include 'header.php'; ?>


<?php 
  if(isset($_POST['submit'])){
      
      
      
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
      
      
      
      if($_SESSION['isLogged']==false && $_SESSION['cLog']==false){
          
          echo "Please login first";

          header('Location: login.php');
          
          return false;
      
      }
      
      

  }
?>




<?php

if(isset($_POST['submit'])){
    
     $oneSeat=$twoSeat=$threeSeat=$fourSeat=$fiveSeat=$sixSeat=$sevenSeat=$eightSeat=$nineSeat=$tenSeat=$elevenSeat=$twelveSeat=$thirteenSeat=$fourteenSeat=$fifteenSeat=$sixteenSeat =$seventeenSeat =$eightteenSeat =$nineteenSeat =$twentySeat =$twentyoneSeat =$twentytwoSeat =$twentythreeSeat =$twentyfourSeat =$twentyfiveSeat =$twentysixSeat =$twentysevenSeat =$twentyeightSeat =$twentynineSeat =$thirtySeat =$thirtyoneSeat =$thirtytwoSeat =$thirtythreeSeat =$thirtyfourSeat =$thirtyfiveSeat =$thirtysixSeat =$thirtysevenSeat =$thirtyeightSeat =$thirtynineSeat =$fourtySeat ="unchecked";
    
    if(!isset( $_POST['one'])){
        
         $_POST['one'] = [];
    }
    
    
    $one = $_POST['one'];
   

      
        foreach($one as $lang=>$value){
        
      if ($value == 'a1'){
          
           
          $oneSeat = "checked";
          $_SESSION['oneSeat'] = $oneSeat;
          
          
          
          
          
          
         
         
           
       }
    
            
       
        if ($value == 'a2'){
           $twoSeat = "checked";
            
             $_SESSION['twoSeat'] = $twoSeat;
             
           
       }
        if ($value == 'a3'){
           $threeSeat = "checked";
          
            $_SESSION['threeSeat'] = $threeSeat;
            
            
       }
            
             if ($value == 'a4'){
           $fourSeat = "checked";
           $_SESSION['fourSeat'] = $fourSeat;
            
            
           
       }
            
            
        if ($value == 'b1'){
           $fiveSeat = "checked";
           $_SESSION['fiveSeat'] = $fiveSeat;
           
       }
        if ($value == 'b2'){
           $sixSeat = "checked";
           
            $_SESSION['sixSeat'] = $sixSeat;
           
       }
        if ($value == 'b3'){
           $sevenSeat = "checked";
        $_SESSION['sevenSeat'] = $sevenSeat;

           
       }
            
       if ($value == 'b4'){
           $eightSeat = "checked";
           $_SESSION['eightSeat'] = $eightSeat;
          
       }
            
        if ($value == 'c1'){
           $nineSeat = "checked";
            $_SESSION['nineSeat'] = $nineSeat;
          
       }
            
             if ($value == 'c2'){
           $tenSeat = "checked";
                 $_SESSION['tenSeat'] = $tenSeat;
          
       }
             if ($value == 'c3'){
           $elevenSeat = "checked";
                 $_SESSION['elevenSeat'] = $elevenSeat;
          
       }
             if ($value == 'c4'){
           $twelveSeat = "checked";
           $_SESSION['twelveSeat'] = $twelveSeat;
       }
            
            
             if ($value == 'd1'){
           $thirteenSeat = "checked";
                 $_SESSION['thirteenSeat'] = $thirteenSeat;
          
       }
            
           
            
            
             if ($value == 'd2'){
                 
           $fourteenSeat    = "checked";
                 $_SESSION['fourteenSeat'] = $fourteenSeat;
          
    
            
            
       }
            
              if ($value == 'd3'){
           $fifteenSeat   = "checked";
                  $_SESSION['fifteenSeat'] = $fifteenSeat;
          
            
            
          
       }
            
               if ($value == 'd4'){
           $sixteenSeat  = "checked";
                   $_SESSION['sixteenSeat'] = $sixteenSeat;
          
            
            
            
       }
            
            
               if ($value == 'e1'){
           $seventeenSeat = "checked";
                   $_SESSION['seventeenSeat'] = $seventeenSeat;
          
            
            
            
       }
            
               if ($value == 'e2'){
           $eightteenSeat = "checked";
                   $_SESSION['eightteenSeat'] = $eightteenSeat;
          
            
            
           
       }
            
               if ($value == 'e3'){
           $nineteenSeat = "checked";
                   $_SESSION['nineteenSeat'] = $nineteenSeat;
          
            
            
            
       }
            
            if ($value == 'e4'){
           $twentySeat  = "checked";
         $_SESSION['twentySeat'] = $twentySeat;

          
            
            
           
       }
            
             if ($value == 'f1'){
           $twentyoneSeat  = "checked";
                   $_SESSION['twentyoneSeat'] = $twentyoneSeat;

            
            
           
       }
            
              if ($value == 'f2'){
           $twentytwoSeat  = "checked";
          $_SESSION['twentytwoSeat'] = $twentytwoSeat;

            
            
            
       }
            
            if ($value == 'f3'){
           $twentythreeSeat  = "checked";
          
                    $_SESSION['twentythreeSeat'] = $twentythreeSeat;
 
            
       }
          
               if ($value == 'f4'){
           $twentyfourSeat  = "checked";
          
                     $_SESSION['twentyfourSeat'] = $twentyfourSeat;

            
           
       }
            
                if ($value == 'g1'){
           $twentyfiveSeat  = "checked";
          
      $_SESSION['twentyfiveSeat'] = $twentyfiveSeat;

            
            
       }
         
              if ($value == 'g2'){
           $twentysixSeat  = "checked";
                               $_SESSION['twentysixSeat'] = $twentysixSeat;

            
            
            
       }
            
              if ($value == 'g3'){
           $twentysevenSeat  = "checked";
          
                                 $_SESSION['twentysevenSeat'] = $twentysevenSeat;

            
           
       }
            
              if ($value == 'g4'){
           $twentyeightSeat  = "checked";
          
                                 $_SESSION['twentyeightSeat'] = $twentyeightSeat;

            
           
       }
            
               if ($value == 'h1'){
           $twentynineSeat  = "checked";
          
                                 $_SESSION['twentynineSeat'] = $twentynineSeat;

            
            
       }
         
           if ($value == 'h2'){
           $thirtySeat  = "checked";
          
                                 $_SESSION['thirtySeat'] = $thirtySeat;

            
            
       }
         
          
           if ($value == 'h3'){
           $thirtyoneSeat  = "checked";
          
                                             $_SESSION['thirtyoneSeat'] = $thirtyoneSeat;

            
            
       }
            
            
             if ($value == 'h4'){
           $thirtytwoSeat  = "checked";
          
                                             $_SESSION['thirtytwoSeat'] = $thirtytwoSeat;

            
           
       }
             if ($value == 'i1'){
           $thirtythreeSeat  = "checked";
          
                                             $_SESSION['thirtythreeSeat'] = $thirtythreeSeat;

                 
           
       }
            
             if ($value == 'i2'){
           $thirtyfourSeat  = "checked";
          
                                             $_SESSION['thirtyfourSeat'] = $thirtyfourSeat;

            
           
       }
             if ($value == 'i3'){
           $thirtyfiveSeat  = "checked";
          
                                             $_SESSION['thirtyfiveSeat'] = $thirtyfiveSeat;

            
             
       }
            
             if ($value == 'i4'){
           $thirtysixSeat  = "checked";
          
            
                                             $_SESSION['thirtysixSeat'] = $thirtysixSeat;

           
       }
         
          if ($value == 'j1'){
           $thirtysevenSeat  = "checked";
          
                                            $_SESSION['thirtysevenSeat'] = $thirtysevenSeat;
 
          
       }
            
             if ($value == 'j2'){
           $thirtyeightSeat  = "checked";
                                           $_SESSION['thirtyeightSeat'] = $thirtyeightSeat;

            
            
       }
         
          
           if ($value == 'j3'){
           $thirtynineSeat  = "checked";
          
                                            $_SESSION['thirtynineSeat'] = $thirtynineSeat;
         
            
            
       }
          
           if ($value == 'j4'){
           $fourtySeat  = "checked";
          
                       $_SESSION['fourtySeat'] = $fourtySeat;
  
            
          
       }
            
           
            
            
            
        
    }
   

    
  
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    input[type=text] {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }


    input[type=submit] {
      width: 50%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .txnId {


      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;

    }

    .txnIdL {

      font-size: 120%;

    }
  </style>
</head>

<body>

  <div class="container">


    <h3>Send your money below account</h3> <br>

    <h3>Rocket Account No. 01911223344</h3> <br>
    <form action="profile.php" method="post">
      <label for="txnId" class="txnIdL">Your txnId</label> <br>
      <input type="text" name="txnId" id="txnId" class="txnId" required> <br>
      <label for="phone" class="txnIdL">Phone no. which use for payment</label> <br>
      <input type="text" id="phone" name="phone" class="txnId" required>
      <input type="submit" name="txn-submit" value="Submit">

    </form>
  </div>
</body>

</html>

<?php include 'footer.php'; ?>