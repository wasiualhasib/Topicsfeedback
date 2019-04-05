<!DOCTYPE html>


<html>
<head>
  
  <title>AdminLTE 2 | Starter</title>
  <?php include '../../asset/admin/component/metadata.php'; ?>
  <?php include '../../asset/admin/component/header_link.php'; ?>
  
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

        <!-- Main Header -->
         <?php include '../../asset/admin/component/header_message.php'; ?>
        <!-- Left side column. contains the logo and sidebar -->
         <?php include '../../asset/admin/component/sidebar_admin.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php include '../../asset/admin/pagination/admin_pagination.php'; ?>
      
        <!-- Main content -->
        <?php include '../../asset/admin/component/admin_create_course.php'; ?>
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
        <?php include '../../asset/admin/component/footer.php'; ?>



</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<?php include '../../asset/admin/component/footer_js_link.php'; ?>

</body>
</html>