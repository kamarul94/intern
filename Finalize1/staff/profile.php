<?php
 session_start();
 if(empty($_SESSION['name']))
   {    
	header('location:~/../../index.php');
   }
?>
<?php
	include('../inc/config.php');
	include('../inc/connect.php');
	
	$name = $_SESSION['name'];
	$sql = "SELECT * FROM users WHERE name = '$name'";
	$res = mysql_query($sql) or die('Query failed. ' . mysql_error());
	$row = mysql_fetch_array($res, MYSQL_ASSOC);
	
	$name = $row['name'];
	$ic = $row['ic'];
	
	$id = $_SESSION['name'];
	$sql1 = "SELECT * FROM users WHERE name = '$id'";
	$res1 = mysql_query($sql1) or die (mysql_error());
	$user = mysql_fetch_array($res1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?>-Home</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
<div class="main">
    	<div class="navbar">
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
        		<li><a href="invoice_create.php">Invoice</a></li>
                <li><a href="profile.php">Profile</a></li>
        		<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
            <hr />
            	<center><b><h4><?php echo $name?> | <?php echo $ic ?></h4></b></center>
            <hr />
            
        <div class="content">
        	<div align="center">
    			<h1>PROFILE</h1>
                <table width="300" border="2" align="center">
                    <tr>
                        <th>Username</th>
                        <th><?php echo  $user['username']; ?></th>
                   	</tr>
                    <tr>
                        <th>Name</th>
                        <th><?php echo  $user['name']; ?></th>
                   	</tr>
                    <tr>
                        <th>IC</th>
                        <th><?php echo  $user['ic']; ?></th>
                  	</tr>
                    <tr>
                        <th>Address</th>
                        <th><?php echo  $user['address']; ?></th>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <th><?php echo  $user['phone']; ?></th>
                    </tr>
                    <tr>
                        <th>Level</th>
                        <th><?php echo  $user['level']; ?></th>
                    </tr>
          		</table>                 
            </div>
        </div>
    </div>
</body>
</html>