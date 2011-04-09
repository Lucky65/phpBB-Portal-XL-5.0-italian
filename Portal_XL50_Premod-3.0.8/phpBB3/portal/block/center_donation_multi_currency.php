<?php
/*
*
* @name center_donation_multi_currency.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_donation_multi_currency.php,v 1.4 2008/01/25 16:54:34 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/

/*
* Begin block script here
*/
if ($portal_config['portal_pay_acc'] != '')
{
	if ($portal_config['portal_pay_c_block'] == true)
	{
		$template->assign_vars(array(
			'S_DISPLAY_PAY_C' => true
			)
		);
	}

	if ($portal_config['portal_pay_s_block'] == true)
	{
		$template->assign_vars(array(
			'S_DISPLAY_PAY_S' => true
			)
		);
	}

	// Assign specific vars
	$template->assign_vars(array(
		'PAY_ACC' => $portal_config['portal_pay_acc'],
		)
	);
}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_donation_multi_currency.html',
	));

?>