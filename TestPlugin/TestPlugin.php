<?php
/*
Plugin Name: TestPlugin
Plugin URI: http://www.encoress.com
Description: Test Description 
Version: 1
Author: Sankar
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
	require_once( dirname(__FILE__) . "/TestPlugin-Settings.php");  
		add_shortcode( 'API-Response', 'myapi');
		add_shortcode('API-Description', 'myapides');
		add_shortcode('API-Comments', 'myapicomments');
		
	function myapi(){
		//enter your api url
		$api_url = 'https://jsonplaceholder.typicode.com/posts/';


		//lets fetch it
		$response = wp_remote_retrieve_body( wp_remote_get($api_url, array('sslverify' => false )));
		$decodedresponse = json_decode($response,true);
		$sizeofresponse = sizeof($decodedresponse);
			
		require_once( dirname(__FILE__) . "/myapi-page.php");  
	}
	
	
	function myapides(){
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		//echo $actual_link;
		$id = basename($actual_link);
		$api_url = 'https://jsonplaceholder.typicode.com/posts/'.$id;


		//lets fetch it
		$response = wp_remote_retrieve_body( wp_remote_get($api_url, array('sslverify' => false )));
		$decodedresponse = json_decode($response,true);
		require_once( dirname(__FILE__) . "/myapides-page.php");  
	}
	
	function myapicomments(){
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		//echo $actual_link;
		$id = basename($actual_link);
		$api_url = 
		'https://jsonplaceholder.typicode.com/comments?postId='.$id;
		//lets fetch it
		$response = wp_remote_retrieve_body( wp_remote_get($api_url, array('sslverify' => false )));
		$decodedresponse = json_decode($response,true);
		$sizeofresponse = sizeof($decodedresponse);
		require_once( dirname(__FILE__) . "/myapicomments-page.php");  
	}
	

	
