<div class="row">
    <div class="span8 offset2">
        <div class="well">
            <form class="form-horizontal" method="post" action="">
                <div class="control-group">
                    <label class="control-label" for="">Browse By Site:</label>
                    <div class="controls">
                        <select name="tags" id="" class=":required">
                            <?php 
                                foreach ($tags as $char) {
                                    echo "<option value='{$char->items_tag}'>{$char->items_tag}</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn">SEARCH</button>
                    </div>
                </div>
            </form>            
        </div>
    </div>
</div>