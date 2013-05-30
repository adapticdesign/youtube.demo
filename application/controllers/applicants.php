<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicants extends CI_Controller {
    
	public function index()
	{  
        /*$applicant = new Applicant();
        $applicant->get();
		
        
        $this->load->view('header', array());
        $this->load->view('applicant/view', array('applicants' => $applicant));
        $this->load->view('footer', array());*/
	}
    
    public function admin()
	{  
        $applicant = new Applicant();
        $applicant->get();
		
        
        $this->load->view('header', array());
        $this->load->view('applicant/admin', array('applicants' => $applicant));
        $this->load->view('footer', array());
	}
    
    function add($save = FALSE)
	{
		$applicant = new Applicant();
		$this->_edit($applicant,'/applicants/add/save',$save);
	}
    
    function delete($id = FALSE)
	{
		$applicant = new Applicant();
        if($id == 'confirm')
		{
			$applicant->get_by_id($this->input->post('id'));
			$applicant->delete();
            redirect('/applicants/admin');
		}
		else
		{
			$applicant->get_by_id($id);
		}
        
        
        $url = "/applicants/delete/confirm";
        
        if($applicant->exists()){
            $this->load->view('header', array());
            $this->load->view('applicant/delete', array('applicant' => $applicant,'url'=>$url));
            $this->load->view('footer', array());
        }
		
	}
    
    public function edit($id)
	{
	   /* if $save is equal to "save" then save the post
            if it is equal to an id display the id */
        $applicant = new Applicant();
        if($id == 'save')
		{
			$applicant->get_by_id($this->input->post('id'));
			$save = TRUE;
		}
		else
		{
			$applicant->get_by_id($id);
			$save = FALSE;
		}
        if($applicant->exists())
		{
			$this->_edit($applicant, '/applicants/edit/save', $save);
		}
		else
		{
			show_error('Invalid Applicant ID');
		} 
        
	}
    
    function _edit($u, $url, $save){
        if($save){
           //check if save is set and save row to database 
           $u->name = $this->input->post('name');
           $u->cv_attached = $this->input->post('cv_attached');
           $u->email = $this->input->post('email');
           $u->job_id = $this->input->post('job_id');
           $u->save();
           
           redirect('/applicants/admin');
        }
        
        $jobs = new Job();
        $jobs->get();//get all jobs in db for sending to view
        
        $this->load->view('header', array());
        $this->load->view('applicant/edit', array('applicant' => $u,'url'=>$url,'jobs'=>$jobs));
        $this->load->view('footer', array());
    }
    
    
}
