<div class="row">
    <div class="span8 offset2">
        <div class="well">
            <form class="form-horizontal" method="post" action="">
                <div class="control-group">
                    <label class="control-label" for="">Browse By Name:</label>
                    <div class="controls">
                        <select name="name" id="" class=":required">
                            <?php 
                                foreach (range('A', 'Z') as $char) {
                                    echo "<option value='{$char}'>{$char}</option>";
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