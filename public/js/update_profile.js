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
    console.log(1);

    // var name = doucment.getElementById('name').value;
    // console.log(name);
    // var description = document.getElementById('description').value;
    var name = document.forms.edit_form.name_update.value;
    var description = document.forms.edit_form.description_update.value;
    console.log(2);
    var data = {
      'name': name,
      'desription': description,
    };
    console.log(3);
    $.ajax({
      url: '/update_profile',
      type: 'POST',
      data: data,
    })
    $(`name`).html(name);
    $(`description`).html(description);
    console.log(data);
  });
});