<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  
  <title>AdminLTE 2 | Starter</title>
  <!-- Metadata-->
  <?php include '../../asset/admin/component/metadata.php'; ?>
    <!-- ./Metadata-->
<!-- Bootstrap 3.3.7 & Others link -->
  <?php include '../../asset/admin/component/header_link.php'; ?>
<!-- ./Bootstrap 3.3.7 & Others link -->
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
 <!-- ./Main Header -->
  <!-- Left side column. contains the logo and sidebar -->
 <?php include '../../asset/admin/component/sidebar.php'; ?>
 <!-- ./Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header Pagination -->
      <?php include '../../asset/admin/pagination/teacher_pagination.php'; ?> 
      <!-- ./Content Header Pagination -->  

    <!-- Main content -->
      <?php include '../../asset/admin/component/teacher_content.php'; ?>
       <!-- ./Main content -->
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