<!DOCTYPE html>
<html>
<head>
    <title>Digital Marketing CV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- font aweome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="assets/css/digitalMarketing.css">
</head>
<body>
    <div class="container-fluid">
        <div id="cv" class="row">
            <div id="createCV" class="section col-md-8">
                <!-- includes, buttons, linked, laika -->
                <?php 
                    include __DIR__.'/models/buttons.php';
                    include __DIR__.'/models/linked.php';
                    include __DIR__.'/models/laika.php';
                ?>
                <!-- cv start here -->
                <div id="cvSection" class="row">
                    <!-- cv heading -->
                    <div class="col-md-9">
                        <div id="cvHeading" class="row margin-top-bottom-5">
                            <div id="clientImg" class="col-md-3 text-center">
                                <!-- <img src="assets/images/elon_musk.png" alt=""> -->
                                <img id="blah" src="assets/images/jonsnow.jpg" alt="your image" />
                                <input id="imageUpload" type='file' placeholder="Upload"/>
                                <div id="photoUploader">
                                    <i id="new_btn" class="fas fa-plus fa-5x"></i><br>
                                    <!-- <span>Upload Image <br><small>min: 500 x 500</small></span> -->
                                    <!-- <i class="fas fa-plus"></i> -->
                                </div>
                            </div>
                            <div id="nameSurname" class="col-md-9 ">
                                <input type="text" session-data='marNameSurname' id="clientNameSurname" class="colorBlack edit textarea-o-b-i" placeholder="Stefanija Tenekedjieva" >
                                <input type="text" session-data='marClientTitle' id="clientTitle" class="colorG textarea-o-b-i" placeholder="Digital Marketer" >
                                <textarea type="text" session-data='marClientQuote' id="clientQuote" class="colorBlack textarea-o-b-i" rows="3" placeholder="Fascinated by the power of communication and media. Quick learner. Endlessly curious and keen to know more."></textarea>
                            </div>
                        </div>
                        <!-- contact section -->
                        <div id="contact" class="row colorBackgroundMain flex-row-center">
                            <!-- <div class="col-md-12 flex-row-center"> -->
                                <div class="col-md-6 input-group text-right">
                                    <span class="input-group-addon glyphicon glyphicon-envelope iconContact"></span>
                                    <input type="text" session-data='marEmail' class="form-control textarea-o-b-i padding-0  contactInput" placeholder="aleksandraxx@wearelaika.com">
                                </div>
                                <div class="col-md-6 input-group text-left ">
                                    <span class="input-group-addon glyphicon iconContact glyphicon glyphicon-phone"></span>
                                    <input type="text" session-data='marPhone' class="form-control textarea-o-b-i padding-0   contactInput" placeholder="xxxxxxxxx">
                                </div>
                            <!-- </div> -->
                        </div>
                        <!-- cv heading done -->
                        <div class="row">
                            <div id="cvLeftSide" class="col-md-6">
                                <!-- work Experience -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom colorMain">WORK EXPERIENCE</h4>
                                        <div id='addWork' class="addBtn pull-right">
                                            <!-- <i  class="fas fa-plus-circle fa-1x"><span>Add Experience</span></i> -->
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Work</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- WorkBox -->
                                <div id="workExperience">
                                    <div id="work1" class="workSection row flex-row">
                                        <div class="col-md-11">
                                            <input type="text" id="workPosition1" session-data='marWorkPosition1' class="workPosition colorBlack textarea-o-b-i" placeholder="Data Scientist" >
                                            <input type="text" session-data='marWorkCompany1' id='workCompany1' class="workCompany colorBlack textarea-o-b-i" placeholder="Rocket Corp" >
                                            <div class="flex-row-space-between dateLocation">
                                                <input type="text" id='date1' session-data='marDate1' class=' colorMain textarea-o-b-i ' placeholder='11/2019 - Present'>
                                                <input type="text" session-data='marLocation1' id='location1' class='textarea-o-b-i colorMain text-right ' placeholder="Skopje">
                                            </div>
                                            <p class="fontSize-0-9 colorMain">Achievements/Tasks</p>
                                            <div class="customTextBox flex-row">
                                                <i class="fas colorMain fa-dot-circle"></i><textarea id="customTextA" session-data='marCustomTextA1' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collecting, analyzing, and interpreting raw data from various websites'></textarea>
                                                <i class="pull-right fas fa-minus-circle"></i>
                                            </div>
                                            <div class="customTextBox flex-row">
                                                <i class="fas colorMain fa-dot-circle"></i><textarea id="customTextB" session-data='marCustomTextB1' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collaborating with the Operations and Technology Department on the development of new automated data management/analysis software which increases the overall productivity and cut unnecessary costs.'></textarea>
                                                <i class="pull-right fas fa-minus-circle"></i>
                                            </div>
                                            <div class="customTextBox flex-row">
                                                <i class="fas colorMain fa-dot-circle"></i><textarea id="customTextC" session-data='marCustomTextC' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Maintaining and managing company's MS SQL server."></textarea>
                                                <i class="pull-right fas fa-minus-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sampleWork workSection row flex-row margin-top-2">
                                        <div class="col-md-11">
                                            <input type="text" id="workPosition2" class="workPosition colorBlack textarea-o-b-i" placeholder="Data Science Intern" >
                                            <input type="text" id='workCompany2' class="workCompany colorBlack textarea-o-b-i" placeholder="Randoom.Co" >
                                            <div class="flex-row-space-between dateLocation">
                                                <input type="text" id='date2' class='fontSize-0-9 textarea-o-b-i colorG' placeholder='07/2019 - 10/2019'>
                                                <input type="text" id='location2' class='textarea-o-b-i text-right colorG' placeholder="Skopje">
                                            </div>
                                            <p class="fontSize-0-9">Achievements/Tasks</p>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas colorMain fa-dot-circle"></i><textarea id="customText1" class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Reported actionable, statistical, and analytical insights to executives for effective trategic positioning in the market place'></textarea>
                                            </div>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas colorMain fa-dot-circle"></i><textarea id="customText1" class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Shadowed data scientists and ssist in developing algorithms for predictive modeling'></textarea>
                                            </div>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas colorMain fa-dot-circle"></i><textarea id="customText1" class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Analyzed and processed  ophisticated data sets using SAS, MySQL, and Excel"></textarea>
                                            </div>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas colorMain fa-dot-circle"></i><textarea id="customText1" class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Wrote python scripts to automate everyday tasks"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Education -->
                                <div class="row margin-top-2">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom colorMain">EDUCATION</h4>
                                        <div id='addEducation' class="addBtn pull-right">
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Education</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="education">
                                    <div id="education1" class="educationSection row">
                                        <div class="col-md-11">
                                            <input type="text" session-data='marEduTitle1' class="educationTitle text-bold-custom textarea-o-b-i" placeholder="Digital Marketing">
                                            <textarea session-data='marEduSchool1' class="educationSchool textarea-o-b-i" placeholder="Brainster Digital Marketing Academy" rows="1"></textarea>
                                            <div class="flex-row-space-between dateLocation">
                                                <input type="text" session-data='marEduDate1' id='eduDate1' class='fontSize-0-9 textarea-o-b-i ' placeholder='07/2019 - 10/2019'>
                                            </div>
                                            <div class="flex-row-button">
                                                <p class="colorMain">Courses</p>
                                            </div>
                                            <div class="flex-row-wrap" id="courses">
                                                <div  class="customTextBox courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea id="customText1" session-data='marCourse1' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Integrated Marketing Communication' rows='2'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea id="customText2" session-data='marCourse2' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Unpaid & Paid Social Media' rows='2'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea  session-data='marCourse3' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Lead Generation' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea  session-data='marCourse4' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Google Analytics' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea  session-data='marCourse5'  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Segmentation' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse6' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Funnel Marketing' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse7' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Sales' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse8' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Google Ads' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse9' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Growt Hacking' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                                <div  class="customTextBox  courseTextArea-50 flex-row">
                                                    <i class="fas colorMain fa-dot-circle"></i><textarea session-data='marCourse10' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Seo' rows='1'></textarea>
                                                    <i class="pull-right fas fa-minus-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cvRightSide" class="col-md-6">
                                <!-- skills  -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom colorMain">SKILLS</h4>
                                    </div>
                                </div>
                                <div class="row" id="skillsDiv">
                                    <div class="col-md-12 containerTag">
                                        <div id='app'>
                                            <!-- samples -->
                                            <div class="skillTag sampleSkill text-center">
                                                <a href=""></a>
                                                <span>Google Ads</span>
                                            </div>
                                            <div class="skillTag sampleSkill text-center">
                                                <a href=""></a>
                                                <span>Facebook Ads Manager</span>
                                            </div>
                                            <div class="skillTag sampleSkill text-center">
                                                <a href=""></a>
                                                <span>Google Analytics</span>
                                            </div>
                                            <div class="skillTag sampleSkill text-center">
                                                <a href=""></a>
                                                <span>Google Data Studio</span>
                                            </div>
                                            <div class="skillTag sampleSkill text-center">
                                                <a href=""></a>
                                                <span>WordPress</span>
                                            </div>
                                            <div class="skillTag sampleSkill text-center">
                                                <a href=""></a>
                                                <span>Canva</span>
                                            </div>
                                            <div class="skillTag sampleSkill text-center">
                                                <a href=""></a>
                                                <span>Adobe Premiere</span>
                                            </div>
                                            <div class='informalContainer text-center'></div>
                                            <input type="text" id="inputTag" placeholder="Type your Skill here" autofocus/>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACHIEVEMENTS-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom colorMain">ACHIEVEMENTS</h4>
                                        <div id='addAch' class="addBtn pull-right">
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Acvievements</span>
                                        </div>
                                    </div>        
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="ach">
                                            <div id="projectSection1" class="classProjectSection">
                                                <textarea id="achivements1" session-data='marAchivements1' class="achivementsText colorBlack textarea-o-b-i" placeholder='The Impact of Targeted Data Management Training for Field Research Projects (06/2019)'></textarea>
                                                <textarea class="sampleAchievements achivementsText colorBlack textarea-o-b-i" placeholder='The Impact of Targeted Data Management Training for Field Research Projects (06/2019)'></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- languages -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom colorMain">LANGUAGES</h4>
                                        <div id='addLan' class="addBtn pull-right">
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Languages</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="languages">
                                    <div id="language1" class="row languageSection">
                                        <div class="col-md-12">
                                            <input type="text" session-data='marLanName' class="languageName textarea-o-b-i colorBlack" placeholder="English"><br>
                                            <input type="text" session-data='marLanLevel' class="languageLevel colorMain textarea-o-b-i" placeholder="Full Professional Proficiency">
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <!-- right side finish here --> 
                        </div>
                    </div>
                </div>
                <!-- download Btn -->
                <?php 
                    include __DIR__.'/models/downloadbtn.php';
                ?>
                <!-- cv finished -->
            </div>
            <!-- info box only text inside -->
            <div  class="col-md-4">
                <div id="info">
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            include __DIR__.'/models/footer.php';
        ?>
    </div>
    <?php
        include __DIR__.'/models/pop-up.php';
    ?>
   <!-- scripts bellow -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/buttons.js"></script>
    <script src="assets/js/mouseover.js"></script>
    <script src="assets/js/digitalMarketing.js"></script>
    <script src="assets/js/digitalMarketingSkills.js"></script>
    <script src="assets/js/pop-up.js"></script>    
    <script src="assets/js/download.js"></script>
    <script src="html2pdf/dist/html2pdf.bundle.min.js"></script>

</body>
</html>