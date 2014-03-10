<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
		$this->view->js = array('index/js/default.js');
	}
	
	function index() {
		$index=$this->loadModel('index');
		$equiposList = $index->equiposList();
		$tbody="";
		foreach($equiposList as $key => $value) {
			@$ssh = new Net_SSH2($value['ip']);
			@$login=$ssh->login($value['usuario'], $value['clave']);

			$status = $ssh->exec('cat /opt/.ciber/t.txt');
			if($status==1){
				$s='Bloquear';
				$color='yellow';
			    $texto = 'Tiempo';
			}else{
				$s='Desbloquear';
				$color='white';
			    $texto = 'Bloqueada';
			}
			if (!$login) {
				$s='Conectar';
				$color='red';
			    $texto = 'Conección Fallida';
			}
			$tbody .= '<tr id="pctr' . $value['id'] . '" class="' . $color . '">';
			$tbody .= '<td>' . $value['nombre'] . '</td>';
			$tbody .= '<td>
					<button id="btncambiarEstado' . $value['id'] . '" onclick="cambiarEstado(' . $value['id'] . ')">' . $s . '</button>
					</td>';
			$tbody .= '<td>' . $texto . '</td>';
			$tbody .= '</tr>';
		}
		$this->view->tbody=$tbody;
		$this->view->render('index/index');
	}
	
}