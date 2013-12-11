<?php
$this->load->model('rates/rates_model');
?>
<div class="row">
    <?php
    $mCount = 0;
    if(!empty($result)) {
        foreach($result as $item) {
            $rates = $this->rates_model->get_ave($item->items_id,'items_id',true);
            $rate_count = $this->rates_model->get_ave($item->items_id,'items_id');
            ?>
                <div class="span3">
                    <a class="profile-badge" href="<?php echo base_url(); ?>items/view/<?php echo $item->items_id; ?>">
                        <div class="well">
                            <img class="profile_photo" src="<?php echo $item->photo_url; ?>" alt=""/>
                            <br/><strong>Name: <?php echo $item->name;?></strong>
                            <br/>Episode Name: <?php echo $item->episode;?>
                            <br/>Site Name: <?php echo $item->site;?>
                            <br/>Date: <?php echo date('Y-m-d',strtotime($item->datetime));?>
                            <br/>Model Rate: <?php echo    $rates." ({$rate_count} Votes)";?>
                            <br/>Number of Views: <?php echo $item->views;?>
                        </div>
                    </a>
                </div>
            <?php
            $mCount++;
        }
    } else {
        ?>
            <div class="span8 offset2">
                <div class="well">
                    <p>
                        No Results Found!
                    </p>
                </div>
            </div>
        <?php
    }
    ?>
</div>
<div class="row">
    <div class="span8">
        <?php
            echo "Showing {$mCount} of {$total_rows}: ".$this->pagination->create_links();
        ?>
    </div>
</div>
<script type="text/javascript">
jQuery(function(){
    $('.button').button();
});
</script>