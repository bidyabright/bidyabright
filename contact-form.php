        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">CONTACT FORM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <?php
                if(isset($_POST['submit']))
                {
                $message=
                'Full Name: '.$_POST['fullname'].'<br />
                Subject:  '.$_POST['subject'].'<br />
                Phone:  '.$_POST['phone'].'<br />
                Email:  '.$_POST['emailid'].'<br />
                Comments: '.$_POST['comments'].'
                ';
                require "phpmailer/class.phpmailer.php"; //include phpmailer class
                
                // Instantiate Class
                $mail = new PHPMailer();
                
                // Set up SMTP
                $mail->IsSMTP();                // Sets up a SMTP connection
                $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
                $mail->SMTPSecure = "ssl";      // Connect using a TLS connection
                $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
                $mail->Port = 465;  //Gmail SMTP port
                $mail->Encoding = '7bit';
                
                // Authentication
                $mail->Username   = "balakrishnadas100@gmail.com"; // Your full Gmail address
                $mail->Password   = "krishna6261"; // Your Gmail password
                
                // Compose
                $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
                $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
                $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)
                $mail->MsgHTML($message);
                
                // Send To
                $mail->AddAddress("balakrishnadas100@gmail.com", "Recipient Name"); // Where to send it - Recipient
                $result = $mail->Send();    // Send!
                $message = $result ? 'Successfully Sent!' : 'Sending Failed!';
                unset($mail);
                }
                ?>
                <html>
                  <head>
                    <title>Contact Form</title>
                  </head>
                  <body>
                    
                    <div>
                      <h3>Contact Form</h3>
                      <form name="form1" id="form1" action="" method="post">
                        <fieldset>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="fullname" placeholder="Name" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Name</span>
                            </span>
                          </label>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="subject" placeholder="Subject" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Subject</span>
                            </span>
                          </label>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="phone" placeholder="Phone Number" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Phone number</span>
                            </span>
                          </label>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="emailid" placeholder="Email ID" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Email ID</span>
                            </span>
                          </label>
                          <textarea class="input-area" style="height: 90px" rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
                          <br />
                          <input type="submit" name="submit" value="Send" />
                        </fieldset>
                      </form>
                      <p><?php if(!empty($message)) echo $message; ?></p>
                    </div>
                    
                  </body>
                </html>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->



        <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">CONTACT FORM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <?php
                if(isset($_POST['submit']))
                {
                $message=
                'Full Name: '.$_POST['fullname'].'<br />
                Subject:  '.$_POST['subject'].'<br />
                Phone:  '.$_POST['phone'].'<br />
                Email:  '.$_POST['emailid'].'<br />
                Comments: '.$_POST['comments'].'
                ';
                require "phpmailer/class.phpmailer.php"; //include phpmailer class
                
                // Instantiate Class
                $mail = new PHPMailer();
                
                // Set up SMTP
                $mail->IsSMTP();                // Sets up a SMTP connection
                $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
                $mail->SMTPSecure = "ssl";      // Connect using a TLS connection
                $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
                $mail->Port = 465;  //Gmail SMTP port
                $mail->Encoding = '7bit';
                
                // Authentication
                $mail->Username   = "balakrishnadas100@gmail.com"; // Your full Gmail address
                $mail->Password   = "krishna6261"; // Your Gmail password
                
                // Compose
                $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
                $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
                $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)
                $mail->MsgHTML($message);
                
                // Send To
                $mail->AddAddress("balakrishnadas100@gmail.com", "Recipient Name"); // Where to send it - Recipient
                $result = $mail->Send();    // Send!
                $message = $result ? 'Successfully Sent!' : 'Sending Failed!';
                unset($mail);
                }
                ?>
                <html>
                  <head>
                    <title>Contact Form</title>
                  </head>
                  <body>
                    
                    <div>
                      <h3>Contact Form</h3>
                      <form name="form1" id="form1" action="" method="post">
                        <fieldset>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="fullname" placeholder="Name" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Name</span>
                            </span>
                          </label>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="subject" placeholder="Subject" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Subject</span>
                            </span>
                          </label>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="phone" placeholder="Phone Number" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Phone number</span>
                            </span>
                          </label>
                          <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" name="emailid" placeholder="Email ID" required>
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Email ID</span>
                            </span>
                          </label>
                          <textarea class="input-area" style="height: 90px" rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
                          <br />
                          <input type="submit" name="submit" value="Send" />
                        </fieldset>
                      </form>
                      <p><?php if(!empty($message)) echo $message; ?></p>
                    </div>
                    
                  </body>
                </html>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        