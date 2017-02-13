<?php
add_js(base_url('assets/vendors/fancybox/jquery.fancybox.js'));
add_js(base_url('assets/vendors/fancybox/jquery.fancybox.pack.js'));
add_js(base_url('assets/js/slim-image/slim/slim.kickstart.min.js'));
add_js(base_url('assets/vendors/select2/dist/js/select2.full.min.js'));
add_js(base_url('assets/js/iklan.js'));
?>
<link rel="stylesheet" href="/assets/vendors/fancybox/jquery.fancybox.css" media="screen" title="no title" charset="utf-8">
<link href="<?php echo base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/js/slim-image/slim/slim.min.css" rel="stylesheet">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>
        Management Iklan
        <small>
          Page rendering in {elapsed_time}
        </small>
      </h3>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h5>Iklan Halaman depan</h5>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <?php echo modules::run('alert/show') ?>
          <br/>
          <?php echo form_open_multipart('myadmin/ads/home', array('name' => 'ci_form')); ?>
          <?php
          // 439x227
          echo form_hidden('width', 853);
          echo form_hidden('height', 200);
          ?>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                Pada Halaman
              </div>
              <div class="col-md-9">
                <select class="form-control" name="ads_location">
                  <option value="HAA">Iklan 439x227 Kiri</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                Link
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="link" placeholder="http://google.com" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                Alt
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="alt" placeholder="Iklan dari Google" value="" required>
                <span class="help-text">Alt menjelaskan tentang deskripsi iklan,</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                File gambar
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-sm-12">
                    <img src="" alt="" id="tampilgambar" style="width: 100px; height: 100px;" />
                  </div>
                  <div class="col-sm-12">
                    <input id="image_link" name="ads_image" type="text" value=""/>
                    <a href="/filemanager/dialog.php?type=1&field_id=image_link" class="btn btn-success iframe-btn" type="button">Pilih Gambar</a>
                  </div>
                </div>
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
          <br/>
        </div>
    </div>
  </div>
</div>
