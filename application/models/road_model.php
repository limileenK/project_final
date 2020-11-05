<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Road_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    // รับข้อมูลจาก control
    function insert_id($data1)
    {
        $this->db->insert('id_car', $data1); // ส่งค่าไป database
     
    }
    function insert_origin($data2)
    {
      
        $this->db->insert('origin', $data2); // ส่งค่าไป database

    }
    function insert_huayrach($data3)
    {

        $this->db->insert('huayrach', $data3); // ส่งค่าไป database
       
    }
    function insert_destination($data4)
    {
      
        $this->db->insert('destination', $data4); // ส่งค่าไป database
    }
    function select()
    {
        $this->db->select('*');
        $this->db->from('id_car');
        $this->db->join('origin', 'origin.id = id_car.id');
        $this->db->join('huayrach', 'huayrach.id = id_car.id');
        $this->db->join('destination', 'destination.id = id_car.id');
        $this->db->where('station_d','กรุงเทพ');
        $this->db->order_by('time_out','asc');
        $query = $this->db->get();
        return $query->result_array(); //ส่งค่ากลับไปยัง controller
    }
    
}
