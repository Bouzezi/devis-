<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use PHPMailer\PHPMailer\SMTP; 


require_once __DIR__ . '/vendor/autoload.php';
$Francais=file_get_contents("./i18n/de.json");
$json= json_decode($Francais,true);
//header('Refresh: 5; URL= deviseHome.php'); 

/*  if   ( isset($_POST['onlineQ1']) || isset($_POST['onlineQ1text']) ||   isset($_POST['onlineQ2']) ||    isset($_POST['onlineQ3']) 
||    isset($_POST['onlineQ4']) ||  isset($_POST['onlineQ4text'])  ||  isset($_POST['onlineQ5']) ||  isset($_POST['onlineQ5text'])
||    isset($_POST['onlineQ5']) ||    isset($_POST['onlineQ6']) ||    isset($_POST['onlineQ7'])  ||  isset($_POST['onlineQ9']) ||  isset($_POST['onlineQ9text']) 
||    isset($_POST['onlineQ10'])   ||    isset($_POST['onlineQ11']) ||    isset($_POST['name']) ||    isset($_POST['vorname']) 
||    isset($_POST['unternehmens'])   ||    isset($_POST['Telefon'])   ||    isset($_POST['adresse'])    ||    isset($_POST['Email']) ) 
{ 
  */ 
        $onlineQ1=$_POST['onlineQ1'];   
        $onlineQ1text=$_POST['onlineQ1text']; 
        $onlineQ2=$_POST['onlineQ2'];
        $onlineQ3=$_POST['onlineQ3'];
        $onlineQ4=$_POST['onlineQ4'];
        $onlineQ4text=$_POST['onlineQ4text']; 
        $onlineQ5=$_POST['onlineQ5'];
        $onlineQ5text=$_POST['onlineQ5text'];  
        $onlineQ6=$_POST['onlineQ6'];
        $onlineQ7=$_POST['onlineQ7'];
        $onlineQ8=$_POST['onlineQ8'];
        $onlineQ9=$_POST['onlineQ9'];   
        $onlineQ9text=$_POST['onlineQ9text']; 
        $onlineQ10=$_POST['onlineQ10'];
        $onlineQ11=$_POST['onlineQ11'];
        $nameonline=$_POST['name'];
        $vornameonline=$_POST['vorname'];
        $unternehmensonline=$_POST['unternehmens'];
        $Telefononline=$_POST['Telefon'];
        $Emailonline=$_POST['Email'];
        $adresseonline=$_POST['adresse'];
        
       
 

$mpdf=new \Mpdf\Mpdf();


//create pdf
$data='';
$data .=  '<h1 style="text-align:center">' .$json['Online123']. '</h1>' .'<br/>' ;
$data .=  '<h3>1)' .$json['onlineQ1']. '</h3>' ;

if($onlineQ1text == ""){
    $data .=   $json[$onlineQ1] ; 
    } 
    else{
        $data .=   $onlineQ1text ;  
    }

$data .=  '<h3>2) ' .$json['onlineQ2']. '</h3>' ;
$data .=   $onlineQ2 ; 
$data .=  '<h3>3) ' .$json['onlineQ3']. '</h3>' ;
$data .=   $json[$onlineQ3] ; 

$data .=  '<h3>4) ' .$json['onlineQ4']. '</h3>' ;
if($onlineQ4text == ""){
    $data .=   $json[$onlineQ4] ; 
    } 
    else{
      $data .=   $onlineQ4text ; 
    }

$data .=  '<h3>5) ' .$json['onlineQ5']. '</h3>' ;
if($onlineQ5text == ""){
    $data .=   $json[$onlineQ5] ; 
    } 
    else{
        $data .=   $onlineQ5text ;  
    }



$data .=  '<h3>6) ' .$json['onlineQ6']. '</h3>' ;
$data .=   $json[$onlineQ6] ; 
$data .=  '<h3>7) ' .$json['onlineQ7']. '</h3>' ;
$data .=   $json[$onlineQ7] ; 
$data .=  '<h3>8) ' .$json['onlineQ8']. '</h3>' ;
$data .=   $json[$onlineQ8] ; 

$data .=  '<h3>9) ' .$json['onlineQ9']. '</h3>' ;
if($onlineQ9text == ""){
    $data .=   $json[$onlineQ9] ; 
    } 
    else{
        $data .=   $onlineQ9text ; 
    }

$data .=  '<h3>10)' .$json['onlineQ10']. '</h3>' ;
$data .=   $json[$onlineQ10] ; 
$data .=  '<h3>11)' .$json['onlineQ11']. '</h3>' ;
$data .=   $json[$onlineQ11] ; 

$data .= '<br/><br/> <br/> <br/> <br/>'; 
$data .=  '<h3>12) ' .$json['globalQ12']. '</h3>' ;
$data .=   '<b>' .$json['name']. '</b>'. $nameonline. '<br/>' ;
$data .=   '<b>' .$json['vorname']. '</b>'. $vornameonline. '<br/>' ;
$data .=   '<b>' .$json['NomCompagnie']. '</b>'. $unternehmensonline. '<br/>' ;
$data .=   '<b>' .$json['telefon']. '</b>'. $Telefononline. '<br/>' ;
$data .=   '<b>' .$json['email']. '</b>'. $Emailonline. '<br/>' ;
$data .=   '<b>' .$json['adresse']. '</b>'. $adresseonline. '<br/>' ;




$mpdf->WriteHTML($data);
$pdf=$mpdf->Output('','S');




//mail
 
$enquirydata =
[
 /*  $json['HomePage'],
  'homeQ1' => $homeQ1 */
];

//echo $recipicient;
sendEmail($pdf,$enquirydata);

function sendEmail($pdf,$enquirydata){

    $Email=$_POST['Email'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
       // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.ionos.de';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'contact@kam-webagentur.fr';                     // SMTP username
        $mail->Password   = 'kam123KAM@';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('contact@kam-webagentur.fr', 'kam-webgentur');
        $mail->addAddress('contact@kam-webagentur.fr', 'recipicient');     // Add a recipient
        $mail->addAddress($Email);               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        // Attachments
        $mail->addStringAttachment($pdf,('devis.pdf'));
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'KWA Devis';
        $mail->Body    = 'This is the PDF for your devis</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
       
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



}




?>