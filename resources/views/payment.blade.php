<!DOCTYPE html>
<html lang="en">

	<head>
		<title>PayWay Checkout Sample</title>

		<!— Make a copy of this code to paste into your site—>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="author" content="PayWay">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<!— end —>
	</head>

	<body>
		<!— Popup Checkout Form —>
			<div id="aba_main_modal" class="aba-modal">
				<!— Modal content —>
				<div class="aba-modal-content">

					<!-- Include PHP class -->
					<?php
						require_once 'PayWayApiCheckout.php';
						$transactionId = '000005';
						$amount = '2.00';
						$firstName = '';
						$lastName = 'Bunrath';
						$phone = '016680644';
						$email = 'chheun.bunrath@ababank.com';
					?>

					<form method="POST" target="aba_webservice" action="<?php echo PayWayApiCheckout::getApiUrl(); ?>" id="aba_merchant_request">
						<input type="hidden" name="hash" value="<?php echo PayWayApiCheckout::getHash($transactionId, $amount); ?>" id="hash"/>
						<input type="hidden" name="tran_id" value="<?php echo $transactionId; ?>" id="tran_id"/>
						<input type="hidden" name="amount" value="<?php echo $amount; ?>" id="amount"/>
						<input type="hidden" name="firstname" value="<?php echo $firstName; ?>"/>
						<input type="hidden" name="lastname" value="<?php echo $lastName; ?>"/>
						<input type="hidden" name="phone" value="<?php echo $phone; ?>"/>
						<input type="hidden" name="email" value="<?php echo $email; ?>"/>
					</form>
				</div>
				<!— end Modal content—>
			</div>
		<!— End Popup Checkout Form —>

		<!— Page Content —>
		<div class="container" style="margin-top: 75px;margin: 0 auto;">
			<div style="width: 200px;margin: 0 auto;">
				<h2>TOTAL: $2.00</h2>
				<input type="button" id="checkout_button" value="Checkout Now">
			</div>
		</div>
		<!— End Page Content —>

		<!— Make a copy this javaScript to paste into your site—>
		<!— Note: these javaScript files are using for only integration testing—>
		<link rel="stylesheet" href="https://payway-dev.ababank.com/checkout-popup.html?file=css"/>
		<script src="https://payway-dev.ababank.com/checkout-popup.html?file=js"></script>

		<!— These javaScript files are using for only production —>
		<!--<link rel="stylesheet" href="https://payway.ababank.com/checkout-popup.html?file=css"/>
		<script src="https://payway.ababank.com/checkout-popup.html?file=js"></script> -->

		<script>
			$(document).ready(function () {
				$('#myBtn').click(function () {
					AbaPayway.checkout();
				});
			});
		</script>
		<!— End —>
	</body>
</html>