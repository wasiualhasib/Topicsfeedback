 
<section class="content container-fluid">
  
    <div class="row">
          <!--Student Course Rule-->
            <div class="col-md-8 col-md-offset-2 student_rule_wrapper ">
              <div class="student_rule ">
                 <h3 class="text-center">Students Course Rule</h3>
                      <form action="" method="GET">
                              <div class="form-group input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-book"></i>
                                </span>
                                <input 
                                      type="text" 
                                      name="student_course_rule_title" 
                                      id="student_course_rule_title" 
                                      placeholder="Student course rule title?"
                                      class="form-control" >
                              </div>

                              <div class="form-group ">
                                <span class="input-group-addon">
                                 Student course rule content
                                </span>
                                <textarea 
                                        name="student_course_rule_content" 
                                        id="student_course_rule_content" 
                                        cols="30" 
                                        rows="6"
                                        class="form-control ckeditor"
                                        placeholder="Student course rule content?"></textarea>
                                
                              </div>
                              <div class="form-group ">
                                <span class="input-group-addon">
                                  <span>Student course rule note</span>
                                </span>

                                <textarea 
                                        name="student_course_rule_note" 
                                        id="student_course_rule_note" 
                                        cols="30" 
                                        rows="5"
                                        class="form-control ckeditor"
                                        placeholder="Student course rule note?"></textarea>
                                
                              </div>
                              <div class="form-group input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-link"></i>
                                </span>
                                <input type="text"
                                       name="student_course_reg_btn_link"
                                       id="student_course_reg_btn_link"
                                       placeholder="Student registration button link?"
                                       class="form-control" >
                              </div>
                              <div class="form-group input-group">
                                 <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-usd"></i>
                                 </span>
                               
                               <input type="text"
                                       name="student_course_how_to_payment_title"
                                       id="student_course_how_to_payment_title"
                                       placeholder="How to payment title?"
                                       class="form-control" 
                                       >
                              </div>
                              <div class="form-group ">
                                 <span class="input-group-addon text-left">
                                  How to payment content? (use ol>li html format)
                                </span>
                                  <textarea 
                                        type="text"
                                        name="student_course_how_to_pay_content" 
                                        id="student_course_how_to_pay_content" 
                                        cols="30" 
                                        rows="5"
                                        class="form-control ckeditor"
                                        placeholder="How to payment?"></textarea>
                              </div>
                               <div class="form-group ">
                                 <span class="input-group-addon">
                                  How to payment note? (use ol>li html format)
                                </span>
                                  <textarea 
                                        type="text"
                                        name="student_course_how_to_pay_note" 
                                        id="student_course_how_to_pay_note" 
                                        cols="30" 
                                        rows="3"
                                        class="form-control ckeditor"
                                        placeholder="How to payment small note?"></textarea>
                              </div>
                              <div class="form-group text-right">
                                <input type="submit"
                                       name="submit"
                                       id="student_submit"
                                       value="Student" 
                                       class="btn btn-primary">
                              </div>
                      </form>
              </div>
            </div>
            <!--./Student Course Rule--> 
            <div class="col-md-8 col-md-offset-2 text-center">
              <h3>Show Inserted Data</h3>
            </div>
    </div>

</section>
 