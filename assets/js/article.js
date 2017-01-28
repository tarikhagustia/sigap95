$(".select2_multiple").select2({
  maximumSelectionLength: 6,
  placeholder: "Pilih halaman",
  allowClear: true
});
CKEDITOR.replace( 'editorarticle' ,{
  filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
