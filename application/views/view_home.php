<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	
	<style>
		body,html{margin:0,padding:0;}
		
		body{
			background-color:#D3D3D3;
		}
		
		h1,h2,h3,h4,h5,p,a,li,ul{
			font-family:Arial,sans-serif;
			color:#black
			text-decoration:none;
		}
		
		#nav{
			margin:50px auto 0 auto;
			width: 1000px;
			background-color:#8BA8AF;
			height: 15px;
			padding: 20px;
		}
		
		#nav ul{
			list-style: none;
			float: left;
			margin 0 50px;
		}
		
		#nav ul li{
			display:inline;
			
		}
		
		#nav a:hover{
			color:#008080;
		}
		#nav a{
			color:#000000;
		}
		
		#content{
			width:1000px;
			min-height:100%;
			margin: 0 auto;
			padding: 20px;
		}
		
		#footer{
			width:400px;
			min-height:15px;
			margin: 0 auto;
			padding: 20px;
		}
	</style>
	
</head>
<body>

<div id="container">
	<div id="nav">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Submit Form</a></li>
		</ul>
	</div>
	
	<div id="content">
		<h1>Home Page</h1>
		<p>Welcome to the homepage</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non leo in ante rhoncus congue. 
			Phasellus accumsan erat eget lobortis commodo. 
			Pellentesque ac lacinia orci, ut semper diam. 
			Nullam ante elit, cursus convallis purus sit amet, placerat rhoncus tellus. 
			Donec varius vitae dui nec feugiat. 
			Donec non libero non urna dapibus tempor a id metus. 
			Donec lobortis quis erat imperdiet sagittis. 
			In hac habitasse platea dictumst. 
			</p>
	</div>
	
	<div id="footer">
		<p>Copyright 2016, All Rights Reserved</p>
	</div>

</div>

</body>
</html>