<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php 
    $db = new Database();
    $mesage = '';
    if(isset($_POST['accept'])){    
        $txnV = $_POST['txnv']; 
        $ticket = $_POST['ticket'];
        $amount = $_POST['amount'];
        $email = $_POST['email'];
        if($db->delete("DELETE FROM payment where txnId='$txnV'")){
            $mesage = "Ticket Accepted";
        }
        else{
            echo "Error updating record: ";
        }
    
        // status pending accepted rejected
    
        $results = $db->select("SELECT * FROM report");
        $db->update("UPDATE report SET status = 'Accepted' WHERE ticket='$ticket'");
        
        
        // code for discount system 
        $result_dis = $db->select("SELECT tAmount FROM users where email = '$email'");
        while($row = $result_dis->fetch_assoc()){
            $tAmount = $row['tAmount'];
        }

        $tAmount = $tAmount + $amount;
        if($tAmount<10000){ 
            $db->update("UPDATE users SET tAmount = '$tAmount' WHERE email = '$email'");
            $db->update("UPDATE users SET disAmount = '0' WHERE email = '$email'"); 
        }
        else{
            $db->update("UPDATE users SET disAmount = '20' WHERE email = '$email'");
            $db->update("UPDATE users SET tAmount = '$tAmount' WHERE email = '$email'");  
        }

        // ac non-ac bus travel number count

        // $bus_id = $_SESSION['busId'];
        // $r = $db->select("SELECT busType FROM bus WHERE id = '$bus_id' ");
        // $busType = $r->fetch_assoc();
        // $busType = $busType['busType'];    
        // $res = $db->select("SELECT acBus, nonAcBus FROM users WHERE email = '$email' ");
        
        // while($row = $res->fetch_assoc()){
        //     $acBus = $row['acBus'];
        //     $nonAcBus = $row['nonAcBus'];
        //     $acBus = (int)$acBus;
        //     $nonAcBus = (int)$nonAcBus;
        // }
        // if($busType == 'acBus'){
        //     $acBus = $acBus + 1;
        //     $tt = gettype($acBus);
            
        // }
        // else if($busType == 'nonAcBus'){
        //     $nonAcBus = $nonAcBus + 1;
        // }
        // $db->update("UPDATE users SET acBus='$acBus' WHERE email = '$email' ");
        
        // $db->update("UPDATE users SET nonAcBus='$nonAcBus' WHERE email = '$email' ");    
    }


    if(isset($_POST['reject'])){       
        $txnV = $_POST['txnv']; 
        $ticket = $_POST['ticket'];
    
        if ($db->update("UPDATE seat SET val = 0 WHERE txnId='$txnV'")) { echo ""; }
        else { echo "Error updating record: "; }
        if($db->delete("DELETE FROM payment where txnId='$txnV'")){
            $mesage = "Ticket Rejected";
        }
        else{
            echo "Error updating record: ";
        }

        $db->update("UPDATE report SET status = 'Rejected' WHERE ticket='$ticket'");
    }

?>
<?php 
    
    if(isset($_POST['buslist-submit'])){    
        $idVal = $_POST['idVal'];
        $_SESSION['busId'] = $idVal;
        $idVal = (int)$idVal -1;
        $_SESSION['idVal'] = $idVal;
        $bTime = $_POST['bTime'];
        $_SESSION['busTime'] = $bTime;
        $bus_id = $_SESSION['busId'];
    }
    $busId =  $_SESSION['idVal'];
    $payments = $db->select("SELECT * FROM payment WHERE busId =  '$busId'");
?>
<?php
   
?>



<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 90px;">
    <div class="card">
        <div class="card-body">
        <?php if($mesage != ''): ?>
        <h4 class="bg-primary text-light p-2 rounded"><?php echo $mesage; ?></h4>
    <?php endif; ?>
<h4 class="card-title">Waiting for Confirmation</h4>
</p>
<div class="table-responsive">
    <?php while($payments !== false && $payment = $payments->fetch_assoc()){ ?>
        <form action="" method="post">
    <table class="table table-striped mb-5">
        <thead>
            <tr>
            <th>Email</th>
                <th>User phone</th>
                <th>User ticket</th>
                <th>User amount</th>
                <th>User TxnId</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-1"> <?php echo $payment['email']; ?> </td>
                <td class="py-1"> <?php echo $payment['phone']; ?> </td>
                <td class="py-1"> <?php echo $payment['ticket']; ?> </td>
                <td class="py-1"> <?php echo $payment['amount']; ?> </td>
                <td class="py-1"> <?php echo $payment['txnId']; ?> </td>
               
                <td class="py-1">
                    <input type="hidden" name="txnv" value="<?php echo $payment['txnId']; ?>">
                    <input type="hidden" name="ticket" value="<?php echo $payment['ticket']; ?>">
                    <input type="hidden" name="amount" value="<?php echo $payment['amount']; ?>">
                    <input type="hidden" name="email" value="<?php echo $payment['email']; ?>">
                    <input type="submit" value="Accept" name="accept" class="btn btn-primary">
                    <input type="submit" value="Reject" name="reject" class="btn btn-danger">
                </td>
            </tr>
        </tbody>
    </table>
    </form>
    <?php } ?>
</div>
</div>
</div>
</div>
<?php require 'footer.php'; ?>