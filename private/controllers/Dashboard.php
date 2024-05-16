<?php
class Dashboard extends Controller
{
pulic function __construct(){}
	function index()
	{
        $this->view('home');
	}
}
