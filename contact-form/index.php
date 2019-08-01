<html>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
<body>

  <div class="contact-form">
    <h2>Contact Us</h2>
    <form methods="post" action="">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="text" name="phone" placeholder="Phone No" required>
      <input type="email" name="email" placeholder="Your Email" required>
      
      <div class="g-recaptcha" data-sitekey="6Lfhz7AUAAAAANSLjxySOtwd-bBXsUW7CXp1O7LT"></div>
      
      <textarea name="message" placeholder="Your Message" required></textarea>
      <input type="submit" name="submit" value="Send Message" class="submit-btn">
    </form>

    <div class="status">

      <?php
        if(isset($_POST['submit'])) {
          $User_name = $_POST['name'];
          $phone = $_POST['phone'];
          $user_email = $_POST['email'];
          $user_message = $_POST['message'];

          $email_from = 'megustasouplatao@hotmai.com';
          $email_subject = 'New Form Submission';
          $email_body = "Name: $User_name.\n". 
                        "Phone No: $phone.\n".
                        "Email Id: $user_email.\n".
                        "User Message: $user_message.\n";

          $to_email = "bruno.ramires@ilegra.com";
          $headers = "From: $email_from \r\n";
          $headers .= "Reply-To: \r\n";
        }
      ?>

    </div>

  </div>
 </body>
</html>