	<?php
ob_start();
	class app
	{

		protected $controller = 'home';
		protected $method = 'index';
		protected $params = [] ;
		
		public function __construct()
		{

	//get url and check if the controller exists.........yes(initialise controller object) NO(controller remains home)
		 $url =  ($this->parse_url());
		 
		require_once 'router.php';

	if(array_key_exists($url[0], $router)){

		$controller_filename = $router["$url[0]"];

		 if(file_exists('app/controllers/'. $controller_filename .'.php')){


		 	$this->controller = $controller_filename;
		 	unset($url[0]);

		 }else{
		 	echo "you need to create contoller file with name: $controller_filename.php";
		 }
	}else {
		echo "url not routed";
	}
		 require_once 'app/controllers/'.$this->controller.'.php';

		 	$this->controller = new $this->controller;
		
	//check the controller method and call it

		 	if(isset($url[1])){
		 	 $url[1] = str_replace("-", "_", $url[1]);
		 		if(method_exists($this->controller, $url[1])){

		 			$this->method =$url[1];
		 				unset($url[1]);


		 		}
		 	}


		 
		 	if (Input::exists()) {
		 				 	Input::store(Input::all());

		 	}



		 	$this->params = $url ? array_values($url): [];
		 	@call_user_func_array([$this->controller , $this->method] , $this->params);
		 
		}

		public function parse_url()
		{

			if(isset($_GET['url'])){
				
				return $url =explode( '/' , filter_var( rtrim($_GET['url'] , '/') , FILTER_SANITIZE_URL) );
			}
		}
	}









	?>