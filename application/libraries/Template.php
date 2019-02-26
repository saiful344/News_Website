<?php

class Template {
	protected $_ci;

	function __construct()
	{
		$this->_ci =&get_instance();
		}

	function ips($template,$data=null)
	{
		$data['content']	=	$this->_ci->load->view($template,$data, TRUE);
		$data['footer']		=	$this->_ci->load->view('header/footer',$data, TRUE);
		$data['nav']		=	$this->_ci->load->view('header/nav',$data, TRUE);

		$this->_ci->load->view('header/index',$data);

	}
	function user($template,$data=null)
	{
		$data['content']    =   $this->_ci->load->view($template,$data,TRUE);
		$data['footer']     =   $this->_ci->load->view('content/header/footer',$data,TRUE);
		$data['nav']        =   $this->_ci->load->view('content/header/nav',$data,TRUE);

		$this->_ci->load->view('content/header/index',$data);   
	}

}
