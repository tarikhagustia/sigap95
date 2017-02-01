$(".select2_multiple").select2({
  maximumSelectionLength: 6,
  placeholder: "Pilih halaman",
  allowClear: true
});
// article or videos
$( ".article-type" ).change(function() {
  $nilai = $(this).val();

  if ($nilai == "article") {
    $('#article-gambar').show();
    $('#youtube-link').hide();
  }else{
    $('#article-gambar').hide();
    $('#youtube-link').show();

  }
});
CKEDITOR.replace( 'editorarticle' ,{
  filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
