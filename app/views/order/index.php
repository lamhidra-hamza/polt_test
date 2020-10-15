<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
<h1>Pick UP address: <?php echo $data['pickup'];?></h1>
<h1>Destination: <?php echo $data['destination'];?></h1>
<h1>Amount: <?php echo $data['amount'];?></h1>
<h1>Currensy: <?php echo $data['currensy'];?></h1>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AcPGczoWHMd2qb1LPVPcP4cB5ZMP8MJeD0DnNUY7YhvvfR2b9LzyWZc1bpJwGneCYzU10Xg3MZjIzUBC"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
  <div id="paypal-button-container"></div>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
</script>
</body>
</html>