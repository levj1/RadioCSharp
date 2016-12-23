
<div class="main">
  <div class="page" id="contactus">
    <div class="content container">
      <h2>Contact Us</h2>     
          <form id="contact-form" method="post" action="#contactus" role="form">
              <div class="messages"></div>
              
              <div class="controls">
                  <div class="row">
                     <div class="col-md-6">
                      <div class="form-group">
                          <label for="form_firstname">First Name:</label>
                          <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter your first name" required="required" data-error="First Name is required." />
                          <div class="help-block with-errors"></div>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="form-group">
                          <label for="form_lastname">Last Name:</label>
                          <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Please enter your last name" required="required" data-error="Last Name is required." />
                          <div class="help-block with-errors"></div>
                      </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                      <div class="form-group">
                          <label for="form_email">Email:</label>
                          <input type="text" id="email" name="email" class="form-control" placeholder="Please enter your first name" required="required" data-error="email is required." />
                          <div class="help-block with-errors"></div>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="form-group">
                          <label for="form_phone">Phone:</label>
                          <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Please enter a phone number" />
                          <div class="help-block with-errors"></div>
                      </div>
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Send message">
                    </div>
                </div>
              </div>
          </form>
    </div><!-- content container -->
  </div><!-- contactus page -->
  
  