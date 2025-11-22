<?php

	session_start();

	

	// Stuff

	$site_separator = " | ";

	$site_name = "BeClutch!";





	// Site pages (identifier, template-source, title, require-login)

	$pages = array(

		[

			"",

			"home.html",

			"Home",

		],[

            "support",

            "support.html",

            "Support",
        ],[

            "upgrade",

            "upgrade.html",

            "Upgrade",
        ],
        [

            "FacebookLanding",

            "FacebookLanding.html",

            "FacebookLanding",
        ]
	);





	// Check if the URI has a template, if so load it!

	$request_uri = substr(strtok($_SERVER['REQUEST_URI'], '?'), 1);

	for($i = 0; $i < sizeof($pages); $i++) {

		if($request_uri == $pages[$i][0]) {

			loadTemplate($i);

			break;

		}

		if($i == sizeof($pages) - 1) {

			include "template/404.php";

			die();

		}

	}





	// Load template file

	function loadTemplate($page_index) {

		global $pages, $site_name, $site_separator;



		// Check if page requires the user to be logged in

		if(isset($pages[$page_index][3])) {

			if(!isset($_SESSION["id"])) {

				header('Location: /');

				die();

			}

		}

		

		ob_start();

		global $db, $device_table, $group_table;

		include("template/{$pages[$page_index][1]}");

		$template_content = ob_get_clean();



		$template_title = $page_index == 0 ? $site_name : $pages[$page_index][2].$site_separator.$site_name;

		include "template/main.php";

	}

?>
