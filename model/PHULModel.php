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


class PHUL extends Workout{
	public $day;
	public $todays_workout;


	function __construct(){
		//Set Each Exercise Target Sets/Reps
		
		$this->setRepScheme();

		$this->setWorkouts();

	}
	function setWorkoutDay($day){
		$this->day;
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
			'3-4' => '3-5',
			'3-4' => '6-10',
			'2-3' => '5-8',
			'2-3' => '6-10',
			'3-5' => '10-15',
			'4'   => '6-10',
			'3-4' => '8-12',
			'3-4' => '10-15',
			);
	}

	function generateWorkoutSets(){
		$rep_schemes = $this->rep_scheme;
		foreach($rep_schemes as $sets => $reps){
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




}

?>