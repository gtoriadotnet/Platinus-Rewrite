<?php

/*

Platinus API

*/

namespace Platinus;

class API {
	function __construct() {
		if(isset($_SERVER["REQUEST_URI"]) && strpos($_SERVER["REQUEST_URI"],".php")){
			API::InvokeError(403, "Unauthorized");
		}
		if(http_response_code() == 404){
			API::InvokeError(403, "Unauthorized");
		}
	}
	
	function InvokeError($errorCode, $message) {
		$incident = md5(time()*8^42);
		$incidentRand = ["azrt4o", "30jg49k", "nigm4gd"];
		$incident = substr_replace($incident, $incidentRand[array_rand($incidentRand)], 15, 0);
		http_response_code($errorCode);
		header("Content-Type: application/json");
		exit(API::PrettyJSONEncode(["error"=>"$message", "incidentID"=>$incident]));
	}
	
	function RespondJSON($array, $shouldExit = true)
	{
		header("Content-Type: application/json");
		$json = API::PrettyJSONEncode($array);
		if($shouldExit){
			exit($json);
		}else{
			echo($json);
		}
	}
	
	function PrettyJSONEncode($array){
		return json_encode($array, JSON_PRETTY_PRINT);
	}
}

//EOF