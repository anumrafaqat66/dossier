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

    public function PN_Form()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['divisions'] = $this->db->get('divisions')->result_array();
            $this->load->view('do/pn_form1',$data);
        }
    }

    public function save_cadet_club()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $oc_no = $postData['oc_num'];
            $club = $postData['club'];

            $cond  = ['oc_no' => $oc_no];
            $data_update = [
                'club' => $club
            ];

            $this->db->where($cond);
            $update = $this->db->update('pn_form1s', $data_update);

            if (!empty($update)) {
                $this->session->set_flashdata('success', 'Cadet added to Club successfully');
                redirect('D_O/add_club');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('D_O/add_club');
            }
        }
    }
    public function add_PN_Form()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $oc_no = $postData['oc_no'];
            $pno = $postData['pno'];
            $name = $postData['name'];
            $class = $postData['class'];
            $batch_no = $postData['batch_no'];
            $category = $postData['category'];
            $div_name = $postData['div_name'];
            $term = $postData['term'];

            $insert_array = array(
                'oc_no' => $oc_no,
                'p_no' => $pno,
                'name' => $name,
                'class' => $class,
                'issb_batch' => $batch_no,
                'do_id' => $this->session->userdata('user_id'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'category' => $category,
                'divison_name' => $div_name,
                'term' => $term

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
                redirect('D_O/add_punishment');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('D_O/add_punishment');
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
                redirect('D_O/add_excuse');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('D_O/add_excuse');
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
                'term' => $term
            );

            $insert = $this->db->insert('observation_records', $insert_array);
            //$last_id = $this->db->insert_id();

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Observation added successfully');
                redirect('D_O/add_observation');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('D_O/add_observation');
            }
        }
    }


    public function search_cadet()
    {
        if ($this->input->post()) {
            $oc_no = $_POST['oc_no'];
            $query = $this->db->where('oc_no', $oc_no)->where('divison_name', $this->session->userdata('division'))->get('pn_form1s')->row_array();
            echo json_encode($query);
        }
    }

    public function Inspection_record()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/inspection_record');
        }
    }
    public function psychologist_report()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/psychologist_report');
        }
    }
    public function auto_biography()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/biography');
        }
    }
    public function personal_data()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/personal_data');
        }
    }
    public function add_club()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['club_data'] = $this->db->get('cadet_club')->result_array();
            $this->load->view('do/add_club', $data);
        }
    }
    public function daily_module()
    {
        if ($this->session->has_userdata('user_id')) {
            // $data['club_data'] = $this->db->get('cadet_club')->result_array();
            $this->load->view('do/daily_module');//, $data);
        }
    }
    public function add_punishment()
    {
        if ($this->session->has_userdata('user_id')) {
            // $data['club_data'] = $this->db->get('cadet_club')->result_array();
            $this->load->view('do/add_punishment');//, $data);
        }
    }
    public function add_excuse()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/add_excuse');//, $data);
        }
    }
    public function add_observation()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('do/add_observation');//, $data);
        }
    }

    public function view_punishment_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr' );
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('pr.do_id',$this->session->userdata('user_id'));
            $this->db->where('pr.start_date <=',date('Y-m-d'));
            $this->db->where('pr.end_date >=',date('Y-m-d'));
            $data['punishment_records'] = $this->db->get()->result_array();
            // $data['punishment_records'] = $this->db->where('do_id',$this->session->userdata('user_id'))->get('punishment_records')->result_array();
            $this->load->view('do/view_punishment_list', $data);
        }
    }

    public function view_excuse_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('mr.*, f.*');
            $this->db->from('medical_records mr' );
            $this->db->join('pn_form1s f', 'f.p_id = mr.p_id');
            $this->db->where('f.oc_no = mr.oc_no');
            $this->db->where('mr.do_id',$this->session->userdata('user_id'));
            $this->db->where('mr.start_date <=',date('Y-m-d'));
            $this->db->where('mr.end_date >=',date('Y-m-d'));
            $data['medical_records'] = $this->db->get()->result_array();
            $this->load->view('do/view_excuse_list', $data);
        }
    }
    public function view_observation_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('or.*, f.*');
            $this->db->from('observation_records or' );
            $this->db->join('pn_form1s f', 'f.p_id = or.p_id');  
            $this->db->where('or.do_id',$this->session->userdata('user_id'));
            $data['observation_records'] = $this->db->get()->result_array();
            $this->load->view('do/view_observation_list', $data);
        }
    }
    public function search_excuse_by_date()
    {
        if ($this->session->has_userdata('user_id')) {

            $date = $_POST['search_date'];

            $this->db->select('mr.*, f.*');
            $this->db->from('medical_records mr' );
            $this->db->join('pn_form1s f', 'f.p_id = mr.p_id');
            $this->db->where('f.oc_no = mr.oc_no');
            $this->db->where('mr.do_id',$this->session->userdata('user_id'));
            $this->db->where('mr.start_date =',$date);
            // $this->db->where('mr.end_date >=',date('Y-m-d'));
            $data['medical_records'] = $this->db->get()->result_array();
            $data['search_date'] = $date;
            $view_page = $this->load->view('do/view_excuse_list', $data, TRUE);
            echo $view_page;
            json_encode($view_page);
        }
    }
    public function search_punish_by_date()
    {
        if ($this->session->has_userdata('user_id')) {

            $date = $_POST['search_date'];

            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr' );
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('pr.do_id',$this->session->userdata('user_id'));
            $this->db->where('pr.start_date =', $date);
            $data['punishment_records'] = $this->db->get()->result_array();
            $data['search_date'] = $date;
            $view_page = $this->load->view('do/view_punishment_list', $data, TRUE);
            echo $view_page;
            json_encode($view_page);
        }
    }
}
