<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Welcome to TalkingSpace</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI; ?>templates/css/custom.css" rel="stylesheet">
    <?php
    if(!isset($title)){
	    $title = SITE_TITLE;
	}
	?>

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top navbar-right">
      <a class="navbar-brand" href="index.php">TalkingSpace</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto navbar-right">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Create An Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="create.php">Create Topic</a>
          </li>
          
        </ul>
        
      </div>
    </nav>

    <div class="container">
        <div class="row">
          <div class="col-md-8">
              <div class="main-col">
                  <div class="block">
                    <h1 class="pull-left"><?php echo $title; ?></h1>
                    <h4 class="pull-right">A simple PHP forum engine</h4>
                    <div class="clearfix"></div>
                    <hr>