<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Shipping Request Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '../tablet/confirmation.html',
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
		'to' => 'letsroll@truk4you.com,plthk@mailparser.io'
	),
	'fields' => array(
		'custom_U13962' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U14031' => array(
			'order' => 14,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13946' => array(
			'order' => 16,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13990' => array(
			'order' => 18,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13998' => array(
			'order' => 20,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13970' => array(
			'order' => 21,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13982' => array(
			'order' => 24,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U14002' => array(
			'order' => 15,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U14019' => array(
			'order' => 17,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13966' => array(
			'order' => 19,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U14006' => array(
			'order' => 22,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U14023' => array(
			'order' => 23,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13974' => array(
			'order' => 25,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13928' => array(
			'order' => 13,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13978' => array(
			'order' => 11,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U14027' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U13932' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U14010' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Work Address',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13950' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'City',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'City\' is required.'
			)
		),
		'custom_U13954' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'State',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'State\' is required.'
			)
		),
		'custom_U13924' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Zip code',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13958' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U14014' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U14205' => array(
			'order' => 27,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U14219' => array(
			'order' => 26,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U13908' => array(
			'order' => 10,
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
		'custom_U13936' => array(
			'order' => 12,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'Yes',
				'No'
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
