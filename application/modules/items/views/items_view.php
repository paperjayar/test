<div class="row">
    <a class="popup" href="#">Add Tag</a>
</div>
<div class="row">
    <div class="span8 offset2">
        <h1>View Single</h1>
        <br/>
        <div class="well">
            <img class="profile_photo" src="<?php echo $items->photo_url; ?>" alt=""/>
                            <br/><strong>Name: <?php echo    $items->name;?></strong>
                            <br/>Episode Name: <?php echo    $items->episode;?>
                            <br/>Site Name: <?php echo    $items->site;?>
                            <br/>Date: <?php echo    date('Y-m-d',strtotime($items->datetime));?>
                            <br/>Number of Views: <?php echo    $items->views;?>
        </div>
        <input type="radio" name="star" class="star required" value="1"/>
        <input type="radio" name="star" class="star" value="2"/>
        <input type="radio" name="star" class="star" value="3"/>
        <input type="radio" name="star" class="star" value="4"/>
        <input type="radio" name="star" class="star" value="5"/>
        <input type="radio" name="star" class="star" value="6"/>
        <input type="radio" name="star" class="star" value="7"/>
        <input type="radio" name="star" class="star" value="8"/>
        <input type="radio" name="star" class="star" value="9"/>
        <input type="radio" name="star" class="star" value="10"/>
    </div>
    <div id="modal_form" class="" style="display:none;">
        <form class="form" method="post" action="<?php echo base_url();?>tags/add/<?php echo $items->items_id;?>">
            <label class="control-label" for="">Tag</label>
            <div class="controls">
                <input class=":required" type="hidden" id="" value="<?php echo $items->items_id;?>" name="items_id">
                <input class=":required" type="text" id="" value="" name="items_tag">
            </div>
            <div class="controls">
                <button type="submit" class="btn">SAVE</button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="span8 offset2">
        <strong>Rating:</strong> <div id="rate_average">
            <?php
                if(count($rates) > 0) {
                    echo "{$rates} ({$votes} Votes)";
                } else {
                    echo 'Be the first to rate!';
                }
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="span8 offset2">
        <strong>Tags:</strong> <?php 
            if(isset($tags)) {
                foreach($tags as $tag) {
                    echo $tag->items_tag.',';
                }
            }
        ?>
    </div>
</div>
<script type="text/javascript">
$(function ()    {
    $('.star').rating('select',<?php echo (isset($rates)?floor($rates):0); ?>)
    $(".star").click(function(){
        $.post('<?php echo base_url(); ?>rates/add/<?php echo $items->items_id;?>/'+$(this).text(), function( data ) {
          $( "#rate_average" ).html( data );
          $('input').rating('readOnly')
        });
    });
    $( ".star" ).rating();
    $( ".popup" ).button().click(function(e) {
        e.preventDefault();
        $( "#modal_form" ).dialog( "open" );
    });
    $( "#modal_form" ).dialog({
        autoOpen: false,
        height: 300,
        width: 350,
        modal: true
    });
});
</script>