$(document).ready(function () {
    

$('#downloadBtn').click(function(){
    $('#columnChange').removeClass("col-md-10").addClass("col-md-12");

    var element = document.getElementById('cvSection');
    var opt = {
    margin:       1,
    width: 100,
    filename:     'cv.pdf',
    
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 2 },
    jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };
    // New Promise-based usage:
    html2pdf().from(element).set(opt).save()
    $('#columnChange').removeClass("col-md-12").addClass("col-md-10");
    


    

    // 76301d0e4df24a7d9a3923477a76854a
    let data = 'http://localhost/brainsterprojectsstojanchemanevb1/webdevelopment.php';
    let apiKey = '76301d0e4df24a7d9a3923477a76854a';
    pdfshift({'source': 'https://en.wikipedia.org/wiki/PDF'}, '76301d0e4df24a7d9a3923477a76854a')

    // ========================   NE BIDUVA NIKAKO ========================= :) 
    
    }) 
    
}) 