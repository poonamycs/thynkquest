<html>
	<head>
		<title>Welcome Email</title>
	</head>
	<body>
		<table>
			<tr><td><img src="<?php echo e(asset('../images/frontend_images/logo/logo.png')); ?>"></td></tr>
			<tr><td>Hello <?php echo e($name); ?>!</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Your account has been successfully activated.</td></tr>
			<tr><td>&nbsp;</td></tr>	
			<tr><td>Your account information is as below:</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Email: <?php echo e($email); ?></td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Password: ***** (as chosen by you)</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Regards,<br> <b>ThynkQuest</b><br> <b>Phone: </b>(+91) 8668656064<br> <b>Email :</b> example@gmail.com</td></tr>
			<tr><td>&nbsp;</td></tr>
	</body>
</html><?php /**PATH D:\xampp\htdocs\ycs-projects\thynkquest\resources\views/emails/welcome.blade.php ENDPATH**/ ?>