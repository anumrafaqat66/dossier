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
        public function add_PN_Form(){
     if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $oc_no = $postData['oc_no'];
            $pno = $postData['pno'];
            $name = $postData['name'];
            $class = $postData['class'];
            $batch_no = $postData['batch_no'];
            $category = $postData['category'];
            $div_name = $postData['div_name'];

            $insert_array = array(
                'oc_no' => $oc_no,
                'p_no' => $pno,
                'name' => $name,
                'class' => $class,
                'issb_batch' => $batch_no,
                'do_id'=>$this->session->userdata('user_id'),
                'created_at'=> date('Y-m-d H:i:s'),
                 'updated_at'=> date('Y-m-d H:i:s'),
                'category'=>$category,
                'divison_name'=>$div_name

            );

            $insert = $this->db->insert('pn_form1s', $insert_array);
            //$last_id = $this->db->insert_id();

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Data Submitted successfully');
                redirect('D_O/PN_Form');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                 redirect('D_O/PN_Form');

            }
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
