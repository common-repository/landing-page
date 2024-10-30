( function( $ ) { 

$('.SavePage').click(function() {

  var setFrontPage = '';
  var loadWpHead = $('.loadWpHead').attr('checked');
  var loadWpFooter = $('.loadWpFooter').attr('checked');
  var pageSeoName = $('#title').val();
  var pageLink = $('#editable-post-name-full').html();
  var pageSeoDescription = $('.pageSeoDescription').val();
  var pageSeoKeywords = $('.pageSeoKeywords').val();
  var pageBgImage = $('.pageBgImage').val();
  var pageBgColor = $('.pageBgColor').val();
  var pagePaddingTop = $('.pagePaddingTop').val();
  var pagePaddingBottom = $('.pagePaddingBottom').val();
  var pagePaddingLeft = $('.pagePaddingLeft').val();
  var pagePaddingRight = $('.pagePaddingRight').val();

  if ($('.setFrontPage').is(':checked')) {
    setFrontPage = "true";
  } else{
    setFrontPage = "false"; 
  }

  if (loadWpHead == 'checked') {
    loadWpHead = "true";
  } else{
    loadWpHead = "false"; 
  }

  if (loadWpFooter == 'checked') {
    loadWpFooter = "true";
  } else{
    loadWpFooter = "false"; 
  }

  var pageOps = {
    setFrontPage: setFrontPage,
    loadWpHead:loadWpHead,
    loadWpFooter: loadWpFooter,
    pageBgImage: pageBgImage,
    pageBgColor: pageBgColor,
    pageLink: pageLink,
    pagePadding: {
      pagePaddingTop : pagePaddingTop,
      pagePaddingBottom : pagePaddingBottom,
      pagePaddingLeft : pagePaddingLeft,
      pagePaddingRight : pagePaddingRight,
    },
    pageSeoName: pageSeoName,
    pageSeoDescription: pageSeoDescription,
    pageSeoKeywords: pageSeoKeywords
  };

  var newPermalinkUrl = siteURLpb+'/'+pageLink;
  $('#sample-permalink a').attr('href',newPermalinkUrl);

  $('#container').attr('style','background-image: url("'+pageBgImage+'"); background-size:cover; background-color:'+pageBgColor+';');

  var PageStatus = app.PageBuilderModel.get('pageStatus');
  app.PageBuilderModel.set( 'pageOptions', pageOps);
  app.PageBuilderModel.set('pageStatus','Published');
  app.PageBuilderModel.set( 'Rows', app.rowList.models );
  app.PageBuilderModel.save();
  $('.pb_loader_container').slideDown(200);
  setTimeout(function(){
    $('.pb_loader_container').slideUp(200);
    if (PageStatus == 'Unpublished') {
      window.location.href = admURL+'post.php?post='+P_ID+'&action=edit'; 
    }
  }, 2000);

});

}( jQuery ) );