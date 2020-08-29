$(function() {
  $('.form').on('submit', function(e) {
    e.preventDefault();
    this.isProcessing = this.isProcessing || false;
    if (this.isProcessing) return false;
    this.isProcessing = true;
    $('.loading').fadeIn(300);
    var that = this;
    // 計算
    var $form = $('.form');
    $.ajax({
      cache: false,
      url: $form.attr('action'),
      type: $form.attr('method'),
      data: $form.serializeArray(),
      timeout: 10000
    }).then(
      function(data) {
        $(this).delay(1000).queue(function() {
          $('.resultArea').html(data);
          $("html,body").animate({scrollTop:$('.resultArea').offset().top}, function() {
            $('.loading').fadeOut(300).queue(function() {
              that.isProcessing = false;
              $(this).dequeue();
            });
          });
          $(this).dequeue();
        });
      },
      function() { location.reload(); }
    );
    return false;
  });
});