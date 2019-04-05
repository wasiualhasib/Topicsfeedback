<!-- Modal -->
<div class="modal fade" id="loginModal" role="dialog" style="z-index: 9999">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header login_background">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title title_font_style_changer">Login Here</h4>
      </div>
      <div class="modal-body">
              <form 
                  action=""  
                  method="POST" 
                  enctype="multipart/form-data"
                  >
<!--Email Address-->
                              <div              class="input-group  form-group">
                                  <span         class="input-group-addon">
                                            <i  class="glyphicon glyphicon-envelope"  ></i>
                                  </span>
                                  <input 
                                                id="email" 
                                                type="text" 
                                                class="form-control" 
                                                name="login_email_or_phone" 
                                                placeholder="আপনার ইমেইল এড্রেস  অথবা ফোন নাম্বার " 
                                                required >
                              </div>
                      <!--Your Password-->
                              <div class="input-group form-group">

                                    <span       class="input-group-addon" >
                                          <i    class="glyphicon glyphicon-earphone" >   </i>
                                    </span>
                                    <input 
                                                id="phone_number" 
                                                type="password" 
                                                class="form-control" 
                                                name="login_password" 
                                                placeholder=" আপনার পছন্দ অনুযায়ী যেকোনো Password. " 
                                                required >
                              </div>
                                    <input 
                                                type="submit" 
                                                name="login" 
                                                value="Login" 
                                                class="form-control login_background" >
              </form>
      </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>

       