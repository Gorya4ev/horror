<?php
	session_start();
	header("Content-Type: text/html; charset= utf-8");
	require_once('database.php');
	
	class Adminpanel{
		public function __construct(){
			
		}
	}
	
	class Posts extends Adminpanel {
		public function __construct(){
			perrent::__construct();
		}
		
		public function listPosts(){
			
		}
		
		public function editPosts(){
			
		}
		
		public function addPosts(){
			
		}
		
		public function savePosts(){
			
		}
		
		public function deletePosts(){
			
		}
	}
	
	$admin = new Adminpanel();