<?php
//flutterwave payment integration
?>
<form>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  <button type="button" onClick="makePayment()">Pay Now</button>
  <button type="button" onClick="BuyVoucher()">BuyVoucher</button>

</form>

<script>
  function makePayment() {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
      tx_ref: "RX1",
      amount: 1000,
      currency: "NGN",
      country: "NG",
      payment_options: " ",
      redirect_url: // specified redirect URL
        "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "cornelius@gmail.com",
        phone_number: "08102909304",
        name: "Flutterwave Developers",
      },
      callback: function (data) {
        console.log(data);
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "My store",
        description: "Payment for items in cart",
        logo: "https://assets.piedpiper.com/logo.png",
      },
    });
  }





  function BuyVoucher(){



    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
      tx_ref: "RX1",
      amount: 1000,
      currency: "NGN",
      country: "NG",
      payment_options: " ",
      redirect_url: // specified redirect URL
        "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "cornelius@gmail.com",
        phone_number: "08102909304",
        name: "Flutterwave Developers",
      },
      callback: function (data) {
        console.log(data);
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "CATVote2021",
        description: "Payment for Voucher",
        logo: "https://www.wowcatholic.com/ao/grafix/favicon.png",
      },
    });
  }
</script>