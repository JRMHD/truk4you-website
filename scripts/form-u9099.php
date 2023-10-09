<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Customer Contact Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => 'customer-confirmation.html',
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
		'from' => 'letsroll@truk4you.com',
		'to' => 'letsroll@truk4you.com,97k03kwo@robot.zapier.com'
	),
	'fields' => array(
		'custom_U9101' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Company',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U9168' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U9146' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U9206' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U9210' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U9214' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U9218' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U9222' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U9226' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U9627' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Cell Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Cell Phone\' is required.'
			)
		)
	)
);

process_form($form);
?>
