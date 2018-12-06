<?php 
session_start();
class User 
{
    public $name;
    public $surname;
    public $email;
    public $password;

    public function __construct ($name, $surname, $email, $password) {
    	$this -> name = $name;
    	$this -> surname = $surname;
    	$this -> email = $email;
    	$this -> password = $password;
    }

    public function autendificated($pass, $user_id) {
        if ($pass == $this -> password) {
            $_SESSION['id'] = $user_id;
        }
    }
}  

$users = [
['id'=>1,'name'=>'Василий', 'surname'=>'Петров', 'email'=>'vasya-petya@gmail.com', 'password'=>'12345'],
['id'=>2,'name'=>'Василий', 'surname'=>'Пупкин', 'email'=>'vasya-naibator@gmail.com', 'password'=>'123456']
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User</title>
</head>
<body>

<?php
if ($_SESSION['id'] == 2){
	echo 'Привет Василий Пупкин!';
	exit();
}
?> 

<pre>Email                    Пароль    </pre>

<form method="POST" action="">
	<input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="Отправить">
</form>
</body>
</html>


<?php
if (!empty ($_POST)) {
	
    if (!empty ($_POST['email'])) {
    			
	    if (!empty ($_POST['password'])) {
			 
			$email = $_POST['email'];
		    $password = $_POST['password'];

		    foreach ($users as $user) {
		      	if ($user['email'] == $email) {
		      		$user1 = new User ($user['name'], $user['surname'], $user['email'], $user['password']);
		      		$user1 -> autendificated($password, $user['id']);
		     	}
		    } 
	    }   else echo 'Введите пароль <br>';
    }   else echo 'Введите email <br>';
}
?>

 
