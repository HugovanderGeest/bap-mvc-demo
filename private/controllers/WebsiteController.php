<?php

namespace Website\Controllers;

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController
{

	public function home()
	{
		echo "hugo van der Geest<br><br>";
		echo "hier komt de homepage<br>voor regiestratie ga naar<br><br>";

		echo "http://localhost/covid/bap-mvc-demo/public/registreren/";

		//		$template_engine = get_template_engine();
		//		echo $template_engine->render('homepage');

	}
}
