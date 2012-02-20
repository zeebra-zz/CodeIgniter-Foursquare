<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['clientID'] = '';
$config['clientSecret'] = '';
$config['redirectUri'] = 'http://localhost/CodeIgniter-Foursquare/step2';

$config['token_session'] = 'foursquare';
$config['baseUrl'] = 'https://api.foursquare.com/v2/';
$config['authUrl'] = 'https://foursquare.com/oauth2/authenticate';
$config['tokenUrl'] = 'https://foursquare.com/oauth2/access_token';
