<!DOCTYPE html>
<html>
<head>
	<title> Subscription Purchase</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<table class="table">
		<tr><td>Hello <?php echo e($name); ?>!</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thank you for choosing our services. We’re thrilled to have you on board.</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>You Have Ordered <?php echo e(getpaperName($subs->paper_id)); ?></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Total Price is <?php echo e($price); ?> £</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>You can access your subscription details on your dashboard. If you have any questions, please connect us at: info@thynkquest.co.uk.</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Footnote: All subscriptions are non-refundable and will be renewed automatically.</td></tr>
		<tr><td>If you wish to unsubscribe, please reach us at: support@thynkquest.co.uk.</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thanks & Regards,</td></tr>
		<tr><td>ThynkQuest</td></tr>
	</table>
</body>
</html><?php /**PATH /home/tu969uxjwrf1/public_html/resources/views/emails/purchasePaper.blade.php ENDPATH**/ ?>