<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link rel="icon" href="<?php echo ROOT_URL ?>assets/images/logo.png" type="image/icon type">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL ?>/assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>
<body>
<?php
Messages::display();
?>
    <main role="main" class="container mb-5">
    <div class="row justify-content-center">
      <?php 
      require($view); 
      ?>
      
    </div>
    </main>
</body>
</html>