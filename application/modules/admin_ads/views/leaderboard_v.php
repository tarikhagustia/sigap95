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
        Ads Management
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
          <h2>Manage <small>Leader Board</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>
          <?php if ($this->session->flashdata('status')): ?>
            <div class="alert alert-success">
              <?php echo $this->session->flashdata('status') ?>
            </div>
          <?php endif; ?>
          <br/>
          <?php echo form_open_multipart('myadmin/ads/leaderboard', array('name' => 'ci_form')); ?>
          <?php
          // 852.5×187.783
          echo form_hidden('width', 853);
          echo form_hidden('height', 200);
          ?>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                Pada Halaman
              </div>
              <div class="col-md-9">
                <select class="select2_multiple form-control" multiple="multiple" name="ads_location[]">
                  <?php foreach ($categorys as $key => $value): ?>
                    <option value="<?php echo $value->ads_id ?>"><?php echo $value->ads_location; ?></option>
                  <?php endforeach; ?>
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
