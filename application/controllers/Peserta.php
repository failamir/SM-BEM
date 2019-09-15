<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // is_login();
        $this->load->model('Peserta_model');
        $this->load->library('form_validation');        
    $this->load->library('datatables');
    $this->load->helper(array('url','download'));				
    }

    public function index()
    {
        // is_login();
        $this->template->load('template_front','peserta/peserta_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Peserta_model->json();
    }

    public function read($id) 
    {
        // is_login();
        $row = $this->Peserta_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_lengkap' => $row->nama_lengkap,
		'nim' => $row->nim,
		'prodi' => $row->prodi,
		'instansi' => $row->instansi,
		'no_wa' => $row->no_wa,
		'email' => $row->email,
		'created_at' => $row->created_at,
	    );
            $this->template->load('template_front','peserta/peserta_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('peserta/create_action'),
	    'id' => set_value('id'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'nim' => set_value('nim'),
	    'prodi' => set_value('prodi'),
	    'instansi' => set_value('instansi'),
	    'no_wa' => set_value('no_wa'),
	    'email' => set_value('email'),
	    'created_at' => set_value('created_at'),
	);
        $this->template->load('template_front','peserta/peserta_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
        $tgl=date('Y-m-d');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'prodi' => $this->input->post('prodi',TRUE),
		'instansi' => $this->input->post('instansi',TRUE),
		'no_wa' => $this->input->post('no_wa',TRUE),
		'email' => $this->input->post('email',TRUE),
		'created_at' => $tgl,
	    );

            $this->Peserta_model->insert($data);
            $this->session->set_flashdata('message', 'Data Berhasil Masuk ^^');
            redirect(site_url('front'));
        }
    }
    
    public function update($id) 
    {
        // is_login();
        $row = $this->Peserta_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('peserta/update_action'),
		'id' => set_value('id', $row->id),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'nim' => set_value('nim', $row->nim),
		'prodi' => set_value('prodi', $row->prodi),
		'instansi' => set_value('instansi', $row->instansi),
		'no_wa' => set_value('no_wa', $row->no_wa),
		'email' => set_value('email', $row->email),
		'created_at' => set_value('created_at', $row->created_at),
	    );
            $this->template->load('template_front','peserta/peserta_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }
    
    public function update_action() 
    {
        // is_login();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'prodi' => $this->input->post('prodi',TRUE),
		'instansi' => $this->input->post('instansi',TRUE),
		'no_wa' => $this->input->post('no_wa',TRUE),
		'email' => $this->input->post('email',TRUE),
// 		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Peserta_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('peserta'));
        }
    }
    
    public function delete($id) 
    {
        // is_login();
        $row = $this->Peserta_model->get_by_id($id);

        if ($row) {
            $this->Peserta_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('peserta'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('nim', 'nim', 'trim|required');
	$this->form_validation->set_rules('prodi', 'prodi', 'trim|required');
	$this->form_validation->set_rules('instansi', 'instansi', 'trim|required');
	$this->form_validation->set_rules('no_wa', 'no wa', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
// 	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "peserta.xls";
        $judul = "peserta";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Lengkap");
	xlsWriteLabel($tablehead, $kolomhead++, "Nim");
	xlsWriteLabel($tablehead, $kolomhead++, "Prodi");
	xlsWriteLabel($tablehead, $kolomhead++, "Instansi");
	xlsWriteLabel($tablehead, $kolomhead++, "No Wa");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");

	foreach ($this->Peserta_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_lengkap);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nim);
	    xlsWriteLabel($tablebody, $kolombody++, $data->prodi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->instansi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_wa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=peserta.doc");

        $data = array(
            'peserta_data' => $this->Peserta_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('peserta/peserta_doc',$data);
    }
 
	public function lakukan_download(){				
		force_download('assets/foto_profil/poster.jpeg',NULL);
	}	

}

/* End of file Peserta.php */
/* Location: ./application/controllers/Peserta.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-09-01 00:01:10 */
/* http://harviacode.com */