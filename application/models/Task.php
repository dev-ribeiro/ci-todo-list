<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Create
	public function create_task($data)
	{
		return $this->db->insert('tasks', $data);
	}

	// Read
	public function get_task($id)
	{
		$query = $this->db->get_where('tasks', array('task_id' => $id));
		return $query->row();
	}

	public function get_all_tasks()
	{
		$query = $this->db->get('tasks');
		return $query->result();
	}

	// Update
	public function update_task($id, $data)
	{
		$this->db->where('task_id', $id);
		return $this->db->update('tasks', $data);
	}

	// Delete
	public function delete_task($id)
	{
		$this->db->where('task_id', $id);
		return $this->db->delete('tasks');
	}
}
