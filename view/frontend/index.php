<!DOCTYPE html>
<html lang="en">
<head>
  <title>Topicsfeedback</title>
  <?php include '../../asset/frontend/component/meta_info.php'; ?>
  <?php include "../../asset/frontend/component/head_link.php" ?>
  <?php include '../../core/frontend/dbConnect_sql.php'; ?>
  <?php include '../../core/frontend/student_reg_sql.php'; ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
</head>
<body>
<div class="container-fluid" >
  <div class="container ">
          <section>
                  <!-- <script>
                    
                    $( function() {
                      $( "#dialog" ).dialog();
                    } );
                  </script>
                    
                  <div id="dialog" title="Basic dialog">
                    <p>
                      <?php  if ($msg==2) 
                        {
                        echo "Data Insert Successfully";
                        }elseif ($msg==1){
                        echo "Data Insert Failed";
                        }
                        else{
                      ?>
                          <script> $(this).dialog('close');</script>
                      <?php
                            }
                      ?>
                  
                    </p>
                  </div> -->
        <?php  include "../../asset/frontend/component/head_message.php"; ?>
        <?php include '../../asset/frontend/component/navigation_bar.php'; ?>
        <?php include "../../asset/frontend/component/slider.php"; ?> 
        <?php include '../../asset/frontend/component/cource_content.php'; ?>
        <?php include '../../asset/frontend/component/footer.php'; ?>


        <?php include '../../asset/frontend/component/registration_model_student.php'; ?>
        <?php include '../../asset/frontend/component/registration_model_teacher.php'; ?>
        <?php include '../../asset/frontend/component/student_signup.php'; ?>
        <?php include '../../asset/frontend/component/registration_model_mode.php'; ?>
        <?php include '../../asset/frontend/component/login_page.php'; ?>
    </section>

	 
    
  </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 


</body>
</html>
