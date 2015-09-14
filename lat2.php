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
$a=9;
$b=7;
$c=$a+$b;
?>
<table border="1">
    <tr>
        <th colspan="2">PENJUMLAHAN</th>
    </tr>
    <tr>
    	<td>Bilangan 1</td>
        <td><?php echo $a; ?></td>
    </tr>
    <tr>
    	<td>Bilangan 2</td>
        <td><?php echo $b; ?></td>
    </tr>
    <tr>
    	<td>Hasil</td>
        <td><?php echo $c; ?></td>
    </tr>
</table>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>