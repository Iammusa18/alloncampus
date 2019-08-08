<?php
/**
 *  Images list for admin and user. Image subsection
 */
?>

<div class="row">
    <?php
    for ($i = 1; $i <= count($images); $i++): ?>

        <div class="col-xs-6 col-md-3" style="padding-bottom: 10px;">
            <img style="margin-bottom: 5px; width:100%; height: auto;" class="img-rounded img-thumbnail"
                 src="images/uploads/<?php echo basename($images[$i - 1]); ?>"><br>
            <a href="#" data-copy-image="<?php echo basename($images[$i - 1]); ?>" class="btn btn-default btn-xs"
               title="Delete">
                <i class="glyphicon glyphicon-file"></i> Copy link
            </a>
            <a href="#" data-delete-image="<?php echo basename($images[$i - 1]); ?>"
               class="btn btn-danger btn-xs pull-right" title="Delete">
                <i class="glyphicon glyphicon-trash"></i> Delete
            </a>
        </div>
        <?php if ($i % 4 == 0) echo "</div><div class='row'>"; ?>
    <?php endfor; ?>
</div>
