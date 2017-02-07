<div class="row">
  <!-- start of content -->
  <div class="col-sm-11">
    <div class="panel panel-info">
      <div class="panel-body">
        <img src="https://newopenx.detik.com/images/56683473e5e8fc2dd440abaab3f5265c.gif" class="img-responsive" alt="" />
        <article>
          <div class="judul">
            <div class="article date">
              <?= $this->format->date_indonesia($article->created_at) ?>
            </div>
            <h1 class="article subject">
                <?= $article->article_name ?>
            </h1>
            <div class="article author">
              <?= $article->author_name ?>
            </div>
            <br>
            <div class="bukan-iklan">
              <div class="addthis_inline_share_toolbox"></div>
            </div>
          </div>
          <?php if ($article->article_type == "article"): ?>
            <div class="article images">
              <img class="img-responsive" src="<?= base_url($article->article_image) ?>" />
            </div>
          <?php else: ?>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $article->article_video ?>"></iframe>
            </div>
          <?php endif; ?>
          <span class="article image-caption"><?= $article->article_image_caption ?></span>
          <div class="article article-content">
            <?php echo $article->article_desc; ?>
          </div>
          <div class="reactions">
            <div class="row">
              <div class="col-sm-16">
                <!-- start vicomic -->
                <div id="vc-feelback-main" data-access-token="965baa2be636652c92fb78b789675c07" data-display-type="4"></div>
                <script>
                (function() {
                var v = document.createElement('script'); v.async = true;
                v.src = "http://assets-prod.vicomi.com/vicomi.js";
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(v, s);
                })();
                </script>
                <!-- end of vicomic -->
              </div>
            </div>

          </div>
          <div class="">
            <h3 class="main-title-dash"><span>Komentar</span></h3>
            <div id="fb-root">
            </div>
            <div class="fb-comments" data-href="<?= current_url() ?>" data-width="100%" data-numposts="5"></div>
          </div>
        </article>
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <img src="/assets/images/banner/lantas.png" class="img-responsive" />
    <div class="row">
      <div class="col-sm-16">
        <div class="judul-lalin text-center">
          Sigap Lalu Lintas
        </div>
        <div class="twitter-widget">
          <a class="twitter-timeline" data-height="600" href="https://twitter.com/lantas_ratu">Tweets by Lantas Ratu</a>
        </div>
      </div>
      <div class="col-sm-16">
        <div class="judul-konten pull-left">Popular news</div>
        <div class="row">
          <div class="col-sm-16 padding-10 ">
          <div class="news-popular">
            <!-- polular -->
            <?php echo modules::run('berita/get_popular') ?>
            <!-- popular -->
          </div>

          </div>
        </div>
      </div>
      <div class="col-sm-16">
        <img src="https://dummyimage.com/380x250/000/fff&text=Ads+Space+380x250" class="img-responsive" alt="" />
      </div>
    </div>
  </div>
  <!-- end of content -->
</div>
