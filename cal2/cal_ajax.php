<?php 

session_start();

if(!isset($_SESSION['txt']))
{
	$txt="";
}
else
{
	$txt = $_SESSION['txt'];
}

$val1 = $_POST['val1'];

$cnt=0;

if(!($val1=="+" || $val1=="-" || $val1=="*" || $val1=="/" || $val1=="C" || $val1=="equal"))
{
	$txt .= $val1;
}
else if($val1=="C")
{
	$txt="";
	$_SESSION['txt']=$txt;
}
else if($val1=="+")
{
	$_SESSION['operation1'] = 1;
	$_SESSION['txt1'] = $_SESSION['txt'];
	$txt="";
}
else if($val1=='-')
{
	$_SESSION['operation2'] = 2;
	$_SESSION['txt1']= $_SESSION['txt'];
	$txt='';
}
else if($val1=='*')
{
	$_SESSION['operation3'] = 3;
	$_SESSION['txt1']=$_SESSION['txt'];
	$txt ='';
}
else if($val1=='/')
{
	$_SESSION['operation4'] = 4;
	$_SESSION['txt1']=$_SESSION['txt'];
	$txt='';
}
else if($val1=="equal")
{
	if(isset($_SESSION['operation1'])==1)
	{
		$txt = $_SESSION['txt1'] + $_SESSION['txt'];
		session_destroy();
	}
	else if(isset($_SESSION['operation2'])==2)
	{
		$txt = $_SESSION['txt1'] - $_SESSION['txt'];
		session_destroy();
	}
	else if(isset($_SESSION['operation3'])==3)
	{
		$txt = $_SESSION['txt1'] * $_SESSION['txt'];
		session_destroy();
	}
	else if(isset($_SESSION['operation4'])==4)
	{
		$txt = $_SESSION['txt1'] / $_SESSION['txt'];
		session_destroy();
	}
}

echo $txt;
$_SESSION['txt'] = $txt;

?>