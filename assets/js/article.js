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
$(".fancybox").fancybox();
$('.iframe-btn').fancybox({
   'width'		: 900,
   'height'	: 600,
   'type'		: 'iframe',
   'autoScale'    	: false
});
function responsive_filemanager_callback(field_id){
	console.log(field_id);
	var url=jQuery('#'+field_id).val();
	alert('update '+field_id+" with "+url);
	//your code
}
