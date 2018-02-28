<?php

$recepient = "purpose.is.obvious@gmail.com";
$sitename = "HomeDoors";

if(!(
isset($_GET['contact']) &&
isset($_GET['phone']) &&
isset($_GET['model']) &&
isset($_GET['type']) &&
isset($_GET['comment']) 
)) {
exit('-1');
}

$text='Заполните поля: ';
$flag=false;
if($_GET['contact']=='')
{
	$text.='Ваше имя; ';
	$flag=true;
}

if($_GET['phone']=='')
{
	$text.='Телефон; ';
	$flag=true;
}



if ($flag)
{
exit($text);}


$name = htmlspecialchars(trim($_GET["contact"]));
$type = htmlspecialchars(trim($_GET["type"]));
$phone = htmlspecialchars(trim($_GET["phone"]));
$company = htmlspecialchars(trim($_GET["model"]));
$messagetext = htmlspecialchars(trim($_GET["comment"]));



$pagetitle = "Новая заявка с сайта $sitename";
$message = "<b>Новая заявка  с сайта $sitename</b><br/> \n<b>Тип заявки:</b> $type <br/>\n<b>Контактное лицо:</b> $name <br/>\n<b>Телефон:</b> $phone <br/>\n<b>Дверь:</b> $company <br/>\n<b>Текст сообщения:</b> <br/>\n$messagetext";
if(mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient"))
{
exit('1');
}
else
{
exit('-1');
}