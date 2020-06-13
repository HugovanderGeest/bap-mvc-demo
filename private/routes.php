<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('Website\Controllers');

SimpleRouter::group(['prefix' => site_url()], function () {

	// START: Zet hier al eigen routes
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get('/', 'WebsiteController@home')->name('home');
	SimpleRouter::get('/registreren', 'RegistrationController@registrationForm')->name('register.form');
	SimpleRouter::post('/registreren/verwerken', 'RegistrationController@handleRegistrationForm')->name('register.handle');
	SimpleRouter::get('registreren/bevestigen/{code}', 'RegistrationController@registrationThankYou')->name('register.thankyou');

	// hier 2 simple router toevegoevgd 
	SimpleRouter::get('/stuur-test-email', 'EmailController@sendTestEmail')->name('email.test');
	SimpleRouter::get('/registreren/bevestgen/{code}', 'RegistratiieonController@confirmRegistration')->name('register.name');


	SimpleRouter::get('/not-found', function () {
		http_response_code(404);

		return '404 Page not Found';
	});
});


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond
SimpleRouter::error(function (Request $request, \Exception $exception) {
	if ($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
		response()->redirect(site_url() . '/not-found');
	}
});
