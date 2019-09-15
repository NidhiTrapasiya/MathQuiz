<html>
<head>
<title>Mathematical Quiz
</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<body bgcolor="#49A3AF">
<h1>Result Time......</h1>
<hr color="green" size="7"><br><br>

<?php 
session_start();
$num1=$_SESSION['$number1'];
$num2=$_SESSION['$number2'];
$opr=$_SESSION['$oprator'];
$ans=$_GET['answer'];
switch($opr)
{
	case 'addition':
		$actual_ans=$num1+$num2;
		break;
	case 'subtraction':
		$actual_ans=$num1-$num2;
		break;
	case 'multiplication':
		$actual_ans=$num1*$num2;
		break;
	case 'division':
		$actual_ans=$num1/$num2;
		break;
}
if($ans==$actual_ans)
	echo "<center><h3>Congratulation you won!!!</h3></center>";
else
	echo "<center><h3>Sorry!!! You need to work hard!!!!</h3></center>";
?>
<br><br>
<br><br><br>
<form action="index.html">
Do you wants to try again???<br><br><br>
<button class="button button1">Try Again</button>
</form>
</body>
</html>