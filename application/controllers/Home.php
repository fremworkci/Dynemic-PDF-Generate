<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model1');
		$this->load->library('pdf');
	}

	public function index()
	{
		$data['customer_data'] = $this->Model1->fetch();
		$this->load->view('home', $data);
	}

	function pdfdetails()
	{
		$id=$this->uri->segment(3);
		$qry=$this->Model1->pdfmodel($id);
		$output="<table><tr>";
		foreach($qry as $row)
		{
			$img="<img src='".base_url().'img/'.$row->pic."' style='width:80px; height:80px;'>";
			// $output.="<td>".$row->name."<td>";
			// $output.="<td>".$row->email."<td>";
			// $output.="<td>".$row->password."<td>";
			// $output.="<td>".$img."<td>";
			$output.="
				<td>".$row->name."</td>
				<td>".$row->email."</td>
				<td>".$row->password."</td>
				<td>".$img."</td>
			";

			$name=$row->name;
		}
		$output.="</tr></table>";
		$this->pdf->loadHtml($output);
		$this->pdf->render();
		$this->pdf->stream("".$name.".pdf",array("Attachment"=>0));
	}




}

?>
