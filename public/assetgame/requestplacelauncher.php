<?php

/*

Platinus PlaceLauncher

*/

/*
PlaceLauncher Status Key

0: "" (Retry for client, no string for MadStatus)
1: "A server is loading the game..." (Retry for client)
2: "The server is ready. Joining the game..."
3: "Joining games is temporarily disabled while we upgrade. Please try again soon." (Displayed by MadStatus but results in an error for the client)
4: "An error occurred. Please try again later." (Displayed by MadStatus but results in an error for the client)
5: "The game you requested has ended." (Displayed by MadStatus but results in an error for the client)
6: "The game you requested is currently full. Waiting for an opening..."
7: "Roblox is updating. Please wait..." (Used by MadStatus)
8: "Requesting a server" (Displayed before a request is sent to PlaceLauncher.ashx)

            // Place join status results
            // Waiting = 0,
            // Loading = 1,
            // Joining = 2,
            // Disabled = 3,
            // Error = 4,
            // GameEnded = 5,
            // GameFull = 6
            // UserLeft = 10
            // Restricted = 11
*/

/*
Login/Negotiate.ashx
RBXAuthenticationNegotiation: baseurl
?suggest=TICKETHERE
return set-cookie: .ROBLOSECURITY
*/

require $_SERVER["DOCUMENT_ROOT"] . "/../../WebAssemblies/loader.php";

$page = new Platinus\API();

$page->RespondJSON(array("status"=>1, "joinScriptUrl"=>"", "authenticationUrl"=>"", "authenticationTicket"=>""));

//EOF