<!DOCTYPE html>
<?php
include_once('../config/database.php');
?>
<html lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Backend Dashboard</title>
</head>

<body>

<?php include_once("../shared/header.php"); ?>
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


  <?php include_once("../shared/footer.php"); ?>

    <script src="../assets/js/jquery-slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>
