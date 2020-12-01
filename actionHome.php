<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use PHPMailer\PHPMailer\SMTP; 


require_once __DIR__ . '/vendor/autoload.php';
$Francais=file_get_contents("./i18n/de.json");
$json= json_decode($Francais,true);

/* if   ( isset($_POST['homeQ1']) ||    isset($_POST['homeQ2']) ||    isset($_POST['homeQ3']) ||    isset($_POST['homeQ4']) ||    isset($_POST['homeQ4text'])
||    isset($_POST['homeQ5']) ||    isset($_POST['homeQ6']) ||    isset($_POST['homeQ7'])  ||  isset($_POST['homeQ9'])  || isset($_POST['homeQ10'])
||    isset($_POST['homeQ11']) ||    isset($_POST['name']) ||    isset($_POST['vorname']) ||    isset($_POST['unternehmens'])   
||    isset($_POST['Telefon'])   ||    isset($_POST['adresse'])    ||    isset($_POST['Email']) ) 
{ */
  
        $homeQ1=$_POST['homeQ1'];
        $homeQ2=$_POST['homeQ2'];
        $homeQ3=$_POST['homeQ3'];

        
      
        
       
        
       $homeQ4=$_POST['homeQ4'];
       $homeQ4text=$_POST['homeQ4text']; 

       $homeQ5=$_POST['homeQ5'];
       $homeQ6=$_POST['homeQ6'];
       $homeQ7=$_POST['homeQ7'];
       $homeQ9=$_POST['homeQ9'];
       $homeQ8text=$_POST['homeQ8text'];
       $homeQ10=$_POST['homeQ10'];
       $homeQ11=$_POST['homeQ11'];
       $name=$_POST['name'];
       $vorname=$_POST['vorname'];
       $unternehmens=$_POST['unternehmens'];
       $Telefon=$_POST['Telefon'];
       $Email=$_POST['Email'];
       $adresse=$_POST['adresse'];
     


   

   
      
          
          if (isset($_POST['homeQ8R1']))
          {
            
            $homeQ8R1=$json[$_POST['homeQ8R1']] ;
          }else{
            $homeQ8R1="";
          }
          
 
          if (isset($_POST['homeQ8R2']))
          {
            $homeQ8R2=$json[$_POST['homeQ8R2']] ;
          }else{
            $homeQ8R2="";
          }
          
          
          
          if (isset($_POST['homeQ8R3']))
          {
            
            $homeQ8R3=$json[$_POST['homeQ8R3']] ;
          }else{
            $homeQ8R3="";
          }
          
 
          if (isset($_POST['homeQ8R4']))
          {
            $homeQ8R4=$json[$_POST['homeQ8R4']] ;
          }else{
            $homeQ8R4="";
          }
          
          
          
          if (isset($_POST['homeQ8R5']))
          {
            
            $homeQ8R5=$json[$_POST['homeQ8R5']] ;
          }else{
            $homeQ8R5="";
          }
          
 
          if (isset($_POST['homeQ8R6']))
          {
            $homeQ8R6=$json[$_POST['homeQ8R6']] ;
          }else{
            $homeQ8R6="";
          }
          
         
         
          if (isset($_POST['homeQ8R7']))
          {
            
            $homeQ8R7=$json[$_POST['homeQ8R7']] ;
          }else{
            $homeQ8R7="";
          }
          
 
          if (isset($_POST['homeQ8R8']))
          {
            $homeQ8R8=$json[$_POST['homeQ8R8']] ;
          }else{
            $homeQ8R8="";
          }
          
         
         
          if (isset($_POST['homeQ8R9']))
          {
            
            $homeQ8R9=$json[$_POST['homeQ8R9']] ;
          }else{
            $homeQ8R9="";
          }
          
 
          if (isset($_POST['homeQ8R10']))
          {
            $homeQ8R10=$json[$_POST['homeQ8R10']] ;
          }else{
            $homeQ8R10="";
          }
          
         

$mpdf=new \Mpdf\Mpdf();

$data='';
$data .=  '<h1 style="text-align:center">' .$json['HomePage']. '</h1>' .'<br/>' ;
$data .=  '<h3>1)' .$json['homeQ1']. '</h3>' ;
$data .=   $json[$homeQ1] ; 

$data .=  '<h3>2)' .$json['homeQ2']. '</h3>' ;
$data .=   $homeQ2 ; 

$data .=  '<h3>3)' .$json['homeQ3']. '</h3>' ;
$data .=   $json[$homeQ3] ; 

$data .=  '<h3>4)' .$json['homeQ4']. '</h3>' ;
if($homeQ4text == ""){
  $data .=   $json[$homeQ4] ; 
}else{
  $data .=   $homeQ4text ; 
}

$data .=  '<h3>5)' .$json['homeQ5']. '</h3>' ;
$data .=   $json[$homeQ5] ; 

$data .=  '<h3>6)' .$json['homeQ6']. '</h3>' ;
$data .=   $json[$homeQ6] ; 

$data .=  '<h3>7)' .$json['homeQ7']. '</h3>' ;
$data .=   $json[$homeQ7] ; 

$data .=  '<h3>8)' .$json['homeQ8']. '</h3>' ;
$data .=  "<style>";
$data .=  "
table{
  border-collapse:collapse;
  border: 1px solid black;
}
td, th {
  border: 2px solid black;          
  text-align: center;
  padding: 8px;
  
}
";
$data .=  "</style>";
$data .=  "<table><tr><th>";
$data .=   'Funktionalität';
$data .=  '</th><th>';
$data .=   'enthalten';
$data .=  '</th></tr>';

$data .=  '<tr><td>';
if($homeQ8R1 == ""){
  $data .= 'Recherchen';
  $data .=  '</td><td>';
  $data .= 'Nein';
}else{
  $data .=   $homeQ8R1;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R2 == ""){
  $data .= 'kontakt formular';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R2;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R3 == ""){
  $data .= 'mehrsprachig';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R3;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R4 == ""){
  $data .= 'Social plugins';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R4;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R5 == ""){
  $data .= 'newsletter';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R5;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R6 == ""){
  $data .= 'map';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R6;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R7 == ""){
  $data .= 'mediagalerie';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R7;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R8 == ""){
  $data .= 'unser team';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R8;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R9 == ""){
  $data .= 'über uns';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R9;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';

$data .=  '<tr><td>';
if($homeQ8R10 == ""){
  $data .= 'events';
  $data .=  '</td><td>';
  $data .= 'Nein';
  
}else{
  $data .=   $homeQ8R10;
  $data .=  '</td><td>';
  $data .= 'Ja';
}
$data .=  '</td></tr>';
$data .=  '</table>';
$data .=  '</br/></br/>';
if($homeQ8text != ""){
  $data .= 'Andere : ';
  $data .= $homeQ8text;
}


$data .=  '<h3>9)' .$json['homeQ9']. '</h3>' ;
$data .=   $json[$homeQ9] ; 

$data .=  '<h3>10)' .$json['homeQ10']. '</h3>' ;
$data .=   $homeQ10 ; 

$data .=  '<h3>11)' .$json['homeQ11']. '</h3>' ;
$data .=   $json[$homeQ11] ; 

$data .=  '<h3>12)' .$json['globalQ12']. '</h3>' ;

$data .=   '<b>' .$json['name']. '</b>'. $name. '<br/>' ;
$data .=   '<b>' .$json['vorname']. '</b>'. $vorname. '<br/>' ;
$data .=   '<b>' .$json['NomCompagnie']. '</b>'. $unternehmens. '<br/>' ;
$data .=   '<b>' .$json['telefon']. '</b>'. $Telefon. '<br/>' ;
$data .=   '<b>' .$json['email']. '</b>'. $Email. '<br/>' ;
$data .=   '<b>' .$json['adresse']. '</b>'. $adresse. '<br/>' ;


$mpdf->WriteHTML($data);
$pdf=$mpdf->Output('','S');


//mail

$enquirydata =
[
 /*  $json['HomePage'],
  'homeQ1' => $homeQ1 */
];

  /* 'First Name' => $fname,
'Last Name' => $lname,
'Email' => $fname,
'phone' => $fname,
'Message'=>$message,
'$recipicient' =>$recipicient
]; */
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