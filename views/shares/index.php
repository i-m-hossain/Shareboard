<div>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">shares/add</a>
    <?php foreach ($viewmodel as $item) : ?>
        <div class="well">
            <h3><?php echo $item['title'] ?></h3>
            <small><?php echo $item['created_at'] ?></small>
            <hr>
            <p> <?php echo $item['body'] ?></p>
            <br>
            <a class="btn btn-default" href="<?php echo $item['link'] ?>" target="_blank">Got to Website</a>
        </div>
    <?php endforeach; ?>
</div>