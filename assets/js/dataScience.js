$(document).ready(function(){
    // if session exist 
    
        // sessionStorage.removeItem('html')

    
        if (sessionStorage.getItem('htmlData')) {
            $('#cvSection').html(sessionStorage.getItem('htmlData'))
        }
        let keys = Object.keys(sessionStorage)
        for (let i = 0; i < keys.length; i++) {
            if (sessionStorage.getItem(keys[i])) {
                // console.log(keys[i]);
                // $("[myAttribute='my value']")
                $("[session-data=" + keys[i] + "]").val(sessionStorage.getItem(keys[i]))
            }
        }


    divHeight();
    textareaHeight();
    // test
    $('#imageUpload').on('change', function (){
        readURL(this);
    })
    $('#imageUpload').hide();
    
    $('#new_btn').bind("click" , function () {
        $('#imageUpload').click();
        $('#photoUploader').hide()
        $('#blah').css('opacity', '1')
    });
    // hide before edit 
    $('#photoUploader').hide();
    $('input').attr('disabled', true);
    $('textarea').attr('disabled', true);
    $('#InformalInput').hide()
    $('.addBtn').addClass('displayNone')
    
    // ==========================================
    $('#edit').on('click', function(){
        // enable inputs
        $('input').attr('disabled', false);
        $('textarea').attr('disabled', false);
        // img //
        $('#blah').css('opacity', '0.3')
        // areas to hide on edit
        $('#workSample').hide();
        $('#educationSample').hide();
        $('.sampleInformal').hide();
        
        $('.dot').removeClass('backgroundBlack');
        $('.dot').addClass('backgroundWhite');
        // show elements on edit click
        $('#photoUploader').show()
        $('#InformalInput').show()
        $('i.fa-minus-circle').show()
        $('.addBtn').removeClass('displayNone')
        $('.addBtn').addClass('displayBlock')
        addBorderDeveloper()
        divHeight()

    })
    // Adding buttons 
    workClick = 2;
    $('#addWork').on('click', function(){
        let work = `
        <div id="work${workClick}" class="workSection row flex-row">
            <div class="col-md-11">
                <input type="text" id="workPosition${workClick}" class="workPosition colorBlack textarea-o-b-i" placeholder="Data Scientist" >
                <input type="text" id='workCompany${workClick}' class="workCompany colorBlack textarea-o-b-i" placeholder="Rocket Corp" >
                <div class="flex-row-space-between dateLocation">
                    <input type="text" id='date${workClick}' class='fontSize-0-9 textarea-o-b-i colorG' placeholder='11/2019 - Present'>
                    <input type="text" id='location${workClick}' class='textarea-o-b-i text-right colorG' placeholder="Skopje">
                </div>
                <p class="fontSize-0-9">Achievements/Tasks</p>
                <div class="customTextBox flex-row">
                    <i class="fas fa-minus"></i><textarea id="customTextA${workClick}" class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collecting, analyzing, and interpreting raw data from various websites'></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
                <div class="customTextBox flex-row">
                    <i class="fas fa-minus"></i><textarea id="customTextB${workClick}" class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collaborating with the Operations and Technology Department on the development of new automated data management/analysis software which increases the overall productivity and cut unnecessary costs.'></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
                <div class="customTextBox flex-row">
                    <i class="fas fa-minus"></i><textarea id="customTextC${workClick}" class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Maintaining and managing company's MS SQL server."></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
            </div>
            <i class="pull-right fas fa-minus-circle"></i>
        </div>
        `;

        $('#workExperience').append(work);
        workClick++;
        divHeight()
    })
    educationClick = 2;
    $('#addEducation').click(function() {
        let education = `
        <div id="education${educationClick}" class="educationSection row">
            <div class="col-md-11">
                <input type="text" id="eduTitle${educationClick}" session-data='dataEduTitle${educationClick}' class="educationTitle text-bold-custom textarea-o-b-i" placeholder="Data Science Academy">
                <textarea id="eduSchool${educationClick}" session-data='dataEduSchool${educationClick}' class="educationSchool textarea-o-b-i" placeholder="Brainster" rows="1"></textarea>
                <div class="flex-row-space-between dateLocation">
                    <input type="text" id='eduDate${educationClick}' session-data='dataEduDate${educationClick}' class='fontSize-0-9 textarea-o-b-i ' placeholder='07/2019 - 10/2019'>
                    <input type="text" id='eduLocation${educationClick}' session-data='dataEduLocation${educationClick}' class='textarea-o-b-i text-right ' placeholder="Skopje">
                </div>
            </div>
            <i class="pull-right fas fa-minus-circle"></i>
        </div>
        `;
        $('#education').append(education);
        educationClick++;
        divHeight();
    })
    skillClick = 6
    $('#addSkill').click(function() {
        let skill = `
        <div class="flex-row-space-between skillSample skillSection">
            <input id="skill${skillClick}" session-data='dataSkill${skillClick}' type="text" placeholder="Write your skill" class="skillInput textarea-o-b-i">
            <div class="circles">
                <span class="dot backgroundWhite" data-id='1'></span>
                <span class="dot backgroundWhite" data-id='2'></span>
                <span class="dot backgroundWhite" data-id='3'></span>
                <span class="dot backgroundWhite" data-id='4'></span>
                <span class="dot backgroundWhite" data-id='5'></span>
            </div>
            <i class="pull-right fas fa-minus-circle"></i>
        </div>
        `;
        $('#skills').append(skill);
        skillClick++;
        divHeight()
    })
    projectClick = 2;
    $('#addProject').click(function(){
        let project = `
        <div id="projectSection${projectClick}" session-data='dataProjectSection${projectClick}' class="classProjectSection">
        <i class="pull-right fas fa-minus-circle"></i>
            <div>
                <textarea id="projectsText${projectClick}" class="achivementsText colorBlack textarea-o-b-i" placeholder='The Impact of Targeted Data Management Training for Field Research Projects (06/2019)'></textarea>
            </div>
            <div>
                <textarea id="projectsCite${projectClick}" class='textarea-o-b-i fontSize-0-9' placeholder='Most proud'></textarea>
            </div>
        </div>
        `;

        $('#projects').append(project);
        projectClick++;
        divHeight()
    })
    languageClick = 2;
    $('#addLanguage').click(function () {
        let language = `
        <div id="language${languageClick}" class="row languageSection">
            <i class="pull-right fas fa-minus-circle"></i>
            <div class="col-md-12">
                <input id="languageName${languageClick}" session-data='dataLanguageName${languageClick}' type="text" class="languageName textarea-o-b-i colorBlack" placeholder="English"><br>
                <input id="languageLevel${languageClick}" session-data='dataLanguageLevel${languageClick}' type="text" class="languageLevel textarea-o-b-i" placeholder="Full Professional Proficiency">
            </div>
        </div>
        `;
        $('#languages').append(language);
        languageClick++;
        divHeight()
    })
    // download Btn
    $('#downloadBtn').on('mouseover', function() {
        $('i.fa-minus-circle').hide()
        $('input').css('border-bottom', 'none');
        $('textarea').css('border-bottom', 'none');
        $('#InformalInput').hide()
        $('#photoUploader').hide()
        $('#blah').css('opacity', '1')
        // $('.addBtn').hide()
        $('.addBtn').removeClass('displayBlock')
        $('.addBtn').addClass('displayNone')

        divHeight()
    })


    $(document).on('click', '.fa-minus-circle', function(){
        $(this).parent().remove()
        divHeight()
    })
    // focus in
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




// dots for skills script
    $(document).on('click', '.dot', function(e) {
        let data = $(this).attr('data-id')
        console.log(data);
        
        // event for circles to color black 
        if ($(this).hasClass('backgroundBlack') ){
            // for (let i = 1; i <= data ; i++) {
                $(this).prevAll().removeClass("backgroundBlack");
                $(this).removeClass('backgroundBlack');
                $(this).addClass('backgroundWhite')
                $(this).prevAll().addClass("backgroundWhite");
            // }
        } else if ($(this).hasClass('backgroundWhite')) {
            // let white = $(this).attr('data-id') +1;
            // for (let i = 1; i <= white ; i++) {
                $(this).prevAll().removeClass("backgroundWhite");
                $(this).removeClass('backgroundWhite');
                $(this).addClass('backgroundBlack')
                $(this).prevAll().addClass("backgroundBlack");
                // console.log("i", i);
            // }
        }
    })
    
    // session
    // session storage set items on keyup leave 
    $(document).on('keyup', function(){
        sessionStorage.setItem('htmlData', $('#cvSection').html())
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
    
})



$(window).on('beforeunload', function(){
    
    return "Are you sure?"
})

