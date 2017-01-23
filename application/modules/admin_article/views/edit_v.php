<?php
add_js(base_url('assets/js/slim-image/slim/slim.kickstart.min.js'));
add_js(base_url('assets/vendors/select2/dist/js/select2.full.min.js'));
add_js(base_url('assets/js/article.js'));
?>
<link href="<?php echo base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/js/slim-image/slim/slim.min.css" rel="stylesheet">
<div class="x_panel">
  <div class="x_title">
    <h2>Edit <?php echo $article->article_name ?></h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo modules::run('alert/show') ?>
    <?php echo form_open_multipart('myadmin/article/edit');
    echo form_hidden('article_id' , $article->article_id);
    ?>
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
               <img src="<?php echo base_url($article->article_image) ?>"/>
              <input type="file" name="slim[]" required />
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <label class="control-label" for="article_caption-name">Caption Gambar</label>
            <textarea name="article_caption" id="article_caption" class="form-control"><?php echo $article->article_image_caption ?></textarea>
        </div>
      </div>
    </div>
      <div class="form-group">
        <label for="profile_name">Judul Artikel</label>
        <input class="form-control" type="text" name="article_name" id="profile_picture" value="<?php echo $article->article_name ?>" required/>
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
            <input class="form-control" type="text" name="author_name" id="author_name" value="<?php echo $article->author_name ?>" required/>
          </div>
        </div>

      </div>
      <div class="form-group">
        <label for="article_summary">Ringkasan</label>
        <textarea class="form-control" name="article_summary" rows="6"><?php echo $article->article_summary ?></textarea>
      </div>
      <div class="form-group">
        <label for="article_desc">Isi Berita</label>
        <textarea class="ckeditor form-control" name="article_desc" rows="6" id="editor1"><?php echo $article->article_desc ?></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>
<script type="text/javascript">
   CKEDITOR.replace( 'editor1' );
</script>
