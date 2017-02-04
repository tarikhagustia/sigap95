<?php
add_js(base_url('assets/vendors/fancybox/jquery.fancybox.js'));
add_js(base_url('assets/vendors/fancybox/jquery.fancybox.pack.js'));
add_js(base_url('assets/js/slim-image/slim/slim.kickstart.min.js'));
add_js(base_url('assets/vendors/select2/dist/js/select2.full.min.js'));
add_js(base_url('assets/js/article.js'));
?>
<link rel="stylesheet" href="/assets/vendors/fancybox/jquery.fancybox.css" media="screen" title="no title" charset="utf-8">
<link href="<?php echo base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/js/slim-image/slim/slim.min.css" rel="stylesheet">
<div class="x_panel"W>
  <div class="x_title">
    <h2>Buat Artikel Baru</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <!-- <input id="image_link" name="link" type="text" value="">
    <a href="/filemanager/dialog.php?type=1&field_id=image_link" class="btn iframe-btn" type="button">Open Filemanager</a> -->
    <?php echo modules::run('alert/show') ?>
    <?php echo form_open('myadmin/article/new'); ?>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-12">
          <select class="form-control article-type" name="article_type">
            <option value="article">Artikel</option>
            <option value="video">Video</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-6">
          <div class="" id="article-gambar">
            <label class="control-label" for="">Photo</label>
            <div class="slim"
               data-label="Tarik gambar anda kesini"
               accept="image/jpeg"
               data-size="640,640"
               data-ratio="16:9">
              <input type="file" name="slim[]"/>
            </div>
          </div>
          <div class="" id="youtube-link" hidden>
            <label for="">Youtube Link</label>
            <input type="text" name="article_video" class="form-control" value="npFAmRqHpQc">
            <small>Masukan ID Youtube https://www.youtube.com/watch?v=<b>npFAmRqHpQc</b></small>
          </div>
        </div>
        <div class="col-sm-6">
            <label class="control-label" for="article_caption-name">Caption Gambar</label>
            <textarea name="article_caption" id="article_caption" class="form-control"></textarea>
        </div>
      </div>
    </div>
      <div class="form-group">
        <label for="profile_name">Judul Artikel</label>
        <input class="form-control" type="text" name="article_name" value="" id="profile_picture" required/>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-6">
            <label for="article_category">Kategori</label>
            <select class="select2_multiple form-control" multiple="multiple" name="kanals[]">
              <?php foreach (modules::run('category/get_category') as $key => $value): ?>
                <option value="<?php echo $value->category_id; ?>" ><?= $value->category_name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-sm-6">
            <label for="author_name">Nama Redaksi</label>
            <input class="form-control" type="text" name="author_name" value="" id="author_name" required/>
          </div>
        </div>

      </div>
      <div class="form-group">
        <label for="article_summary">Ringkasan</label>
        <textarea class="form-control" name="article_summary" rows="6"><?php echo set_value('article_summary') ?></textarea>
      </div>
      <div class="form-group">
        <label for="article_desc">Isi Berita</label>
        <textarea class="custom-ck form-control" name="article_desc" rows="6" id="editorarticle"><?php echo set_value('article_desc') ?></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>
<script type="text/javascript">
  //  CKEDITOR.replace( 'editor1' );
</script>
