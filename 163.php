<?PHP

$data['name'] = $_POST['name']; 
$data['email'] = $_POST['email']; 
$data['suggestion'] = $_POST['suggestion']; 

require_once("class.phpmailer.php"); 
require_once("class.smtp.php");

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->Host = 'smtp.163.com';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->CharSet = 'UTF-8';

$mail->FromName = $data['name'] ;




$mail->Username ='XXXXXXXXXX@163.com';//填写发件地址
$mail->Password = 'XXXXXXXXXXX';//输入授权码
$mail->From = 'XXXXXXXXXXXXX@163.com';//填写发件人
$mail->isHTML(true); 
$mail->addAddress('XXXXXXXXXXXX@qq.com');//填写收件人
$mail->Subject = 'XXXXXXXXXX';//填写邮件标题
$mail->Body = "<div id ='client_email'>XXXXXXXXXX".$data['email']."</div><p>".$data['suggestion']."</p>";//填写邮件具体内容





$status = $mail->send();

if($status) {
 echo 'send successfully';
}else{
 echo 'send error  '.$mail->ErrorInfo;
}
?>
