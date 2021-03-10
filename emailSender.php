<?php use PHPMailer\PHPMailer\PHPMailer; ?>
     <?php  include 'globalVariable.php'; ?>
      <?php   
        if (isset ($_POST['email'])){
            require 'includes/PHPMailer.php';
            require 'includes/Exception.php';
            require 'includes/SMTP.php';
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userPhone = $_POST['phone'];
            $userMessage = $_POST['message'];
            $messageSubject = "Message From Artblog User";
            $to = "nino.shainidze@gtu.ge";


            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'giorgi.khitarishvili@gtu.ge'; // SMTP სერვერად გამოსაყენებელი მეილი
            $mail->Password = $passwordForMail; // მეილის პაროლი
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';
            $mail->setFrom('giorgi.khitarishvili@gtu.ge'); // მეილი რომელსაც ვიყენებთ SMTP  სერვერად 
            $mail->addAddress($to); // მეილი რომელსაც უნდა გაეგზავნოს შეტყობინება 

            $mail->isHTML(true);
            $mail->Subject = $messageSubject;
            $mail->Body = "<h3>Name : $userName <br>Email: $userEmail <br> Phone: $userPhone<br> Message : $userMessage</h3>";

            $mail->send();
            header("Location: index.php");

        }
