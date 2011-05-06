<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_BlogAdmin extends Controller_Admin
{
	protected $config;
	
	public function before()
	{
		parent::before();
		// TODO: This probably doesn't belong here. Not sure where to put it though
		$this->template->extraHead = '
	<!-- Blog administration -->
	<link rel="stylesheet" href="res/blogadmin.css" type="text/css" />';
		$this->template->extraFoot = '
	<!-- Blog administration -->
	<script src="res/blogadmin.js"></script>';
		
		$this->config = Kohana::config('blog');
		// Pass blog config to view
		$this->template->bind_global('config', $this->config);
	}
}
?>