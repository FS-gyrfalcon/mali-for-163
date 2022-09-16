这是一个基于PHPmailer的邮件发送模块，导入163邮箱可以实现邮件的发送功能
使用说明：
1.注册一个网易163邮箱
2.进入网页端->设置->POP3/SMTP/IMAP->开启服务->开启
3.妥善保存校验码
4.打开163.php，按照注释提升修改文件
5.将4个文件复制进服务器路径测试即可


文档说明：
  index.html:
  用于上传邮件信息。使用了ajax，以便在不刷新页面的情况下进行数据请求。
  
  163.php:
  用于与网易SMTP服务器的交互。
  
  class.phpmailer.php：
  PHPMailer提供的phpmailer类库。不需要更改。
  
  class.smtp.php:
  PHPMailer提供的SMTP类库。不需要更改。
  

—— —— OVER —— ——
