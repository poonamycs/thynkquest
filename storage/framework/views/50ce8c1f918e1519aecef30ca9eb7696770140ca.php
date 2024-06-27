<!DOCTYPE html>
<html>
<head>
	<title>New Password Email</title>
</head>
<body>
	<table>
		<tr><td>Dear <?php echo e($name); ?>!</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Your account has been successfully updated. <br>
		Your account information is as below with new password :</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Email: <?php echo e($email); ?></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>New Password: <?php echo e($password); ?></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thanks & Regards,</td></tr>
		<tr><td>ThnykQuest</td></tr>
	</table>
</body>
</html><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/emails/forgotpassword.blade.php ENDPATH**/ ?>