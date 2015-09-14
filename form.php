<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan 1 PHP</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
<?php 
$proses=isset($_GET['proses'])?$_GET['proses']:"";
if($proses==""){
	
?>
<a href="form.php?proses=add"><button class="btn-info">Add</button></a>
<?php }else if($proses=="add"){ ?>
<form action="form.php?proses=edit" method="post">
<table>
    <tr>
        <th colspan="2">LOGIN</th>
    </tr>
    <tr>
    	<td>Username</td>
        <td><input type="text" name="username" class="form-control"></td>
    </tr>
    <tr>
    	<td>Password</td>
        <td><input type="password" name="password" class="form-control"></td>
    </tr>
    <tr>
    	<td><input type="submit" value="Login" class="btn btn-primary"></td>
        <td><input type="reset" value="Cancel" class="btn btn-danger"></td>
    </tr>
</table>
</form>
<?php }else if($proses=="edit"){ 
//echo $proses;
$username=isset($_POST['username'])?$_POST['username']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
//$username=$_POST['username'];
//$password=$_POST['password'];
if($username=="admin" && $password=="123"){
	echo "<script>alert('Login Berhasil')</script>";
		
}else{
	echo "<script>alert('Login Gagal')</script>";
}
?>
<form action="login.php" method="post">
<table>
    <tr>
        <th colspan="2">HASIL LOGIN</th>
    </tr>
    <tr>
    	<td>Username</td>
        <td><input type="text" name="username" class="form-control" value="<?php echo $username; ?>"></td>
    </tr>
    <tr>
    	<td>Password</td>
        <td><input type="text" name="password" class="form-control" value="<?php echo $password; ?>"></td>
    </tr>
</table>
</form>
<?php  } ?>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>