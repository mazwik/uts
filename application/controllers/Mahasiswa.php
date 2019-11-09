<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('mahasiswa/mahasiswa_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Mahasiswa_model->json();
    }

    public function read($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nim' => $row->nim,
		'nama_mahasiswa' => $row->nama_mahasiswa,
		'jenis_kelamin' => $row->jenis_kelamin,
		'alamat_lengkap' => $row->alamat_lengkap,
		'nomor_hp' => $row->nomor_hp,
	    );
            $this->load->view('mahasiswa/mahasiswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mahasiswa/create_action'),
	    'id' => set_value('id'),
	    'nim' => set_value('nim'),
	    'nama_mahasiswa' => set_value('nama_mahasiswa'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'alamat_lengkap' => set_value('alamat_lengkap'),
	    'nomor_hp' => set_value('nomor_hp'),
	);
        $this->load->view('mahasiswa/mahasiswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nim' => $this->input->post('nim',TRUE),
		'nama_mahasiswa' => $this->input->post('nama_mahasiswa',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'alamat_lengkap' => $this->input->post('alamat_lengkap',TRUE),
		'nomor_hp' => $this->input->post('nomor_hp',TRUE),
	    );

            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mahasiswa/update_action'),
		'id' => set_value('id', $row->id),
		'nim' => set_value('nim', $row->nim),
		'nama_mahasiswa' => set_value('nama_mahasiswa', $row->nama_mahasiswa),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'alamat_lengkap' => set_value('alamat_lengkap', $row->alamat_lengkap),
		'nomor_hp' => set_value('nomor_hp', $row->nomor_hp),
	    );
            $this->load->view('mahasiswa/mahasiswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nim' => $this->input->post('nim',TRUE),
		'nama_mahasiswa' => $this->input->post('nama_mahasiswa',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'alamat_lengkap' => $this->input->post('alamat_lengkap',TRUE),
		'nomor_hp' => $this->input->post('nomor_hp',TRUE),
	    );

            $this->Mahasiswa_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Mahasiswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mahasiswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nim', 'nim', 'trim|required');
	$this->form_validation->set_rules('nama_mahasiswa', 'nama mahasiswa', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('alamat_lengkap', 'alamat lengkap', 'trim|required');
	$this->form_validation->set_rules('nomor_hp', 'nomor hp', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-09 16:12:11 */
/* http://harviacode.com */