<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TaskModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Create
	public function insert($data)
	{
		return $this->db->insert('tasks', $data);
	}

	// Read
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

	// Update
	public function updateTask($id, $data)
	{
		$this->db->where('task_id', $id);
		return $this->db->update('tasks', $data);
	}

	// Delete
	public function delete($id)
	{
		$this->db->where('task_id', $id);
		return $this->db->delete('tasks');
	}
}
