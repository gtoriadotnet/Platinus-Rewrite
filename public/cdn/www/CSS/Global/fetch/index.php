<?php

/*

Platinus Global CSS

*/

header("Content-Type: text/css");
?>
/*

Platinus Global CSS
Copyright (C) XlXi 2020
DO NOT DISTRIBUTE

*/

body, div, h1, h2, h3, h4, h5 {
	margin: 0;
}

body {
	font-family: segoe ui;
	min-height: 100vh;
	background-color: #f9f9fb;
}

.plt-header {
	height: 50px;
	background: linear-gradient(to right, #fc5c7d, #6a82fb);
	border: 0;
	box-shadow: #ababab 0 -19px 2px 20px;
}

.plt-nav-container {
	padding-top: 9px;
	display: flex;
}

.plt-nav {
	margin: 0;
	padding: 0;
	list-style-type: none;
	margin-top: -4px;
	margin-right: auto;
}

.plt-nav li {
	float: left;
	padding-right: 3px;
}

.plt-nav li a {
	display: block;
	color: white;
	font-family: Arial,Helvetica,sans-serif;
	font-weight: bold;
    text-shadow: #000000a3 1px 1px 1px;
	text-align: center;
	text-decoration: none;
	height: 28px;
	padding-left: 5px;
	padding-right: 5px;
	padding-top: 12px;
}

.plt-nav li a:hover {
	border-radius: 10px;
	background: #d6d6d640;
}

.plt-nav-icon {
	width: 158px;
	height: 32px;
	padding-right: 10px;
}

.plt-body {
	padding-top: 10px;
}

.container {
	padding-left: 10px;
	padding-right: 10px;
	margin: auto;
	max-width: 1200px;
}