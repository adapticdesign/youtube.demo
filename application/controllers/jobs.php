<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {
    
	public function index()
	{  
        $job = new Job();
        $job->get();
		
        $this->load->view('header', array());
        $this->load->view('job/view', array('jobs' => $job));
        $this->load->view('footer', array());
	}
    
    public function details($id)
	{  
        $job = new Job();
        $job->get_by_id($id);
		
        if($job->exists()){
            $this->load->view('header', array());
            $this->load->view('job/details', array('job' => $job));
            $this->load->view('footer', array());
        }else{
            redirect('/jobs');
        }
	}
    
    
    public function search()
	{  
	   $query = $this->input->post('query');
       
       //get date POST and convert to timestamp
       $created_s = strtotime($this->input->post('date_created_s'));
       $created_e = strtotime($this->input->post('date_created_e'));
       $closing_s = strtotime($this->input->post('closing_date_s'));
       $closing_e = strtotime($this->input->post('closing_date_e'));
       
       //die(print_r($created_e));
        $job = new Job();
        $job->like(array('keywords'=>$query));// select from database where keywords fields matches search query
        
        
        //add date filters if set
        if($created_s != ""){
		  $job->where(array('date_created >='=>$created_s));
		}
        if($created_e != ""){
		  $job->where(array('date_created <='=>$created_e));
		}
		if($closing_s != ""){
		  $job->where(array('closing_date >='=>$closing_s));
		}
        if($closing_e != ""){
		  $job->where(array('closing_date <='=>$closing_e));
		}
        
        $job->get();
        $this->load->view('header', array());
        $this->load->view('job/view', array('jobs' => $job));
        $this->load->view('footer', array());
	}
    
    public function admin()
	{  
        $job = new Job();
        $job->get();
		//send all jobs to admin view
        $this->load->view('header', array());
        $this->load->view('job/admin', array('jobs' => $job));
        $this->load->view('footer', array());
	}
    
    function add($save = FALSE)
	{
		$job = new Job();
		$this->_edit($job,'/jobs/add/save',$save); 
        // function to either saveitem or display form
        //depending on the value of $save
	}
    
    function delete($id = FALSE)
	{
		$job = new Job();
        //delete item if confirm set
        //if not show confirm form
        if($id == 'confirm')
		{
			$job->get_by_id($this->input->post('id'));
			$job->delete();
            redirect('/jobs');
		}
		else
		{
			$job->get_by_id($id);
		}
        
        
        $url = "/jobs/delete/confirm";
        
        if($job->exists()){
            $this->load->view('header', array());
            $this->load->view('job/delete', array('job' => $job,'url'=>$url));
            $this->load->view('footer', array());
        }
		
	}
    
    public function edit($id)
	{
	   /* if $save is equal to "save" then save the post
            if it is equal to an id display the job edit form */
        $job = new Job();
        if($id == 'save')
		{
			$job->get_by_id($this->input->post('id'));
			$save = TRUE;
		}
		else
		{
			$job->get_by_id($id);
			$save = FALSE;
		}
        if($job->exists())
		{
			$this->_edit($job, '/jobs/edit/save', $save);
		}
		else
		{
			show_error('Invalid Job ID');
		} 
        
	}
    
    public function apply($id)
	{
        $job = new Job();
        if($id == 'save')
		{
			$job->get_by_id($this->input->post('id'));
			$save = TRUE;
		}
		else
		{
			$job->get_by_id($id);
			$save = FALSE;
		}
        if($job->exists())
		{
			$this->_application($job, '/jobs/apply/save', $save);
		}
		else
		{
			show_error('Invalid Job ID');
		} 
        
	}
    
            
    
    function _edit($j, $url, $save){
        if($save){
                
           $j->job_title = $this->input->post('job_title');
           $j->keywords = $this->input->post('keywords');
           $j->description = $this->input->post('description');
           $j->date_created = strtotime($this->input->post('date_created'));
           $j->closing_date = strtotime($this->input->post('closing_date'));
           $j->save();
           
           redirect('/jobs/admin');
        }
        
        $this->load->view('header', array());
        $this->load->view('job/edit', array('job' => $j,'url'=>$url));
        $this->load->view('footer', array());
    }
    
    function _application($j, $url, $save){
        if($save){
           $a = new Applicant();
           
           $a->name = $this->input->post('name');
           $a->cv_attached = $this->input->post('cv_attached');
           $a->email = $this->input->post('email');
           $a->job_id = $j->id; // set the job id to the id which was in the url
           $a->save();
           
           redirect('/jobs/apply/'.$j->id);
        }
        $this->load->view('header', array());
        $this->load->view('job/apply', array('job' => $j,'url'=>$url));
        $this->load->view('footer', array());
    }
    
    
}
