<div class="bordered" id="aktualitas">
  <img src="<?php echo base_url($list->news_thumb) ?>" alt="<?php echo $list->news_title ?>"  class="img-responsive"/>
  <h4> <a href="<?= $list->news_url; ?>"><?php echo $list->news_title ?></a> </h4>
  <p>
    <?php echo $this->format->text_only($list->news_desc, 0 ,200) ?>
  </p>
</div>
