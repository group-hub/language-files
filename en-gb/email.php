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
	'unsubscribe' => 'Unsubscribe',
	'trademark' => '"Group Hub" is a registered trade mark of Group Hub Limited',

	'unsubscribe-page' => [
		'title' => 'You\'ve been successfully unsubscribed',
		'content' => 'You will no longer receive notifications'
	],

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
	],

	'welcome-email' => [
		'existing-user' => [
			'subject' => 'Added to Group - :group',
			'title' => 'You\'ve been added to a new Group!',
			'content' => ':group has just added you to their group.'
		],

		'new-user' => [
			'subject' => ':group is using Group Hub',
			'title' => ':group is using Group Hub',
			'content' => ':group uses Group Hub to make group management easy. You will now receive any messages and events created by :group. If you do not know :group, please click "unsubscribe".',
			'register' => 'You may wish to register on Group Hub to see all of the messages and events in one place. You can also RSVP to events.',
			'register-button' => 'Register'
		]
	]

];