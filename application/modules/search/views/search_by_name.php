<div id="dialog-content">
	<div class="controls">
		<?php 
			foreach (range('A', 'Z') as $char) {
				//echo "<option value='{$char}'>{$char}</option>";
				echo "- <a class='bigger' href='".base_url()."search/name/{$char}'>{$char}</a>";
			}
		?> -
	</div>
</div>