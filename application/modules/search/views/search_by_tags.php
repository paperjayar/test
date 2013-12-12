<div id="dialog-content">
	<div class="controls">
		<?php 
			foreach ($tags as $char) {
				echo "- <a class='bigger' href='".base_url()."search/tags/{$char->items_tag}'>{$char->items_tag}</a>";
			}
		?> -
	</div>
</div>