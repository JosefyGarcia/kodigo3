<?php
require_once 'Paths.php';
class App extends Core{

    protected $BASEDIR  = "https://localhost/kodigo3/"; 
    //protected $BASEDIR  = PROJECT;
    protected $ENV = 'DEV';
    protected $BASEDIRADMIN  = "https://localhost/kodigo3/";
    
    /**
    * sanitize url
    * @param String $url
    * @return String sanitize url
    */
    protected function sanitizeURL($u){
        $sanitize = filter_var($u, FILTER_SANITIZE_URL);
        $sanitize = str_replace('\\', '/', $sanitize);
        $sanitize = str_replace('//', '/', $sanitize);
        $sanitize = ltrim($sanitize, '/');
        $sanitize = rtrim($sanitize, '/');
        return $sanitize;
    }

    /**
    * Call the contoller
    */
    protected function callController($request){
        $route = self::sanitizeURL($request['route']);
        
        unset($request['route']);
        $params = [];
        
        $r = explode('/', $route);
        #controller
        $controller = (isset($r[$this->posCtrl]) && $this->posCtrl > -1) ? $r[$this->posCtrl] : 'index';
        #action
        $action = (isset($r[$this->posAction])) ? $r[$this->posAction] : 'index';

        unset($r[$this->posCtrl]); unset($r[$this->posAction]);

        foreach($r as $p){ array_push($params, $p); }

        $classname = strtolower($controller) . '_controller';

        if(class_exists($classname)){
            if(method_exists($classname, $action)){
                $v = new $classname($params, $request);
                $v->$action();
            }else{
                $_helpers = new Helpers();
                $_helpers->showErrorPage();
            }
        }else{
            $_helpers = new Helpers();
            $_helpers->showErrorPage();
        }
    }

    /**
    * Render a complete view
    * @param String $name
    * @param String $extension
    */
    public function render($name, $extension = 'php'){
        require_once APPDIR::Views . $name . '.' . $extension;
    }

    /**
    * Render a partial view
    * @param String $name
    * @return String partial
    */
    public function renderPartial($name, $extension = 'php'){
        $extension = (empty($extension)) ? 'php' : $extension;
        $env = $this->ENV;
        require_once APPDIR::Views . 'partials/_' . $name . '.' . $extension;
    }
    
    

    /**
    * Return a json response
    * @param Array $data
    * @return json object
    */
    public function responseJSON($data){
        $dt = [];

        $dt = $this->md_array_map('utf8_encode', $data);

        return json_encode($dt);
    }
	
	public function mailTemplate($n, $m, $c, $s){
		$_helpers = new Helpers();
		$name = $n; $mail=$m; $content=$c; $sub=$s;
		ob_start();
		require_once $_helpers->linkTo('mail-template.php', 'Views', 'require');
		$template = ob_get_clean();
		
		return $template;
	}


	public function consultarEventosFooter(){
        $e = new EventosPaginaWeb();
        $eventosFooter = $e->consultarEventosActivosFooter();
        return $eventosFooter;
    }

}
