<?php

require_once( 'lib/woocommerce-api.php' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Document</title>
	<link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	
<?php
$options = array(
	'debug'           => true,
	'return_as_array' => false,
	'validate_url'    => false,
	'timeout'         => 30,
	'ssl_verify'      => false,
);

try {

	$client = new WC_API_Client( 'http://dealdig.cc', 'ck_4348e76bf4bd1313fd70357c97c08239a53ce67e', 'cs_c71a8ee482a44da383ba71bb69c7477bb71cd6b4', $options );


	// $consumer_key = 'ck_dd74c64f9b2e38a465a60be6f439f43dca88c361'; 
	// $consumer_secret = 'cs_1024fd6857d2269bbbdc32d9e39e8f291395a6ed'; 
	// $store_url = 'http://nocti.nocticlub.com'; 

	// // Initialize the class
	// $wc_api = new WC_API_Client( $consumer_key, $consumer_secret, $store_url , $options);
	// $orders = $wc_api->get_orders();

	// echo "<pre>";
	// print_r($orders);
	// echo "</pre>";

	// coupons
	//print_r( $client->coupons->get() );
	//print_r( $client->coupons->get( $coupon_id ) );
	//print_r( $client->coupons->get_by_code( 'coupon-code' ) );
	//print_r( $client->coupons->create( array( 'code' => 'test-coupon', 'type' => 'fixed_cart', 'amount' => 10 ) ) );
	//print_r( $client->coupons->update( $coupon_id, array( 'description' => 'new description' ) ) );
	//print_r( $client->coupons->delete( $coupon_id ) );
	//print_r( $client->coupons->get_count() );

	// custom
	//$client->custom->setup( 'webhooks', 'webhook' );
	//print_r( $client->custom->get( $params ) );

	// customers
	//print_r( $client->customers->get() );
	//print_r( $client->customers->get( $customer_id ) );
	//print_r( $client->customers->get_by_email( 'help@woothemes.com' ) );
	//print_r( $client->customers->create( array( 'email' => 'woothemes@mailinator.com' ) ) );
	//print_r( $client->customers->update( $customer_id, array( 'first_name' => 'John', 'last_name' => 'Galt' ) ) );
	//print_r( $client->customers->delete( $customer_id ) );
	// print_r( $client->customers->get_count( array( 'filter[limit]' => '-1' ) ) );
	//print_r( $client->customers->get_orders( $customer_id ) );
	//print_r( $client->customers->get_downloads( $customer_id ) );
	//$customer = $client->customers->get( $customer_id );
	// $customer->customer->last_name = 'New Last Name';
	//print_r( $client->customers->update( $customer_id, (array) $customer ) );

	// index
	// print_r($client->index->get());
	// print_r($client->orders->get());

	// orders
	// print_r( $client->orders->get());
	$results=json_decode(json_encode($client->orders->get()),true);
	// $results=json_encode($client->orders->get(),true);
	// echo $results;
	// print_r($results);
	echo "<div class='container'>";

	$rr=json_decode(json_encode($client->index->get()),true);
	echo "<br>";
	echo $rr["store"]["URL"];
	echo "<br>";
	print_r($rr["store"]["description"]);
	echo "<br>";
	echo "<a href='".$rr["store"]["URL"]."'>".$rr["store"]["name"]."</a>";


	echo "<table class='table table-hover'>";
	echo "<tr><th>产品名称</th><th>价格</th><th>状态</th><th>用户名</th></tr>";



	// print_r($results["orders"]);
	echo count($results);
	// echo sizeof($results);
	for ($x=0; $x<=count($results); $x++) {
	  	// echo "数字是：$x <br>";
	  	echo "<tr><td>";
		print_r($results["orders"]["$x"]["line_items"][0]["name"]);
		echo "</td><td>";
		print_r($results["orders"]["$x"]["subtotal"]);
		echo "</td><td>";
		print_r($results["orders"]["$x"]["status"]);
		echo "</td><td>";
		print_r($results["orders"]["$x"]["billing_address"]["first_name"]);
		echo "</td></tr>";
	}


	// echo "<tr><td>";
	// print_r($results["orders"][0]["line_items"][0]["name"]);
	// echo "</td><td>";
	// print_r($results["orders"][0]["subtotal"]);
	// echo "</td><td>";
	// print_r($results["orders"][0]["status"]);
	// echo "</td><td>";
	// print_r($results["orders"][0]["billing_address"]["first_name"]);
	// echo "</td></tr>";

	// print_r($results["orders"][0]["id"]);
	// print_r($results["orders"]);
	// echo "<br>";

	// echo "<tr><td>";
	// print_r($results["orders"][1]["line_items"][0]["name"]);
	// echo "</td><td>";
	// print_r($results["orders"][1]["subtotal"]);
	// echo "</td><td>";
	// print_r($results["orders"][1]["status"]);
	// echo "</td><td>";
	// print_r($results["orders"][1]["billing_address"]["first_name"]);
	// echo "</td></tr>";

	// echo "<br>";

	// echo "<tr><td>";
	// print_r($results["orders"][6]["line_items"][0]["name"]);
	// echo "</td><td>";
	// print_r($results["orders"][6]["subtotal"]);
	// echo "</td><td>";
	// print_r($results["orders"][6]["status"]);
	// echo "</td><td>";
	// print_r($results["orders"][6]["billing_address"]["first_name"]);
	// echo "</td></tr>";

	// echo "<br>";

	// echo "<tr><td>";
	// print_r($results["orders"][8]["line_items"][0]["name"]);
	// echo "</td><td>";
	// print_r($results["orders"][8]["subtotal"]);
	// echo "</td><td>";
	// print_r($results["orders"][8]["status"]);
	// echo "</td><td>";
	// print_r($results["orders"][8]["billing_address"]["first_name"]);
	// echo "</td></tr></table>";


	echo "</div>";


	// foreach ($results as $key => $value) {
	// 	echo "<tr><td>" .$value->orders. "</td><td>" .$value->subtotal. "</td></tr>";
	// }
	// echo "</table>";
	// print_r( $results.['orders'].['id']);
	//print_r( $client->orders->get( $order_id ) );
	//print_r( $client->orders->update_status( $order_id, 'pending' ) );

	// order notes
	//print_r( $client->order_notes->get( $order_id ) );
	//print_r( $client->order_notes->create( $order_id, array( 'note' => 'Some order note' ) ) );
	//print_r( $client->order_notes->update( $order_id, $note_id, array( 'note' => 'An updated order note' ) ) );
	//print_r( $client->order_notes->delete( $order_id, $note_id ) );

	// order refunds
	//print_r( $client->order_refunds->get( $order_id ) );
	//print_r( $client->order_refunds->get( $order_id, $refund_id ) );
	//print_r( $client->order_refunds->create( $order_id, array( 'amount' => 1.00, 'reason' => 'cancellation' ) ) );
	//print_r( $client->order_refunds->update( $order_id, $refund_id, array( 'reason' => 'who knows' ) ) );
	//print_r( $client->order_refunds->delete( $order_id, $refund_id ) );

	// products
	//print_r( $client->products->get() );
	//print_r( $client->products->get( $product_id ) );
	//print_r( $client->products->get( $variation_id ) );
	//print_r( $client->products->get_by_sku( 'a-product-sku' ) );
	//print_r( $client->products->create( array( 'title' => 'Test Product', 'type' => 'simple', 'regular_price' => '9.99', 'description' => 'test' ) ) );
	//print_r( $client->products->update( $product_id, array( 'title' => 'Yet another test product' ) ) );
	//print_r( $client->products->delete( $product_id, true ) );
	//print_r( $client->products->get_count() );
	//print_r( $client->products->get_count( array( 'type' => 'simple' ) ) );
	//print_r( $client->products->get_categories() );
	//print_r( $client->products->get_categories( $category_id ) );

	// reports
	//print_r( $client->reports->get() );
	//print_r( $client->reports->get_sales( array( 'filter[date_min]' => '2014-07-01' ) ) );
	//print_r( $client->reports->get_top_sellers( array( 'filter[date_min]' => '2014-07-01' ) ) );

	// webhooks
	//print_r( $client->webhooks->get() );
	//print_r( $client->webhooks->create( array( 'topic' => 'coupon.created', 'delivery_url' => 'http://requestb.in/' ) ) );
	//print_r( $client->webhooks->update( $webhook_id, array( 'secret' => 'some_secret' ) ) );
	//print_r( $client->webhooks->delete( $webhook_id ) );
	//print_r( $client->webhooks->get_count() );
	//print_r( $client->webhooks->get_deliveries( $webhook_id ) );
	//print_r( $client->webhooks->get_delivery( $webhook_id, $delivery_id );

	// trigger an error
	// print_r( $client->orders->get( 0 ) );

} catch ( WC_API_Client_Exception $e ) {

	echo $e->getMessage() . PHP_EOL;
	echo $e->getCode() . PHP_EOL;

	if ( $e instanceof WC_API_Client_HTTP_Exception ) {

		print_r( $e->get_request() );
		print_r( $e->get_response() );
	}
}

?>

</body>
</html>