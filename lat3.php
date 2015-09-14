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
$a=isset($_POST['bil1'])?$_POST['bil1']:0;
$b=isset($_POST['bil2'])?$_POST['bil2']:0;
$c=$a+$b;

//operator aritmatika : +, -, *, /, %
?>
<form action="lat3.php" method="post">
<table border="1">
    <tr>
        <th colspan="2">PENJUMLAHAN</th>
    </tr>
    <tr>
    	<td>Bilangan 1</td>
        <td><input type="text" name="bil1" class="form-control"></td>
    </tr>
    <tr>
    	<td>Bilangan 2</td>
        <td><input type="text" name="bil2" class="form-control"></td>
    </tr>
    <tr>
    	<td><input type="submit" value="Hitung" class="btn btn-primary"></td>
        <td><input type="reset" value="Clear" class="btn btn-danger"></td>
    </tr>
    <tr>
    	<td>Hasil</td>
        <td><?php echo $c; ?></td>
    </tr>
</table>
</form>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>