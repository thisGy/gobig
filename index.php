<?php
session_start();
require_once '/include/config.php';
require_once '/include/models.php';

	if ($userLoggedIn){
		//Check if user has worked out recently...
		if ($User->hasWorkedOut()){	
			$data['current_workout']  = $User->getCurrentWorkout();
			$data['logged_in'] = true;
			
		}else{
		// Have User Select a new workout... or create their own!	
			$data['current_workout']  = false;			
			$data['workouts'] = $Workouts->getAvailableWorkouts();
			$data['logged_in'] = true;

		}
	}else{
		//Show Login page...
		$data['logged_in'] = false;
	}

	// Header
	include ''.ROOT.'/include/header.php';

	//Render the View
	$View->render($data);

	// Footer
	include ''.ROOT.'/include/footer.php';
?>





