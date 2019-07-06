<link rel="stylesheet" href="<?php echo base_url();?>assets/css/contact-form.css"> 
 <section class="well well4">
        <div class="container">
         
              <h2>
                contact 
                <small>
                 form
                </small>
              </h2>
              <form id="contact-form" class='contact-form'>
                <div class="contact-form-loader"></div>
                <fieldset>
                  <label class="name">
                    <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"/>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid name.</span>
                  </label>              
              
                  <label class="phone">
                    <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@JustNumbers"/>
              
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid phone.</span>
                  </label>

                  <label class="email">
                    <input type="text" name="email" placeholder="Email:" value="" data-constraints="@Required @Email"/>
                    
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid email.</span>
                  </label>
              
                  <label class="message">
                    <textarea name="message" placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*The message is too short.</span>
                  </label>
              
                 <!--  <label class="recaptcha"> <span class="empty-message">*This field is required.</span> </label> -->
              
                  <div class="btn-wr text-primary">
                    <a class="btn btn-primary" href="#" data-type="submit">Submit</a>
                  </div>
                </fieldset>
                <div class="modal fade response-message">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                          &times;
                        </button>
                        <h4 class="modal-title">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        You message has been sent! We will be in touch soon.
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
                     
        </div>        
      </section>

      

    </main>