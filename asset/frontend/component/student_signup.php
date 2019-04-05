<!-- Modal FOR STUDENT-->
      
      <div class="modal fade" id="signModal" role="dialog" style="z-index: 9999">
        
      
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header login_background">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title title_font_style_changer">Signup Here (সবকিছু ইংরাজিতে লিখবেন।)</h4>
            </div>
            <div class="modal-body">
              <form action="#"  method="POST" enctype="multipart/form-data">

            <!--FIRST NAME-->
                          <div class="input-group form-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                              </span>

                            <input 
                                  id="fnmae" 
                                  type="text" 
                                  class="form-control" 
                                  name="fname" 
                                  placeholder="আপনার নামের প্রথম অংশ" 
                                  required>
                          </div>
            <!--LAST NAME-->
                          <div class="input-group form-group">
                            <span class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                            </span>
                               
                                <input 
                                      id="lname" 
                                      type="text" 
                                      class="form-control" 
                                      name="lname" 
                                      placeholder="আপনার নামের শেষ অংশ " 
                                      required>
                          </div>


            <!--Your University/College/School-->
                          <div class="input-group form-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-book"></i>
                              </span>

                            <input 
                                  id="education_institute" 
                                  type="text" 
                                  class="form-control" 
                                  name="education_institute" 
                                  placeholder="আপনার কলেজ, ইউনিভার্সিটি, অথবা স্কুল এর নাম। " 
                                  required>
                          </div>

            <!--Choose Your Course-->
                          <div class="input-group form-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                            <select name="course_name" id="course_name" class="form-control" required>
                              <option value="choose">Choose Your Course</option>
                              <option value="Android">Android Apps</option>
                              <option value="Games">Games Development</option>
                              <option value="Html & CSS">HTML+CSS</option>
                            </select>
                          </div>
                           <!--  <input 
                                 id="course" 
                                 type="text" 
                                 class="form-control" 
                                 name="course_name" 
                                 placeholder=" আমাদের যে কোর্সটি আপনি করতে চান।  " 
                                 required>
                                                     </div> -->

            <!--PHONE NUMBER-->
                          <div class="input-group form-group">
                            <span class="input-group-addon">
                              <i class="glyphicon glyphicon-earphone"></i>
                            </span>
                               
                                <input 
                                  id="phone_number" 
                                  type="text" 
                                  class="form-control" 
                                  name="phone_number" 
                                  placeholder="আপনার ফোন নাম্বার " 
                                  required>
                          </div>

            <!--Facebook Profile Link -->
                          <div class="input-group form-group">
                            <span class="input-group-addon">
                              <i class="glyphicon glyphicon-earphone"></i>
                            </span>
                               
                                <input 
                                  id="phone_number" 
                                  type="text" 
                                  class="form-control" 
                                  name="phone_number" 
                                  placeholder=" আপনার ফেসবুক এর প্রফিলের লিংক। যদি থাকে " 
                                  >
                          </div>

                
            <!--Email Address-->
                          <div class="input-group  form-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-envelope"></i>
                            </span>
                               
                                <input 
                                      id="email" 
                                      type="text" 
                                      class="form-control" 
                                      name="email" 
                                      placeholder="আপনার ইমেইল এড্রেস । যদি থাকে " 
                                      >
                          </div>

             <!--Your Password-->        
                          <div class="input-group form-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock"></i>
                            </span>
                                <input 
                                      id="phone_number" 
                                      type="password" 
                                      class="form-control" 
                                      name="password" 
                                      placeholder=" আপনার পছন্দ অনুযায়ী যেকোনো Password. " 
                                      required>
                          </div>
                      
                              <input 
                                          type="submit" 
                                          name="register" 
                                          value="Submit" 
                                          class="form-control login_background" >  
              </form>

            </div>
            <div class="modal-footer">
              <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>

       