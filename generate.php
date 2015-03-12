<?php

// This will be used to generate a git repo contains the text you want to say.


$text = "I LOVE PHP";

if (!function_exists("imagecreatetruecolor")) {
	die("GD extension required");
}