<?php
require("lib/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();					// 启用SMTP
$mail->Host = "smtp1.example.com";			//SMTP服务器
$mail->SMTPAuth = true;					//开启SMTP认证
$mail->Username = "name@example.com";			// SMTP用户名
$mail->Password = "password";				// SMTP密码

$mail->From = $_POST["mail"];			//发件人地址
$mail->FromName = $_POST["name"];				//发件人
$mail->AddAddress("shiy5@rpi.edu");	//添加收件人
$mail->AddAddress("bjxxshyh55@126.com");
$mail->AddReplyTo("info@example.com", "Information");	//回复地址
$mail->WordWrap = 50;					//设置每行字符长度
/** 附件设置
$mail->AddAttachment("/var/tmp/file.tar.gz");		// 添加附件
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");	// 添加附件,并指定名称
*/
$mail->IsHTML(true);					// 是否HTML格式邮件

$mail->Subject = $_POST["subject"];			//邮件主题
$mail->Body    = $_POST["message"];		//邮件内容
$mail->AltBody = $_POST["message"];	//邮件正文不支持HTML的备用显示

?>

<?php if(!$mail->Send()): ?>
   <p>Message could not be sent. </p>
   <p>Mailer Error: <?php echo $mail->ErrorInfo; ?></p>
<?php else: ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Personal Website Yuhan Shi</title>
            <link rel="stylesheet" type="text/css" href="css/base.css">
            <meta name="authors" content="WANG Yihe" />        
            <meta name="viewport" content="width=device-width,initial-scale=1" />
            <meta name="viewport" content="width=device-length,initial-scale=1" />
            <meta http-equiv="refresh" content="1;url=contact.php" />
        </head>
        <body>
            <div class="main_projet">
                <div id="projet">
                Your message has been sent.
                </div>
            </div>
        </body>
    </html>
<?php endif ?>