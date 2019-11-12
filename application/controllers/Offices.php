<?php

 
class Offices extends CI_Controller {
    function __construct()
    {
        parent::__construct();
$this->load->database();
        $this->load->model('Offices_model', '', TRUE);
    } 

    /*
     * Listing of directory
     */
public function  index()
    {
        $data['directory'] = $this->Offices_model->get_all_directory();
        
		$this->load->view('partials/header', $data);
		$this->load->view('partials/sidebar', $data);
		$this->load->view('offices/index', $data);
		$this->load->view('partials/footer', $data);
    }

    /*
     * Adding a new directory
     */
 public function add()
    {   
	  if($this->session->level < "50")
	{ redirect('/');
}
        $this->load->library('form_validation');

		$this->form_validation->set_rules('section','Section','integer|required');
		$this->form_validation->set_rules('deck','Deck','integer|required');
		$this->form_validation->set_rules('building','Building','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'building' => $this->input->post('building'),
				'deck' => $this->input->post('deck'),
				'section' => $this->input->post('section'),
				'office' => $this->input->post('office'),
				'occupant' => $this->input->post('occupant'),
				'osurl' => $this->input->post('osurl'),
            );
            
            $directory_id = $this->Offices_model->add_directory($params);
            redirect('offices/index');
        }
        else
        {
			$this->load->model('Building_model');
			$data['all_buildings'] = $this->Building_model->get_all_buildings();
            
            $data['_view'] = 'directory/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a directory
     */
    function edit($LocationID)
    {   
  if($this->session->level < "50")
	{ redirect('/');
}

        // check if the directory exists before trying to edit it
        $data['directory'] = $this->Offices_model->get_directory($LocationID);
        
        if(isset($data['directory']['LocationID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('section','Section','integer|required');
			$this->form_validation->set_rules('deck','Deck','integer|required');
			$this->form_validation->set_rules('building','Building','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'building' => $this->input->post('building'),
					'deck' => $this->input->post('deck'),
					'section' => $this->input->post('section'),
					'office' => $this->input->post('office'),
					'occupant' => $this->input->post('occupant'),
					'osurl' => $this->input->post('osurl'),
                );

                $this->Offices_model->update_directory($LocationID,$params);            
                redirect('offices/index');
            }
            else
            {
				$this->load->model('Building_model');
				$data['all_buildings'] = $this->Building_model->get_all_buildings();

                $data['_view'] = 'directory/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The directory you are trying to edit does not exist.');
    } 

    /*
     * Deleting directory
     */
    function remove($LocationID)
    {
  if($this->session->level < "50")
	{ redirect('/');
}

        $directory = $this->Offices_model->get_directory($LocationID);

        // check if the directory exists before trying to delete it
        if(isset($directory['LocationID']))
        {
            $this->Offices_model->delete_directory($LocationID);
            redirect('offices/index');
        }
        else
            show_error('The directory you are trying to delete does not exist.');
    }
    
}
