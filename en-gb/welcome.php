<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Welcome Language
	|--------------------------------------------------------------------------
	|
	| The following language lines are used in the welcome/onboarding sections
	|
	*/

	'title' => 'Welcome to Group Hub',

	'manage-group' => [
		'title' => 'Manage a Group?',
		'description' => "We'll have you up and running on Group Hub within minutes."
	],

	'member-groups' => [
		'title' => 'Member of Groups',
		'description' => 'You belong to the following groups',
		'no-groups' => 'You do not currently belong to any groups. If you believe this is a mistake please contact the group.'
	],

	'import' => [
		'title' => 'Import Members',
		'description' => 'If you have a lot of members, it will be easiest to import them.',
		'step-title' => 'Step :num',
		'step-1-description' => 'Download a template spreadsheet file:',
		'download-template' => 'Download Template',
		'step-2-description' => "Using your spreadsheet editor (e.g. Microsoft Excel), populate the rows with members. Example data is already displayed - don't forget to delete it.",
		'step-2-warning' => "Don't change the column order or the column headings.",
		'step-3-description' => 'Upload the speadsheet. It should be a .csv file.',
		'upload-file' => 'Upload File',
		'wait-description' => "We're importing your members. This should only take a couple of minutes.",
		'no-refresh' => 'Please do not refresh this page.',
		'success-description' => "We're successfully imported all your members!",
		'error-description' => "The file contains members with duplicate email addresses.",
		'skip' => "Skip - I'll add members manually"
	]
];
