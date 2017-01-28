<div id="sync1" class="owl-carousel">
  <?php foreach ($list as $key => $row): ?>
    <div class="box item">
      <a href="<?= link_article($row->article_url) ?>">
        <div class="carousel-caption"><?= $row->article_name ?></div>
          <img class="img-responsive" src="<?= $row->article_image ?>" width="1600" height="972" alt="<?= $row->article_name ?>"/>
        <div class="crausel-kalan hidden-xs"><?php echo $row->category_name ?></div>
      </a>
    </div>
  <?php endforeach; ?>
</div>
