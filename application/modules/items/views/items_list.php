<div class="row">
    <div class="span12">
        <h1>List All Items</h1>
        <h5><a href="<?php echo base_url();?>items/create" class="button">Add new items</a></h5>
        <div class="well">
            <table class="datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Value</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($items) && !empty($items)) {
                        foreach($items as $c) {
                    ?>
                    <tr>
                        <td><?php echo $c->items_id;?></td>
                        <td><?php echo "<a href='".base_url()."items/view/".$c->items_id."'>".$c->name."</a>";?></td>
                        <td><a href="<?php echo base_url();?>items/edit/<?php echo $c->items_id;?>">Edit</a> | <a href="<?php echo base_url();?>items/delete/<?php echo $c->items_id;?>" class="confirm" rel="Are you sure you want to delete <?php echo $c->name;?>?">Delete</a></td>
                    </tr>
                    <?php
                        }
                    } else {
                    ?>
                    <tr>
                        <td>No items yet!</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>