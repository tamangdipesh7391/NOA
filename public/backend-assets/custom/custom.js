function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image_show').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#change_image").change(function () {
    readURL(this);
});

$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    setTimeout(function () {
        $('.alert').hide('slow');
    }, 3000);


    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    }

    $('#title').keyup(function () {
        var value = $(this).val();
        $('#slug').val(slugify(value));

    });


    setTimeout(function () {
        $('.alert').hide('slow');

    }, 3000);


    // $('#date').datetimepicker({
    //     "format": "YYYY-MM-DD",
    // });
    //
    // $('#end_date').datetimepicker({
    //     "format": "YYYY-MM-DD",
    // });
    //
    //
    // $('#start_from').datetimepicker({
    //     "allowInputToggle": true,
    //     "showClose": true,
    //     "showClear": true,
    //     "showTodayButton": true,
    //     "format": "YYYY-MM-DD HH:mm:ss",
    // });
    //
    // $('#ends_at').datetimepicker({
    //     "allowInputToggle": true,
    //     "showClose": true,
    //     "showClear": true,
    //     "showTodayButton": true,
    //     "format": "YYYY-MM-DD HH:mm:ss",
    // });


});



