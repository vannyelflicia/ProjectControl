<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagecontrol extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('pdf');
	}

	// LOGIN
	public function index(){
		$this->load->view('login_v');
	}

	public function login(){
		$username=$this->input->post('username', true);
		$password=$this->input->post('password', true);
		$this->load->model('pagemodel');
		$cek = $this->pagemodel->auth($username , $password);
		if($cek->num_rows() > 0){
			$data=$cek->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if($data['job_tittle']=='OP'){
				$this->session->set_userdata('akses','Operasional');
				$this->session->set_userdata('ses_nama',$data['name']);
				// $this->load->view('dashboard_v');
				redirect('Pagecontrol/dashboard');
			}
			elseif($data['job_tittle']=='AP'){
				$this->session->set_userdata('akses','Acount Payable');
				$this->session->set_userdata('ses_nama',$data['name']);
				redirect('Pagecontrol/dashboard');
			}
			elseif($data['job_tittle']=='AR'){
				$this->session->set_userdata('akses','Acount Receivable');
				$this->session->set_userdata('ses_nama',$data['name']);
				// $this->load->view('dashboard_v');
				redirect('Pagecontrol/dashboard');
			}
			elseif($data['job_tittle']=='Controller'){
				$this->session->set_userdata('akses','Controller');
				$this->session->set_userdata('ses_nama',$data['name']);
				redirect('Pagecontrol/dashboard');
			}	
		}
		else {
			echo $this->session->set_flashdata('msg','Username atau Password Salah!');
			redirect(base_url(), 'refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
	// LOGIN

	public function dashboard(){
		$this->load->model('pagemodel');
		$data['datahasil'] = $this->pagemodel->getAll();
		$data['dataOP'] = $this->pagemodel->ambilOP();
		$data['dataAR'] = $this->pagemodel->getAR();
		$data['dataAP'] = $this->pagemodel->getAP();
		$data['datatruck'] = $this->pagemodel->getTruck();
		$data['NO'] = $this->pagemodel->getNO();
		$this->load->view('dashboard_v', $data);
	}

	// OP
	public function formOP(){
		$this->load->helper('url');
		$this->load->view('createOP_v');
	}

	public function insertOP(){
		$this->load->model('pagemodel');
		$cek = $this->db->query("SELECT * FROM op where IMO='".$this->input->post('IMO')."'")->num_rows();
		if ($cek<=0) {
		$data = array(
			'IMO' => $this->input->post('IMO'),
			'no_container' => $this->input->post('no_container'),
			'no_shipment' => $this->input->post('no_shipment'),
			'no_seal' => $this->input->post('no_seal'),
			'stuff_date' => $this->input->post('stuff_date'),
			'payment' => $this->input->post('payment'),
			'deliv_date' => $this->input->post('deliv_date'),
			'dest_town' => $this->input->post('dest_town'),
			'vessel_name' => $this->input->post('vessel_name'),
			'arv_at_dest' => $this->input->post('arv_at_dest'),
			'unload_at_conc' => $this->input->post('unload_at_conc')
			);

		$data = $this->pagemodel->Insert('op', $data);
		$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Berhasil Ditambahkan!
                </div>');
		redirect('Pagecontrol/dashOP');
		} else
		{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Mohon Maaf, No. IMO Sudah Ada Datanya!!!
                </div>');
			redirect('Pagecontrol/formAP');
		}
	}

	public function dashOP(){
		$this->load->model('pagemodel');
		$data['dataOP'] = $this->pagemodel->ambilOP();
		$this->load->view('dashboard_OP', $data);
	}

	public function editOP($imo){
		$this->load->model('pagemodel');
		$data['editop'] = $this->pagemodel->getOPedit($imo);
		$this->load->view('edit_dashOP', $data);
	}

	public function simpanOP(){
		$this->load->model('pagemodel');
		$data['editop'] = $this->pagemodel->simpanOP();
		redirect('Pagecontrol/dashOP');
	}
	// OP

	// AR
	public function formAR(){
		$this->load->helper('url');
		$this->load->model('pagemodel');
		$data['noIMO'] = $this->pagemodel->getIMO();
		$this->load->view('createAR_v', $data);
	}

	public function insertAR(){
		$this->load->model('pagemodel');
		$cek = $this->db->query("SELECT * FROM ar where IMO='".$this->input->post('IMO')."'")->num_rows();
		if ($cek<=0) {
		$data = array(
			'IMO' => $this->input->post('IMO'),
			'inv_cust' => $this->input->post('inv_cust'),
			'name_cust' => $this->input->post('name_cust')
			);


		$data = $this->pagemodel->Insert('ar', $data);
		$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Berhasil Ditambahkan!
                </div>');
		redirect('Pagecontrol/dashAR');
		} else
		{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Mohon Maaf, No. IMO Sudah Ada Datanya!!!
                </div>');
			redirect('Pagecontrol/formAR');
		}
	}

	public function dashAR(){
		$this->load->model('pagemodel');
		$data['dataAR'] = $this->pagemodel->getAR();
		$this->load->view('dashboard_AR', $data);
	}

	public function editAR($imo){
		$this->load->model('pagemodel');
		$data['editar'] = $this->pagemodel->getARedit($imo);
		$this->load->view('edit_dashAR', $data);
	}

	public function simpanAR(){
		$this->load->model('pagemodel');
		$data['editar'] = $this->pagemodel->simpanAR();
		redirect('Pagecontrol/dashAR');
	}

	public function detCust($imo){
		$this->load->model('pagemodel');
		$data['detCust'] = $this->pagemodel->getpay($imo);
		$data['hasil']= 0;
		$this->load->view('det_Cust', $data);
	}

	public function hitung()
	{
		$bil1 = $this->input->post('bil1');
		$bil2 = $this->input->post('bil2');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		if($hitung == 'PPN 1%'){
			$hasil = $bil1 + ($bil1*(0.01)) + $bil2 - ($bil1*(0.02));
		}
		if ($hitung == 'PPN 10%') {
			$hasil = $bil1 + ($bil1*(0.1)) + $bil2 - ($bil1*(0.02));
		}
		$nilai['hasil'] = $hasil;
		echo json_encode($nilai);
	}

	public function simpandetCust(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_inv = $this->input->post('value');
		$data['detCust'] = $this->pagemodel->simpanpayCust($IMO,$pay_inv);
		redirect('Pagecontrol/dashAR');
	}

	public function detPlug($imo){
		$this->load->model('pagemodel');
		$data['detPlug'] = $this->pagemodel->getpay($imo);
		$data['hasil']= 0;
		$this->load->view('det_Plug', $data);
	}

	public function simpandetPlug(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_plug = $this->input->post('value');
		$data['detPlug'] = $this->pagemodel->simpanpayPlug($IMO,$pay_plug);
		redirect('Pagecontrol/dashAR');
	}
	// AR

	// AP
	public function formAP(){
		$this->load->helper('url');
		$this->load->model('pagemodel');
		$data['noIMO'] = $this->pagemodel->getIMO();
		$this->load->view('createAP_v', $data);
	}

	public function insertAP(){
		$this->load->model('pagemodel');
		$cek = $this->db->query("SELECT * FROM ap where IMO='".$this->input->post('IMO')."'")->num_rows();
		if ($cek<=0) {
		$data = array(
			'IMO' => $this->input->post('IMO'),
			'name_ag' => $this->input->post('name_ag'),
			'inv_ag' => $this->input->post('inv_ag'),
			'pay_ag' => $this->input->post('pay_ag'),
			'date_ag' => $this->input->post('date_ag'),
			'rent_genset' => $this->input->post('rent_genset'),
			'inv_genset' => $this->input->post('inv_genset'),
			'pay_genset' => $this->input->post('pay_genset'),
			'date_genset' => $this->input->post('date_genset'),
			'name_ship' => $this->input->post('name_ship'),
			'inv_ship' => $this->input->post('inv_ship'),
			'pay_ship' => $this->input->post('pay_ship'),
			'date_ship' => $this->input->post('date_ship'),
			'inv_thc' => $this->input->post('inv_thc'),
			'pay_thc' => $this->input->post('pay_thc'),
			'date_thc' => $this->input->post('date_thc'),
			'inv_handl' => $this->input->post('inv_handl'),
			'pay_handl' => $this->input->post('pay_handl'),
			'date_handl' => $this->input->post('date_handl'),
			'inv_plug' => $this->input->post('inv_plug'),
			'pay_plug' => $this->input->post('pay_plug'),
			'date_plug' => $this->input->post('date_plug'),
			'inv_lain' => $this->input->post('inv_lain'),
			'pay_lain' => $this->input->post('pay_lain'),
			'date_lain' => $this->input->post('date_lain')
			);
		$data = $this->pagemodel->Insert('ap', $data);

		$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Berhasil Ditambahkan!
                </div>');
		redirect('Pagecontrol/dashAP');
		} else
		{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Mohon Maaf, No. IMO Sudah Ada Datanya!!!
                </div>');
			redirect('Pagecontrol/formAP');
	}
		redirect('Pagecontrol/dashboard');
	}

	public function dashAP(){
		$this->load->model('pagemodel');
		$data['dataAP'] = $this->pagemodel->getAP();
		$this->load->view('dashboard_AP', $data);
	}

	public function editAP($imo){
		$this->load->model('pagemodel');
		$data['editap'] = $this->pagemodel->getAPedit($imo);
		$this->load->view('edit_dashAP', $data);
	}

	public function simpanAP(){
		$this->load->model('pagemodel');
		$data['editap'] = $this->pagemodel->simpanAP();
		redirect('Pagecontrol/dashAP');
	} 

	public function detAgen($imo){
		$this->load->model('pagemodel');
		$data['detAgen'] = $this->pagemodel->getpayap($imo);
		$data['hasil']= 0;
		$this->load->view('det_Agen', $data);
	}

	public function simpandetAgen(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_ag = $this->input->post('value');
		$data['detAgen'] = $this->pagemodel->simpanpayAgen($IMO,$pay_ag);
		redirect('Pagecontrol/dashAP');
	}

	public function detGenset($imo){
		$this->load->model('pagemodel');
		$data['detGenset'] = $this->pagemodel->getpayap($imo);
		$data['hasil']= 0;
		$this->load->view('det_Genset', $data);
	}

	public function simpandetGenset(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_genset = $this->input->post('value');
		$data['detGenset'] = $this->pagemodel->simpanpayGenset($IMO,$pay_genset);
		redirect('Pagecontrol/dashAP');
	}

	public function detShip($imo){
		$this->load->model('pagemodel');
		$data['detShip'] = $this->pagemodel->getpayap($imo);
		$data['hasil']= 0;
		$this->load->view('det_Ship', $data);
	}

	public function simpandetShip(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_ship = $this->input->post('value');
		$data['detShip'] = $this->pagemodel->simpanpayShip($IMO,$pay_ship);
		redirect('Pagecontrol/dashAP');
	}

	public function detTHC($imo){
		$this->load->model('pagemodel');
		$data['detTHC'] = $this->pagemodel->getpayap($imo);
		$data['hasil']= 0;
		$this->load->view('det_THC', $data);
	}

	public function simpandetTHC(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_thc = $this->input->post('value');
		$data['detTHC'] = $this->pagemodel->simpanpayTHC($IMO,$pay_thc);
		redirect('Pagecontrol/dashAP');
	}

	public function detHandl($imo){
		$this->load->model('pagemodel');
		$data['detHandl'] = $this->pagemodel->getpayap($imo);
		$data['hasil']= 0;
		$this->load->view('det_Handl', $data);
	}

	public function simpandetHandl(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_handl = $this->input->post('value');
		$data['detHandl'] = $this->pagemodel->simpanpayHandl($IMO,$pay_handl);
		redirect('Pagecontrol/dashAP');
	}

	public function detPlugap($imo){
		$this->load->model('pagemodel');
		$data['detPlugap'] = $this->pagemodel->getpayap($imo);
		$data['hasil']= 0;
		$this->load->view('det_Plugap', $data);
	}

	public function simpandetPlugap(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_plug = $this->input->post('value');
		$data['detPlugap'] = $this->pagemodel->simpanpayPlugap($IMO,$pay_plug);
		redirect('Pagecontrol/dashAP');
	}

	public function detLain($imo){
		$this->load->model('pagemodel');
		$data['detLain'] = $this->pagemodel->getpayap($imo);
		$data['hasil']= 0;
		$this->load->view('det_Lain', $data);
	}

	public function simpandetLain(){
		$IMO=$this->input->post('IMO');
		$this->load->model('pagemodel');
		$pay_lain = $this->input->post('value');
		$data['detLain'] = $this->pagemodel->simpanpayLain($IMO,$pay_lain);
		redirect('Pagecontrol/dashAP');
	}
	// AP

	//Truck
	public function formTruck(){
		$this->load->helper('url');
		$this->load->model('pagemodel');
		$data['noIMO'] = $this->pagemodel->getIMO();
		$this->load->view('createTruck_v', $data);
	}

	public function insertTruck(){
		$this->load->model('pagemodel');
		$cek = $this->db->query("SELECT * FROM truck where IMO='".$this->input->post('IMO')."'")->num_rows();
		if ($cek<=0) {
		$data = array(
			'IMO' => $this->input->post('IMO'),
			'inv_truck' => $this->input->post('inv_truck'),
			'name' => $this->input->post('name'),
			'date' => $this->input->post('date'),
			'tujuan' => $this->input->post('tujuan'),
			'pesanan' => $this->input->post('pesanan'),
			'no_pol' => $this->input->post('no_pol'),
			'jam' => $this->input->post('jam'),
			'muatan' => $this->input->post('muatan'),
			'ukuran' => $this->input->post('ukuran'),
			'b_jajan' => $this->input->post('b_jajan'),
			'b_kom' => $this->input->post('b_kom'),
			'b_kawal' => $this->input->post('b_kawal'),
			'b_lain' => $this->input->post('b_lain')
			);
		$data = $this->pagemodel->Insert('truck', $data);

		$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Berhasil Ditambahkan!
                </div>');
		redirect('Pagecontrol/dashTruck');
		} else
		{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Mohon Maaf, No. IMO Sudah Ada Datanya!!!
                </div>');
			redirect('Pagecontrol/formTruck');
	}
		redirect('Pagecontrol/dashboard');
	}

	public function dashTruck(){
		$this->load->model('pagemodel');
		$data['dataTruck'] = $this->pagemodel->getTruck();
		$this->load->view('dashboard_Truck', $data);
	}

	public function editTruck($imo){
		$this->load->model('pagemodel');
		$data['edittruck'] = $this->pagemodel->getTruckedit($imo);
		$this->load->view('edit_dashTruck', $data);
	}

	public function simpanTruck(){
		$this->load->model('pagemodel');
		$data['edittruck'] = $this->pagemodel->simpanTruck();
		redirect('Pagecontrol/dashTruck');
	}
	//Truck

	// EXPORT TO EXCEL
	public function cetak(){
		$this->load->helper('url');
		$this->load->model('pagemodel');
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setTitle('Sample Sheet'); 
             
        $object->getActiveSheet()->getStyle("A1:K1")->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '#4169E1')
                    ),
                    'font' => array(
                        'color' => array('rgb' => '#FFFFFF')
                    )
                )
            );

        $object->getActiveSheet()->getStyle("L1:P1")->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '#3CB371')
                    ),
                    'font' => array(
                        'color' => array('rgb' => '#FFFFFF')
                    )
                )
            );

        $object->getActiveSheet()->getStyle("Q1")->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '#B0E0E6')
                    ),
                    'font' => array(
                        'color' => array('rgb' => '#FFFFFF')
                    )
                )
            );

        $object->getActiveSheet()->getStyle("R1:AO1")->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '#F4A460')
                    ),
                    'font' => array(
                        'color' => array('rgb' => '#FFFFFF')
                    )
                )
            );
#F4A460
        $object->getActiveSheet()->getStyle("AP1:BB1")->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '#CD5C5C')
                    ),
                    'font' => array(
                        'color' => array('rgb' => '#FFFFFF')
                    )
                )
            );

		$table_columns = array("IMO", "No. Container", "No. Shipment", "No. Seal", "Stuffing Date", "Payment", "Delivery From JKT (ETD)", "Destination Town", "Vessel Name", "Arv At Dest (ETA)", "Unload At Conc", 
			"Name CUST", "No. Invoice", "Payment Invoice", "No. Plug", "Payment Plug",
			"No. Faktur",
			"name AGEN", "invoice AGEN", "payment AGEN", "Payment Date AGEN", "rental GENSET", "Invoice GENSET", "Payment GENSET", "Payment Date GENSET", "Name SHIP", "Invoice SHIP", "Payment SHIP", "Payment Date SHIP", "Invoice THC", "Payment THC", "Payment Date THC", "Invoice HANDLING", "Payment HANDLING", "Payment Date HANDLING", "Invoice PLUG", "Payment PLUG", "Payment Date PLUG", "Invoice LAIN", "Payment LAIN", "Date LAIN", 
			"Invoice TRUCK", "Name TRUCK", "Date TRUCK", "Tujuan", "Pesanan", "No Polisi", "Jam", "Muatan", "Ukuran", "Biaya Jajan", "Biaya Komisi", "Biaya Kawal", "Biaya Lain");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$AllData = $this->pagemodel->getAll();

		$excel_row = 2;

		foreach($AllData as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->IMO);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->no_container);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->no_shipment);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->no_seal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->stuff_date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->payment);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->deliv_date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->dest_town);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->vessel_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->arv_at_dest);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->unload_at_conc);

			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->name_cust);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->inv_cust);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->pay_inv);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->no_plug);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->pay_plug);

			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->no_faktur);

			$object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->name_ag);
			$object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->inv_ag);
			$object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->pay_ag);
			$object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->date_ag);

			$object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->rent_genset);
			$object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->inv_genset);
			$object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->pay_genset);
			$object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->date_genset);

			$object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->name_ship);
			$object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->inv_ship);
			$object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->pay_ship);
			$object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->date_ship);

			$object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->inv_thc);
			$object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->pay_thc);
			$object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->date_thc);

			$object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->inv_handl);
			$object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->pay_handl);
			$object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->date_handl);

			$object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->inv_plug);
			$object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->pay_plug);
			$object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->date_plug);

			$object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->inv_lain);
			$object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->pay_lain);
			$object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row->date_lain);

			$object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row->inv_truck);
			$object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row->name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $row->date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row->tujuan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, $row->pesanan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, $row->no_pol);
			$object->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row->jam);
			$object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, $row->muatan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, $row->ukuran);
			$object->getActiveSheet()->setCellValueByColumnAndRow(50, $excel_row, $row->b_jajan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(51, $excel_row, $row->b_kom);
			$object->getActiveSheet()->setCellValueByColumnAndRow(52, $excel_row, $row->b_kawal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(53, $excel_row, $row->b_lain);

			$excel_row++;
		}

		$object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('F')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('J')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('M')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('O')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('R')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('S')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('T')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('U')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('V')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('W')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AF')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AJ')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AK')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AL')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AM')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AN')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AO')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AP')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AQ')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AR')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AS')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AT')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AU')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AV')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AW')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AX')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AY')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('AZ')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('BA')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('BB')->setWidth(20);

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Dispotition: attachment;filename="Delivery From JKT.xls"');
		$object_writer->save('php://output');
	}
	// EXPORT TO EXCEL

	//EXPORT TO PDF
    function exportTruck($IMO){
    	$this->load->model('pagemodel');
       	$data = $this->pagemodel->getTruckid($IMO);
       	 foreach ($data as $row) {
        $pdf = new FPDF('L','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        
        // mencetak string 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(20,5,'NO. IMO : '.$row->IMO);
        $pdf->Cell(150,5,'NO.   :      '.$row->inv_truck,0,1,'R');
        $pdf->Cell(170,5,'TGL. : '.$row->date,0,1,'R');
        $pdf->Ln(1);
        $pdf->SetFont('Arial','B',16);
        // $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(190,5,'SPKs',0,1,'C');

        // $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,5,'SURAT PERINTAH KERJA (SOPIR)',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(190,7,'Email: rsiasakinaidaman@gmail.com',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,2,'',0,1);
        $pdf->SetFont('Arial','',12);
        // $date= date('l, d  F  Y');
        $pdf->Cell(190,7,'Ditugaskan Kepada :',0,1,'L');
        
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(40,7,'Nama');
            $pdf->Cell(10,7,$row->name);
            $pdf->Cell(60,7,'No. Mobil',0,0,'R');
            $pdf->Cell(30,7,$row->no_pol,0,0,'R');
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Tanggal');
            $pdf->Cell(10,7,$row->date);
            $pdf->Cell(50,7,'Jam',0,0,'R');
            $pdf->Cell(28,7,$row->jam,0,0,'R');
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Tujuan');
            $pdf->Cell(45,7,$row->tujuan);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Order');
            $pdf->Cell(45,7,$row->pesanan);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'No. Mobil');
            $pdf->Cell(37,7,$row->no_pol);
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Jam');
            $pdf->Cell(35,7,$row->jam); 
            $pdf->Ln(10);
            $pdf->Cell(40,7,'Muatan');
            $pdf->Cell(35,7,$row->muatan); 
            $pdf->Cell(31,7,'Ukuran',0,0,'R');
            $pdf->Cell(22,7,$row->ukuran,0,0,'R');
            $pdf->Ln(5);
            $pdf->Cell(40,7,'Biaya');
            $pdf->Cell(53,7,'a. Uang Jalan',0,0,'L'); 
            $pdf->Cell(30,7,'Rp. '.$row->b_kawal,0,0,'L'); 
            $pdf->Ln(5);
            $pdf->Cell(40,7,'');
            $pdf->Cell(53,7,'a. Komisi',0,0,'L'); 
            $pdf->Cell(30,7,'Rp. '.$row->b_kom,0,0,'L'); 
            $pdf->Ln(5);
            $pdf->Cell(40,7,'');
            $pdf->Cell(53,7,'a. Kawalan',0,0,'L'); 
            $pdf->Cell(30,7,'Rp. '.$row->b_kom,0,0,'L'); 
            $pdf->Ln(5);
            $pdf->Cell(40,7,'');
            $pdf->Cell(53,7,'a. .................',0,0,'L'); 
            $pdf->Cell(30,7,'Rp. '.$row->b_lain,0,0,'L'); 
            $pdf->Ln(8);
        // }

         $pdf->Cell(10,3,'',0,1);

         $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(7,6,'No',1,0);
        $pdf->Cell(45,2,'Sopir',0,0,'C');
        $pdf->Cell(65,2,'Pengurus',0,0,'C');
        $pdf->Cell(35,2,'Disetujui Oleh',0,1,'C');
        $pdf->Ln(10);
        // $no=0;
        $pdf->SetFont('Arial','',10);
        // foreach ($pemeriksaan as $row){ 
         // $no++;
            // $pdf->Cell(7,6, $row->b_lain ,1,0);
            $pdf->Cell(45,2,'_______________',0,0,'C');
            $pdf->Cell(65,2,'_______________',0,0,'C');
            $pdf->Cell(37,2,'_______________',0,1,'C');
        }

        $pdf->Output('');
  }
	//EXPORT TO PDF

  	//dashboard Back
  	public function dashboard2(){
		$this->load->model('pagemodel');
		$data['datahasil'] = $this->pagemodel->getAll2();
		$data['dataIMO'] = $this->pagemodel->getIMO2();
		$data['dataAP'] = $this->pagemodel->getAP2();
		$data['datatruck'] = $this->pagemodel->getTruck2();
		$this->load->view('dashboard_v2', $data);
	}
  	//dashboard Back

  	//AP2
  	public function formAP2(){
		$this->load->helper('url');
		$this->load->model('pagemodel');
		$data['noIMO'] = $this->pagemodel->getIMO();
		$this->load->view('createAP2_v', $data);
	}

	public function insertAP2(){
		$this->load->model('pagemodel');
		$cek = $this->db->query("SELECT * FROM ap2 where IMO='".$this->input->post('IMO')."'")->num_rows();
		if ($cek<=0) {
		$data = array(
			'IMO' => $this->input->post('IMO'),
			'IMO_v2' => $this->input->post('IMO_v2'),
			'name_cust' => $this->input->post('name_cust'),
			'inv_cust' => $this->input->post('inv_cust'),
			'inv_ag' => $this->input->post('inv_ag'),
			'pay_ag' => $this->input->post('pay_ag'),
			'inv_genset' => $this->input->post('inv_genset'),
			'pay_genset' => $this->input->post('pay_genset'),
			'inv_ship' => $this->input->post('inv_ship'),
			'pay_ship' => $this->input->post('pay_ship')
			);
		$data = $this->pagemodel->Insert('ap2', $data);

		$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Berhasil Ditambahkan!
                </div>');
		redirect('Pagecontrol/dashAP2');
		} else
		{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Mohon Maaf, No. IMO Sudah Ada Datanya!!!
                </div>');
			redirect('Pagecontrol/formAP2');
	}
		redirect('Pagecontrol/dashboard2');
	}

	public function dashAP2(){
		$this->load->model('pagemodel');
		$data['dataAP'] = $this->pagemodel->getAP2();
		$this->load->view('dashboard_AP2', $data);
	}

	public function editAP2($imo){
		$this->load->model('pagemodel');
		$data['editap'] = $this->pagemodel->getAPedit2($imo);
		$this->load->view('edit_dashAP2', $data);
	}

	public function simpanAP2(){
		$this->load->model('pagemodel');
		$data['editap'] = $this->pagemodel->simpanAP2();
		redirect('Pagecontrol/dashAP2');
	}
  	//AP2

  	//truck2
	public function formTruck2(){
		$this->load->helper('url');
		$this->load->model('pagemodel');
		$data['noIMO'] = $this->pagemodel->getIMO2All();
		$this->load->view('createTruck2_v', $data);
	}

  	public function dashTruck2(){
		$this->load->model('pagemodel');
		$data['dataTruck'] = $this->pagemodel->getTruck2();
		$this->load->view('dashboard_truck2', $data);
	}

	public function insertTruck2(){
		$this->load->model('pagemodel');
		$cek = $this->db->query("SELECT * FROM truck2 where IMO_v2='".$this->input->post('IMO_v2')."'")->num_rows();
		if ($cek<=0) {
		$data = array(
			'IMO_v2' => $this->input->post('IMO_v2'),
			'name_truck' => $this->input->post('name_truck'),
			'inv_truck' => $this->input->post('inv_truck'),
			'pay_truck' => $this->input->post('pay_truck')
			
			);
		$data = $this->pagemodel->Insert('truck2', $data);

		$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Berhasil Ditambahkan!
                </div>');
		redirect('Pagecontrol/dashTruck2');
		} else
		{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Mohon Maaf, No. IMO Sudah Ada Datanya!!!
                </div>');
			redirect('Pagecontrol/formTruck2');
	}
		redirect('Pagecontrol/dashboard2');
	} 

	public function editTruck2($imo){
		$this->load->model('pagemodel');
		$data['edittruck'] = $this->pagemodel->getTruckedit2($imo);
		$this->load->view('edit_dashTruck2', $data);
	}

	public function simpanTruck2(){
		$this->load->model('pagemodel');
		$data['edittruck'] = $this->pagemodel->simpanTruck2();
		redirect('Pagecontrol/dashTruck2');
	}
  	//truck2

  	//pajak
	public function dashPajak(){
		$this->load->model('pagemodel');
		$data['dataAR'] = $this->pagemodel->getAR();
		$this->load->view('dashboard_Pajak', $data);
	}

	public function editnoFaktur($imo){
		$this->load->model('pagemodel');
		$data['editpajak'] = $this->pagemodel->getnoFaktur($imo);
		$this->load->view('edit_noFaktur', $data);
	}

	public function simpannoFaktur(){
		$this->load->model('pagemodel');
		$data['editpajak'] = $this->pagemodel->simpannoFaktur();
		redirect('Pagecontrol/dashPajak');
	}
  	//pajak

}
