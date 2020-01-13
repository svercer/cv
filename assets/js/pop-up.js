$(document).ready(function () {
    

    $('#pop-up').hide()

    // let popWidth = $(window).width() - '50%'
    // $('#pop-up').width(popWidth)
    // let popHeight = $(window).height() - '60%'
    // $('#pop-up').height(popHeight)

    let popUp = 0;
    $(document).on('mouseover', '#downloadBtn', function() {
            if (!sessionStorage.getItem('popUp')) {
                popUp = 1; 
               

                $('#pop-up').fadeIn(1000)
                    .delay(6000).fadeOut()
                    
                sessionStorage.setItem('popUp', popUp);
            }      
        
    })
});