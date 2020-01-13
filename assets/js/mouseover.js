$(document).ready(function () {
    
    $('div').on('mouseover', function () { 
        let id = {
            id: $(this).attr('id')
        }
        if (id != '') {
            console.log('div id', id);
            $.get('api/mouseover.php', id)
            .then(function(data){
                data = JSON.parse(data);
                $('#info div').html('')
                $('#info div').append(data)
            })
        }
    });
    $('div').on('mouseleave', function () { 
        $('#info div').html('')
    });
    moveText()
    divHeight()
});