<?php
require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

 $name = $_POST['name'] ?? '';
 $email = $_POST['email'] ?? '';
 $phone = $_POST['phone'] ?? '';
 $password = $_POST['password'] ?? '';
 $password_confirmation = $_POST['password_confirmation'] ?? '';
 $document = $_POST['document'] ?? '';
 $linkedin = $_POST['linkedin'] ?? '';
 $birth_country_id = $_POST['birth_country_id'] ?? '';
 $current_country_id = $_POST['current_country_id'] ?? '';
 $user_countries = $_POST['user_countries'] ?? '';
 $education = $_POST['education'] ?? '';
 $institution = $_POST['institution'] ?? '';
 $language_en = $_POST['language_en'] ?? '';
 $language_es = $_POST['language_es'] ?? '';
 $language_pt = $_POST['language_pt'] ?? '';
 $experience = $_POST['experience'] ?? '';
 $working = $_POST['working'] ?? '';
 $out_of_work = $_POST['out_of_work'] ?? '';
 $last_company = $_POST['last_company'] ?? '';
 $min_income = $_POST['min_income'] ?? '';
 $max_income = $_POST['max_income'] ?? '';
 $last_position = $_POST['last_position'] ?? '';
 $target_positions = $_POST['target_positions'] ?? '';
 $user_areas = $_POST['user_areas'] ?? '';
 $name_0 = $_POST['name_0'] ?? '';
 $email_0 = $_POST['email_0'] ?? '';
 $phone_0 = $_POST['phone_0'] ?? '';
 $company_0 = $_POST['company_0'] ?? '';
 $position_0 = $_POST['position_0'] ?? '';
 $name_1 = $_POST['name_1'] ?? '';
 $email_1 = $_POST['email_1'] ?? '';
 $phone_1 = $_POST['phone_1'] ?? '';
 $company_1 = $_POST['company_1'] ?? '';
 $position_1 = $_POST['position_1'] ?? '';
 $summary = $_POST['summary'] ?? '';



 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
                                              // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'jean.pierre.alarcon.r@gmail.com';                     // SMTP username
    $mail->Password   = '123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('1@gmail.com');
    $mail->addAddress('jean.pierre.alarcon.r@gmail.com');     // Add a recipient
    


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CORREO DE CONFIRMACION';
    $mail->Body    = ' Hola';
  
    $mail->send();
    echo '<script> alert("El mensaje se envió correctamente");
    window.history.go(-1);
     </script>';
} 
catch (Exception $e) {
    echo "Error al enviar correo: {$mail->ErrorInfo}";
}

?>