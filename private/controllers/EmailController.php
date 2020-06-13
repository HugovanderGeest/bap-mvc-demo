<?php

namespace Website\Controllers;

/**
 * Class EmailController
 */
class EmailController
{

	public function sendTestEmail()
	{
		$mailer = getSwiftMailer();

		$message = createEmailMessage('test@test.com', 'test mail', 'Hugo', 'hugohugoi123@gmail.com');
		$message->setBody('dit is de inhoud');

		$aantal_verstuurd = $mailer->send($message);
		echo "aantal = " . $aantal_verstuurd;
	}
}
