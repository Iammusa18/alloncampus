<?php
/**
 *  Admin area tabs
 */
?>

<?php
/** @var Article $item */

foreach ($list as $item):

    ?>
    <tr>
        <td><?php echo $item->id; ?></td>
        
        <td>

            <?php if ($item->image): ?>
                <img class="img-thumbnail" src="<?php echo $item->image; ?>" width="150">
            <?php endif; ?>

        </td>
        <td><?php echo $item->title; ?></td>
        <?php  
        if(isset( $_SESSION["type"])){
            if( $_SESSION["type"]=="admin"){
                ?>
                <td>
                    <a href="#" data-article="<?php echo $item->id; ?>" class="btn btn-default btn-sm" title="Edit">
                        <i class="glyphicon glyphicon-edit"></i> Edit
                    </a>
                    <a href="#" data-delete="<?php echo $item->id; ?>" class="btn btn-danger btn-sm" title="Delete">
                        <i class="glyphicon glyphicon-trash"></i> Delete
                    </a>
                    <?php if($item->status_check=="pending"){

                     ?>
                    <a href="#" data-approve="<?php echo $item->id; ?>" class="btn btn-default btn-sm" title="Aprove">
                        <i class="glyphicon glyphicon-edit"></i> Approve
                    </a>
                    <?php } ?>
                    <?php if($item->status_check=="active"){

                     ?>
                    <a href="#" data-unactive="<?php echo $item->id; ?>" class="btn btn-default btn-sm" title="Active">
                        <i class="glyphicon glyphicon-edit"></i>Click To UnActive
                    </a>
                    <?php } ?>
                </td>
            </tr>

            <?php

            }
}


        endforeach;


?>