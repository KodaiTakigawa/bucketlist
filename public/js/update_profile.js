$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function() {
  $('#edit').click(function(){
    $('.no_edit').hide();
    $('#edit_form').show();
  });
});

$(function() {
  $('#upadte').click(function(){
    $('#edit_form').hide();
    $('.no_edit').show();

    var name = doucment.getElementById('name').value;
    console.log(name);
    var description = document.getElementById('description').value;
    var data = {
      'name': name,
      'desription': description,
    };
    $.ajax({
      url: '/update_profile',
      type: 'POST',
      data: data,
    })
    $(`form`).html(data);
    console.log(data);
  });
});