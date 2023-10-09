<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Driver Application Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '../tablet/application-confirmation.html',
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
		'to' => 'letsroll@truk4you.com,employeeapplications@truk4you.com,tannersmith.productions@gmail.com'
	),
	'fields' => array(
		'custom_U7838' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U7800' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U7764' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U7868' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U7989' => array(
			'order' => 16,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7842' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U7965' => array(
			'order' => 12,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U7784' => array(
			'order' => 13,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U7957' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7961' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7904' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7788' => array(
			'order' => 11,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8060' => array(
			'order' => 14,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7896' => array(
			'order' => 17,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7768' => array(
			'order' => 18,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7821' => array(
			'order' => 19,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7860' => array(
			'order' => 21,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7856' => array(
			'order' => 23,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8052' => array(
			'order' => 26,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7829' => array(
			'order' => 28,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7872' => array(
			'order' => 30,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7928' => array(
			'order' => 32,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7916' => array(
			'order' => 34,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7792' => array(
			'order' => 25,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7817' => array(
			'order' => 27,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7953' => array(
			'order' => 29,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7796' => array(
			'order' => 31,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7884' => array(
			'order' => 33,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7852' => array(
			'order' => 36,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8056' => array(
			'order' => 38,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7825' => array(
			'order' => 40,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7880' => array(
			'order' => 42,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7864' => array(
			'order' => 44,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7900' => array(
			'order' => 35,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7973' => array(
			'order' => 37,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8031' => array(
			'order' => 39,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7848' => array(
			'order' => 41,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7892' => array(
			'order' => 43,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7808' => array(
			'order' => 45,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8014' => array(
			'order' => 47,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8018' => array(
			'order' => 49,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7977' => array(
			'order' => 51,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7981' => array(
			'order' => 53,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7941' => array(
			'order' => 46,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7833' => array(
			'order' => 48,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7876' => array(
			'order' => 50,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7908' => array(
			'order' => 52,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7920' => array(
			'order' => 54,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7985' => array(
			'order' => 56,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7813' => array(
			'order' => 58,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7945' => array(
			'order' => 60,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7912' => array(
			'order' => 62,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8035' => array(
			'order' => 64,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8039' => array(
			'order' => 55,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7888' => array(
			'order' => 57,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7804' => array(
			'order' => 59,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7924' => array(
			'order' => 61,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7969' => array(
			'order' => 63,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U8043' => array(
			'order' => 22,
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
		),
		'custom_U7932' => array(
			'order' => 20,
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
		),
		'custom_U7772' => array(
			'order' => 8,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'Full-time',
				'Part-time',
				'Either'
			),
			'errors' => array(
				'required' => 'Field \'Radio Button Group\' is required.',
				'format' => 'Field \'Radio Button Group\' has an invalid value.'
			)
		),
		'custom_U8022' => array(
			'order' => 15,
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
		),
		'custom_U7993' => array(
			'order' => 24,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'Truk4You Website',
				'Search Engine',
				'Word-of-Mouth',
				'Friend/Coworker',
				'Current Employee',
				'Other'
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
