$(document).ready(function () {
    
    function select(input, preDefined) {
        for (let i = 0; i < preDefined.length; i++) {
            if (input == preDefined[i]['description']) {
                let div = `<div class='element'>${preDefined[i]['icon']} <p>${preDefined[i]['description']}</p></div>`;
                return div;
            }
        }
    }
    
    preDefined.forEach(function(element) {
        let option = `<option class='description' value="${element.description} ">${element.description}</option>`
        $('#interestInput').append(option);
    });
    
    
    $('#interestInput').on('change', function(e) {
        e.preventDefault();
        var input = $('select').find(":selected").text();
        // console.log('input' , input);
        
        for (let i = 0; i < preDefined.length; i++) {
            
            var now = select(input, preDefined)
            console.log(now);
            
        }
        $('.tagInterests').append(now)
        divHeight()
    })
    $(document).on('click', '.element', function() {
        
        $(this).remove()
        divHeight()
    }) 
    $(document).on('mouseover', '.element', function() {
        
        $('.element').css('cursor', 'pointer')
        divHeight()
    })  

    
    
    
    
    
    
    
    
    
});