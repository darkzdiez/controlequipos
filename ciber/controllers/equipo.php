<?php

class Equipo extends Controller {

	function __construct() {
		parent::__construct();
		$this->view->js = array('index/js/default.js');
	}
	
	function index() {
		$index=$this->loadModel('index');
		$this->view->equiposList = $index->equiposList();
		$this->view->render('index/index');
	}
	function cambiarestado(){
		$index=$this->loadModel('index');
		$equipoSearch = $index->equipoSearch($_POST['id']);
		@$ssh = new Net_SSH2($equipoSearch[0]['ip']);
		@$login=$ssh->login($equipoSearch[0]['usuario'], $equipoSearch[0]['clave']);
		@$status = $ssh->exec('cat /opt/.ciber/t.txt');
		if($status==1){
			$ssh->exec('echo 2 > /opt/.ciber/t.txt');
			$mensaje="Bloqueada";
			$s=2;
		}else{
			$ssh->exec('echo 1 > /opt/.ciber/t.txt');
			$mensaje="Desbloqueada";
			$s=1;
		}
		if (!$login) {
			$s='3';
			$color='red';
		    $mensaje = 'Conección Fallida';
		}
		print json_encode(array('mensaje' => $mensaje, 's' => $s));
	}	
}