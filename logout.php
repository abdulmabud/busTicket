<?php include 'header.php'; ?>

<?php 
    $_SESSION['isLogged'] = false;
    $_SESSION['adminLog'] = false;
    $_SESSION['cadminLog'] = false;
    $_SESSION['cLog'] = false;
    header('Location: index.php');
?>

<?php include 'footer.php'; ?>