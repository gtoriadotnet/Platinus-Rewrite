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
	background-color: #f0f0fa;
}

.plt-header {
	height: 40px;
	background: linear-gradient(#2576da, #1b559d);
	border: 0;
	border-bottom: 1px #292a2f;
	border-style: solid;
	box-shadow: #292a2f 0 -18px 2px 20px;
}

.plt-nav-container {
	padding-top: 4px;
	display: flex;
}

.plt-nav {
	margin: 0;
	padding: 0;
	list-style-type: none;
}

.plt-nav li {
	float: left;
}

.plt-nav li a {
	display: block;
	text-align: center;
	text-decoration: none;
	height: 32px;
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
	max-width: 900px;
}