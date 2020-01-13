// animate, move text up and down acording to scroll
    

    function moveText() {
        $(window).scroll(function(){
            $("#info div").stop().animate({"marginTop": ($(window).scrollTop()) + "px"}, "slow" );
        });
    }
    // make the same heigh on both div's 
    function divHeight() {
        let height = $('#createCV').height();
        $('#info').height(height);
    }
    // ===================


    // text area 
    function textareaHeight(){
        $(document).on('input', 'textarea', function() {
            $(this)
            .height(50)
            .height(this.scrollHeight);
        });
    }
    // upload image function 
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function addBorderDeveloper() {
        $('input').css('border-bottom', '1px solid #2cbbad')
        $('textarea').css('border-bottom', '1px solid #2cbbad')
    }