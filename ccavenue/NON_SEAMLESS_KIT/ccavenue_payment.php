<html>
<head>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
        document.customerData.submit();
</script>
</head>
<body>
<?php
        if(isset($_GET['token']))
{
        $name               = $_GET['name'];
        $token              = $_GET['token'];
        $token1             = substr($token,6);
        $email              = $_GET['email'];
        $quantity           = (int)1;
        $currency           = $_GET['curr'];
        $fees               = $_GET['fees'];
        $server             = 'http://'.$_SERVER['SERVER_NAME'];
?>
    <form method="post" id="customerData" name="customerData" action="ccavRequestHandler.php">
        <input type="text" name="tid" id="tid" readonly />
        <input type="text" name="merchant_id" value="79450"/>
        <input type="text" name="order_id" value="<?php echo trim($token1); ?>"/>
        <input type="text" name="amount" value="<?php echo trim($fees); ?>"/>
        <input type="text" name="currency" value="<?php echo trim($currency); ?>"/>
        <input type="text" name="redirect_url" value="<?php echo $server.'/index.php?option=com_astrologin&view=quesconfirm&payment_success=true' ?>"/>
        <input type="text" name="cancel_url" value="<?php echo $server.'/index.php?option=com_astrologin&view=quesconfirm&payment_success=false' ?>"/>
        <input type="text" name="language" value="EN"/>
        <input type="text" name="billing_name" value="<?php echo trim($name); ?>"/>
	<input type="text" name="billing_email" value="<?php echo trim($email); ?>"/></td>
        <input type="submit" value="CheckOut" />
<?php
}
?>
</form>
	</body>
</html>


