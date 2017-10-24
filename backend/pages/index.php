<!doctype html>
<html lang="en">
  <head>
    <title>Backend Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
	<?php include_once("../partials/header.php"); ?>
    <div class="container-fluid">
      <div class="row">

      </div>
      <?php
        $page = isset($_GET["page"]) ? $_GET["page"] : null;
         if($page){
          if(file_exists($page.".php")){
            include_once($page.".php");
          }else{
            include_once("404page.php");
          }
        }else{
      	include_once("dashboard.php");
        }
      ?>
    </div>


  <?php include_once("../partials/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
