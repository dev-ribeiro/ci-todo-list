<?php
class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('TaskModel');

		$taskModel = new TaskModel();

		$numberOfElements = $taskModel->countAll();
		$result = $taskModel->findAll();
		$isEmpty = $numberOfElements == 0;

		$data = array(
			'numberOfElements' => $numberOfElements,
			'data' => $result,
			'isEmpty' => $isEmpty
		);

		$this->load->view('home', $data);
	}
}
