		<div class="container pagination-centered">
			<hr />
			<p><?php echo $this->settings_model->get_setting('footer_copyright');?></p>
		</div>
	</body>
	<script type="text/javascript">
		jQuery(function(){
			$('.datepicker').datepicker({
			  changeMonth: true,
			  changeYear: true,
			  dateFormat: 'yy-mm-dd'
			});
		});
	</script>
</html>