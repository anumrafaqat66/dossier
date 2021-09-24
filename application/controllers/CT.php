<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->has_userdata('user_id')) {
            $id = $this->session->userdata('user_id');

            $this->load->view('ct/dashboard');
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
            $this->load->view('ct/daily_module'); //, $data);
        }
    }

    public function add_punishment()
    {
        if ($this->session->has_userdata('user_id')) {
            // $data['club_data'] = $this->db->get('cadet_club')->result_array();
            $this->load->view('ct/add_punishment'); //, $data);
        }
    }
    public function add_excuse()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('ct/add_excuse'); //, $data);
        }
    }
    public function add_observation()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('ct/add_observation'); //, $data);
        }
    }
    public function PN_Form()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['divisions'] = $this->db->get('divisions')->result_array();
            $this->load->view('ct/pn_form1', $data);
        }
    }

    public function view_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['pn_data'] = $this->db->where('divison_name', 'XYZ')->get('pn_form1s')->result_array();
            $this->load->view('ct/view_dossier', $data);
        }
    }

    public function view_academy_analytics()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['divisions'] = $this->db->get('divisions')->result_array();
            $this->load->view('ct/academy_analytics', $data);
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

        echo $data = $this->load->view('ct/academy_analytics', $data, TRUE);
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

        echo $data = $this->load->view('ct/academy_analytics', $data, TRUE);
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

        echo $data = $this->load->view('ct/academy_analytics', $data, TRUE);
    }

    public function view_activity_log()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['activity_log'] = $this->db->get('activity_log')->result_array();
            $this->load->view('ct/activity_log', $data);
        }
    }

    public function view_punishment_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');

            $data['punishment_records'] = $this->db->get()->result_array();

            $this->load->view('ct/view_punishment_list', $data);
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
            $this->load->view('ct/view_excuse_list', $data);
        }
    }
    public function view_observation_list()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->db->select('or.*, f.*');
            $this->db->from('observation_records or');
            $this->db->join('pn_form1s f', 'f.p_id = or.p_id');
            $this->db->where('or.status !=', 'Rejected');
            $data['observation_records'] = $this->db->get()->result_array();
            $this->load->view('ct/view_observation_list', $data);
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
            $view_page = $this->load->view('ct/view_excuse_list', $data, TRUE);
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
            $view_page = $this->load->view('ct/view_punishment_list', $data, TRUE);
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
                redirect('ct/add_punishment');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('ct/add_punishment');
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
                redirect('ct/add_excuse');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('ct/add_excuse');
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
                redirect('ct/add_observation');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('ct/add_observation');
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
            $view_page = $this->load->view('ct/view_observation_list', $data, TRUE);
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
            $view_page = $this->load->view('ct/view_punishment_list', $data, TRUE);
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
                redirect('ct/PN_Form');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('ct/PN_Form');
            }
        }
    }

    public function search_all_cadets_for_dossier()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['pn_data'] = $this->db->get('pn_form1s')->result_array();
            if (count($data['pn_data']) > 0) {
                $view_page = $this->load->view('ct/view_dossier', $data, TRUE);
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
                $view_page = $this->load->view('ct/view_dossier', $data, TRUE);
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

    //Making all modules same
    public function view_dossier_folder()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['pn_data'] = $this->db->where('divison_name',  'XYZ')->get('pn_form1s')->row_array();
            $this->load->view('ct/view_dossier_folder', $data);
        }
    }

    public function search_cadet_for_dossier_folder()
    {
        if ($this->session->has_userdata('user_id')) {
            $oc_no = $_POST['oc_no'];
            // $data['pn_data'] = $this->db->where('divison_name', $this->session->userdata('division'))->where('oc_no', $oc_no)->get('pn_form1s')->row_array();
            $data['pn_data'] = $this->db->where('oc_no', $oc_no)->get('pn_form1s')->row_array();

            if (!isset($oc_no)) {
                $data['pn_personal_data'] = $this->db->where('p_id', $data['pn_data']['p_id'])->get('personal_datas')->row_array();
            }

            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-I');
            $this->db->where('pr.status', 'Approved');
            // $this->db->where('f.divison_name', $this->session->userdata('division'));
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $data['pn_punish_data'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-II');
            $this->db->where('pr.status', 'Approved');
            // $this->db->where('f.divison_name', $this->session->userdata('division'));
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $data['pn_punish_data_term2'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('punishment_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no = pr.oc_no');
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-III');
            $this->db->where('pr.status', 'Approved');
            // $this->db->where('f.divison_name', $this->session->userdata('division'));
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $data['pn_punish_data_term3'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('observation_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            // $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-I');
            $this->db->where('pr.status', 'Approved');
            $data['pn_obs_data_term1'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('observation_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-II');
            $this->db->where('pr.status', 'Approved');
            $data['pn_obs_data_term2'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('observation_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-III');
            $this->db->where('pr.status', 'Approved');
            $data['pn_obs_data_term3'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('warning_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_warning_data'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('inspection_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_inspection_data'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('medical_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_medical_data'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('physical_milestone pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            // $this->db->where('pr.term', 'Term-I');
            $data['pn_physical_tests_data'] = $this->db->get()->result_array();

            //Term-P
            $this->db->select('pr.*, f.*');
            $this->db->from('physical_milestone pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-P');
            $data['pn_physical_tests_data_tp'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_i_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-P');
            $data['pn_pet1_data_tp'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_ii_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-P');
            $data['pn_pet2_data_tp'] = $this->db->get()->row_array();

            //Term-I
            $this->db->select('pr.*, f.*');
            $this->db->from('physical_milestone pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-I');
            $data['pn_physical_tests_data_t1'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_i_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-I');
            $data['pn_pet1_data_t1'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_ii_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-I');
            $data['pn_pet2_data_t1'] = $this->db->get()->row_array();

            //term-II
            $this->db->select('pr.*, f.*');
            $this->db->from('physical_milestone pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-II');
            $data['pn_physical_tests_data_t2'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_i_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-II');
            $data['pn_pet1_data_t2'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_ii_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-II');
            $data['pn_pet2_data_t2'] = $this->db->get()->row_array();

            //Term-III
            $this->db->select('pr.*, f.*');
            $this->db->from('physical_milestone pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-III');
            $data['pn_physical_tests_data_t3'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_i_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-III');
            $data['pn_pet1_data_t3'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('term_ii_details pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-III');
            $data['pn_pet2_data_t3'] = $this->db->get()->row_array();

            //Result Term-I
            $this->db->select('pr.*, f.*');
            $this->db->from('academic_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-I');
            $this->db->where('pr.doc_type', 'Result');
            $data['pn_result_record_t1'] = $this->db->get()->result_array();
            //Result Term-II
            $this->db->select('pr.*, f.*');
            $this->db->from('academic_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-II');
            $this->db->where('pr.doc_type', 'Result');
            $data['pn_result_record_t2'] = $this->db->get()->result_array();
            //Result Term-III
            $this->db->select('pr.*, f.*');
            $this->db->from('academic_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-III');
            $this->db->where('pr.doc_type', 'Result');
            $data['pn_result_record_t3'] = $this->db->get()->result_array();
            //Result Sea Report Training
            $this->db->select('pr.*, f.*');
            $this->db->from('academic_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.doc_type', 'SeaTraining');
            $data['pn_sea_training_record'] = $this->db->get()->result_array();

            //OLQ
            $this->db->select('pr.*, f.*');
            $this->db->from('officer_qualities pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-I');
            $data['pn_officer_qualities_data_t1'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('officer_qualities pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-II');
            $data['pn_officer_qualities_data_t2'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('officer_qualities pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.term', 'Term-III');
            $data['pn_officer_qualities_data_t3'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('personal_datas pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_personal_data'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('divisional_officer_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_divisional_officer_data'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('cadets_autobiographies pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_autobiography_data'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('psychologist_reports pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_psychologist_data'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('warning_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_warning_records'] = $this->db->get()->result_array();

            //General Remarks 
            //Term 1
            $this->db->select('pr.*, f.*');
            $this->db->from('general_remarks pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.assessment', 'Mid Term Assessment');
            $this->db->where('pr.term', 'Term-I');
            $data['pn_general_remarks_term1_mid'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('general_remarks pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.assessment', 'Terminal Assessment');
            $this->db->where('pr.term', 'Term-I');
            $data['pn_general_remarks_term1_final'] = $this->db->get()->result_array();
            //Term 2
            $this->db->select('pr.*, f.*');
            $this->db->from('general_remarks pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.assessment', 'Mid Term Assessment');
            $this->db->where('pr.term', 'Term-II');
            $data['pn_general_remarks_term2_mid'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('general_remarks pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.assessment', 'Terminal Assessment');
            $this->db->where('pr.term', 'Term-II');
            $data['pn_general_remarks_term2_final'] = $this->db->get()->result_array();
            //Term 3
            $this->db->select('pr.*, f.*');
            $this->db->from('general_remarks pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.assessment', 'Mid Term Assessment');
            $this->db->where('pr.term', 'Term-III');
            $data['pn_general_remarks_term3_mid'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('general_remarks pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $this->db->where('pr.assessment', 'Terminal Assessment');
            $this->db->where('pr.term', 'Term-III');
            $data['pn_general_remarks_term3_final'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('distinctions_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_distinctions_records'] = $this->db->get()->result_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('seniority_records pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_seniority_records'] = $this->db->get()->row_array();

            $this->db->select('pr.*, f.*');
            $this->db->from('branch_allocations pr');
            $this->db->join('pn_form1s f', 'f.p_id = pr.p_id');
            // $this->db->where('pr.do_id', $this->session->userdata('user_id'));
            $this->db->where('f.divison_name', $this->session->userdata('division'));
            $this->db->where('f.oc_no', $oc_no);
            $data['pn_branch_allocations'] = $this->db->get()->row_array();

            if ($data['pn_data'] != null) {
                $data['oc_no_entered'] = $oc_no;
            } else {
                $data['oc_no_entered'] = NULL;
            }
            $view_page = $this->load->view('ct/view_dossier_folder', $data, TRUE);
            echo $view_page;
            json_encode($view_page);
        }
    }

    public function personal_data()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['pn_data'] = $this->db->get('pn_form1s')->result_array();
            $data['divisions'] = $this->db->get('divisions')->result_array();
            $this->load->view('ct/personal_data', $data);
        }
    }

    public function add_club()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['club_data'] = $this->db->get('cadet_club')->result_array();
            $this->load->view('ct/add_club', $data);
        }
    }

    public function Inspection_record()
    {
        if ($this->session->has_userdata('user_id')) {
            $data['pn_data'] = $this->db->get('pn_form1s')->result_array();
            $this->load->view('ct/inspection_record', $data);
        }
    }

    public function psychologist_report()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('ct/psychologist_report');
        }
    }
    
    public function auto_biography()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('ct/biography');
        }
    }

    public function save_cadet_club()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $oc_no = $postData['oc_num'];
            $club = $postData['club'];
            $id = $postData['p_id'];

            $insert_array = array(
                'p_id' => $id,
                'assigned_club' => $club,
                'do_id' => $this->session->userdata('user_id'),
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $update_array = array(
                'status' =>  'deleted'
            );
            $this->db->where('p_id', $id)->update('club_records', $update_array);
            $insert = $this->db->insert('club_records', $insert_array);

            $cond  = ['oc_no' => $oc_no];
            $data_update = [
                'club' => $club
            ];

            $this->db->where($cond);
            $update = $this->db->update('pn_form1s', $data_update);

            if (!empty($insert)) {

                $cadet_name = $this->db->select('name')->where('oc_no', $oc_no)->get('pn_form1s')->row_array();

                $insert_activity = array(
                    'activity_module' => $this->session->userdata('acct_type'),
                    'activity_action' => 'add',
                    'activity_detail' => "Cadet " . $cadet_name['name'] . " has been added to Club: " . $club,
                    'activity_by' => $this->session->userdata('username'),
                    'activity_date' => date('Y-m-d H:i:s')
                );

                $insert_act = $this->db->insert('activity_log', $insert_activity);
                $last_id = $this->db->insert_id();

                $query = $this->db->where('username !=', $this->session->userdata('username'))->get('security_info')->result_array();

                for ($i = 0; $i < count($query); $i++) {
                    $insert_activity_seen = array(
                        'activity_id' => $last_id,
                        'user_id' => $query[$i]['id'],
                        'seen' => 'no'
                    );
                    $insert_act_seen = $this->db->insert('activity_log_seen', $insert_activity_seen);
                }
            }

            if (!empty($update) && !empty($insert)) {
                $this->session->set_flashdata('success', 'Cadet added to Club successfully');
                redirect('CT/add_club');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CT/add_club');
            }
        }
    }

    public function save_autobiography()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());
            $file_size = $_FILES['autobiography']['size'][0] . " kb";
            $p_id = $postData['id'];
            $upload1 = $this->upload_autobiograhy($_FILES['autobiography']);

            if (count($upload1) > 1) {
                $files = implode(',', $upload1);
            } else {
                $files = $upload1[0];
            }
            $iparr = explode(".", $files);
            $file_type = $iparr[1];

            $insert_array = array(
                'p_id' => $p_id,
                'do_id' => $this->session->userdata('user_id'),
                'file_name' => $files,
                'file_type' => $file_type,
                'file_size' => $file_size,
                'created_at' => date('Y-m-d H:i:s')
            );
            $insert = $this->db->insert('cadets_autobiographies', $insert_array);
        }

        if (!empty($insert)) {

            $cadet_name = $this->db->select('name')->where('p_id', $p_id)->get('pn_form1s')->row_array();

            $insert_activity = array(
                'activity_module' => $this->session->userdata('acct_type'),
                'activity_action' => 'add',
                'activity_detail' => "Autobiography added for cadet " . $cadet_name['name'],
                'activity_by' => $this->session->userdata('username'),
                'activity_date' => date('Y-m-d H:i:s')
            );

            $insert_act = $this->db->insert('activity_log', $insert_activity);
            $last_id = $this->db->insert_id();

            $query = $this->db->where('username !=', $this->session->userdata('username'))->get('security_info')->result_array();

            for ($i = 0; $i < count($query); $i++) {
                $insert_activity_seen = array(
                    'activity_id' => $last_id,
                    'user_id' => $query[$i]['id'],
                    'seen' => 'no'
                );
                $insert_act_seen = $this->db->insert('activity_log_seen', $insert_activity_seen);
            }
        }

        if (!empty($insert)) {
            $this->session->set_flashdata('success', 'Data Submitted successfully');
            redirect('CT/auto_biography');
        } else {
            $this->session->set_flashdata('failure', 'Something went wrong, try again.');
            redirect('CT/auto_biography');
        }
    }

    public function upload_autobiograhy()
    {
        $filesCount = count($_FILES['autobiography']['name']);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name']     = $_FILES['autobiography']['name'][$i];
            $_FILES['file']['type']     = $_FILES['autobiography']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['autobiography']['tmp_name'][$i];
            $_FILES['file']['error']    = $_FILES['autobiography']['error'][$i];
            $_FILES['file']['size']     = $_FILES['autobiography']['size'][$i];

            $config['upload_path'] = 'uploads/documents';
            $config['allowed_types']        = 'gif|jpg|png|doc|xls|pdf|xlsx|docx|ppt|pptx|jpeg';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $data = array('msg' => $this->upload->display_errors());
            } else {
                $data = array('msg' => "success");
                $data['upload_data'] = $this->upload->data();
                $count[$i] = $data['upload_data']['file_name'];
            }
        }
        return $count;
    }

    public function add_inspection_record()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            $officer_id = $postData['id'];
            $date = $postData['date'];
            $inspecting_officer_name = $postData['inspector_name'];
            $remarks = $postData['remarks'];

            $insert_array = array(
                'p_id' => $officer_id,
                'date' => $date,
                'inspecting_officer_name' => $inspecting_officer_name,
                'remarks' => $remarks,
                'do_id' => $this->session->userdata('user_id'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $insert = $this->db->insert('inspection_records', $insert_array);

            if (!empty($insert)) {

                $cadet_name = $this->db->select('name')->where('p_id', $officer_id)->get('pn_form1s')->row_array();

                $insert_activity = array(
                    'activity_module' => $this->session->userdata('acct_type'),
                    'activity_action' => 'add',
                    'activity_detail' => "Inspection record has been added for Cadet " . $cadet_name['name'] . " by officer " . $inspecting_officer_name,
                    'activity_by' => $this->session->userdata('username'),
                    'activity_date' => date('Y-m-d H:i:s')
                );

                $insert_act = $this->db->insert('activity_log', $insert_activity);
                $last_id = $this->db->insert_id();

                $query = $this->db->where('username !=', $this->session->userdata('username'))->get('security_info')->result_array();

                for ($i = 0; $i < count($query); $i++) {
                    $insert_activity_seen = array(
                        'activity_id' => $last_id,
                        'user_id' => $query[$i]['id'],
                        'seen' => 'no'
                    );
                    $insert_act_seen = $this->db->insert('activity_log_seen', $insert_activity_seen);
                }
            }

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Data Submitted successfully');
                redirect('CT/Inspection_record');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CT/Inspection_record');
            }
        }
    }

    public function add_personal_record()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());

            //Insert into PN Form 1 Table
            $oc_no = $postData['oc_no'];
            $p_no = $postData['pno'];
            $name = $postData['name'];
            $class = $postData['class'];
            $batch_no = $postData['batch_no'];
            $category = $postData['category'];
            $div_name = $postData['div'];
            $term = $postData['term'];
            $country = $postData['country'];

            $insert_array_pnform = array(
                'oc_no' => $oc_no,
                'p_no' => $p_no,
                'name' => $name,
                'class' => $class,
                'issb_batch' => $batch_no,
                'do_id' => $this->session->userdata('user_id'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'category' => $category,
                'divison_name' => $div_name,
                'term' => $term,
                'bahadur' => $country
            );

            $insert_pnform = $this->db->insert('pn_form1s', $insert_array_pnform);
            $inserted_officer_id = $this->db->insert_id();

            $upload1 = $this->upload($_FILES['report']);
            if (count($upload1) > 1) {
                $files = implode(',', $upload1);
            } else {
                $files = $upload1[0];
            }

            $officer_id = $inserted_officer_id;
            $course = $postData['course'];
            $religion = $postData['religion'];
            $e_contact = $postData['e_contact'];
            $telephone_no = $postData['telephone'];
            $ex_army = $postData['army'];
            $father_name = $postData['father_name'];
            $father_occupation = $postData['occupation'];
            $next_of_kin = $postData['next_of_kin'];
            $siblings = $postData['siblings'];
            $near_relatives = $postData['relatives'];
            $identification_marks = $postData['mark'];
            $height = $postData['height'];
            $weight = $postData['weight'];
            $navy_joining_date = $postData['joining_date'];
            $entry_mode = $postData['entry_mode'];
            $service_id = $postData['service_no'];
            $nic = $postData['cnic'];
            $blood_group = $postData['blood'];
            $address = $postData['address'];
            $karachi_address = $postData['khi_address'];
            $matric_school = $postData['matric'];
            $matric_division = $postData['grade_matric'];
            $intermediate_college = $postData['college'];
            $intermediate_division = $postData['grade_intermediate'];
            $diploma = $postData['diploma'];


            $insert_array = array(
                'p_id' => $officer_id,
                'p_no' => $p_no,
                'course' => $course,
                'religion' => $religion,
                'emergency_contact' => $e_contact,
                'telephone_no' => $telephone_no,
                'ex_army' => $ex_army,
                'father_name' => $father_name,
                'father_occupation' => $father_occupation,
                'next_of_kin' => $next_of_kin,
                'siblings' => $siblings,
                'near_relatives' => $near_relatives,
                'identification_marks' => $identification_marks,
                'height' => $height,
                'weight' => $weight,
                'navy_joining_date' => $navy_joining_date,
                'entry_mode' => $entry_mode,
                'service_id' => $service_id,
                'nic' => $nic,
                'blood_group' => $blood_group,
                'address' => $address,
                'karachi_address' => $karachi_address,
                'matric_school' => $matric_school,
                'matric_division' => $matric_division,
                'intermediate_college' => $intermediate_college,
                'intermediate_division' => $intermediate_division,
                'diploma' => $diploma,
                'do_id' => $this->session->userdata('user_id'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'upload_file' => $files
            );

            $insert = $this->db->insert('personal_datas', $insert_array);

            if (!empty($insert)) {

                $cadet_name = $this->db->select('name')->where('p_id', $officer_id)->get('pn_form1s')->row_array();

                $insert_activity = array(
                    'activity_module' => $this->session->userdata('acct_type'),
                    'activity_action' => 'add',
                    'activity_detail' => "Personal record has been added for Cadet " . $cadet_name['name'],
                    'activity_by' => $this->session->userdata('username'),
                    'activity_date' => date('Y-m-d H:i:s')
                );

                $insert_act = $this->db->insert('activity_log', $insert_activity);
                $last_id = $this->db->insert_id();

                $query = $this->db->where('username !=', $this->session->userdata('username'))->get('security_info')->result_array();

                for ($i = 0; $i < count($query); $i++) {
                    $insert_activity_seen = array(
                        'activity_id' => $last_id,
                        'user_id' => $query[$i]['id'],
                        'seen' => 'no'
                    );
                    $insert_act_seen = $this->db->insert('activity_log_seen', $insert_activity_seen);
                }
            }

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Data Submitted successfully');
                redirect('CT/personal_data');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CT/personal_data');
            }
        }
    }

    public function upload($fieldname)
    {
        $filesCount = count($_FILES['report']['name']);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name']     = $_FILES['report']['name'][$i];
            $_FILES['file']['type']     = $_FILES['report']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['report']['tmp_name'][$i];
            $_FILES['file']['error']    = $_FILES['report']['error'][$i];
            $_FILES['file']['size']     = $_FILES['report']['size'][$i];

            $config['upload_path'] = 'uploads/documents';
            $config['allowed_types']        = 'gif|jpg|png|doc|xls|pdf|xlsx|docx|ppt|pptx|jpeg';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $data = array('msg' => $this->upload->display_errors());
            } else {
                $data = array('msg' => "success");
                $data['upload_data'] = $this->upload->data();
                $count[$i] = $data['upload_data']['file_name'];
            }
        }
        return $count;
    }

    public function save_psychologist_report()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());
            // print_r($_FILES['psycologist_report']['size'][0]);
            $file_size = $_FILES['psycologist_report']['size'][0] . " kb";
            // echo $file_size;exit;
            $p_id = $postData['id'];
            $upload1 = $this->upload_psychologist_report($_FILES['psycologist_report']);



            if (count($upload1) > 1) {
                $files = implode(',', $upload1);
            } else {
                $files = $upload1[0];
                // $file_type=;
                // $file_path=;
                // $file_size=;
            }
            $iparr = explode(".", $files);
            $file_type = $iparr[1];
            //$term = $postData['term'];
            $insert_array = array(
                //'oc_no' => $oc_no,
                'p_id' => $p_id,
                'do_id' => $this->session->userdata('user_id'),
                'file_name' => $files,
                'file_type' => $file_type,
                'file_size' => $file_size,
                'created_at' => date('Y-m-d H:i:s')
            );
            // print_r($insert_array);exit;
            $insert = $this->db->insert('psychologist_reports', $insert_array);

            if (!empty($insert)) {

                $cadet_name = $this->db->select('name')->where('p_id', $p_id)->get('pn_form1s')->row_array();

                $insert_activity = array(
                    'activity_module' => $this->session->userdata('acct_type'),
                    'activity_action' => 'add',
                    'activity_detail' => "psychologist report added for cadet " . $cadet_name['name'],
                    'activity_by' => $this->session->userdata('username'),
                    'activity_date' => date('Y-m-d H:i:s')
                );

                $insert_act = $this->db->insert('activity_log', $insert_activity);
                $last_id = $this->db->insert_id();

                $query = $this->db->where('username !=', $this->session->userdata('username'))->get('security_info')->result_array();

                for ($i = 0; $i < count($query); $i++) {
                    $insert_activity_seen = array(
                        'activity_id' => $last_id,
                        'user_id' => $query[$i]['id'],
                        'seen' => 'no'
                    );
                    $insert_act_seen = $this->db->insert('activity_log_seen', $insert_activity_seen);
                }
            }
        }

        if (!empty($insert)) {
            $this->session->set_flashdata('success', 'Data Submitted successfully');
            redirect('CT/psychologist_report');
        } else {
            $this->session->set_flashdata('failure', 'Something went wrong, try again.');
            redirect('CT/add_officer_qualities');
        }
    }

    public function upload_psychologist_report()
    {
        $filesCount = count($_FILES['psycologist_report']['name']);

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name']     = $_FILES['psycologist_report']['name'][$i];
            $_FILES['file']['type']     = $_FILES['psycologist_report']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['psycologist_report']['tmp_name'][$i];
            $_FILES['file']['error']    = $_FILES['psycologist_report']['error'][$i];
            $_FILES['file']['size']     = $_FILES['psycologist_report']['size'][$i];

            $config['upload_path'] = 'uploads/documents';
            $config['allowed_types']        = 'gif|jpg|png|doc|xls|pdf|xlsx|docx|ppt|pptx|jpeg';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $data = array('msg' => $this->upload->display_errors());
            } else {
                $data = array('msg' => "success");
                $data['upload_data'] = $this->upload->data();
                $count[$i] = $data['upload_data']['file_name'];
            }
        }
        return $count;
    }

    public function add_warning()
    {
        if ($this->session->has_userdata('user_id')) {
            $this->load->view('ct/add_warning');
        }
    }

    public function save_cadet_warning()
    {
        if ($this->input->post()) {
            $postData = $this->security->xss_clean($this->input->post());
            //print_r($_FILES['file']['name'][0] != NULL);
            if ($_FILES['file']['name'][0] != NULL) {
                $upload1 = $this->upload_warning($_FILES['file']);
                if (count($upload1) > 1) {
                    $files = implode(',', $upload1);
                } else {
                    $files = $upload1[0];
                }
            } else {
                $files = '';
            }

            $id = $postData['id'];
            $oc_no = $postData['oc_num'];
            $date = $postData['date'];
            $issued_by = $postData['issued_by'];
            // $div_name = $postData['division'];
            $type = $postData['warning_type'];
            $reason = $postData['reason'];


            $insert_array = array(
                'oc_no' => $oc_no,
                'p_id' => $id,
                'date' => date('Y-m-d'),
                'file' => $files,
                'issued_by' => $issued_by,
                'type' => $type,
                'do_id' => $this->session->userdata('user_id'),
                'reasons' => $reason,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            $insert = $this->db->insert('warning_records', $insert_array);

            if (!empty($insert)) {

                $cadet_name = $this->db->select('name')->where('oc_no', $oc_no)->get('pn_form1s')->row_array();

                $insert_activity = array(
                    'activity_module' => $this->session->userdata('acct_type'),
                    'activity_action' => 'add',
                    'activity_detail' => "Warning has been added for Cadet " . $cadet_name['name'],
                    'activity_by' => $this->session->userdata('username'),
                    'activity_date' => date('Y-m-d H:i:s')
                );

                $insert_act = $this->db->insert('activity_log', $insert_activity);
                $last_id = $this->db->insert_id();

                $query = $this->db->where('username !=', $this->session->userdata('username'))->get('security_info')->result_array();

                for ($i = 0; $i < count($query); $i++) {
                    $insert_activity_seen = array(
                        'activity_id' => $last_id,
                        'user_id' => $query[$i]['id'],
                        'seen' => 'no'
                    );
                    $insert_act_seen = $this->db->insert('activity_log_seen', $insert_activity_seen);
                }
            }

            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Warning added successfully');
                redirect('CT/add_warning');
            } else {
                $this->session->set_flashdata('failure', 'Something went wrong, try again.');
                redirect('CT/add_warning');
            }
        }
    }

    public function upload_warning($fieldname)
    {
        $filesCount = count($_FILES['file']['name']);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name']     = $_FILES['file']['name'][$i];
            $_FILES['file']['type']     = $_FILES['file']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
            $_FILES['file']['error']    = $_FILES['file']['error'][$i];
            $_FILES['file']['size']     = $_FILES['file']['size'][$i];

            $config['upload_path'] = 'uploads/warning';
            $config['allowed_types']        = 'gif|jpg|png|doc|xls|pdf|xlsx|docx|ppt|pptx|txt|jpeg';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $data = array('msg' => $this->upload->display_errors());
            } else {
                $data = array('msg' => "success");
                $data['upload_data'] = $this->upload->data();
                $count[$i] = $data['upload_data']['file_name'];
            }
        }
        return $count;
    }


}
