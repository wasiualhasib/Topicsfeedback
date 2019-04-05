
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html>
<head>
  
<title>AdminLTE 2 | Starter</title>
<!--All Header Metadata-->
<?php include"../../asset/admin/component/metadata.php"; ?>
  <!-- Bootstrup & Otherlink -->
<?php include"../../asset/admin/component/header_link.php"; ?>
  
</head>

<body class="hold-transition skin-blue sidebar-mini ">
  <!-- wrapper -->
    <div class="wrapper">

              <!-- Main Header -->
            <?php include"../../asset/admin/component/header_message.php"; ?>
            <!-- ./Main Header -->
              <!-- Left side column. contains the logo and sidebar -->
            <?php include"../../asset/admin/component/sidebar.php"; ?>
              <!-- ./Left side column. contains the logo and sidebar -->


      <div class="content-wrapper">
      <!-- Pagination -->
            <?php include '../../asset/admin/pagination/dashboard_pagination.php'; ?>
      <!-- ./Pagination -->
      <!-- Content Wrapper -->
            <?php include"../../asset/admin/component/index_page_content.php"; ?>
      <!-- /.content-wrapper -->
      </div>


      <!-- Main Footer -->
            <?php include"../../asset/admin/component/footer.php"; ?>

       <!-- ./Main Footer -->

    </div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
            <?php include"../../asset/admin/component/footer_js_link.php"; ?>
<!-- ./REQUIRED JS SCRIPTS -->
</body>
</html>