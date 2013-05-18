<?php

/*
|--------------------------------------------------------------------------
| Fix IP addresses.
|--------------------------------------------------------------------------
*/
if (isset($_SERVER['HTTP_CF_CONNECTING_IP']))
{
	$_SERVER['HTTP_X_FORWARDED_FOR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
	$_SERVER['HTTP_CLIENT_IP'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
	$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
}

/*
|--------------------------------------------------------------------------
| Fix SSL detection.
|--------------------------------------------------------------------------
*/
if (isset($_SERVER['HTTP_CF_VISITOR']))
{
	if (preg_match('/https/i', $_SERVER['HTTP_CF_VISITOR']))
	{
		$_SERVER['HTTPS'] = 'On';
		$_SERVER['HTTP_X_FORWARDED_PORT'] = 443;
		$_SERVER['SERVER_PORT'] = 443;
	}
}