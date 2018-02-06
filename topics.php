<?php require('core/init.php'); ?>


<?php

//Create Topic Object
$topic = new Topic;

//Get category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get Template $ Assign Vars
$template = new Template('templates/topics.php');
//Assign Template Variable
if(isset($category)){
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Posts In "'.$topic->getCategory($category)->name.'"';
} else{
	$template->topics = $topic->getAllTopics();
}



$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();


//Display
echo $template;
