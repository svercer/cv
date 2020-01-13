$(document).ready(function(){
    divHeight()
    if (sessionStorage.getItem('htmlMar')) {
        $('#cvSection').html(sessionStorage.getItem('htmlMar'))
    }

    let keys = Object.keys(sessionStorage)
    for (let i = 0; i < keys.length; i++) {
        if (sessionStorage.getItem(keys[i])) {
            // console.log(keys[i]);
            // $("[myAttribute='my value']")
            $("[session-data=" + keys[i] + "]").val(sessionStorage.getItem(keys[i]))
        }
    }


    divHeight(); //check for min height 
    textareaHeight();
    // console.log(sessionStorage.getItem('html'));
    
    
    // hidden up front 
    $('i.fa-minus-circle').hide()
    $('.addBtn').hide()
    $('#imageUpload').hide();
    $('#photoUploader').hide()
    $('#inputTag').hide()
    
    $('#imageUpload').on('change', function (){
        readURL(this);
        divHeight()
    })

    $('#new_btn').bind("click" , function () {
        $('#imageUpload').click();
        $('#photoUploader').hide()
        $('#blah').css('opacity', '1')
        divHeight()
    });
    // disabled
    $('input').attr('disabled', true);
    $('textarea').attr('disabled', true);

    $('#editBtn').on('click', function() {
        divHeight()
        $('.addBtn').show()

        $('input').attr('disabled', false);
        $('textarea').attr('disabled', false);
        // hidden on edit when clicke
        $('.sampleSkill').hide()
        $(".sampleWork").hide()
        $(".sampleAchievements").hide()
        $('i.fa-minus-circle').show()
        
        // show on edit
        $("#inputTag").show()
        $('#photoUploader').show()
        $('#blah').css('opacity', '0.5')
        divHeight()
      
    })
// ====================================================================
    $(document).on('click', '.fa-minus-circle', function(){
        $(this).parent().remove()
        divHeight()
    })
    $(document).on('focus', 'textarea',function () {
        $(this).removeAttr('rows');
        $(this).css('border-bottom', '1px solid #2cbbad');
        divHeight()
    })
// focus out
    $(document).on('focusout', 'input', function() {
        $(this).css('border-bottom', 'none');
        divHeight()
        
    })
    $(document).on('focusout', 'textarea', function() {
        $(this).css('border-bottom', 'none');
        divHeight()
    })

    $('#downloadBtn').on('mouseover', function () {
        $('input').css('border-bottom', 'none');
        $('textarea').css('border-bottom', 'none');
        $("#inputTag").hide()
        $('#photoUploader').hide()
        $('#blah').css('opacity', '1')
        $('.addBtn').hide()      
        divHeight()
    })

    $('#downloadBtn').on('mouseover', function() {
        $('i.fa-minus-circle').hide()
        divHeight()
    })

// ======================================================

    // add work
    let workClick = 2;
    $('#addWork').click(function(){
        let work = `
        <div id="marWork${workClick}" class="workSection row flex-row">
            <div class="col-md-11">
                <input type="text" id="workPosition1" session-data='marWorkPosition${workClick}' class="workPosition colorBlack textarea-o-b-i" placeholder="Data Scientist" >
                <input type="text" session-data='marWorkCompany1' id='workCompany${workClick}' class="workCompany colorBlack textarea-o-b-i" placeholder="Rocket Corp" >
                <div class="flex-row-space-between dateLocation">
                    <input type="text" id='date1' session-data='marDate${workClick}' class=' colorMain textarea-o-b-i ' placeholder='11/2019 - Present'>
                    <input type="text" session-data='marLocation${workClick}' id='location1' class='textarea-o-b-i colorMain text-right ' placeholder="Skopje">
                </div>
                <p class="fontSize-0-9 colorMain">Achievements/Tasks</p>
                <div class="customTextBox flex-row">
                    <i class="fas colorMain fa-dot-circle"></i><textarea id="customTextA" session-data='marCustomTextA${workClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collecting, analyzing, and interpreting raw data from various websites'></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
                <div class="customTextBox flex-row">
                    <i class="fas colorMain fa-dot-circle"></i><textarea id="customTextB" session-data='marCustomTextB${workClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collaborating with the Operations and Technology Department on the development of new automated data management/analysis software which increases the overall productivity and cut unnecessary costs.'></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
                <div class="customTextBox flex-row">
                    <i class="fas colorMain fa-dot-circle"></i><textarea id="customTextC" session-data='marCustomTextC${workClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Maintaining and managing company's MS SQL server."></textarea>
                    <i class="pull-right fas fa-minus-circle"></i>
                </div>
            </div>
            <i class="pull-right fas fa-minus-circle"></i>
        </div>
        `;

        $('#workExperience').append(work)
        workClick++;
        divHeight();
    })
    let educationClick = 2;
    $('#addEducation').click(function(){
        let education = `
        <div id="education${educationClick}" class="educationSection margin-top-2 row">
            <div class="col-md-11">
                <input type="text" session-data='marEduTitle${educationClick}' class="educationTitle text-bold-custom textarea-o-b-i" placeholder="Digital Marketing">
                <textarea session-data='marEduSchool${educationClick}' class="educationSchool textarea-o-b-i" placeholder="Brainster Digital Marketing Academy" rows="1"></textarea>
                <div class="flex-row-space-between dateLocation">
                    <input type="text" session-data='marEduDate${educationClick}' id='eduDate1' class='fontSize-0-9 textarea-o-b-i ' placeholder='07/2019 - 10/2019'>
                </div>
                <div class="flex-row-button">
                    <p class="colorMain">Courses</p>
                </div>
                <div class="flex-row-wrap">
                    <div  class="customTextBox courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea id="customText1" session-data='marCourse1${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Integrated Marketing Communication' rows='2'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea id="customText2" session-data='marCourse2${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Unpaid & Paid Social Media' rows='2'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea  session-data='marCourse3${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Lead Generation' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea  session-data='marCourse4${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Google Analytics' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea  session-data='marCourse5${educationClick}'  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Segmentation' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse6${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Funnel Marketing' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse7${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Sales' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse8${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Google Ads' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse9${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Growt Hacking' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                    <div  class="customTextBox  courseTextArea-50 flex-row">
                        <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse10${educationClick}' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Seo' rows='1'></textarea>
                        <i class="pull-right fas fa-minus-circle"></i>
                    </div>
                </div>
            </div>
            <i class="pull-right fas fa-minus-circle"></i>
        </div>
        `;
        $('#education').append(education);
        educationClick++;
        divHeight()
    })

    let achClick = 2
    $('#addAch').click(function(){
        let ach = `
        <div>
            <i class="pull-right fas fa-minus-circle"></i>
            <textarea id="achivements1" session-data='marAchivements1' class="achivementsText colorBlack textarea-o-b-i" placeholder='The Impact of Targeted Data Management Training for Field Research Projects (06/2019)'></textarea>
        </div>
        `;

        $('#projectSection1').append(ach)
        achClick++;
        divHeight()
    })
    let lanClick = 2
    $('#addLan').click(function(){
        let language = `
            <div id="language${lanClick}" class="row languageSection">
                <i class="pull-right fas fa-minus-circle"></i>
                <div class="col-md-12">
                    <input type="text" session-data='marLanName${lanClick}' class="languageName textarea-o-b-i colorBlack" placeholder="English"><br>
                    <input type="text" session-data='marLanLevel${lanClick}' class="languageLevel colorMain textarea-o-b-i" placeholder="Full Professional Proficiency">
                </div>
            </div>
        `;

        $('#languages').append(language)
        lanClick++;
        divHeight()
    })
    
    
    // sessions 
    $(document).on('keyup', function(){
        sessionStorage.setItem('htmlMar', $('#cvSection').html())
        divHeight()
    })
    $(document).on('keyup', 'input', function(){
        let key = $(this).attr('session-data')
        let value = $(this).val()
        sessionStorage.setItem(`${key}`, `${value}` )
        divHeight()
    })
    // textareas
    $(document).on('keyup', 'textarea', function(){
        let key = $(this).attr('session-data')
        let value = $(this).val()
        sessionStorage.setItem(`${key}`, `${value}` )
        $(this).css('text-decoration', 'none')//test
        divHeight()
    })
    
    
    
    
    
})
$(window).on('beforeunload', function(){
    return "Are you sure?"
})

