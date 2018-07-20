$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

var good_button = document.getElementsByClassName("good-button");

var countGood = function(){
  var dream_id = this.getAttribute("data-value");
  var data = {
    'dream_id': dream_id,
  };
  $.ajax({
      url:'/dream_good',
      type:'POST',
      data:data,
  })
  // Ajaxリクエストが成功した時発動
  .done( (data) => {
      $(`#dream_id_${dream_id}`).html(data);
      console.dir(data);
  })
  // Ajaxリクエストが失敗した時発動
  .fail( (data) => {
      $(`#dream_id_${dream_id}`).html(data);
      console.dir(data);
  })
  // Ajaxリクエストが成功・失敗どちらでも発動
  .always( (data) => {

  });
};

Array.from(good_button).forEach(function(div) {
  div.addEventListener('click', countGood, {once: true});
});
