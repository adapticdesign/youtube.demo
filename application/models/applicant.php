<?php 

class Applicant extends DataMapper {
    
    var $table = 'applicants';
    
	var $has_one = array();
	var $has_many = array();
    
    /*var $validation = array(
		/*'example' => array(
			// example is required, and cannot be more than 120 characters long.
			'rules' => array('required', 'max_length' => 120),
			'label' => 'Example'
		)
	);*/
    
    function __construct($id = NULL)
	{
		parent::__construct($id);
    }
    
}