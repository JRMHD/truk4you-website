<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Employee Check-In Update Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '../phone/check-in-update.html',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'drivertrack@truk4you.com',
		'to' => 'drivertrack@truk4you.com,letsroll@truk4you.com,2f9motx6@robot.zapier.com'
	),
	'fields' => array(
		'custom_U10090' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'custom_U10086' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Company',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Company\' is required.'
			)
		),
		'custom_U10110' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U10133' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Message\' is required.'
			)
		),
		'custom_U10114' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U10125' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U10119' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U10094' => array(
			'order' => 6,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'Power Only',
				'Van',
				'Reefer',
				'Flatbed'
			),
			'errors' => array(
				'required' => 'Field \'Radio Button Group\' is required.',
				'format' => 'Field \'Radio Button Group\' has an invalid value.'
			)
		),
		'custom_U10137' => array(
			'order' => 2,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'Stop',
				'Departure',
				'Arrival',
				'Relay',
				'Delay'
			),
			'errors' => array(
				'required' => 'Field \'Radio Button Group\' is required.',
				'format' => 'Field \'Radio Button Group\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>
