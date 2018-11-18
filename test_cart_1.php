<?php
session_start();
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart']=['sum'=>0, 'items' => []];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
К оплате: <?php 
            echo $_SESSION['cart']['sum'].'<br>';
          ?>
<form method="POST" action="">
	<input type="number" name="quantity">
    <input type="button" value="Добавить">
</form>
</body>
</html>
<?php
var_dump('<pre>',$_POST['quantity']);
?>