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

            $data['kashmir_count']= $this->db->select('count(*) as count')->where('divison_name','Kashmir division')->get('pn_form1s')->row_array();
            $data['tariq_count']= $this->db->select('count(*) as count')->where('divison_name','Tariq division')->get('pn_form1s')->row_array();
            $data['shamsheer_count']= $this->db->select('count(*) as count')->where('divison_name','Shamsheer division')->get('pn_form1s')->row_array();
            $data['hamza_count']= $this->db->select('count(*) as count')->where('divison_name','Hamza division')->get('pn_form1s')->row_array();
            $data['nasr_count']= $this->db->select('count(*) as count')->where('divison_name','Nasr division')->get('pn_form1s')->row_array();
            $data['khaibar_count']= $this->db->select('count(*) as count')->where('divison_name','Khaibar division')->get('pn_form1s')->row_array();
            $data['saad_count']= $this->db->select('count(*) as count')->where('divison_name','Saad division')->get('pn_form1s')->row_array();
            $data['aslat_count']= $this->db->select('count(*) as count')->where('divison_name','Aslat division')->get('pn_form1s')->row_array();
            $data['zulfiqar_count']= $this->db->select('count(*) as count')->where('divison_name','Zulfiqar division')->get('pn_form1s')->row_array();
            $data['yarmook_count']= $this->db->select('count(*) as count')->where('divison_name','Yarmook division')->get('pn_form1s')->row_array();
            $data['alamgir_count']= $this->db->select('count(*) as count')->where('divison_name','Alamgir division')->get('pn_form1s')->row_array();
            $data['tabuk_count']= $this->db->select('count(*) as count')->where('divison_name','Tabuk division')->get('pn_form1s')->row_array();
            $data['saif_count']= $this->db->select('count(*) as count')->where('divison_name','Saif division')->get('pn_form1s')->row_array();
            $data['khalid_count']= $this->db->select('count(*) as count')->where('divison_name','Khalid division')->get('pn_form1s')->row_array();
            $data['moawin_count']= $this->db->select('count(*) as count')->where('divison_name','Moawin division')->get('pn_form1s')->row_array();

            $this->load->view('cao/dashboard',$data);
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
            $this->load->view('cao/daily_module'); //, $data);
        }
    }

    public function add_punishment()
    {
        if ($this->session->has_userdata('user_id')) {
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
    public function PN_Form()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['divisions'] = $this->db->get('divisions')->result_array();
            $this->load->view('cao/pn_form1', $data);
        }
    }

    public function view_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['pn_data'] = $this->db->where('divison_name', 'XYZ')->get('pn_form1s')->result_array();
            $this->load->view('cao/view_dossier', $data);
        }
    }



    public function view_academy_analytics()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['divisions'] = $this->db->get('divisions')->result_array();
            $this->load->view('cao/academy_analytics', $data);
        }
    }

    public function get_graph_divisionwise()
    {
        $selected_div = $_POST['selected_division'];

        $data['do_ids'] = $this->db->select('id')->where('acct_type', 'do')->where('division', $selected_div)->get('security_info')->result_array();
        $array[] = "";
        foreach ($data['do_ids'] as $row) {
            $array[] = $row['id'];
        }
        $data['PST_result'] = $this->db->select('count(*) as count')->where('PST_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['SST_result'] = $this->db->select('count(*) as count')->where('SST_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['PET_I_result'] = $this->db->select('count(*) as count')->where('PET_I_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['PET_II_result'] = $this->db->select('count(*) as count')->where('PET_II_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['assault_result'] = $this->db->select('count(*) as count')->where('assault_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['saluting_result'] = $this->db->select('count(*) as count')->where('saluting_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['PLX_result'] = $this->db->select('count(*) as count')->where('PLX_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['long_cross_result'] = $this->db->select('count(*) as count')->where('long_cross_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['mini_cross_result'] = $this->db->select('count(*) as count')->where('mini_cross_result', 'qualified')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['Total_cadet'] = $this->db->select('count(*) as count')->where_in('do_id', $array)->get('physical_milestone')->row_array();
        $data['divisions'] = $this->db->get('divisions')->result_array();
        $data['division_set'] = $selected_div;

        echo $data = $this->load->view('cao/academy_analytics', $data, TRUE);
    }

    public function get_graph_overall()
    {
        $graph_type = $_POST['type'];

        $data['PST_result'] = $this->db->select('count(*) as count')->where('PST_result', 'qualified')->get('physical_milestone')->row_array();
        $data['SST_result'] = $this->db->select('count(*) as count')->where('SST_result', 'qualified')->get('physical_milestone')->row_array();
        $data['PET_I_result'] = $this->db->select('count(*) as count')->where('PET_I_result', 'qualified')->get('physical_milestone')->row_array();
        $data['PET_II_result'] = $this->db->select('count(*) as count')->where('PET_II_result', 'qualified')->get('physical_milestone')->row_array();
        $data['assault_result'] = $this->db->select('count(*) as count')->where('assault_result', 'qualified')->get('physical_milestone')->row_array();
        $data['saluting_result'] = $this->db->select('count(*) as count')->where('saluting_result', 'qualified')->get('physical_milestone')->row_array();
        $data['PLX_result'] = $this->db->select('count(*) as count')->where('PLX_result', 'qualified')->get('physical_milestone')->row_array();
        $data['long_cross_result'] = $this->db->select('count(*) as count')->where('long_cross_result', 'qualified')->get('physical_milestone')->row_array();
        $data['mini_cross_result'] = $this->db->select('count(*) as count')->where('mini_cross_result', 'qualified')->get('physical_milestone')->row_array();

        $data['divisions'] = $this->db->get('divisions')->result_array();
        $data['division_set'] = 'Overall';

        $data['Total_cadet'] = $this->db->select('count(*) as count')->get('physical_milestone')->row_array();

        echo $data = $this->load->view('cao/academy_analytics', $data, TRUE);
    }

    public function view_activity_log()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['activity_log'] = $this->db->get('activity_log')->result_array();
            $this->load->view('cao/activity_log', $data);
        }
    }
    

    public function get_graph_termwise()
    {
        $graph_type = $_POST['type'];

        $data['divisions'] = $this->db->get('divisions')->result_array();
        $data['division_set'] = 'termwise';
        
        $data['PST_result_tp'] = $this->db->select('count(*) as count')->where('PST_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['SST_result_tp'] = $this->db->select('count(*) as count')->where('SST_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['PET_I_result_tp'] = $this->db->select('count(*) as count')->where('PET_I_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['PET_II_result_tp'] = $this->db->select('count(*) as count')->where('PET_II_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['assault_result_tp'] = $this->db->select('count(*) as count')->where('assault_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['saluting_result_tp'] = $this->db->select('count(*) as count')->where('saluting_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['PLX_result_tp'] = $this->db->select('count(*) as count')->where('PLX_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['long_cross_result_tp'] = $this->db->select('count(*) as count')->where('long_cross_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['mini_cross_result_tp'] = $this->db->select('count(*) as count')->where('mini_cross_result', 'qualified')->where('term', 'Term-P')->get('physical_milestone')->row_array();

        $data['PST_result_t1'] = $this->db->select('count(*) as count')->where('PST_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['SST_result_t1'] = $this->db->select('count(*) as count')->where('SST_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['PET_I_result_t1'] = $this->db->select('count(*) as count')->where('PET_I_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['PET_II_result_t1'] = $this->db->select('count(*) as count')->where('PET_II_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['assault_result_t1'] = $this->db->select('count(*) as count')->where('assault_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['saluting_result_t1'] = $this->db->select('count(*) as count')->where('saluting_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['PLX_result_t1'] = $this->db->select('count(*) as count')->where('PLX_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['long_cross_result_t1'] = $this->db->select('count(*) as count')->where('long_cross_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['mini_cross_result_t1'] = $this->db->select('count(*) as count')->where('mini_cross_result', 'qualified')->where('term', 'Term-I')->get('physical_milestone')->row_array();

        $data['PST_result_t2'] = $this->db->select('count(*) as count')->where('PST_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['SST_result_t2'] = $this->db->select('count(*) as count')->where('SST_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['PET_I_result_t2'] = $this->db->select('count(*) as count')->where('PET_I_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['PET_II_result_t2'] = $this->db->select('count(*) as count')->where('PET_II_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['assault_result_t2'] = $this->db->select('count(*) as count')->where('assault_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['saluting_result_t2'] = $this->db->select('count(*) as count')->where('saluting_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['PLX_result_t2'] = $this->db->select('count(*) as count')->where('PLX_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['long_cross_result_t2'] = $this->db->select('count(*) as count')->where('long_cross_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['mini_cross_result_t2'] = $this->db->select('count(*) as count')->where('mini_cross_result', 'qualified')->where('term', 'Term-II')->get('physical_milestone')->row_array();

        $data['PST_result_t3'] = $this->db->select('count(*) as count')->where('PST_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['SST_result_t3'] = $this->db->select('count(*) as count')->where('SST_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['PET_I_result_t3'] = $this->db->select('count(*) as count')->where('PET_I_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['PET_II_result_t3'] = $this->db->select('count(*) as count')->where('PET_II_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['assault_result_t3'] = $this->db->select('count(*) as count')->where('assault_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['saluting_result_t3'] = $this->db->select('count(*) as count')->where('saluting_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['PLX_result_t3'] = $this->db->select('count(*) as count')->where('PLX_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['long_cross_result_t3'] = $this->db->select('count(*) as count')->where('long_cross_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();
        $data['mini_cross_result_t3'] = $this->db->select('count(*) as count')->where('mini_cross_result', 'qualified')->where('term', 'Term-III')->get('physical_milestone')->row_array();

        $data['Total_cadet_tp'] = $this->db->select('count(*) as count')->where('term', 'Term-P')->get('physical_milestone')->row_array();
        $data['Total_cadet_t1'] = $this->db->select('count(*) as count')->where('term', 'Term-I')->get('physical_milestone')->row_array();
        $data['Total_cadet_t2'] = $this->db->select('count(*) as count')->where('term', 'Term-II')->get('physical_milestone')->row_array();
        $data['Total_cadet_t3'] = $this->db->select('count(*) as count')->where('term', 'Term-III')->get('physical_milestone')->row_array();

        echo $data = $this->load->view('cao/academy_analytics', $data, TRUE);
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
                'end_date' => $end_date,
                'status' => 'Approved'

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
                'status' => 'Approved'
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
            $div_name = $postData['div'];
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
                redirect('CAO/PN_Form');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CAO/PN_Form');
            }
        }
    }

    public function search_all_cadets_for_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['pn_data'] = $this->db->get('pn_form1s')->result_array();
            if (count($data['pn_data']) > 0) {
                $view_page = $this->load->view('cao/view_dossier', $data, TRUE);
                echo $view_page;
                json_encode($view_page);
            } else {
                echo '0';
            }
        }
    }

    public function search_cadet_for_dossier()
    {
        if ($this->session->has_userdata('user_id')) {

            $oc_no = $_POST['oc_no'];
            $data['pn_data'] = $this->db->where('oc_no', $oc_no)->get('pn_form1s')->result_array();
            $data['oc_no_entered'] = $oc_no;
            if (count($data['pn_data']) > 0) {
                $view_page = $this->load->view('cao/view_dossier', $data, TRUE);
                echo $view_page;
                json_encode($view_page);
            } else {
                echo '0';
            }
        }
    }

    public function view_milestone_in_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('or.*, f.*');
            $this->db->from('physical_milestone or');
            $this->db->join('pn_form1s f', 'f.p_id = or.p_id');
            $data['milestone_records'] = $this->db->get()->row_array();
            // print_r( $data['milestone_records']);exit;
            echo json_encode($data['milestone_records']);
        }
    }

    public function view_club_in_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('cr.*, f.*');
            $this->db->from('club_records cr');
            $this->db->join('pn_form1s f', 'f.p_id = cr.p_id');
            $data['club_records'] = $this->db->get()->result_array();
            // print_r( $data['milestone_records']);exit;
            echo json_encode($data['club_records']);
        }
    }

    public function view_punishments_in_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $cadet_id = $_POST['id'];

            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('f.p_id', $cadet_id);
            // $this->db->where('pr.status', 'Approved');
            $data['punishment_records'] = $this->db->get()->result_array();

            echo json_encode($data['punishment_records']);
        }
    }

    public function view_excuses_in_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $cadet_id = $_POST['id'];

            $this->db->select('pr.*, f.*');
            $this->db->from('medical_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('f.p_id', $cadet_id);
            $data['excuse_records'] = $this->db->get()->result_array();

            echo json_encode($data['excuse_records']);
        }
    }

    public function view_observation_in_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $cadet_id = $_POST['id'];
            $this->db->select('pr.*, f.*');
            $this->db->from('observation_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.p_id', $cadet_id);
            // $this->db->where('pr.status', 'Approved');
            $data['observation_records'] = $this->db->get()->result_array();
            echo json_encode($data['observation_records']);
        }
    }

   

}
