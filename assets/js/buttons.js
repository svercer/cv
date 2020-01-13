$(document).ready(function () {
    

$('#linkedSection').hide()
$('#laikaSection').hide()

$('.menuBtn').on('click', function (e) {
    $('.menuBtn').removeClass('active');
    $('.menuBtn').addClass('backgroundBtn');
    $(this).removeClass('backgroundBtn').addClass('active');
    divHeight()
})

$('#linkedActive').on('click', function (e) {
    $('#cvSection').hide()
    $('#downloadBtn').hide()
    $('#laikaSection').hide()
    $('#linkedSection').show()
    divHeight()
    // let height = $('#createCV').height();
    // $('#info').height(height);
})
$('#cvActive').click(function (e) { 
    $('#linkedSection').hide()
    $('#laikaSection').hide()
    $('#downloadBtn').show()
    $('#cvSection').show()
    divHeight()
    // let height = $('#createCV').height();
    //     $('#info').height(height);
});
$('#laikaActive').click(function (e) { 
    $('#cvSection').hide()
    $('#downloadBtn').hide()
    $('#linkedSection').hide()
    $('#laikaSection').show()
    divHeight()
    // let height = $('#createCV').height();
    //     $('#info').height(height);
});
});