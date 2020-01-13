// function to regulate same div height when changes happen. 

divHeight()
$('.glyphicon-trash').hide()
$('.plus').hide()

$(document).ready(function () {
// SESSION check if exist ==============================================
    let keys = Object.keys(sessionStorage)

    for (let i = 0; i < keys.length; i++) {
        // console.log('keys',keys[i]);
        
        if (sessionStorage.getItem(keys[i])) {
            // console.log(true);
            $(`#${keys[i]}`).val(sessionStorage.getItem(keys[i]))
        }
    }
// dinamic skill get session item ==================================
    let arrSessionInputs = []
    for (let i = 0; i < 10; i++) {
        let v = sessionStorage.getItem(i) 
        if (v) {
            // console.log(v);
            arrSessionInputs.push(v)
        }
    }
    let l = $('.editSkill')
    for (let i = 0; i < 10; i++) {
        if (arrSessionInputs[i] != undefined) {
            l[i].value = arrSessionInputs[i];
        } 
    }
    
// text area and input disabled , on click to enable ===================================== 
    $('input').attr('disabled', 'disabled');
    $('textarea').attr('disabled', true);
    $('#edit').click(function (e) { 
        e.preventDefault();
        $('.plus').show();
        $('.glyphicon-trash').show();
        $('input').attr('disabled', false);
        $('textarea').attr('disabled', false);
        // $('textarea').css('cursor', 'pointer');
    });
    // On focus hide outline and insert border bellow =============================
    $('input').on('focus', function(e){
        $('input').css('border-bottom', 'none');
        $(this).css('outline', 'none');
        if ($(this).hasClass('nameSurname')) {
            $(this).css('border-bottom', '1px solid white');
        } else {
            $(this).css('border-bottom', '1px solid #6630d8');
        }
    }) 

    $('textarea').on('focus', function (e) {
        $(this).css('outline', 'none');
        // $(this).css('text-decoration', 'underline') //test  
    })
    // ============================================================================
    // session storage set items on keyup leave 
    $('input').on('keyup', function(){
        let key = $(this).attr('id')
        console.log('key:', key);
        let value = $(this).val()
        console.log('value', value);
        sessionStorage.setItem(`${key}`, `${value}` )
    })
    // textareas
    $('textarea').on('keyup', function(){
        let key = $(this).attr('id')
        console.log('key:', key);
        let value = $(this).val()
        console.log('value', value);
        sessionStorage.setItem(`${key}`, `${value}` )
        $(this).css('text-decoration', 'none')//test
    
    })
    //  Delete button ===================================================================================
    $(document).on('click', '.glyphicon-trash', function (e) {
        $(this).parent().remove();
        divHeight()
    })
    // add skill on plus sign
    $('#addSkill').on('click', function(){
        let skill = `
        <div class="skillInput flex-bet">
            <input class="editSkill inputStyle skillsDescription" type="text" placeholder="sample skill"><span class="glyphicon glyphicon-trash"></span>
        </div>`
        // console.log(skill);
        $('#skills').append(skill);
        divHeight()
    })
    // add education
    let clickEducation = 3
    $('#addEducation').on('click', function(){
        let education = `
        <div class="education">
            <input id="educationDate${clickEducation}" type="text" class="h6 inputStyle educationDates" placeholder="Mar 2014 - Aug 2017"><span class="glyphicon glyphicon-trash pull-right"></span>
            <input id="educationSchool${clickEducation}" type="text" class="p inputStyle educationSchool" placeholder="Brainster">
            <textarea id="educationDescription${clickEducation}" type="text" class="p areaStyle educationDescription" placeholder="Faculty of Mechanical Engineering Industrial Design"></textarea>
        </div>`
        // console.log(skill);
        $('#education').append(education);
        clickEducation++
        divHeight()
    })
    // add work experience
    clickExperience = 3
    $('#addExperience').on('click', function(){
        let experience = `
        <div class="experience">
            <input id="workDateFromTo${clickExperience}" type="text" class="h6 margin-0 inputStyle workDate" placeholder="Mar 2016 - Aug 2017"><span class="glyphicon glyphicon-trash pull-right"></span>
            <input id="workCompany${clickExperience}" type="text" class="p margin-0 inputStyle workCompany" placeholder="Brainster">
            <input id="workPosition${clickExperience}" type="text" class="p margin-0 inputStyle workPosition" placeholder="Junior Graphic Designer">
            <textarea id="workDescription${clickExperience}" class="p areaStyle workDescription" placeholder="Creating visual concepts to comunicate ideas that inspire, inform and captivate consumers. Developing overall layout and production design for ads, brochures, magazines, and corporate digital margeting content" rows='8' maxlength="200"></textarea>
        </div>`;
        $('#workExperience').append(experience);
        clickExperience++
        divHeight()
    })
    // puts skills in Session storage ===================================
    $(document).on('keyup', '.editSkill',function (e) {
        // console.log(e.target);
        $( ".editSkill" ).each(function(key, value) {
            sessionStorage.setItem(key, value.value);
        });
    })
    textareaHeight()
   $('#downloadBtn').on('mouseover', function () {
        $('.plus').hide();
        $('.glyphicon-trash').hide()

   })
    






});//jQuert






