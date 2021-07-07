<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class CAO extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->has_userdata('user_id')) {
            $id = $this->session->userdata('user_id');

            $this->load->view('cao/dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin');
    }

    public function daily_module()
    {
        if ($this->session->has_userdata('user_id')) {
            // $data['club_data'] = $this->db->get('cadet_club')->result_array();
            $this->load->view('cao/daily_module'); //, $data);
        }
    }

    public function add_punishment()
    {
        if ($this->session->has_userdata('user_id')) {
            // $data['club_data'] = $this->db->get('cadet_club')->result_array();
            $this->load->view('cao/add_punishment'); //, $data);
        }
    }
    public function add_excuse()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('cao/add_excuse'); //, $data);
        }
    }
    public function add_observation()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('cao/add_observation'); //, $data);
        }
    }

    public function view_punishment_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            //$this->db->where('pr.do_id', $this->session->userdata('user_id'));
            // $this->db->where('pr.start_date <=', date('Y-m-d'));
            // $this->db->where('pr.end_date >=', date('Y-m-d'));
            $data['punishment_records'] = $this->db->get()->result_array();
            // $data['punishment_records'] = $this->db->where('do_id',$this->session->userdata('user_id'))->get('punishment_records')->result_array();
            $this->load->view('cao/view_punishment_list', $data);
        }
    }

    public function view_excuse_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('mr.*, f.*');
            $this->db->from('medical_records mr');
            $this->db->join('pn_form1s f', 'f.p_id = mr.p_id');
            $this->db->where('f.oc_no = mr.oc_no');
            $this->db->where('mr.start_date <=', date('Y-m-d'));
            $this->db->where('mr.end_date >=', date('Y-m-d'));
            $data['medical_records'] = $this->db->get()->result_array();
            $this->load->view('cao/view_excuse_list', $data);
        }
    }
    public function view_observation_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('or.*, f.*');
            $this->db->from('observation_records or');
            $this->db->join('pn_form1s f', 'f.p_id = or.p_id');
            $data['observation_records'] = $this->db->get()->result_array();
            $this->load->view('cao/view_observation_list', $data);
        }
    }
    public function search_excuse_by_date()
    {
        if ($this->session->has_userdata('user_id')) {

            $date = $_POST['search_date'];

            $this->db->select('mr.*, f.*');
            $this->db->from('medical_records mr');
            $this->db->join('pn_form1s f', 'f.p_id = mr.p_id');
            $this->db->where('f.oc_no = mr.oc_no');
            $this->db->where('mr.start_date =', $date);
            // $this->db->where('mr.end_date >=',date('Y-m-d'));
            $data['medical_records'] = $this->db->get()->result_array();
            $data['search_date'] = $date;
            $view_page = $this->load->view('cao/view_excuse_list', $data, TRUE);
            echo $view_page;
            json_encode($view_page);
        }
    }
    public function search_punish_by_date()
    {
        if ($this->session->has_userdata('user_id')) {

            $date = $_POST['search_date'];

            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('pr.start_date =', $date);
            $data['punishment_records'] = $this->db->get()->result_array();
            $data['search_date'] = $date;
            $view_page = $this->load->view('cao/view_punishment_list', $data, TRUE);
            echo $view_page;
            json_encode($view_page);
        }
    }

    public function save_cadet_punishment()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $id = $postData['id'];
            $oc_no = $postData['oc_num'];
            $punish = $postData['punish'];
            $offense = $postData['offense'];
            // $div_name = $postData['division'];
            $term = $postData['term'];
            $start_date = $postData['start_date'];
            $end_date = $postData['end_date'];
            $awarded_by = $this->session->userdata('username');
            $awarded_id = $this->session->userdata('user_id');

            $insert_array = array(
                'oc_no' => $oc_no,
                'p_id' => $id,
                'date' => date('Y-m-d'),
                'offence' => $offense,
                'punishment_awarded' => $punish,
                'do_id' => $awarded_id,
                'awarded_by' => $awarded_by,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'term' => $term,
                'start_date' => $start_date,
                'end_date' => $end_date

            );

            $insert = $this->db->insert('punishment_records', $insert_array);
            //$last_id = $this->db->insert_id();

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Punishment added successfully');
                redirect('CAO/add_punishment');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CAO/add_punishment');
            }
        }
    }

    public function save_cadet_excuse()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $id = $postData['id'];
            $oc_no = $postData['oc_num'];
            $excuse = $postData['excuse'];
            $disease = $postData['disease'];
            // $div_name = $postData['division'];
            $term = $postData['term'];
            $start_date = $postData['start_date'];
            $end_date = $postData['end_date'];
            // $awarded_by = $this->session->userdata('username');
            $awarded_id = $this->session->userdata('user_id');

            $insert_array = array(
                'oc_no' => $oc_no,
                'p_id' => $id,
                'date' => date('Y-m-d'),
                'disease' => $disease,
                'mo_remarks' => $excuse,
                'do_id' => $awarded_id,
                // 'awarded_by' => $awarded_by,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'term' => $term,
                'start_date' => $start_date,
                'end_date' => $end_date

            );

            $insert = $this->db->insert('medical_records', $insert_array);
            //$last_id = $this->db->insert_id();

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Excuse added successfully');
                redirect('CAO/add_excuse');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CAO/add_excuse');
            }
        }
    }

    public function save_cadet_observation()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $id = $postData['id'];
            // $oc_no = $postData['oc_num'];
            $observation = $postData['observation'];
            $term = $postData['term'];
            $awarded_by = $this->session->userdata('username');
            $awarded_id = $this->session->userdata('user_id');

            $insert_array = array(
                // 'oc_no' => $oc_no,
                'p_id' => $id,
                'date' => date('Y-m-d'),
                'observation' => $observation,
                'do_id' => $awarded_id,
                'observed_by' => $awarded_by,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'term' => $term,
                'status' => 'pending'
            );

            $insert = $this->db->insert('observation_records', $insert_array);
            //$last_id = $this->db->insert_id();

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Observation added successfully');
                redirect('CAO/add_observation');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CAO/add_observation');
            }
        }
    }

    public function search_cadet()
    {
        if ($this->input->post()) {
            $oc_no = $_POST['oc_no'];
            $query = $this->db->where('oc_no', $oc_no)->get('pn_form1s')->row_array();
            echo json_encode($query);
        }
    }
    public function update_observation_status()
    {
        if ($this->input->post()) {
            $id = $_POST['id'];
            $status = $_POST['status'];

            $cond  = ['id' => $id];
            $data_update = [
                'status' => $status
            ];

            $this->db->where($cond);
            $update = $this->db->update('observation_records', $data_update);

            $this->db->select('or.*, f.*');
            $this->db->from('observation_records or');
            $this->db->join('pn_form1s f', 'f.p_id = or.p_id');
            $data['observation_records'] = $this->db->get()->result_array();
            $view_page = $this->load->view('cao/view_observation_list', $data, TRUE);
            echo $view_page;
            json_encode($view_page);
        }
    }
    public function update_punishment_status()
    {
        if ($this->input->post()) {
            $id = $_POST['id'];
            $status = $_POST['status'];

            $cond  = ['id' => $id];
            $data_update = [
                'status' => $status
            ];

            $this->db->where($cond);
            $update = $this->db->update('punishment_records', $data_update);

            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $data['punishment_records'] = $this->db->get()->result_array();
            $view_page = $this->load->view('cao/view_punishment_list', $data, TRUE);
            echo $view_page;
            json_encode($view_page);
        }
    }
}
