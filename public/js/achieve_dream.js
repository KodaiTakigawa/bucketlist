$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var ahieve_button = document.getElementsByClassName("achieve");

var ahieve_dream = function(){
    var dream_id = this.getAttribute("data-value");
    var dream_title = document.getElementById(`dream_id_${dream_id}`).textContent;
    var data = {
      'dream_id': dream_id,
    };
    $.ajax({
      type: 'POST',
      url: '/mypage/achivedlist',
      data: data,
    });
    window.location.href = "/mypage/achivedlist";
    window.open(`https://twitter.com/intent/tweet?text=【${dream_title}】を達成しました。\n&url=https://dreamers1.herokuapp.com/find-dreams/detail?id=${dream_id}&hashtags=Dreamers`, 'newwindow', 'width=400,height=300');
};

Array.from(ahieve_button).forEach(function(button) {
  button.addEventListener('click', ahieve_dream);
});