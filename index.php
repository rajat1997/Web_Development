<?php require_once('header.php');?>
<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home| JustBuy</title>
  
   
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
     
  
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text" >Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
               
                <?php } ?>
            </ul>
        </div>
      
    </div>
</nav>
<?php require_once('home.php');?>
</body>
</html>