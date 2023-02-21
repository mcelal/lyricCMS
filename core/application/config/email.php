<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Email Settings
| -------------------------------------------------------------------
| Configuration of outgoing mail server.
| */

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.googlemail.com';
$config['smtp_port'] = '468';
$config['smtp_timeout'] = '30';
$config['smtp_user'] = '';
$config['smtp_pass'] = '';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
