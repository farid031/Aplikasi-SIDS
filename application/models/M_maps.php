<?php
class M_maps extends CI_Model {
	function __construct(){
        parent :: __construct();
      }
    function get_data($table){
      $db = $this->load->database('default',true);
      return $db->get($table);
  	}

    function marker_11_20(){
      $query = $this->db->query("SELECT a.event_id, a.device_id, a.timestamp, a.latitude ,a.longitude, b.gender, b.age, b.grup
        FROM events AS a, gender_age_train AS b
        WHERE a.device_id=b.device_id
        ORDER BY event_id ASC");
      return $query;
    }

    function jk(){
      $query = $this->db->query("SELECT a.event_id, a.device_id, a.timestamp, a.latitude ,a.longitude, b.gender, b.age, b.grup
        FROM events AS a, gender_age_train AS b
        WHERE a.device_id=b.device_id
        ORDER BY event_id ASC");
      return $query;
    }

    function m(){
      $query = $this->db->query("SELECT a.event_id, a.device_id, a.timestamp, a.latitude ,a.longitude, b.gender, b.age, b.grup
        FROM EVENTS AS a, gender_age_train AS b
        WHERE a.device_id=b.device_id AND gender='M'
        ORDER BY event_id ASC");
      return $query;
    }
    
     function f(){
      $query = $this->db->query("SELECT a.event_id, a.device_id, a.timestamp, a.latitude ,a.longitude, b.gender, b.age, b.grup
        FROM EVENTS AS a, gender_age_train AS b
        WHERE a.device_id=b.device_id AND gender='F'
        ORDER BY event_id ASC");
      return $query;
    }

    function jml_m(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE gender='M'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_f(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE gender='F'");
      $total = $query->num_rows();
      return $total;
    }

    function jml(){
      $query = $this->db->query("SELECT a.event_id, a.device_id, a.timestamp, a.latitude ,a.longitude, b.gender, b.age, b.grup
        FROM events AS a, gender_age_train AS b
        WHERE a.device_id=b.device_id");
      $total = $query->num_rows();
      return $total;
    }

    function jml_11_20(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='11' && age<='20'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_21_30(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='21' && age<='30'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_31_40(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='31' && age<='40'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_41_50(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='41' && age<='50'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_51_60(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='51' && age<='60'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_61_70(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='61' && age<='70'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_71_80(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='71' && age<='80'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_81_90(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE age>='81' && age<='90'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g1(){ 
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='F23-'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g2(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='F24-26'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g3(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='F27-28'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g4(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='F29-32'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g5(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='F33-42'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g6(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='F43+'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g7(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='M22-'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g8(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='M23-26'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g9(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='M27-28'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g10(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='M29-31'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g11(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='M32-38'");
      $total = $query->num_rows();
      return $total;
    }

    function jml_g12(){
      $query = $this->db->query("SELECT * FROM gender_age_train WHERE grup='M39+'");
      $total = $query->num_rows();
      return $total;
    }

		function get_data_by_id($table,$where) {
      $db = $this->load->database('default',true);
      return $db->get_where($table,$where);
  	}
		function simpan_data($table,$data){
      $db = $this->load->database('default',true);
    	$db->insert($table,$data);
    }
		function update_data($table,$data,$where){
      $db = $this->load->database('default',true);
    	$db->update($table,$data,$where);
    }
    function hapus_data($table,$where){
    	$db = $this->load->database('default',true);
      $db->delete($table,$where);
    }
    function kosong_data($table){
      $db = $this->load->database('default',true);
      $db->truncate($table);
    }
    public function upload_data($filename){
          ini_set('memory_limit', '-1');
          $inputFileName = './excel/'.$filename;
          try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
          } catch(Exception $e) {
            die('Error loading file :' . $e->getMessage());
          }

          $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          $numRows = count($worksheet);

          for ($i=2; $i < ($numRows+1) ; $i++) {

            $ins = array(
                "nim"     => $worksheet[$i]["A"],
                "nama"    => $worksheet[$i]["B"],
                "alamat"  => $worksheet[$i]["D"]
            );
            $db = $this->load->database('default',true);
            $db->insert('alamat',$ins);
          }
    }

}
?>