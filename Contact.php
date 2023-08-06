<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.conatctus.mathsage.ac.za</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!------------------page header----------------------->
    <?php
         session_start();
        include("header.php");
       
    ?>


    <div class="contact-header">
        <h1>Connect With Us</h1>
     <div class="contact">

            <p style="text-align:center;">All fields with <span style="font-size: 25px;;color:red;">
            *</span> are require!!</p>

        <form action="" method="post">
            <input type="text" name="sender-name" placeholder="Full Names...*" required class="details"><br>
            <input type="email" name="Email" placeholder="Email Address...*" required class="details"><br>
            <input type="text" name="subject" placeholder="Message Subject (i.e Unable to register) *" required class="details"><br>
            <label for="message" class="details">Message</label><br>
            <textarea name="" id="" cols="30" rows="10" placeholder="Message here...*" required></textarea><br>
            <button class="send-message" name="submit">Send Message</button><br>
        </form>
     </div>

     <div class="contact">
        <div class="icons">
            <a href="https://wa.me/27796849184" target="_blank"><i class="fa fa-whatsapp"></i>-WhatsApp</a>
            <a href="tel:0796849184"><i class="fa fa-phone-square"></i>- Call Us</a>
            <a href="mailto:mayammatikane@gmail.com"><i class="fa fa-envelope-o"></i>- Email</a>
            <a href=""><i class="fa fa-facebook">- Facebook</i></a>
        </div>
     </div>
    </div>
</body>
</html>