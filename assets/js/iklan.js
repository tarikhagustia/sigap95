$('.iframe-btn').fancybox({
   'type'		: 'iframe',
   'height' : 720,
   'width' : 1287,
   'fitToView'    	: true,
   'autoSize' : false,
   'autoScale'    	: true
});
function responsive_filemanager_callback(field_id){
	var url = jQuery('#'+field_id).val();
  $("#tampilgambar").attr("src", url);
}
$(".select2_multiple").select2({
  maximumSelectionLength: 6,
  placeholder: "Pilih halaman",
  allowClear: true
});
// width : 1287,
//    height : 720,
//    fitToView : false,
//    autoSize : false
