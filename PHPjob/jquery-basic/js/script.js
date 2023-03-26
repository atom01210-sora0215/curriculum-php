$(function() {
  $(function() {
    // class属性値の先頭が「sample」の要素だけを抽出する
    const text = $('li[class^="sample"]').text();
    console.log(text);
  });
});
