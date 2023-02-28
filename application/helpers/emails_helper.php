<?php
defined('BASEPATH') or exit('No direct script access allowed');


function sendEmail($params){

	$ci = &get_instance();

	switch ($params['emailType']) {
		case EmailType::MEMBER_REGISTRATION:
			$dataMsg['user']	= array('memberFullName'	=> $params['memberFullName'],
										'memberEmail'		=> $params['emailRecipient'],
										'memberToken'		=> $params['memberToken'],
										'courseName'		=> $params['courseName'],
										'coursePrice'		=> $params['coursePrice']);

			$emailBody 			= $ci->load->view('_emailTemplate/email_member_registration', $dataMsg, true);
			break;
		case EmailType::REGISTRATION_VERIFICATION:
			$dataMsg['user']	= array('memberFullName'	=> $params['memberFullName'],
										'memberEmail'		=> $params['emailRecipient'],
										'memberPassword'	=> $params['memberPassword'],
										'memberToken'		=> $params['memberToken']);

			$emailBody 			= $ci->load->view('_emailTemplate/email_member_registration_verification', $dataMsg, true);
			break;
		case EmailType::FORGOT_PASSWORD:
			$dataMsg['user']	= array('emailHeadline'		=> $params['emailSubject'],
										'memberFullName'	=> $params['memberFullName'],
										'memberEmail'		=> $params['emailRecipient'],
										'memberPassword'	=> $params['memberPassword'],
										'memberToken'		=> $params['memberToken']);

			$emailBody 			= $ci->load->view('_emailTemplate/email_member_forgot_password', $dataMsg, true);
			break;
	};

	$ci->load->library('phpmailer_lib');
	$mail = $ci->phpmailer_lib->load();

	/*=============================*/
	/*

	USE THIS IN DEVELOPEMENT MODE TO PREVENT EMAIL HOSTING LIMITATION

	host: scwp.tfx.co.id
	email:	email_testing@tfx.co.id
	password: D3veL0pErTif1A@eMaiLT3st1nG

	*/
	/*=============================*/
	/*=============================*/
	/*

	USE THIS IN PRODUCTION MODE

	host: srv89.niagahoster.com
	email: noreply@feducation.id
	password: t3BB3t13IH@2022

	*/
	/*=============================*/
	
// 	$mail->Host     = 'srv89.niagahoster.com';
// 	$mail->SMTPAuth 	= true;
// 	$mail->Username 	= 'no-reply@lenteradigitalindonesia.com';
// 	$mail->Password 	= 'L3nteraDigitalIndonesia@2022';
// 	$mail->SMTPSecure 	= 'ssl';
// 	$mail->Port     	= 465; // 465/587

	$mail->AddEmbeddedImage('assets/images/orang_dalam.png', 'logoimg', 'orang_dalam.png', 'base64', 'image/png');

	$mail->isSMTP();
	$mail->Host     	= 'mail.orangdalam.co.id';
	$mail->SMTPAuth 	= true;
	$mail->Username 	= 'noreply@orangdalam.co.id';
	$mail->Password 	= 'n0r3ply@orangdalam@12345';
	$mail->SMTPSecure 	= 'ssl';
	$mail->Port     	= 465; // 465/587
	
	
	$mail->SMTPOptions = array('ssl' => array('verify_peer' => false,
											  'verify_peer_name' => false,
											  'allow_self_signed' => true));

	$mail->setFrom('noreply@orangdalam.co.id', 'PT. Orang Dalam Indonesia');
	$mail->addReplyTo('dev@orangdalam.co.id');
	$mail->addAddress($params['emailRecipient']);
	$mail->Subject = $params['emailSubject'];
	$mail->isHTML(TRUE);
	$mail->Body = $emailBody;

	if ($mail->send()) {
		$result = array('isDelivered' 	=> TRUE,
					 	'errorMessage'	=> 'No Error',
					 	'status' 		=> 'Send Email Successfully');
	} else {
		$result = array('isDelivered' 	=> FALSE,
					    'errorMessage'	=> $mail->ErrorInfo,
					 	'status' 		=> 'Failed to Send Email');
	}

	return $result;
};
