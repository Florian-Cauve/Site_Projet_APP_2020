<html>
<head>
    <title>Help</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./css/help2.css"/>
</head>
<body>

<?php ob_start();?>

<div class="HelpDIV">
    <div class="title">HELP</div>
    <div class="descriptionHELP">If you face a problem, please check our FAQ and our Forum :</div>
    <div class="boutonHELP">
        <input type="button" class="FAQ" value="Q & A">
        <input type="button" class="FORUM" value="Forum">
    </div>
    <div class="SEPARATEUR"></div>
    <div class="descriptionHELP">If you didn't find a solution, please send us a message :</div>
    <div class="boutonHELP2">
        <input type="button" class="MESSAGE" value="Message">
    </div>
</div>

<?php $content = ob_get_clean();
require('templateView.php'); ?>

</body>
</html>