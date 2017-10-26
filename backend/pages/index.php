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

    <!-- Bootstrap 4 Datatables REsponsive -->
    <link rel="stylesheet" type="text/css" href="../assets/datatables-responsive/DataTables-1.10.16/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/datatables-responsive/Responsive-2.2.0/css/responsive.bootstrap4.min.css"/>
    
    
   

    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <style>
    body{
      font-family: 'Trirong', serif;
    }
    </style>
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
    
    <!-- Bootstrap 4 Datatables & Responsive -->
    <script>
    $(document).ready(function() {
      $('#example').DataTable( {
        // แบบ desc
        "order": []
        // 0 เรียง column ที่ 0 แบบ asc
        // "order": [[ 0, 'desc' ], [ 4, 'desc' ]]
    } );
    });
  </script>
       <script type="text/javascript" src="../assets/datatables-responsive/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
       <script type="text/javascript" src="../assets/datatables-responsive/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
       <script type="text/javascript" src="../assets/datatables-responsive/Responsive-2.2.0/js/dataTables.responsive.min.js"></script>
       <script type="text/javascript" src="../assets/datatables-responsive/Responsive-2.2.0/js/responsive.bootstrap4.min.js"></script>

    <?php 
    if(isset($_GET['page'])){
      if($_GET['page']=='users/profile' || $_GET['page']=='posts/view') { 
        ?>
        <script>
            CKEDITOR.replace('editor1');
        </script>
        <?php 
        }
    }
    ?>
</body>

</html>
