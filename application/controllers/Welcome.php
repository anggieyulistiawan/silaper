<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome');
	}

	public function p_bergaris()
	{
		$this->load->view('panduan_printerbergaris');
	}

	public function p_macet()
	{
		$this->load->view('panduan_printermacet');
	}

	public function p_jaringan()
	{
		$this->load->view('panduan_jaringan');
	}
	public function p_simrs()
	{
		$this->load->view('panduan_simrs');
	}
}
