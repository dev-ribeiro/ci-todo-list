<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TaskModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($data)
	{
		return $this->db->insert('tasks', $data);
	}

	public function findById($id)
	{
		$query = $this->db->get_where('tasks', array('task_id' => $id));
		return $query->row();
	}

	public function findAll()
	{
		$query = $this->db->get('tasks');
		return $query->result();
	}

	public function updateTask($id, $data)
	{
		$this->db->where('task_id', $id);
		return $this->db->update('tasks', $data);
	}

	public function delete($id)
	{
		$this->db->where('task_id', $id);
		return $this->db->delete('tasks');
	}

	public function countAll()
	{
		return $this->db->count_all('tasks');
	}
}
