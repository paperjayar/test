<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->settings_model->get_setting('site_header');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $this->settings_model->get_setting('meta_description');?>">
    <meta name="keyword" content="<?php echo $this->settings_model->get_setting('meta_keyword');?>">

    <!-- styles -->
    <link href="<?php echo base_url(); ?>theme/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme/css/jquery.rating.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme/css/bootstrap-responsive.css" rel="stylesheet">
   
    <!-- Javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/js/bootstrap.js"></script> 
	<link href="<?php echo base_url(); ?>theme/css/flick/jquery-ui-1.10.2.custom.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>theme/js/jquery-ui-1.10.2.custom.min.js"></script>
	<script src="<?php echo base_url(); ?>theme/js/jquery.rating.js"></script>
	
	<!-- Validation plugin -->
    <link href="<?php echo base_url(); ?>theme/css/vanadium.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>theme/js/vanadium.js"></script>
</head>
<body>