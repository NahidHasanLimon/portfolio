we can write send mail function in the same file where this form html code written but only for seperation purpose, we create a separate php file named as "sendmail.php".
put the filename in the action method of form. $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".
<form class="main_form" method="post" action ="sendmail.php">
    <div class="row">          
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <input class="form-control" placeholder="title" type="text" name="Title">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <input class="form-control" placeholder="Email" type="text" name="Email">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <textarea class="textarea" placeholder="message" type="text" name="Message"></textarea>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <input class="send" type="submit" value="send" name="submitted_form">
    </div>
</div>
</form>



sendmail.php 

<?php
  if (isset($_POST['submitted_form'])){
    $subject = $_POST['Title'];
    $message = "Email : $_POST['Email'] Message: $_POST['Message']";
    $headers = "From:abc@xyz.com";
    send_mail($subject,$message,$headers);
  }
function send_mail( $subject, $message, $headers){
    // https://stackoverflow.com/questions/5335273/how-can-i-send-an-email-using-php
    $to = "bordadoscreativos.02@gmail.com";
    if(mail($to, $subject, $message, $headers)){
        echo "Message sent successfully...";
     }else {
        echo "Message could not be sent...";
     }
}
?>