<!DOCTYPE html>
<html>


<head>

<title> Help </title>

<meta charset="utf-8"/>
<link rel="stylesheet" href="./css/help.css"/>

</head>
<body>
<?php ob_start();?>

<p class="titre"> HELP </p>
<br/><br/><br/>

<p> If you face a problem, please check our FAQ and our Forum : </p>
<br/><br/><br/>

<p><a href="./index.php?action=help&amp;action2=faq" style="text-decoration:none"><input type="button" value="Q&A" class="bouton"/></a>


<a href="./index.php?action=help&amp;action2=forum"><input type="submit" value="Forum"class="bouton"/></p></a>

<br/><br/>

<hr width="50%" color="black"> 
<br/><br/>

<p><center> If you didn't find a solution, please send us a message : </center></p>

<p><center><a href="./index.php?action=help&amp;action2=message" style="text-decoration:none"><input type="submit" value="Message" class="bouton"/></a></center></p>
<?php $content = ob_get_clean();
require('templateView.php'); ?>
</body>
</html>

