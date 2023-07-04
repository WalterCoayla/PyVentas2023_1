<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./assets/css/fontawesome-free-all.min.css">

<!-- Theme style -->
  <link rel="stylesheet" href="./assets/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<?php
    require_once "./vistas/plantilla/nav.php";
    require_once "./vistas/plantilla/aside.php"; 
?>

    <div class="content-wrapper">
        <?php 
        require_once "./vistas/plantilla/encabezado.php";
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <?php echo $contenido?>
            </div>
        </secction>
    </div>
</div>
<?php 
        require_once "./vistas/plantilla/pie.php";
        ?>
<!-- AdminLTE App -->
<script src="./assets/js/adminlte.js"></script>
</body>
</html>