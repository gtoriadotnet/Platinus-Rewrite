<?php

/*

Platinus API

*/

namespace Platinus;

class API {
	function __construct() {
		if(http_response_code() == 404){
			API::InvokeError(403, "Unauthorized");
		}
	}
	
	function InvokeError($errorCode, $message) {
		http_response_code($errorCode);
		header("Content-Type: application/json");
		exit(API::PrettyJSONEncode(["error"=>"$message"]));
	}
	
	function PrettyJSONEncode($array){
		return json_encode($array, JSON_PRETTY_PRINT);
	}
}

?>