// create

$(function(){
    $('form[name="create"]').submit(function(event){
        event.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    window.location.href = response.route;
                    $('#message').removeClass('d-none').html(response.message);
                }
                $('#message').removeClass('d-none').html(response.message);
            }
        })
    })
});

// update

$(function(){
    $('form[name="edit"]').submit(function(event){
        event.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'put',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    window.location.href = response.route;
                    $('#message').removeClass('d-none').html(response.message);
                }
                $('#message').removeClass('d-none').html(response.message);
            }
        })
    })
})

// delete

$(function(){
    $('form[name="delete"]').submit(function(event){
        event.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'delete',
            dataType:'json',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    $('#message').removeClass('d-none').html(response.message);
                    window.location.href = response.route;
                }
                $('#message').removeClass('d-none').html(response.message);
            }
        })
    })
})
