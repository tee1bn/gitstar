<?php 

$router =[
	''=>'home',
	'home'=>'home',
	'supportmessages' => 'crud/TicketCrudController',
	'w'=>'home',
	'user'=>'UserController',			//this is used to build all urls of the user dashboard
	'withrawals'=>'WithdrawalsController',		
	'deposits'=>'DepositController',		
	'media' => 'crud/MediaController',

	'document' 			=> 'DocumentController',
	'support' 			=> 'SupportController',

	'user-profile'		=>'UserProfileController',
	'register' 			=> 'RegisterController',
	'login' 			=> 'LoginController',
	'verify' 			=> 'VerificationController',
	'shop' 				=> 'shopController',
	'error' 			=> 'ErrorController',
	
	'membership_correction' => 'MembershipCorrectionController',

	'test' => 'test/home',
		'blog' 	=> 'BlogController',
		'project' 	=> 'ProjectController',


	'company' => 'api/CompanyController',

	'cms_api' => 'CmsApiController',
	'guest' 	=> 'GuestController',
	'terms' 	=> 'TermsController',
	'genealogy' => 'GenealogyController',
	'report' 	=> 'ReportsController',
	'ref' 		=> 'ReferralController', //referral link handler
	'r' 		=> 'ReferralController', //referral link handler
	'forgot-password' 	=> 'forgotPasswordController',

	'auto-match' => 'AutoMatchingController',	//this handles routine checks and commssions

	'settings' => 'SettingsController',
	'testing' => 'testingController',




	'ticket_crud' => 'crud/TicketCrudController',
	'cms_crud' => 'crud/CmsCrud',
	'user_doc_crud' => 'crud/UserDocCrudController',
	'package_crud' => 'crud/PackageCrudController',

	'paypal' => 'payments/PayPalController', 


	#admin
	'admin-dashboard' => 'AdminDashboardController', 
	'admin' => 'AdminController', 
	'admin-profile' => 'AdminProfileController', 
	'admin-products' => 'AdminProductsController', 
];

