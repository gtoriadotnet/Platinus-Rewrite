<?php

/*

Platinus Joinscript

*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../WebAssemblies/loader.php";

$ip="Unknown";

$date=date(DATE_ATOM, time());

if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])){
	if($_SERVER["REMOTE_ADDR"] != $_SERVER["HTTP_CF_CONNECTING_IP"]){
		$ip=$_SERVER["HTTP_CF_CONNECTING_IP"];
	}else{
		$ip=$_SERVER["REMOTE_ADDR"];
	}
}else{
	$ip=$_SERVER["REMOTE_ADDR"];
}

$page = new Platinus\API();

ob_start();

$page->RespondJSON(array(
	"ClientPort"=>0,
	"MachineAddress"=>"127.0.0.1",
	"ServerPort"=>53640,
	"PingUrl"=>"",
	"PingInterval"=>120,
	"UserName"=>"Player",
	"SeleniumTestMode"=>false,
	"UserId"=>420,
	"SuperSafeChat"=>true,
	"CharacterAppearance"=>"https://api.roblox.com/v1.1/avatar-fetch/?placeId=0&userId=0",
	"ClientTicket"=>"8/16/2020 10:42:46 AM;T6CPtZzvEi0ONNqrt88kiMTZzp+0PB0mMcoDjzRptMGADjMsgiPB3Xq13LwClAoyaagj/ZRqPqWEC+hvxXDCP1qK/9Rkd7cbgrYup1BmR9UUIrmwhByOJmgM63GhsrzANu78yfwraetaz5G8J6EB+XgpSuf5gutLGXnMsWvJML2vX9axrCXSS6TKolB7pmBx2PFFMOWqx1/3enDZEJMfPO2X3lu0mhxoBrCGyD6qtVuIQIKpscJ39YJanJBOdXaX4+BNB2rKa+70BaJtZiV+uytl05HaasYTVw7hQIjvsUxmDaHXT/z/8HfLL8eZ/z1aiRrClHYP1b98CrX4PAp9qA==;AVSMGbLFaspKZ2+g8C+mmae9RjoqeVKOD13BbLY84gHF4fVph9mwcbxMHFO2sXWn0QsEy4JIBQojXyk+g+5bpbnjI6tNaw4sMytv2i+Rmd6osTpAJ500IujCwarjE7qUJY7UkNP10mT0C1kzJMtkzT+juaLTcNs774zB9v6PKYCasmFy9xQrpxpIeIKHB2N/hg4scTuYCuw8uvczq+od4YoAW3JdlfF27OZn/1VOMpXUWR7FQ8f/i6ZOIyqyNgQVowU1B2fQ8UjkeTySq4BTPIqR2zqJzCIT1OfG1jepkTBXNzZAQ+mZenmJyONXiGgZrKfJuHui06GT2JtwVmTNNg==;4",
	"GameId"=>"00000000-0000-0000-0000-000000000000",
	"PlaceId"=>1,
	"VendorId"=>0,
	"ScreenShotInfo"=>"",
	"VideoInfo"=>"<?xml version=\"1.0\"?><entry xmlns=\"http://www.w3.org/2005/Atom\" xmlns:media=\"http://search.yahoo.com/mrss/\" xmlns:yt=\"http://gdata.youtube.com/schemas/2007\"><media:group><media:title type=\"plain\"><![CDATA[Platinus Place]]></media:title><media:description type=\"plain\"><![CDATA[ For more games visit http://www.platinus2016.ga]]></media:description><media:category scheme=\"http://gdata.youtube.com/schemas/2007/categories.cat\">Games</media:category><media:keywords>Platinus, 2016, ROBLOX, video, free game, online virtual world</media:keywords></media:group></entry>",
	"BaseUrl"=>"http://assetgame.platinus.local/",
	"ChatStyle"=>"ClassicAndBubble",
	"CreatorId"=>0,
	"CreatorTypeEnum"=>"User",
	"MembershipType"=>"None",
	"AccountAge"=>0,
	"CookieStoreFirstTimePlayKey"=>"rbx_evt_ftp",
	"CookieStoreFiveMinutePlayKey"=>"rbx_evt_fmp",
	"CookieStoreEnabled"=>true,
	"IsUnknownOrUnder13"=>true,
	"GenerateTeleportJoin"=>false,
	"SessionId"=>strtolower(sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535))) . "|00000000-0000-0000-0000-000000000000|0|$ip|8|$date|0|null|null",
	"DataCenterId"=>0,
	"UniverseId"=>0,
	"BrowserTrackerId"=>0,
	"FollowUserId"=>0
), false);

$data = "\r\n".ob_get_clean();

$signature;
$key = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/../../key.pem");
openssl_sign($data, $signature, $key, OPENSSL_ALGO_SHA1);
echo sprintf("%s%%%s%%%s", "--rbxsig", base64_encode($signature), $data);

//EOF