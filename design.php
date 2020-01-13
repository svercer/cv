<!DOCTYPE html>
<html>
<head>
    <title>Design CV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- fonts css -->
    <link rel="stylesheet" href="assets/css/fonts.css" />
    <!-- css -->
    <link rel="stylesheet" href="assets/css/design.css">
</head>
<body>
    <div class="container-fluid">
        <div id="cv" class="row">
            <div id="createCV" class="section col-md-8">
                <?php 
                    include __DIR__.'/models/buttons.php';
                    include __DIR__.'/models/linked.php';
                    include __DIR__.'/models/laika.php';
                ?>
                <!-- cv start here -->
                <div id="cvSection" class="row">
                        <!-- this is header for name and surname -->
                    <div data="0" id="nameSurname" class="padding-5 col-md-6 col-md-offset-1">
                        <input id="name" class="h2 margin-bottom-0 nameSurname backgroundBlack" type="text" placeholder="Kiril ">
                        <input id="surname"  class="h2 margin-0 nameSurname backgroundBlack" type="text" placeholder="Nikolovski">
                        <textarea id="jobPosition"  class="h6 areaStyle backgroundBlack" type="text" placeholder="Graphic Designer"></textarea>
                    </div>
                    <div id="designCV" class="col-md-9 col-md-offset-1">
                        <!-- short info -->
                        <div id="shortInfo" class="row">
                            <div class="col-md-8">
                                <textarea id="textareaInfo" class="areaStyle" placeholder="Graphic Designer with expertise in branding and logo design, packaging design, typography, creative direction and illustration. Oriented into helping small business realize their unique vision." rows='5' maxlength='200'></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div id="leftSide" class="col-md-6">
                                <!-- workExperience -->
                                <div id="workExperience">
                                    <div class="flex-bet">
                                        <h5>Work Experience</h5>
                                        <div class="plus">
                                            Add Experience
                                            <span id="addExperience" class=" glyphicon glyphicon-plus-sign"></span>
                                        </div>
                                    </div>
                                    <div class="experience">
                                        <input id="workDateFromTo1" type="text" class="h6 margin-0 inputStyle workDate" placeholder="Mar 2016 - Aug 2017">
                                        <span class="glyphicon glyphicon-trash pull-right"></span>
                                        <input id="workCompany1" type="text" class="p margin-0 inputStyle workCompany" placeholder="Brainster">
                                        <input id="workPosition1" type="text" class="p margin-0 inputStyle workPosition" placeholder="Junior Graphic Designer">
                                        <textarea id="workDescription1" class="p areaStyle workDescription" placeholder="Creating visual concepts to comunicate ideas that inspire, inform and captivate consumers. Developing overall layout and production design for ads, brochures, magazines, and corporate digital margeting content" rows='8' maxlength="200"></textarea>
                                    </div>
                                    <div class="experience">
                                        <input id="workDateFromTo2" type="text" class="h6 margin-0 inputStyle workDate" placeholder="Mar 2016 - Aug 2017">
                                        <span class="glyphicon glyphicon-trash pull-right"></span>
                                        <input id="workCompany2" type="text" class="p margin-0 inputStyle workCompany" placeholder="Brainster">
                                        <input id="workPosition2" type="text" class="p margin-0 inputStyle workPosition" placeholder="Junior Graphic Designer">
                                        <textarea id="workDescription2" class="p areaStyle workDescription" placeholder="Creating visual concepts to comunicate ideas that inspire, inform and captivate consumers. Developing overall layout and production design for ads, brochures, magazines, and corporate digital margeting content" rows='8' maxlength="200"></textarea>
                                    </div>
                                    
                                </div>
                                <!-- contact -->
                                <div id="contact">
                                    <h5>Contact</h5>
                                    <input type="text" id="contactPhone" class="inputStyle contactPhone" placeholder="078 766 574">
                                    <input type="text" id="contactEmail" class="inputStyle contactEmail" placeholder="kirilnikolovski@gmail.com">
                                    <input type="text" id="contactLinked" class="inputStyle linkedUrl" placeholder="https://linked.com/">
                                    <input type="text" id="contactAddress" class="inputStyle contactAddress" placeholder="Skopje, Macedonia">
                                </div>
                            </div>
                            <div id="rightSide" class="col-md-6">
                                <!-- education -->
                                <div id="education">
                                    <div class="flex-bet">
                                        <h5>Education</h5>
                                        <div class="plus">
                                            Add Education
                                                <span id="addEducation" class="plus glyphicon glyphicon-plus-sign"></span>
                                        </div>
                                    </div>
                                    <div class="education">
                                        <input id="educationDate1" type="text" class="h6 inputStyle educationDates" placeholder="Mar 2014 - Aug 2017"><span class="glyphicon glyphicon-trash pull-right"></span>
                                        <input id="educationSchool1" type="text" class="p inputStyle educationSchool" placeholder="Brainster">
                                        <textarea id="educationDescription1" type="text" class="p areaStyle educationDescription" placeholder="Faculty of Mechanical Engineering Industrial Design"></textarea>
                                    </div>
                                    <div class="education">
                                        <input id="educationDate2" type="text" class="h6 inputStyle educationDates" placeholder="Mar 2014 - Aug 2017"><span class="glyphicon glyphicon-trash pull-right"></span>
                                        <input id="educationSchool2" type="text" class="p inputStyle educationSchool" placeholder="Brainster">
                                        <textarea id="educationDescription1" type="text" class="p areaStyle educationDescription" placeholder="Faculty of Mechanical Engineering Industrial Design"></textarea>
                                    </div>
                                    
                                </div>
                                <!-- skill section -->
                                <div id="skillsDiv">
                                    <div class="flex-bet">
                                        <div class="h5">Skills</div>
                                        <div class="plus">
                                            Add skill
                                            <span id="addSkill" class="glyphicon glyphicon-plus-sign"></span>
                                        </div>
                                    </div>
                                    <!-- skill inputs bellow -->
                                    <div id="skills">
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="Adobe Photoshop" ><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="Adobe Illustrator"><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="Adobe InDesign"><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="Adobe Premiere Pro"><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="Adobe After Efects"><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="Adobe After Xd"><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="MS Office"><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                        <div class="flex-bet" >
                                            <input value="" class="inputStyle skillsDescription editSkill" type="text" placeholder="Solid Works"><span class="glyphicon glyphicon-trash"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/buttons.js"></script>
    <script src="assets/js/mouseover.js"></script>
    <script src="assets/js/download.js"></script>
    <script src="assets/js/design.js"></script>
    <script src="assets/js/pop-up.js"></script>
    <script src="html2pdf/dist/html2pdf.bundle.min.js"></script>

</body>
</html>