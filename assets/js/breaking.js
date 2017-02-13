$(document).ready(function() {
  $(".js-data-example-ajax").select2({
    placeholder: 'Pilih Artikel yang akan ditampilan',
    minimumInputLength: 1,
    minimumInputLength: 2,
    multiple: true,
    ajax: {
      url: '/myadmin/article/get/article/',
      data: function (params) {
          var queryParameters = {
              article_name: params.term
          }
          return queryParameters;
      },
      processResults: function (data) {
        return {
          results: $.map(data, function (item) {
              return {
                  text: item.article_name,
                  id: item.article_id
              }
          })
      };
      }
    }
  });


  $(".featured-video-news").select2({
    placeholder: 'Pilih Artikel yang akan ditampilan',
    minimumInputLength: 1,
    minimumInputLength: 2,
    ajax: {
      url: '/admin_article/get_artilce/video',
      data: function (params) {
          var queryParameters = {
              article_name: params.term
          }
          return queryParameters;
      },
      processResults: function (data) {
        return {
          results: $.map(data, function (item) {
              return {
                  text: item.article_name,
                  id: item.article_id
              }
          })
      };
      }
    }
  });
});
