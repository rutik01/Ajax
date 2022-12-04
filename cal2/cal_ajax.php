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

if(!($val1=="+" || $val1=="-" || $val1=="*" || $val1=="/" || $val1=="C" || $val1=="equal" || $val1=="back"))
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
	$_SESSION['operation'] = 1;
	$_SESSION['txt1'] = $_SESSION['txt'];
	$txt="";
}
else if($val1=='-')
{
	$_SESSION['operation'] = 2;
	$_SESSION['txt1']= $_SESSION['txt'];
	$txt='';
}
else if($val1=='*')
{
	$_SESSION['operation'] = 3;
	$_SESSION['txt1']=$_SESSION['txt'];
	$txt ='';
}
else if($val1=='/')
{
	$_SESSION['operation'] = 4;
	$_SESSION['txt1']=$_SESSION['txt'];
	$txt='';
}
else if($val1=='back')
{
	$num = strlen((string)$txt);	
	$txt = substr($txt, 0 ,$num-1);
}
else if($val1=="equal")
{
	if($_SESSION['operation']==1)
	{
		$txt = $_SESSION['txt1'] + $_SESSION['txt'];
		$_SESSION['operation']='';
	}
	else if($_SESSION['operation']==2)
	{
		$txt = $_SESSION['txt1'] - $_SESSION['txt'];
		$_SESSION['operation']='';
	}
	else if($_SESSION['operation']==3)
	{
		$txt = $_SESSION['txt1'] * $_SESSION['txt'];
		$_SESSION['operation']='';
	}
	else if($_SESSION['operation']==4)
	{
		$txt = $_SESSION['txt1'] / $_SESSION['txt'];
		$_SESSION['operation']='';
	}
}

echo $txt;
$_SESSION['txt'] = $txt;

?>