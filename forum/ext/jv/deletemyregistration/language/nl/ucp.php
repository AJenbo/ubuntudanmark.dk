<?php
/**
*
* @package Delete my registration
* @version $Id: ucp.php 7 2015-09-03 00:33:59Z killbill $
* @author KillBill - killbill@jatek-vilag.com
* @copyright 2010-2014 (c) http://jatek-vilag.com/ - info@jatek-vilag.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'MY_ACC_DELETE_CONFIRM'			=> 'Verwijder mijn registratie bevestiging',
	'MY_ACC_DELETE_CONFIRM_ERROR'	=> 'Verwijderen van registratie is niet bevestigd!',
	'MY_ACC_DELETE_EXPLAIN'			=> 'Verwijder mijn registratie<br /><em>Let op, als je dit doet dan is de data niet meer te herstellen!</em>',
	'MY_ACC_DELETE_FOUNDER_ERROR'	=> 'Forum eigenaars kunnen hun registratie niet verwijderen.',
	'MY_ACC_DELETE_SUCCESS'			=> 'Registratie is succesvol verwijderd',
	'MY_ACC_POST_DELETE'			=> 'Verwijder berichten',
	'MY_ACC_POST_DELETE_EXPLAIN'	=> 'Je berichten zullen worden verwijderd van het forum',
));