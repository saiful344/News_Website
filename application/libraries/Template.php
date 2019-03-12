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
	function generate($view,$data = array(),$filename = 'laporan',$paper = 'A4',$orientation ='portrait'){
		$dompdf= new HTML2PDF();
		$html =$this->_ci->load->view($view,$data,TRUE);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper,$orientation);
		//Render html as pdf
		$dompdf->render();
		$dompdf->stream($filename."_.pdf_",array("Attachment" => FALSE));
	}
}
