<div class="row">
  <div class="topic col-sm-16">
    <a href="<?php echo link_article($article['article_url']) ?>">
      <div class="kanal-title-home"><?= $article['category_name']?></div>
      <img class=" img-thumbnail"  src="<?php echo base_url($article['article_image']) ?>" width="600" height="227" alt=""/>
      <h3><?= $article['article_name']?></h3>
    </a>
    <p><?= $article['article_summary']?></p>
  </div>
  <div class="col-sm-16">
    <ul class="list-unstyled  top-bordered ex-top-padding">
      <?php foreach ($article['child'] as $key => $value): ?>
        <li>
          <a href="<?= link_article($value->article_url) ?>">
          <div class="row">
            <div class="col-lg-13 col-md-16">
              <h4><?php echo $value->article_name ?></h4>
            </div>
          </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
