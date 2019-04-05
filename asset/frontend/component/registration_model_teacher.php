<!-- Modal FOR TEACHER -->
      
      <div class="modal fade" id="Teacher" role="dialog" style="z-index: 9999">
        
      
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header login_background">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title title_font_style_changer">Register Here (সবকিছু ইংরাজিতে লিখবেন।)</h4>
            </div>
            <div class="modal-body">
              <form action="#"  method="POST" enctype="multipart/form-data">
<!-- Profile Image-->
                          <div class=" input-group form-group">
                             <span class="input-group-addon">
                               আপনার ছবি Upload করুন
                              </span>
                            <input 
                                  id="file" 
                                  type="file" 
                                  class="form-control" 
                                  name="profile_picture" 
                                  accept="image/jpg,image/png,image/jpeg" 
                                  placeholder="Input" 
                                  required>
                          </div>
<!-- Your CV Attachment-->
                          <div class=" input-group form-group">
                             <span class="input-group-addon">
                               আপনার সিভি Upload করুন
                              </span>
                            <input 
                                  id="file" 
                                  type="file" 
                                  class="form-control" 
                                  name="profile_picture" 
                                  accept="application/msword,tex/pdf" 
                                  placeholder="Input" 
                                  required>
                          </div>
<!-- Your Course Content -->
                          <div class=" input-group form-group">
                             <span class="input-group-addon">
                               আপনার কোর্স কন্টেন্ট Upload করুন
                              </span>
                            <input 
                                  id="file" 
                                  type="file" 
                                  class="form-control" 
                                  name="profile_picture" 
                                  accept="application/msword,tex/pdf" 
                                  placeholder="Input" 
                                  required>
                          </div>
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

            <!--Date Of Birth-->
                          <div class="input-group form-group">
                              <span class="input-group-addon">আপনার জন্ম তারিখ</span>

                            <input 
                                  id="dob_date" 
                                  type="date" 
                                  class="form-control" 
                                  name="dob_date" 
                                  placeholder=" আপনার জন্ম তারিখ  " 
                                  required>
                          </div>
            <!--Address-->
                          <div class="input-group form-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>

                            <input id="address" 
                                  type="text" 
                                  class="form-control" 
                                  name="address" 
                                  placeholder="আপনার ঠিকানা " 
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
            <!--Major Subject-->
                          <div class="input-group form-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-book"></i>
                              </span>

                            <input 
                                  id="major_subject" 
                                  type="text" 
                                  class="form-control" 
                                  name="major_subject" 
                                  placeholder="যে সাবজেক্ট নিয়ে আপনি পড়াশুনা করছেন " required>
                          </div>
            <!--Choose Your Course-->
                          <div class="input-group form-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-book"></i>
                              </span>

                            <input 
                                  id="course" 
                                  type="text" 
                                  class="form-control" 
                                  name="course_name" 
                                  placeholder=" আপনি যে কোর্স টি আপনি  করাতে চান  " 
                                  required>
                          </div>

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
                                  placeholder=" আপনার ফোন নাম্বার " 
                                  required>
                          </div>
            <!--Emergency Contact Number-->
                          <div class="input-group form-group">
                              <span class="input-group-addon">
                               <i class="glyphicon glyphicon-earphone"></i>
                              </span>

                            <input 
                                  id="emergency_number" 
                                  type="text" 
                                  class="form-control" 
                                  name="emergency_number" 
                                  placeholder="জরুরী ফোন নুম্বার / Emergency Number " 
                                  required>
                          </div>


              <!--Bkash Or Rocket-->
                          <div class="input-group form-group">
                              <span class="input-group-addon">
                                 <i class="glyphicon glyphicon-earphone"></i>
                              </span>

                            <input 
                                  id="send_from_mfs" 
                                  type="text" 
                                  class="form-control" 
                                  name="send_from_mfs" 
                                  placeholder=" আপনার বিকাশ / রকেট নুম্বার " 
                                  required>
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
                                      placeholder="আপনার ইমেইল এড্রেস  " 
                                      required>
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
                                          value="Register" 
                                          class="form-control login_background" >  
              </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>

       