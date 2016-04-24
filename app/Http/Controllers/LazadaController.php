<?php namespace App\Http\Controllers;

use DateTime;
use Input;

class LazadaController extends Controller {

	public function getIndex() {
		date_default_timezone_set("UTC");
		$now = new DateTime();
		$parameters = array(
		    'UserID' => 'tung.nt@peep.vn',
		    'Version' => '1.0',
		    'Format' => 'JSON',
		    'Timestamp' => $now->format(DateTime::ISO8601)
		);
		$parameters['Action'] = "GetProducts";
		$parameters['Limit'] = "12";
		$parameters['Offset'] = "0";
		ksort($parameters);
		$encoded = array();
		foreach ($parameters as $name => $value) {
		    $encoded[] = rawurlencode($name) . '=' . rawurlencode($value);
		}
		$concatenated = implode('&', $encoded);
		$api_key = '82d6501952d5c9e8ce0b229c294d7925523a1175';
		$parameters['Signature'] = rawurlencode(hash_hmac('sha256', $concatenated, $api_key, false));

		$url = "https://sellercenter-api.lazada.vn/";

		$queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$data = curl_exec($ch);
		curl_close($ch);
		//return response()->json(json_decode($data)->SuccessResponse->Body->Products->Product);
		return view('lazada')
			->withProducts(json_decode($data)->SuccessResponse->Body->Products->Product);

	}

	public function postIncreaseQty() {
		if(!Input::has('sku') || !Input::has('qty'))
			return response()->json(['message' => 'Sai tham số']);

		$sku = Input::get('sku');
		$qty = Input::get('qty');

		date_default_timezone_set("UTC");
		$now = new DateTime();
		$parameters = array(
		    'UserID' => 'tung.nt@peep.vn',
		    'Version' => '1.0',
		    'Format' => 'JSON',
		    'Timestamp' => $now->format(DateTime::ISO8601)
		);
		$parameters['Action'] = "ProductUpdate";

		$xml = '<?xml version="1.0" encoding="UTF-8" ?>
				<Request>
				  <Product>
				    <SellerSku>'.$sku.'</SellerSku>
				    <Quantity>'.$qty.'</Quantity>
				  </Product>
				</Request>';
		ksort($parameters);
		$encoded = array();
		foreach ($parameters as $name => $value) {
		    $encoded[] = rawurlencode($name) . '=' . rawurlencode($value);
		}
		$concatenated = implode('&', $encoded);
		$api_key = '82d6501952d5c9e8ce0b229c294d7925523a1175';
		$parameters['Signature'] = rawurlencode(hash_hmac('sha256', $concatenated, $api_key, false));

		$url = "https://sellercenter-api.lazada.vn/";

		$queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$data = curl_exec($ch);
		curl_close($ch);

		return response()->json([
			'message'	=> $data
		]);
	}
}