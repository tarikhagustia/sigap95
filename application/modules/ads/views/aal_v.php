<?php foreach ($articles as $key => $article): ?>
  <a href="<?= $article->ads_link ?>" target="_blank">
    <img src="<?php echo $article->ads_image ?>" class="img-responsive" width="100%" alt="<?= $article->ads_alt ?>"/>
  </a>
<?php endforeach; ?>
