<!DOCTYPE html>
<html>
<head>
    <title>Web Development CV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- font aweome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="assets/css/dataScience.css">
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
                    <div class="col-md-10">
                        <div id="cvHeading" class="row margin-top-bottom-5">
                            <div id="clientImg" class="col-md-3 text-center">
                                <!-- <img src="assets/images/elon_musk.png" alt=""> -->
                                <img id="blah" src="assets/images/aleksandra.jpg" alt="your image" />
                                <input id="imageUpload" type='file' placeholder="Upload"/>
                                <div id="photoUploader">
                                    <i id="new_btn" class="fas fa-plus fa-5x"></i>
                                    <!-- <br><span>Upload Image <br><small>min: 500 x 500</small></span> -->
                                </div>
                            </div>
                            <div id="nameSurname" class="col-md-9 ">
                                <input type="text"  id="clientNameSurname" session-data='dataNameSurname' class="colorBlack textarea-o-b-i" placeholder="Aleksandra Janakievska" >
                                <input type="text" id="clientTitle" session-data='dataClientTitle' class="colorG textarea-o-b-i" placeholder="Data Scientist" >
                                <textarea type="text"  id="clientQuote" session-data='dataClientQuote' class="colorBlack textarea-o-b-i" rows="3" placeholder="Highly accurate and experienced Data  cientist adept at collecting, analyzing, and interpreting large datasets, developing new forecasting models, and performing data management tasks."></textarea>
                            </div>
                        </div>
                        <!-- contact section -->
                        <div id="contact" class="row flex-row-center">
                            <!-- <div class="col-md-12 flex-row-center"> -->
                                <div class="col-md-6 input-group ">
                                    <span class="input-group-addon glyphicon glyphicon-envelope iconContact"></span>
                                    <input type="email" session-data='dataEmail' class="form-control textarea-o-b-i padding-0  contactInput" placeholder="aleksandraxx@wearelaika.com">
                                </div>
                                <div class="col-md-5 input-group text-left ">
                                    <span class="input-group-addon glyphicon iconContact glyphicon glyphicon-phone"></span>
                                    <input type="text" session-data='dataPhone' class="form-control textarea-o-b-i padding-0   contactInput" placeholder="xxxxxxxxx">
                                </div>
                            <!-- </div> -->
                        </div>
                        <!-- cv heading done -->
                        <div class="row">
                            <div id="cvLeftSide" class="col-md-6">
                                <!-- work Experience -->
                                <div id="workExperience">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="text-bold-custom">WORK EXPERIENCE</h4>
                                            <div id='addWork' class="addBtn pull-right">
                                                <i class="glyphicon glyphicon-plus-sign"></i><span>Add Job</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- WorkBox -->
                                    <div id="work1" class="workSection row flex-row">
                                        <div class="col-md-11">
                                            <input type="text" id="workPosition1" session-data='dataWorkPosition1' class="workPosition colorBlack textarea-o-b-i" placeholder="Data Scientist" >
                                            <input type="text" id='workCompany1' session-data='dataWorkCompany1' class="workCompany colorBlack textarea-o-b-i" placeholder="Rocket Corp" >
                                            <div class="flex-row-space-between dateLocation">
                                                <input type="text" id='date1' session-data='dataDate1' class='fontSize-0-9 textarea-o-b-i colorG' placeholder='11/2019 - Present'>
                                                <input type="text" id='location1' session-data='dataLocation1' class='textarea-o-b-i text-right colorG' placeholder="Skopje">
                                            </div>
                                            <p class="fontSize-0-9">Achievements/Tasks</p>
                                            <div class="customTextBox flex-row">
                                                <i class="fas fa-minus"></i><textarea id="customTextA" session-data='dataCustomTextA' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collecting, analyzing, and interpreting raw data from various websites'></textarea>
                                            </div>
                                            <div class="customTextBox flex-row">
                                                <i class="fas fa-minus"></i><textarea id="customTextB" session-data='dataCustomTextB' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Collaborating with the Operations and Technology Department on the development of new automated data management/analysis software which increases the overall productivity and cut unnecessary costs.'></textarea>
                                            </div>
                                            <div class="customTextBox flex-row">
                                                <i class="fas fa-minus"></i><textarea id="customTextC" session-data='dataCustomTextC' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Maintaining and managing company's MS SQL server."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="workSample" class="workSection row flex-row margin-top-2">
                                        <div class="col-md-11">
                                            <input type="text"  class="workPosition colorBlack textarea-o-b-i" placeholder="Data Science Intern" >
                                            <input type="text"  class="workCompany colorBlack textarea-o-b-i" placeholder="Randoom.Co" >
                                            <div class="flex-row-space-between dateLocation">
                                                <input type="text"  class='fontSize-0-9 textarea-o-b-i colorG' placeholder='07/2019 - 10/2019'>
                                                <input type="text"  class='textarea-o-b-i text-right colorG' placeholder="Skopje">
                                            </div>
                                            <p class="fontSize-0-9">Achievements/Tasks</p>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas fa-minus"></i><textarea  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Reported actionable, statistical, and analytical insights to executives for effective trategic positioning in the market place'></textarea>
                                            </div>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas fa-minus"></i><textarea  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Shadowed data scientists and ssist in developing algorithms for predictive modeling'></textarea>
                                            </div>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas fa-minus"></i><textarea  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Analyzed and processed  ophisticated data sets using SAS, MySQL, and Excel"></textarea>
                                            </div>
                                            <div  class="customTextBox flex-row">
                                                <i class="fas fa-minus"></i><textarea  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder="Wrote python scripts to automate everyday tasks"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Education -->
                                <div id="education">
                                    <div class="row margin-top-2">
                                        <div class="col-md-12">
                                            <h4 class="text-bold-custom">EDUCATION</h4>
                                            <div id='addEducation' class="addBtn pull-right">
                                                <i class="glyphicon glyphicon-plus-sign"></i><span>Add Education</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="education1" class="educationSection row">
                                        <div class="col-md-11">
                                            <input type="text" id="eduTitle1" session-data='dataEduTutle1' class="educationTitle text-bold-custom textarea-o-b-i" placeholder="Data Science Academy">
                                            <textarea id="eduSchool1" session-data='dataEduSchool1' class="educationSchool textarea-o-b-i" placeholder="Brainster" rows="1"></textarea>
                                            <div class="flex-row-space-between dateLocation">
                                                <input type="text" id='eduDate1' session-data='dataEduDate1' class='fontSize-0-9 textarea-o-b-i ' placeholder='07/2019 - 10/2019'>
                                                <input type="text" id='eduLocation1' session-data='dataEduLocation1' class='textarea-o-b-i text-right ' placeholder="Skopje">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="educationSample" class="educationSection row">
                                        <div class="col-md-11">
                                            <input type="text" class="educationTitle text-bold-custom textarea-o-b-i" placeholder="Financial Management">
                                            <textarea class="educationSchool textarea-o-b-i" placeholder='Faculty of Economy , University "St. Cyril and Methodius"' rows="2"></textarea>
                                            <div class="flex-row-space-between dateLocation">
                                                <input type="text" id='eduDate2' class='fontSize-0-9 textarea-o-b-i ' placeholder='2011 - 2015'>
                                                <input type="text" id='eduLocation2' class='textarea-o-b-i text-right ' placeholder="Skopje">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cvRightSide" class="col-md-6">
                                <!-- skills  -->
                                <div id="skillsDiv">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="text-bold-custom">SKILLS</h4>
                                            <div id='addSkill' class="addBtn pull-right">
                                                <i class="glyphicon glyphicon-plus-sign"></i><span>Add Skill</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" id="skills">
                                            <div class="flex-row-space-between skillSample skillSection">
                                                <input id="skill1" session-data='dataSkill1' type="text" placeholder="Python" class="skillInput textarea-o-b-i">
                                                <div class="circles">
                                                    <span class="dot backgroundBlack " data-id='1'></span>
                                                    <span class="dot backgroundBlack" data-id='2'></span>
                                                    <span class="dot backgroundBlack" data-id='3'></span>
                                                    <span class="dot " data-id='4'></span>
                                                    <span class="dot " data-id='5'></span>
                                                </div>
                                            </div>
                                            <div class="flex-row-space-between skillSection">
                                                <input id="skill2" session-data='dataSkill2' type="text" placeholder="MySql" class="skillInput textarea-o-b-i">
                                                <div class="circles">
                                                    <span class="dot backgroundBlack" data-id='1'></span>
                                                    <span class="dot backgroundBlack" data-id='2'></span>
                                                    <span class="dot " data-id='3'></span>
                                                    <span class="dot " data-id='4'></span>
                                                    <span class="dot " data-id='5'></span>
                                                </div>
                                            </div>
                                            <div class="flex-row-space-between skillSection">
                                                <input id="skill3" type="text" session-data='dataSkill3' placeholder="PHP" class="skillInput textarea-o-b-i">
                                                <div class="circles">
                                                    <span class="dot backgroundBlack" data-id='1'></span>
                                                    <span class="dot backgroundBlack" data-id='2'></span>
                                                    <span class="dot backgroundBlack" data-id='3'></span>
                                                    <span class="dot backgroundBlack" data-id='4'></span>
                                                    <span class="dot backgroundBlack" data-id='5'></span>
                                                </div>
                                            </div>
                                            <div class="flex-row-space-between skillSection">
                                                <input type="text" session-data='dataSkill4' placeholder="R" class="skillInput textarea-o-b-i">
                                                <div class="circles">
                                                    <span class="dot backgroundBlack" data-id='1'></span>
                                                    <span class="dot " data-id='2'></span>
                                                    <span class="dot " data-id='3'></span>
                                                    <span class="dot " data-id='4'></span>
                                                    <span class="dot " data-id='5'></span>
                                                </div>
                                            </div>
                                            <div class="flex-row-space-between skillSection">
                                                <input id="skill5" type="text" session-data='dataSkill5' placeholder="C#" class="skillInput textarea-o-b-i">
                                                <div class="circles">
                                                    <span class="dot backgroundBlack" data-id='1'></span>
                                                    <span class="dot backgroundBlack" data-id='2'></span>
                                                    <span class="dot backgroundBlack" data-id='3'></span>
                                                    <span class="dot backgroundBlack" data-id='4'></span>
                                                    <span class="dot backgroundBlack" data-id='5'></span>
                                                </div>
                                            </div>
                                            <!-- skills inputs will be here -->
                                        </div>
                                    </div>
                                </div>
                                <!-- PROJECTS AND PUBLICATIONS-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom">PROJECTS AND PUBLICATIONS</h4>
                                        <div id='addProject' class="addBtn pull-right">
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Project</span>
                                        </div>
                                        <div id="projects">
                                            <div id="projectSection1" class="classProjectSection">
                                                <textarea id="projectsText1" session-data='dataProjectsText1' class="achivementsText colorBlack textarea-o-b-i" placeholder='The Impact of Targeted Data Management Training for Field Research Projects (06/2019)'></textarea>
                                                <textarea id="projectsCite1" class='textarea-o-b-i fontSize-0-9' placeholder='Most proud'></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- languages -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom">LANGUAGES</h4>
                                        <div id='addLanguage' class="addBtn pull-right">
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Language</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="languages">
                                    <div id="language1" class="row languageSection">
                                        <div class="col-md-12">
                                            <input id="languageName1" session-data='dataLanguageName1' type="text" class="languageName textarea-o-b-i colorBlack" placeholder="English"><br>
                                            <input id="languageLevel1" session-data='dataLanguageLevel1' type="text" class="languageLevel textarea-o-b-i" placeholder="Full Professional Proficiency">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-bold-custom">INFORMAL EDUCATION</h4>
                                    </div>
                                </div>
                                <!-- informal education section -->
                                <div class="row">
                                    <div class="col-md-12 containerTag">
                                        <div id='app'>
                                            <!-- samples, hide on edit -->
                                            <div class='sampleInformal text-center'>
                                                <a href=""></a>
                                                <span>Artificial Intelligence Webinar</span>
                                            </div>
                                            <div class='sampleInformal text-center'>
                                                <a href=""></a>
                                                <span>Business Analytics Course</span>
                                            </div>
                                            <div class='informalContainer text-center'></div>
                                            <input id="InformalInput" type="text" placeholder="Type your Informal education" autofocus/>
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
            <div id="" class="col-md-4">
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
    <script src="assets/js/download.js"></script>
    <script src="assets/js/dataScience.js"></script>
    <script src="assets/js/dataScienceInEd.js"></script>
    <script src="assets/js/mouseover.js"></script>
    <script src="assets/js/pop-up.js"></script>
    <script src="html2pdf/dist/html2pdf.bundle.min.js"></script>


</body>
</html>