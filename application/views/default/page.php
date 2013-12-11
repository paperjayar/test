<?php $this->load->view('default/includes/header'); ?>
<div class="container">
	<?php echo modules::run("menu"); ?>
	<?php $this->load->view('search/search_widget'); ?>
	<?php $this->load->view('default/includes/notification'); ?>
	<?php echo $contents; ?>
</div>
<?php $this->load->view('default/includes/footer'); ?>