<?php
class PHUL extends Workout{
	public $day1;
	public $day2;
	public $day4;
	public $day5;

	protected $day1_barbell_benchpress;
	protected $day1_incline_db_bench_press;
	protected $day1_bentover_row;
	protected $day1_lat_pulldown;
	protected $day1_overhead_press;
	protected $day1_barbell_curl;
	protected $day1_skullcrusher;

	protected $day2_squat;
	protected $day2_deadlift;
	protected $day2_legpress;
	protected $day2_legcurl;
	protected $day2_calfexercise;


	protected $day4_incline_barbell_benchpress;
	protected $day4_flat_bench_dumbbell_flye;
	protected $day4_seated_cable_row;
	protected $day4_one_arm_dumbbell_row;
	protected $day4_dumbbell_lateral_raise;
	protected $day4_seated_incline_dumbbell_curl;
	protected $day4_cable_tricep_extension;


	protected $day5_front_squat;		
	protected $day5_barbell_lunge;
	protected $day5_leg_extension;
	protected $day5_leg_curl;
	protected $day5_seated_calf_raise;
	protected $day5_calf_press;


	function __construct(){
		//Set Each Exercise Target Sets/Reps
		
	}
	function setWorkoutDay1(){
		return $day1;
	}
	function setWorkoutDay2(){
		return $day2;

	}
	function setWorkoutDay4(){
		return $day4;

	}
	function setWorkoutDay5(){
		return $day5;

	}
	function getWorkoutDay1(){
		return $day1;
	}
	function getWorkoutDay2(){
		return $day2;

	}
	function getWorkoutDay3(){
		return $day3;

	}
	function getWorkoutDay4(){
		return $day4;

	}



}

?>