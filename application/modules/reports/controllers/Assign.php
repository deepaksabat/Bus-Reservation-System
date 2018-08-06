<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assign extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'assign_model'
		));		 
	}


	public function report()
	{   
        $this->permission->method('report','read')->redirect();
		$data['title']    = display('reports');  
        #-------------------------------#
        $config["base_url"]   = base_url('reports/assign/report');
        $config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
        $config['first_url'] = $config['base_url'].$config['suffix'];
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        #-------------------------------#
        $start_date = $this->input->get('start_date');
        $end_date   = $this->input->get('end_date');
        $data['search'] = (object)array(
            'limit'  => $config["per_page"],
            'offset' => $page,
            'filter'     => trim($this->input->get('filter')),
            'trip'       => trim($this->input->get('trip')),
            'fleet'      => trim($this->input->get('fleet')),
            'route'      => trim($this->input->get('route')),
            'driver'     => trim($this->input->get('driver')),
            'start_date' => (!empty($start_date)?trim($start_date):date('Y-m-d')),
            'end_date'   => (!empty($end_date)?trim($end_date):date('Y-m-d')),
        );

        #-------------------------------#
        #
        #pagination starts
        #
        $config["total_rows"] = $this->assign_model->countRecord($data['search']);
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $data["assigns"] = $this->assign_model->read($data['search']);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        $data['routeList']  = $this->assign_model->routeList();
        $data['driverList'] = $this->assign_model->driverList();
        $data['fleetList'] = $this->assign_model->fleetList();

		$data['module'] = "reports";
		$data['page']   = "assign/list";   
		echo Modules::run('template/layout', $data); 
	}  
 
 
}
