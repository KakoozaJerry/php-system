<?php require('core/init.php'); ?>


<?php
//Create Topic Object
$topic = new Topic;



$template = new Template('templates/frontpage.php');

//Assign Vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();


//Display
echo $template;