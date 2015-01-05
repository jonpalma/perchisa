
                <?php
              function spamcheck($field)
                {
                //filter_var() sanitizes the e-mail
                //address using FILTER_SANITIZE_EMAIL
                $field=filter_var($field, FILTER_SANITIZE_EMAIL);

                //filter_var() validates the e-mail
                //address using FILTER_VALIDATE_EMAIL
                if(filter_var($field, FILTER_VALIDATE_EMAIL))
                  {
                  return TRUE;
                  }
                else
                  {
                  return FALSE;
                  }
                }

              if (isset($_REQUEST['email']))
                {//if "email" is filled out, proceed

                //check if the email address is invalid
                $mailcheck = spamcheck($_REQUEST['email']);
                if ($mailcheck==FALSE)
                  {
                  echo "Correo Invalido";
                  }
                else
                  {//send email
                  $name = $_REQUEST['name'] ;
                  $email = $_REQUEST['email'] ;

                  $phone = $_REQUEST['phone'] ;
                  $service = $_REQUEST['service'] ;
                  $message = $_REQUEST['message'] ;
                  mail("ventas@perchisa.com, jgomez@perchisa.com, jon.palma@outlook.com", "Sitio PERCHISA", $message,

                    "PERCHISA <br>
                    $name  <br>
                    $phone <br>
                    $service <br>
                    $email <br>");

                  echo "<META HTTP-EQUIV='Refresh' Content='0; URL=gracias.php'>";
                  }
                }
              else
                {//if "email" is not filled out, display the form
                echo "Contactanos <br /><br />" ;
                }
              ?>

            