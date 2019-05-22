<?php

	include_once("fonoapi-v1.php");

	$apiKey = "bcc5791439f70a6abbee92b532264dc0e002703bcd59c1cd"; // get your token key here - https://fonoapi.freshpixl.com
	$fonoapi = fonoApi::init($apiKey);
		try {

			$res = $fonoapi::getDevice("iphone 6s"); // the device you need to get details here
			//print_r($res);
			//exit;

			foreach ($res as $mobile) {
				if (!empty($mobile->DeviceName)) 	echo "Device : ". $mobile->DeviceName . "<br>";
				if (!empty($mobile->Brand)) 		echo "Brand : ". $mobile->Brand . "<br>";
				if (!empty($mobile->cpu)) 			echo "Cpu : " . $mobile->cpu . "<br>";
				if (!empty($mobile->status)) 		echo "Status : " . $mobile->status . "<br>";
				if (!empty($mobile->dimensions)) 	echo "Dimensions : " . $mobile->dimensions . "<br>";
				if (!empty($mobile->_4g_bands)) 	echo "4g : " .$mobile->_4g_bands . "<br>";
			}

		} catch (Exception $e) {
			echo "ERROR : " . $e->getMessage();
		}

?>
