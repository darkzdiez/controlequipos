<?php

class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function equiposList(){
		return $this->db->select('SELECT * FROM `equipos`');
	}
	
	public function equipoSearch($id)
	{
		return $this->db->select('SELECT * FROM `equipos` WHERE `id`=' . $id);
	}
	
	public function create($data)
	{
		$this->db->insert('user', array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		));
	}
	
	public function editSave($data)
	{
		$postData = array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		);
		
		$this->db->update('user', $postData, "`userid` = {$data['userid']}");
	}
	
	public function delete($userid)
	{
		$result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

		if ($result[0]['role'] == 'owner')
		return false;
		
		$this->db->delete('user', "userid = '$userid'");
	}
}