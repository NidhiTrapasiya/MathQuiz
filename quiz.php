<html>
<head>
<title>Mathematical Quiz
</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<body bgcolor="#49A3AF">
<h1>Here is your Quiz</h1>
<hr color="green" size="7"><br><br>
<?php 
session_start();
$operation=array("addition","subtraction","division","multiplication");
$random_opr=array_rand($operation,1);
$num1=rand(1,20);
$num2=rand(1,20);
$opr=$operation[$random_opr];
$_SESSION['$number1']=$num1;
$_SESSION['$number2']=$num2;
$_SESSION['$oprator']=$opr;
#echo $operation;
echo "Number1:".$num1."<br><br>";
echo "Number2:".$num2."<br><br>";
echo "Operation:".$operation[$random_opr]."<br><br>";
?>
<br><br>
Here you can put your answer......<br><br><br>
<form action="result.php">
<input type="text" name="answer"><br><br><br>
<button class="button button1">Show Result</button>
</form>
</body>
</html>