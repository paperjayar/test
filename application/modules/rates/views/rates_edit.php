<div class="row">
    <div class="span8 offset2">
        <h1>Edit</h1>
        <a href="<?php echo base_url();?>rates"><< Back</a>
        <div class="well">
            <form class="form-horizontal" method="post" action="<?php echo base_url().'rates/edit/'.$rates->rates_id; ?>">
                <div class="control-group">
                    <label class="control-label" for="">Name</label>
                    <div class="controls">
                        <input class=":required" type="text" id="" value="<?php echo $rates->name;?>" name="name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Photo url:</label>
                    <div class="controls">
                        <input class=":required :url" type="text" id="" value="<?php echo $rates->photo_url;?>" name="photo_url">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Episode</label>
                    <div class="controls">
                        <input class=":required" type="text" id="" value="<?php echo $rates->episode;?>" name="episode">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Site</label>
                    <div class="controls">
                        <input class=":required" type="text" id="" value="<?php echo $rates->site;?>" name="site">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>