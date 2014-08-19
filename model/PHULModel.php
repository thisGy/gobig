<?php
 // Workout Object
/*
	Workout -> PHUL -> Day ->Day 1 has Properties
	Workout->PHUL->getDay->getExercises->getExerciseSets

Day[1] => array(
				'Exercise1' = array(
							[Set2] => 
							[Set3] => 
							[Set4] => 							
							)
				'Exercis' = array(
							[Set2] => 
							[Set3] => 
							[Set4] => 
					)
				)

*/


class PHUL{
	public $day;
	public $todays_workout;
	public $power_day;
	public $hypertrophy_day;

	function __construct(){
		//Set Each Exercise Target Sets/Reps
		
		$this->setRepScheme();

		$this->setWorkouts();

		$this->setWorkoutRules();


	}
	function setWorkoutDay($day){
		$this->day = $day;
	}
	
	function getWorkoutDay(){
		return $this->day;

	}

	function getWorkoutofTheDay($day){
		$this->getExercises($day);

		return $day1;
	}
	
	function setRepScheme(){
		$this->rep_scheme = array(
			array('3-4' => '3-5'),
			array('3-4' => '6-10'),
			array('2-3' => '5-8'),
			array('2-3' => '6-10'),
			array('3-5' => '10-15'),
			array('4'   => '6-10'),
			array('3-4' => '8-12'),
			array('3-4' => '10-15'),
			);
	}

	function setWorkoutRules(){
		$rep_schemes = $this->rep_scheme;
		foreach($rep_schemes as $rep_scheme){
			foreach($rep_scheme as $sets => $reps){
				if(is_numeric($sets)){
					for($i=1; $i<=$sets; $i++){
						$rules["".$sets."x".$reps.""]["Set ".$i.""] = $reps;
					}
				}else{
					$set_range = explode('-',$sets);
					$upper_limit = $set_range[1];
					for($i=1; $i<=$upper_limit; $i++){
						$rules["".$sets."x".$reps.""]["Set ".$i.""] = $reps;
					}				
				}
		    }
		}
		$this->rules = $rules;
	}

	function setWorkouts(){
		$this->workouts = array(
			'1' => array(
					'Barbell Bench Press',
					'Incline Dumbebell Bench Press',
					'Bent Over Row',
					'Lat Pulldown',
					'Overhead Press',
					'Barbell Curl',
					'Skullcrusher'
				),
			'2' => array(
					'Squat',
					'Deadlift',
					'Leg Press',
					'Leg Curl',
					'Calf Exercise',
				),
			'3' => array(
					'Rest!  Go Drink! I mean... go for a run!',
				),
			'4' => array(
					'Incline Barbell Bench Press',
					'Flat Bench Dumbbell Flyes',
					'Seated Cable Row',
					'One Arm Dumbell Row',
					'Dumbell Lateral Raise',
					'Seated Incline Dumbbell Curl',
					'Cable Tricept Extension'
				),
			'5' => array(
					'Front Squat',
					'Barbell Lunge',
					'Leg Extension',
					'Leg Curl',
					'Seated Calf Raise',
					'Calf Press',
				),			
			);

	}

	function getExercises(){
		if ($day == 1){
		//Power Upper Body
				
		}else if($day == 2){
		//Power Lower Body

		}else if($day == 3){	
		// Rest, Go for a run!

		}else if($day == 4){
		//Hypertrophy Upper
			
		}else if($day == 5){
		//Hypertrophy Lower
		
		}else{
		// Invalid...	
			$this->error .="Invalid Day. Please select a valid day.";
		}
	}

	function setWorkoutType(){
		if ($this->day == 1 || $this->day == 2){
			$this->power_day 		= true;
			$this->hypertrophy_day  = false;
		}else if ($this->day == 4 || $this->day == 5){
			$this->power_day 		= false;
			$this->hypertrophy_day  = true;			
		}else{
			$this->power_day 		= false;
			$this->hypertrophy_day  = false;
		}
	}

	function setTodaysWorkoutRules(){
		$rules = $this->rules;
		$todays_workout = array();

		switch($this->day){
			case '1':
				$exercises = $this->todays_workout;				
				foreach($exercises as $exercise){
					//echo "$exercises - $exercise<br/>";
					if($exercise == 'Barbell Bench Press' || $exercise == 'Bent Over Row'){
						$todays_workout[$exercise]=$rules['3-4x3-5'];
					}else if($exercise == 'Overhead Press'){
						$todays_workout[$exercise]=$rules['2-3x5-8'];
					}else{
						$todays_workout[$exercise]=$rules['3-4x6-10'];
					}
				}

			break;
			
			case '2':
			break;
			
			case '3':
			break;						
			
			case '4':
			break;
			
			case '5':
			break;

			default:
			$this->todays_workout = "Off day!  Hurray!";
			break;		
		}
		$this->todays_workout = $todays_workout;
	}

	function generateTodaysWorkout(){
		$workouts = $this->workouts;
		$todays_workout = $workouts[$this->day];
		$this->todays_workout = $todays_workout;
		$this->setTodaysWorkoutRules();
	}

}

$PHUL = new PHUL;
$PHUL->setWorkoutDay(1);
$PHUL->setWorkoutType();

$PHUL->generateTodaysWorkout();


?><pre><?php
print_r($PHUL);
?></pre><?php


?>