<div class="row">
    <div class="span8 offset2">
        <h1>Add</h1>
        <a href="<?php echo base_url();?>rates"><< Back</a>
        <div class="well">
            <form class="form-horizontal" method="post" action="">
                <div class="control-group">
                    <label class="control-label" for="">Name</label>
                    <div class="controls">
                        <input class=":required" type="text" id="" value="" name="name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Photo url:</label>
                    <div class="controls">
                        <input class=":required :url" type="text" id="" value="" name="photo_url">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Episode</label>
                    <div class="controls">
                        <input class=":required" type="text" id="" value="" name="episode">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Site</label>
                    <div class="controls">
                        <input class=":required" type="text" id="" value="" name="site">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>