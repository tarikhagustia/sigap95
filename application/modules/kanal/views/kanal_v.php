<div class="row">
  <!-- start of content -->
  <div class="col-sm-11">
    <!-- breaking news -->
    <?php echo modules::run('berita/get_breaking', $kanal) ?>
    <!-- breaking news -->
    <div class="row">
        <div class="col-sm-8">
          <img src="https://dummyimage.com/380x250/000/fff&text=Ads+Space+280x250" class="img-responsive">
          <img src="/assets/images/iklan/pomoter.png" class="img-responsive">
          <hr />
          <div class="judul-konten pull-left">Popular news</div>
          <div class="row">
            <div class="col-sm-16 padding-10 ">
            <div class="news-popular">
              <!-- polular -->
              <?php echo modules::run('berita/get_popular', $kanal) ?>
              <!-- popular -->
            </div>

            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="judul-feed text-center">
            News Feed
          </div>
          <div class="row">
            <div class="col-sm-16">
              <div class="news-feed">
                <!-- news feed -->
                <?php echo modules::run('berita/get_feeds', $kanal) ?>
                <!-- news feed -->
              </div>
            </div>
            <div class="col-sm-16">
              <div class="judul-feed text-center">
                Berita Video
              </div>
              <div class="embed-responsive embed-responsive-16by9 news-video">
                <iframe id="ytplayer" type="text/html" src="https://www.youtube.com/embed/p8MXblaRl5k?autoplay=0&origin=http://sigap95.dev" frameborder="0"></iframe>
              </div>
            </div>
          </div>
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
        <div class="judul-feed text-center">
          Info Cuaca
        </div>
        <div class="cuaca">
          <a href="http://www.accuweather.com/id/id/sukabumi/202511/weather-forecast/202511" class="aw-widget-legal"></a>
          <div id="awcc1484798037459" class="aw-widget-current"  data-locationkey="202511" data-unit="c" data-language="id" data-useip="false" data-uid="awcc1484798037459"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
        </div>
      </div>
      <div class="col-sm-16">
        <img src="https://dummyimage.com/380x250/000/fff&text=Ads+Space+380x250" class="img-responsive" alt="" />
      </div>
      <div class="col-sm-16">
        <p style="text-align: center;"><iframe src="https://time.wf/widget.php" scrolling="no" frameborder="0" width="110" height="45"></iframe><br><iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=308" frameborder="0" width="220" height="220"></iframe><a href="https://www.jadwalsholat.org" target="_blank"><img class="aligncenter" style="text-align: center;" alt="jadwal-sholat" src="https://www.jadwalsholat.org/wp-content/uploads/2013/09/jadwal-sholat.png" width="81" height="18" /></a></p>
      </div>
    </div>
  </div>
  <!-- end of content -->
</div>
