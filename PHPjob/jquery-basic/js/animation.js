$(function () {
  // // id属性がfadeOutの要素がクリックされたら
  // $('#fadeOut').on('click', function() {
  //   // フェードアウトする
  //   $('.box').fadeOut();
  //   // 3秒かけて、フェードアウトする
  //   // $('.box').fadeOut(3000, function(){
  //   //   alert('fadeOut完了');
  //   // });
  // });

  // // id属性がfadeInの要素がクリックされたら
  // $('#fadeIn').on('click', function() {
  //     // フェードインする
  //     $('.box').fadeIn();
  // });

  // // id属性がfadeToggleの要素がクリックされたら
  // $('#fadeToggle').on('click', function() {
  //   // フェードイン or フェードアウトする
  //   $('.box').fadeToggle();
  // });

  // $('#slideUp').on('click', function() {
  //   $('.box').slideUp();
  // });
  // $('#slideDown').on('click', function() {
  //   $('.box').slideDown();
  // });
  // $('#slideToggle').on('click', function() {
  //   $('.box').slideToggle();
  // });

  $('#cssfadeOut').on('click', function () {
    // 不透明度を0にする（フェードアウトする）
    $('.box').css('opacity', 0);
  });
  $('#cssfadeIn').on('click', function () {
    // 不透明度を1にする（フェードインする）
    $('.box').css('opacity', 1);
  });
  $('#cssslideUp').on('click', function() {
    // 高さを0にする（スライドアップする）
    $('.box').css('height', 0);
  });
  $('#cssslideDown').on('click', function() {
    // 高さを200にする（スライドダウンする）
    $('.box').css('height', 200);
  });
});
