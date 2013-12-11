<div class="row">
    <div class="span12">
        <h1>List All Rates</h1>
        <h5><a href="<?php echo base_url();?>rates/create" class="button">Add new rates</a></h5>
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
                    if(isset($rates) && !empty($rates)) {
                        foreach($rates as $c) {
                    ?>
                    <tr>
                        <td><?php echo $c->rates_id;?></td>
                        <td><?php echo $c->name;?></td>
                        <td><a href="<?php echo base_url();?>rates/edit/<?php echo $c->rates_id;?>">Edit</a> | <a href="<?php echo base_url();?>rates/delete/<?php echo $c->rates_id;?>" class="confirm" rel="Are you sure you want to delete <?php echo $c->name;?>?">Delete</a></td>
                    </tr>
                    <?php
                        }
                    } else {
                    ?>
                    <tr>
                        <td>No rates yet!</td>
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