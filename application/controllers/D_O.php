<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class D_O extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->has_userdata('user_id')) {
            $id = $this->session->userdata('user_id');
            
            $this->load->view('do/dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function PN_Form (){
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/pn_form1');
        }

    }

    public function Inspection_record(){
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/inspection_record');
        }
    }
    public function psychologist_report(){
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/psychologist_report');
        }
    }
    public function auto_biography(){
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/biography');
        }
    }
    public function personal_data(){
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/personal_data');
        }
    }

   
}
