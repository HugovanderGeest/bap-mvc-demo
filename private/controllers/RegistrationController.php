<?php

namespace Website\Controllers;

/**
 * Class RegistrationController
 */
class RegistrationController
{

	public function registrationForm()
	{

		echo "Inschrijven!";

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form');
	}

	public function handleRegistrationForm()
	{
		echo "Aanmelden";

		//check die bi*ch 

		$errors = [];

		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$wachtwoord = trim($_POST['wachtwoord']);

		if ($email === false) {
			$errors['email'] = 'geen email';
		}

		if (strlen($wachtwoord) < 3) {
			$errors['wachtwoord'] = 'meer tekens aub';
		}

		if (count($errors) === 0) {


			$connection = dbConnect();
			$sql = "SELECT * FROM `gebruiker` WHERE `email` = :email";
			$statement = $connection->prepare($sql);
			$statement->execute(['email' => $email]);

			if ($statement->rowCount() === 0) {

				$sql = "INSERT INTO `gebruiker` (`email`, `wachtwoord`) VALUEs (:email, :wachtwoord)";
				$statement = $connection->prepare($sql);
				$safe_password = password_hash($wachtwoord, PASSWORD_DEFAULT);
				$params = [
					'email' => $email,
					'wachtwoord' => $safe_password
				];
				$statement->execute($params);
				$bedanktURL = url('register.thankyou');
				redirect($bedanktURL);
			} else {
				$errors['email'] = 'bestaat al, probeer iets anders!';
			}
		}

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form', ['errors' => $errors]);
	}

	public function registrationThankYou()
	{
		$template_engine = get_template_engine();
		echo $template_engine->render("register_thankyou");
	}
}
