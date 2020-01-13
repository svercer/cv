
$(document).ready(function () {

    if (sessionStorage.getItem('htmlWeb')) {
        $('#cvSection').html(sessionStorage.getItem('htmlWeb'))
    }
    let keys = Object.keys(sessionStorage)
    for (let i = 0; i < keys.length; i++) {
        if (sessionStorage.getItem(keys[i])) {
            // console.log(keys[i]);
            // $("[myAttribute='my value']")
            $("[session-data=" + keys[i] + "]").val(sessionStorage.getItem(keys[i]))
        }
    }

    textareaHeight()   
    $('#addWork').hide();
    $('#addAchievements').hide();
    $('#interestInput').hide()
    $('#imageUpload').addClass('displayNone');
    $('#photoUploader').addClass('displayNone');
    $('#imageUploader').addClass('displayNone')
    // $('#inputSkill').addClass('displayNone')
    $('#inputSkill').hide()

    $('input').attr('disabled', true);
    $('textarea').attr('disabled', true);

   
    $('#imageUpload').on('change', function (){
        readURL(this);
        divHeight()
    })
    $('#new_btn').bind("click" , function () {
        $('#imageUpload').click();
        $('#imageUploader').addClass('displayNone');
        $('#blah').css('opacity', '1')
        divHeight()
    });


    $('#edit').on('click', function() {
        $('input').attr('disabled', false);
        $('textarea').attr('disabled', false);
        // img //
        $('#blah').css('opacity', '0.3')
        // // areas to hide
        $('.sampleWork').addClass('displayNone')
        $('.sampleTag').addClass('displayNone')
        $('.sampleInterest').addClass('displayNone')
        $('.sampleachievement').addClass('displayNone')
        // areas to show
        $('#imageUploader').removeClass('displayNone')
        // $('#inputSkill').removeClass('displayNone')
        $('#inputSkill').show()

        // $('#interestInput').removeClass('displayNone')
        $('#interestInput').show()

        $('#new_btn').show()

        $('#addWork').fadeIn(2000);
        $('#addAchievements').fadeIn(2000);

        
        addBorderDeveloper()
        
        divHeight()
    })

    
    let workClick = 2
    $('#addWork').on('click', function(){
        let work = `
            <div id="work${workClick}" class="workSection row flex-row">
                <div id="designCube" class="col-md-1">
                    <div class="cubeWork">
                    </div>
                </div>
                <div class="col-md-11">
                    <input type="text" id="workPosition${workClick}" session-data='webWorkPosition${workClick}'  class="workPosition colorBlack textarea-o-b-i" placeholder="Founder, CEO and Lead Designer" >
                    <input type="text" id='workCompany${workClick}' session-data='webWorkCompany${workClick}' class="workCompany colorBlack textarea-o-b-i" placeholder="SpaceX - Space Exploration Technologies" >
                    <div class="flex-row-space-between dateLocation">
                        <input type="text" id='date${workClick}' session-data='webDate${workClick}' class='fontSize-0-9 textarea-o-b-i colorG' placeholder='May 2016 -'>
                        <input type="text" id='location${workClick}' session-data='webLocation${workClick}' class='textarea-o-b-i colorG' placeholder="Hometown, USA">
                    </div>
                    <p class="fontSize-0-9 colorG">Acomplishments</p>
                    <div class="customTextBox flex-row">
                        <i class="fas fa-square-full"></i><textarea id="customTextWork${workClick}" session-data='webCustomTextWork${workClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel' rows='8' cols='30'></textarea>
                    </div>
                </div>
                <i class="pull-right fas fa-minus-circle"></i>
            </div>
        `;
        divHeight()

        $('#workExperience').append(work);
        addBorderDeveloper()
        workClick++
        divHeight()
    })
    let achievementsClick = 2
    $('#addAchievements').on('click', function(){
        let achievement = `
            <div class="achivementsSection">
                <div class="flex-row-space-between">
                    <textarea id="customTextAch${achievementsClick}" session-data='webCustomTextAch${achievementsClick}' class="achivementsText colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel'></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
                <div class="flex-row-space-between">
                    <textarea id="cite${achievementsClick}" session-data='webCiteAch${achievementsClick}'class='textarea-o-b-i fontSize-0-9' placeholder='Given to people who have mentored'></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
            </div>
        `;
        $('#educationSection').append(achievement);
        addBorderDeveloper()
        achievementsClick++;
        divHeight()

    })

// focus in3
    // delte button 
    $(document).on('click', '.fa-minus-circle', function(){
        $(this).parent().remove()
        divHeight()
    })
    



    
    $(document).on('focus', 'textarea',function () {
        $(this).removeAttr('rows');
        $(this).css('border-bottom', '1px solid #2cbbad');
    })
// focus out
    $(document).on('focusout', 'input', function() {
        $(this).css('border-bottom', 'none');
        
    })
    $(document).on('focusout', 'textarea', function() {
        $(this).css('border-bottom', 'none');
    })

    $('#downloadBtn').on('mouseover', function () {
        $('input').css('border-bottom', 'none');
        $('textarea').css('border-bottom', 'none');
        $('#new_btn').hide()
        $('#inputSkill').hide()
        $('#photoUploader').hide()
        $('#blah').css('opacity', '1')
        $('#interestInput').hide()
        $('#addWork').hide();
        $('#addAchievements').hide();   

        
    })

    $('#downloadBtn').on('mouseover', function() {
        $('i.fa-minus-circle').hide()
        divHeight()
    })
    
    divHeight()
    // first is all html 
    // session storage set items on keyup leave 
    $(document).on('keyup', function(){
        sessionStorage.setItem('htmlWeb', $('#cvSection').html())
    })
    $(document).on('keyup', 'input', function(){
        let key = $(this).attr('session-data')
        let value = $(this).val()
        sessionStorage.setItem(`${key}`, `${value}` )
    })
    // textareas
    $(document).on('keyup', 'textarea', function(){
        let key = $(this).attr('session-data')
        let value = $(this).val()
        sessionStorage.setItem(`${key}`, `${value}` )
        $(this).css('text-decoration', 'none')//test
    })
    
   
});


$(window).on('beforeunload', function(){
    return "Are you sure?"
})




























