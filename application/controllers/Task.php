<?php
class Task extends CI_Controller
{
	public function index()
	{
		echo "Hello";
	}

	public function insert()
	{
		$this->load->model('TaskModel');

		$taskDescription = $this->input->post('task_description');
		$currentDate = new DateTime();
		$data = array(
			'task_description' => $taskDescription,
			'task_date' => $currentDate->format('Y-m-d H:i:s'),
			'task_is_finished' => FALSE
		);

		$taskEntity = new TaskModel();
		$taskEntity->insert($data);

		redirect(base_url());
	}
}
