<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_maps extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('PHPExcel');
  }
  
  public function index(){
  	 $data['get_data'] = $this->M_maps->jk();
     $data['m'] = $this->M_maps->m();
     $data['marker_11_20'] = $this->M_maps->marker_11_20();
     $data['f'] = $this->M_maps->f();
  	 $data['jml_m'] = $this->M_maps->jml_m();
  	 $data['jml_f'] = $this->M_maps->jml_f();
     $data['jml'] = $this->M_maps->jml();
     $data['jml_11_20'] = $this->M_maps->jml_11_20();
     $data['jml_21_30'] = $this->M_maps->jml_21_30();
     $data['jml_31_40'] = $this->M_maps->jml_31_40();
     $data['jml_41_50'] = $this->M_maps->jml_41_50();
     $data['jml_51_60'] = $this->M_maps->jml_51_60();
     $data['jml_61_70'] = $this->M_maps->jml_61_70();
     $data['jml_71_80'] = $this->M_maps->jml_71_80();
     $data['jml_81_90'] = $this->M_maps->jml_81_90();
     $data['jml_g1'] = $this->M_maps->jml_g1();
     $data['jml_g2'] = $this->M_maps->jml_g2();
     $data['jml_g3'] = $this->M_maps->jml_g3();
     $data['jml_g4'] = $this->M_maps->jml_g4();
     $data['jml_g5'] = $this->M_maps->jml_g5();
     $data['jml_g6'] = $this->M_maps->jml_g6();
     $data['jml_g7'] = $this->M_maps->jml_g7();
     $data['jml_g8'] = $this->M_maps->jml_g8();
     $data['jml_g9'] = $this->M_maps->jml_g9();
     $data['jml_g10'] = $this->M_maps->jml_g10();
     $data['jml_g11'] = $this->M_maps->jml_g11();
     $data['jml_g12'] = $this->M_maps->jml_g12();
	   $this->load->view('maps', $data);
  }

  public function import(){
		$config['upload_path'] 		= './excel';
		$config['allowed_types'] 	= 'xlsx|xls';
		$config['max_size'] 		= '1000';
		
		$this->load->library('upload', $config);

		if (! $this->upload->do_upload()){
			//$this->session->set_flashdata("gagal","<center><strong>Import Data GAGAL !!!</strong></center>");
			redirect('C_maps');
			?><script>alert('Import data gagal...!!!');</script><?php
			
		}else{
			$data = array('upload_data' => $this->upload->data());
	        $upload_data = $this->upload->data();
	        $filename = $upload_data['file_name'];
	        $this->M_maps->upload_data($filename);
	        unlink('./excel'.$filename);
	     	//$this->session->set_flashdata("berhasil","<center><strong>Import Data BERHASIL!!!</strong></center>");
	     	redirect('C_maps');
	     	?><script>alert('Import data berhasil...!!!');</script><?php
			
		}
	}

	public function excel2json(){
		$this->load->library('PHPExcel');
        $tmpfname = "./excel/alamat2.xlsx";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);//
        $lastRow = $worksheet->getHighestRow();

        $data = array();
        $no = 1;
        for ($row = 2; $row <= $lastRow; $row++) {
             $data = array(
                'no' => $no++,
                'nim' => $worksheet->getCell('A'.$row)->getValue(),
                'nama' => $worksheet->getCell('B'.$row)->getValue(),
                'alamat' => $worksheet->getCell('D'.$row)->getValue()
             );
        }
        $output = json_encode($data);

        $this->load->view('Maps', $output);
	}
}
?>