<?php
add_js(base_url('assets/js/slim-image/slim/slim.kickstart.min.js'));
add_js(base_url('assets/vendors/select2/dist/js/select2.full.min.js'));
add_js(base_url('assets/js/article.js'));
?>
<link href="<?php echo base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/js/slim-image/slim/slim.min.css" rel="stylesheet">
<div class="x_panel"W>
  <div class="x_title">
    <h2>Buat Artikel Baru</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo modules::run('alert/show') ?>
    <?php echo form_open('myadmin/article/new'); ?>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-6">
          <label class="control-label" for="">Photo</label>
          <div class="">
            <div class="slim"
               data-label="Tarik gambar anda kesini"
               accept="image/jpeg"
               data-size="640,640"
               data-ratio="16:9">
              <input type="file" name="slim[]" required />
            </div>
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
              <option value="0">satu</option>
              <option value="1">dua</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for="author_name">Nama Redaksi</label>
            <input class="form-control" type="text" name="author_name" value="" id="author_name" required/>
          </div>
        </div>

      </div>
      <div class="form-group">
        <label for="article_desc">Keterangan</label>
        <textarea class="ckeditor form-control" name="article_desc" rows="6" id="editor1"><?php echo set_value('book_description') ?></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>
<script type="text/javascript">
   CKEDITOR.replace( 'editor1' );
</script>
