<!DOCTYPE html>
<html>
<head>
	<title>Register Email</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<table class="table">
		<tr><td>Hello <?php echo e($name); ?>!</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Please click on below button to activate your account :</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><a href="<?php echo e(url('/confirm/'.$code)); ?>"><button class="btn btn-primary">Verify Email Address</button></a></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>If you did not create an account, no further action is required.</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thanks & Regards,</td></tr>
		<tr><td>ThynkQuest</td></tr>
	</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\thynkquest\resources\views/emails/confirmation.blade.php ENDPATH**/ ?>