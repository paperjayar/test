		<div class="container pagination-centered">
			<hr />
			<p><?php echo $this->settings_model->get_setting('footer_copyright');?></p>
		</div>
		<div id="dialog-name"></div>
		<div id="dialog-tags"></div>
	</body>
	<script type="text/javascript">
		jQuery(function(){
			$('.datepicker').datepicker({
			  changeMonth: true,
			  changeYear: true,
			  dateFormat: 'yy-mm-dd'
			});
			$('a').click(function(e){
				e.preventDefault();
				if($(this).text() == 'Model Name') {
					$('#dialog-name').load($(this).attr('href')+'#dialog-content').dialog('open'); 
				} else if($(this).text() == 'By Tags') {
					$('#dialog-tags').load($(this).attr('href')+'#dialog-content').dialog('open'); 
				}
			});
			$('#dialog-name').dialog({
				autoOpen: false,
				width: 600,
				title: 'Browse all by models name',
			});
			$('#dialog-tags').dialog({
				autoOpen: false,
				width: 600,
				title: 'Browse all by tags',
			});
		});
	</script>
</html>