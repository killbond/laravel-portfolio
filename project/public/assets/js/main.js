jQuery(document).ready(function ($) {

    $('.image-link').magnificPopup({
        type:'image',
        image: { verticalFit: false },
        zoom: { enabled: true }
    });

    $('a.project-update').on('click', function(e) {
        var $container = $(this).parents('.project'),
            $name = $container.find('.name'),
            $description = $container.find('.description'),
            $technology = $container.find('.technology'),
            $role = $container.find('.role'),
            $image = $container.find('.image');

        $name.html($('<input class="form-control" name="name" type="text" id="name">').val($name.html()));
        $description.html($('<textarea class="form-control" rows="4" name="description" cols="50" id="description"></textarea>').html($description.html()));
        $technology.html($('<textarea class="form-control" rows="2" name="technology" cols="50" id="technology"></textarea>').html($technology.html()));
        $role.html($('<textarea class="form-control" rows="3" name="role" cols="50" id="role"></textarea>').html($role.html()));
        $image.html($('<span class="btn btn-default btn-file">Browse <input name="image" id="image" type="file"></span>'));
        $container.find('.col-lg-6').first().append($('<input class="btn btn-default" type="submit" value="Update">'));
        $container.removeClass('bordered');

        e.preventDefault();
    });

    $('.project').on('click', 'input[type="submit"]', function(e) {
        var $container = $(this).parents('.project'),
            formData = new FormData(),
            file = $container.find('#image')[0].files[0] || false;

        formData.append('_token', $('meta[name="csrf-token"]').prop('content'));
        formData.append('name', $container.find('#name').val());
        formData.append('description', $container.find('#description').val());
        formData.append('technology', $container.find('#technology').val());
        formData.append('role', $container.find('#role').val());

        if(file) {
            formData.append('image', file);
        }

        $.ajax({
            url: $container.find('.project-update').prop('href'),
            data: formData,
            type: 'POST',
            processData: false,
            contentType: false,
            success: function() {
                location.reload();
            },
            error: function(response) {
                alert(JSON.parse(response.responseText).join("\r\n"));
            }
        });

        e.preventDefault();
    })

});