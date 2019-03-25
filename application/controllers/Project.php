<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller{
	
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('commondatamodel','commondatamodel',TRUE);
        $this->load->model('mastermodel','mastermodel',TRUE);
       $this->load->model('Project_model','project',TRUE);
    }

	
	public function index(){
		$session = $this->session->userdata('user_data');
        if($this->session->userdata('user_data'))
        {
            $page = 'dashboard/admin_dashboard/master/project/project_list';
            $result['projectList']=$this->project->getProjectList();
            $header = "";
            createbody_method($result,$page,$header,$session);

        }else{
            redirect('login','refresh');
        }
    }
    
    

   
 
}
