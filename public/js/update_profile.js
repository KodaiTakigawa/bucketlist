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
  
  $('#update').click(function(){
    $('#edit_form').hide();
    $('.no_edit').show();

    // var name = doucment.getElementById('name').value;
    // console.log(name);
    // var description = document.getElementById('description').value;
    var name = $('#name_update').val();
    var description = $('#description_update').val();
    console.dir(description);
    var data = {
      'name': name,
      'description': description,
    };

    $.ajax({
      url: '/update_profile',
      type: 'POST',
      data: data,
      success: function(json){
        $(`#name`).html(name);
        $(`#description`).html(description);
      }
    });    
  });

});