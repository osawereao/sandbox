<form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
	<input type="hidden" name="public_key" value="FLWPUBK_TEST-SANDBOXDEMOKEY-X" />
	<input type="hidden" name="customer[email]" value="jessepinkman@walterwhite.org" />
	<input type="hidden" name="customer[phone_number]" value="0900192039940" />
	<input type="hidden" name="customer[name]" value="Jesse Pinkman" />
	<input type="hidden" name="tx_ref" value="bitethtx-019203" />
	<input type="hidden" name="amount" value="3400" />
	<input type="hidden" name="currency" value="NGN" />
	<input type="hidden" name="meta[token]" value="54" />
	<input type="hidden" name="redirect_url" value="https://demoredirect.localhost.me/" />
	
	<button type="submit">CHECKOUT</button> 
</form>