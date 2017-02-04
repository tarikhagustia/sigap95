<?php
add_js(base_url('assets/vendors/select2/dist/js/select2.full.min.js'));
add_js(base_url('assets/js/breaking.js'));
?>
<link href="<?php echo base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Featured  Video</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <p class="alert alert-warning">
          Pilih 1 Artikel saja
        </p>
        <?php echo modules::run('alert/show'); ?>
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif; ?>
        <?php echo form_open_multipart('myadmin/featured/home/video', array('name' => 'ci_form')); ?>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              Pilih berita
            </div>
            <div class="col-md-9">
              <select class="featured-video-news form-control" name="news_list[]" required>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              Pilih Kanal
            </div>
            <div class="col-md-9">
              <select class="form-control" name="category">
                <option value="">home page</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-offset-3">
              <button type="submit" class="btn btn-pimary">Update</button>
            </div>
          </div>
        </div>
        <?php echo form_close(); ?>
        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th>No</th>
                <th>Nama Artikel</th>
                <th>Halaman / Kanal</th>
                <th>Created</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($featured as $key => $breaking): ?>
                <tr>
                  <td>
                    <?php echo $key+1; ?>
                  </td>
                  <td>
                    <?php echo $breaking->article_name ?>
                  </td>
                  <td>
                    <?php echo ($breaking->category_name == null) ? "Home Page" : $breaking->category_name; ?>
                  </td>
                  <td>
                    <?php echo $breaking->created_at ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
