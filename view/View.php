<?php
	class View{
		private $data;
		private $config;

		function __construct($data, $config){
			$this->data   = $data;
			$this->config = $config;
		}
		
		function render(){
			$data 	= $this->data;
			$config = $this->config;

			if ($data['user_logged_in'] != true){
				include ''.ROOT.'/content/login.php';	

			}else{


			}
		}

	}

?>