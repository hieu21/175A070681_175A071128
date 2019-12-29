$(function() {
    $('#select_all').change(function(){
        var checkboxes = $(this).closest('div#lichtrinh').find(':checkbox');
        if($(this).prop('checked')) {
          checkboxes.prop('checked', true);
        } else {
          checkboxes.prop('checked', false);
        }
    });
});