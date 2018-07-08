$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


$(function(){
    // Ajax button click
    $('#good_button').one('click',function(){
//        var dream_id = $(event.target).id;
        var dream_id;
        dream_id = document.getElementById('dream_id').textContent;
        var data = {};
        data['dream_id'] = dream_id;
        $.ajax({
            url:'/dream_good',
            type:'POST',
            data:data,
            processData: false,
            contentType: false
        })
        // Ajaxリクエストが成功した時発動
        .done( (data) => {
            $('#good_num').html(data);
            console.log(data);
        })
        // Ajaxリクエストが失敗した時発動
        .fail( (data) => {
            $('#good_num').html(data);
            console.log(data);
        })
        // Ajaxリクエストが成功・失敗どちらでも発動
        .always( (data) => {

        });
    });
});
