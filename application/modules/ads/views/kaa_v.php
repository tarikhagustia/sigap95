<?php if (!empty($ads_image) || $ads_image != ""): ?>
  <a href="<?= $ads_link ?>" target="_blank">
    <img src="<?php echo $ads_image ?>" class="img-responsive" width="100%" alt="<?= $ads_alt ?>"/>
  </a>
<?php endif; ?>
