<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->view('bt');
				$this->load->model('road_model');
	}
	public function index()
	{
		$data['query'] = $this->road_model->select(); // สร้างตัวแปลมาเก็บค่าที่ส่งมาจาก model
		$this->load->view('index',$data);

	}
	public function insert()
	{
		$data1 = array(
			'id_name' => $this->input->post('id_name'), //รับจากช่องอินพูท
			'report' => $this->input->post('report') //รับจากช่องอินพูท	
		);
		$data2 = array(
			'station' => $this->input->post('station_o'), //รับจากช่องอินพูท
			'time_out' => $this->input->post('time_out') //รับจากช่องอินพูท	
		);
	
		$data3 = array(
			'to_time' => $this->input->post('to_time'), //รับจากช่องอินพูท
			'time_out_h' => $this->input->post('time_out_h') //รับจากช่องอินพูท	
		);
		$data4 = array(
			'station_d' => $this->input->post('station_d'), //รับจากช่องอินพูท
			'time_end' => $this->input->post('end') //รับจากช่องอินพูท	
		);

		$this->road_model->insert_id($data1); //ส่งค่า ไปยัง model
		$this->road_model->insert_origin($data2); //ส่งค่า ไปยัง model
		$this->road_model->insert_huayrach($data3); //ส่งค่า ไปยัง model
		$this->road_model->insert_destination($data4); //ส่งค่า ไปยัง model
		redirect('welcome/index'); //กับไปยัง function index
	}
	


	
}
