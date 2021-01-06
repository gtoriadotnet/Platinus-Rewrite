<?php

/*

Platinus PlaceLauncher

http://assetgame.roblox.com:80/Game/PlaceLauncher.ashx?request=RequestGame&placeId=163865146
{"jobId":"2ea2b52a-1784-4eed-a6f3-7375b13f1a11","status":2,"joinScriptUrl":"http://assetgame.roblox.com/Game/Join.ashx?ticketVersion=2&ticket=%7b%22UserId%22%3a-405225060%2c%22UserName%22%3a%22Guest+5060%22%2c%22CharacterFetchUrl%22%3a%22http%3a%2f%2fassetgame.roblox.com%2fAsset%2fCharacterFetch.ashx%3fuserId%3d15560089%26placeId%3d163865146%22%2c%22GameId%22%3a%222ea2b52a-1784-4eed-a6f3-7375b13f1a11%22%2c%22PlaceId%22%3a163865146%2c%22UniverseId%22%3a78260373%2c%22IsTeleport%22%3afalse%2c%22FollowUserId%22%3anull%2c%22TimeStamp%22%3a%228%2f9%2f2016+9%3a20%3a24+PM%22%2c%22CharacterAppearanceId%22%3a15560089%7d&signature=kCFfFOyyXIXMh%2fVxfrZUM5IxiXfGzmo%2bW9zlyM65GsN%2fgjHVXs2xbrx83NpwbAnrtOQcclxlhfJUPZRZJGkOnJE4GzHUKyiGpoz2nznhegR%2f9IzYc9fW4W%2fOVvmg0Ft61IPrFGBqqvhx7WUrGN1lNz%2f5ajn176RGky4zUGuO1WI%3d&connectionInfo=yc2znFjlRjgIpp1jZf1OLN8p7aOGYPvYpTSg%2bj1mHixmx5dy2qrtQ%2bPd0JYfeBU2i5oew%2bvcy7UHWkzxOnbvuEt1ezw%3d&browserTrackerId=0","authenticationUrl":"https://www.roblox.com/Login/Negotiate.ashx","authenticationTicket":"Guest:-405225060"}

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

$page->RespondJSON(array("jobId"=>"2ea2b52a-1784-4eed-a6f3-7375b13f1a11", "status"=>1, "joinScriptUrl"=>"http://assetgame.platinus.local/Game/Join.ashx?ticketVersion=2&ticket=%7b%22UserId%22%3a-405225060%2c%22UserName%22%3a%22Guest+5060%22%2c%22CharacterFetchUrl%22%3a%22http%3a%2f%2fassetgame.roblox.com%2fAsset%2fCharacterFetch.ashx%3fuserId%3d15560089%26placeId%3d163865146%22%2c%22GameId%22%3a%222ea2b52a-1784-4eed-a6f3-7375b13f1a11%22%2c%22PlaceId%22%3a163865146%2c%22UniverseId%22%3a78260373%2c%22IsTeleport%22%3afalse%2c%22FollowUserId%22%3anull%2c%22TimeStamp%22%3a%228%2f9%2f2016+9%3a20%3a24+PM%22%2c%22CharacterAppearanceId%22%3a15560089%7d&signature=kCFfFOyyXIXMh%2fVxfrZUM5IxiXfGzmo%2bW9zlyM65GsN%2fgjHVXs2xbrx83NpwbAnrtOQcclxlhfJUPZRZJGkOnJE4GzHUKyiGpoz2nznhegR%2f9IzYc9fW4W%2fOVvmg0Ft61IPrFGBqqvhx7WUrGN1lNz%2f5ajn176RGky4zUGuO1WI%3d&connectionInfo=yc2znFjlRjgIpp1jZf1OLN8p7aOGYPvYpTSg%2bj1mHixmx5dy2qrtQ%2bPd0JYfeBU2i5oew%2bvcy7UHWkzxOnbvuEt1ezw%3d&browserTrackerId=0", "authenticationUrl"=>"http://api.platinus.local/Login/Negotiate.ashx", "authenticationTicket"=>"Guest:-405225060"));

//EOF