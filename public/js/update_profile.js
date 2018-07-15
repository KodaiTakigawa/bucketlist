$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  $(function() {
    $('#edit').click(function(){
      $('.no_edit').hide().toggleClass("d-flex");
      $('#edit_form').show();
    });
  });

  $(function() {
    $('#upadte').click(function(){
      $('#edit_form').hide();
      $('.no_edit').show().toggleClass("d-flex");

      var name = getElementById('name').textContent;
      var description = getElementById('description').texitContent;
      var data = {
        'name': name,
        'desription': description,
      };
      $.ajax({
        url:'/update_profile',
        type:'POST',
        data:data,
      })
      $(`form`).html(data);
      console.log(data);
    });
  });