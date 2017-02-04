<ul class="list-unstyled top-bordered ex-top-padding">
  <?php foreach ($list as $key => $value): ?>
    <li>
      <a href="<?php echo link_article($value->article_url) ?>">
        <div class="row">
          <div class="col-sm-6">
            <img alt="<?= $value->article_name ?>" src="<?php echo base_url($value->article_image_thumb) ?>" class="img-thumbnail pull-left"  height="100" width="120" >
          </div>
          <div class="col-sm-10">
             <h4><?= $value->article_name ?></h4>
             <div class="f-sub-info">
               <p><?= $value->article_summary ?></p>
             </div>
          </div>
        </div>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
