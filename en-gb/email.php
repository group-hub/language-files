<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Email Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are the emails sent by Group Hub
	|
	*/

	'product-name' => 'Group Hub',
	'no-reply' => env('NO_REPLY_EMAIL'),

	'activation' => [
		'subject' => 'Activate Account - Group Hub',
		'title' => 'Activate your account',
		'content' => 'Hey :name, please click the button to activate your account',
		'button' => 'Activate Account',
		'did-not-register' => 'If you didn\'t sign up for an account on our site, please ignore this email.'
	],

	'forgot-password' => [
		'subject' => 'Forgot Password - Group Hub',
		'title' => 'Forgotten Password',
		'content' => 'Hey :name, please click the button below to reset your password',
		'button' => 'Reset Password',
		'did-not-request-reset' => 'If you didn\'t ask to reset your password, please ignore this email.'
	],

	'new-message' => [
		'title' => 'New Message',
		'content' => 'Hey :name, :group has just posted a new message:',
		'signature' => 'The Group Hub Team',
		'sent-by' => 'This message was posted by :sent-by - you can reply directly to this email (this is not sent to the whole group).'
	]

];