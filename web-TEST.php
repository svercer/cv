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
        <!-- fonts css -->
    <!-- <link rel="stylesheet" href="assets/css/fonts.css" /> -->
    <!-- css -->
    <link rel="stylesheet" href="assets/css/webDevelopment.css">
</head>
<body>
    <div class="container-fluid">
        <div id="cv" class="row">
            <div id="createCV"  class="section eight.columns">
                <?php 
                    include __DIR__.'/models/buttons.php';
                    include __DIR__.'/models/linked.php';
                    include __DIR__.'/models/laika.php';
                ?>
                <!-- cv start here -->

                <div id="cvSection" class="row">
                    <!-- cv heading -->
                    <div class="nine.columns">
                        <div id="cvHeading" class="row margin-top-bottom-5">
                            <div id="clientInfo" class="five.columns ">
                                <div class="row flex-row">
                                    <div id="designCube" class="one.column">
                                        <div class="cubeClient">
                                        </div>
                                    </div>
                                    <div id="nameSurname" class="eleven.columns">
                                        <input type="text" session-data='webNameSurname'  id="ClientNameSurname" class="colorBlack textarea-o-b-i" placeholder="Elon Musk" >
                                        <textarea type="text" id="clientTitle" session-data='webClientTitle' class="colorG textarea-o-b-i" placeholder="Entrepreneur, Engineer, Inventor and Investor" ></textarea>
                                        <!-- maxlength="50" -->
                                        <textarea type="text" session-data='webShortInfo' id="shortInfo" class="colorBlack textarea-o-b-i" rows="8" cols="30" placeholder="Aiming to reduce global warming through sustainable energy production and consumption. Planning to reduce the risk of human extinction by making life multy-planetary and setting up a human colony on Mars."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="clientImg" class="three.columns text-center">
                                <!-- <img src="assets/images/elon_musk.png" alt=""> -->
                                <img id="blah" src="assets/images/elon_musk.png" alt="your image" />
                                <input id="imageUpload" type='file' placeholder="Upload"/>
                                <div id="imageUploader">
                                    <i id="new_btn" class="fas fa-plus fa-5x"></i>
                                </div>
                                <!-- <br><span>Upload Image <br><small>min: 500 x 500</small></span> -->
                            </div>
                            <div id="contact" class="four.columns text-right margin-top-bottom-5">
                                <div class="input-group ">
                                    <textarea id="email" session-data='webEmail' type="text" class="form-control padding-0 text-right contactInput" placeholder="elon@teslamotors.com" rows='1'></textarea>
                                    <span class="input-group-addon glyphicon glyphicon-envelope iconContact"></span>
                                </div>
                                <div class="input-group ">
                                    <input type="text" id="phone" session-data='webPhone' class="form-control padding-0 text-right  contactInput" placeholder="620-681-5000">
                                    <span class="input-group-addon glyphicon iconContact glyphicon glyphicon-phone"></span>
                                </div>
                                <div class="input-group ">
                                    <input type="text" id="location" session-data='webLocation' class="form-control text-right padding-0 contactInput" placeholder="Los Angeles, USA">
                                    <span class="input-group-addon iconContact"><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <div class="input-group ">
                                    <textarea type="text" id="linked" session-data='webLinked' class="form-control text-right padding-0 contactInput" placeholder="https://linkedin.com/elonmusk" rows='1'></textarea>
                                    <span class="input-group-addon iconContact"><i class="fab fa-linkedin-in"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- cv heading -->
                        <div class="row">
                            <div id="workExperience" class="six.columns">
                                <div class="row">
                                    <div class="eleven.columns col-md-offset-1">
                                        <h4 class="text-bold-custom">WORK EXPERIENCE</h4>
                                        <div id='addWork' class="pull-right">
                                            <!-- <i  class="fas fa-plus-circle fa-1x"><span>Add Experience</span></i> -->
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Job</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- WorkBox -->
                                <div id="work1" class="workSection  row flex-row">
                                    <div id="designCube" class="one.column">
                                        <div class="cubeWork">
                                        </div>
                                    </div>
                                    <div class="eleven.columns">
                                        <input type="text" id="workPosition1" session-data='webWorkPosition1' class="workPosition colorBlack textarea-o-b-i" placeholder="Founder, CEO and Lead Designer" >
                                        <input type="text" id='workCompany1' session-data='webWorkCompany1' class="workCompany colorBlack textarea-o-b-i" placeholder="SpaceX - Space Exploration Technologies" >
                                        <div class="flex-row-space-between dateLocation">
                                            <input type="text" id='date1' session-data='webDate1' class='fontSize-0-9 textarea-o-b-i colorG' placeholder='May 2016 -'>
                                            <input type="text" id='location1' session-data='webLocation1' class='textarea-o-b-i colorG' placeholder="Hometown, USA">
                                        </div>
                                        <p class="fontSize-0-9 colorG">Acomplishments</p>
                                        <div class="customTextBox flex-row">
                                            <i class="fas fa-square-full"></i><textarea id="customText1" session-data='webCustomText1' class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel' rows='8' cols='30'></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div  class="workSection sampleWork row flex-row">
                                    <div id="designCube" class="one.column">
                                        <div class="cubeWork">
                                        </div>
                                    </div>
                                    <div class="eleven.columns">
                                        <input type="text" class="workPosition colorBlack textarea-o-b-i" placeholder="Founder, CEO and Lead Designer" >
                                        <input type="text" class="workCompany colorBlack textarea-o-b-i" placeholder="SpaceX - Space Exploration Technologies" >
                                        <div class="flex-row-space-between dateLocation">
                                            <input type="text"  class='fontSize-0-9 textarea-o-b-i colorG' placeholder='May 2016 -'>
                                            <input type="text"  class='textarea-o-b-i colorG' placeholder="Hometown, USA">
                                        </div>
                                        <p class="fontSize-0-9 colorG">Acomplishments</p>
                                        <div class="customTextBox flex-row">
                                            <i class="fas fa-square-full"></i><textarea  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel' rows='8' cols='30'></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div  class="workSection sampleWork row flex-row">
                                    <div id="designCube" class="one.column">
                                        <div class="cubeWork">
                                        </div>
                                    </div>
                                    <div class="eleven.columns">
                                        <input type="text"  class="workPosition colorBlack textarea-o-b-i" placeholder="Founder, CEO and Lead Designer" >
                                        <input type="text"  class="workCompany colorBlack textarea-o-b-i" placeholder="SpaceX - Space Exploration Technologies" >
                                        <div class="flex-row-space-between dateLocation">
                                            <input type="text"  class='fontSize-0-9 textarea-o-b-i colorG' placeholder='May 2016 -'>
                                            <input type="text"  class='textarea-o-b-i colorG' placeholder="Hometown, USA">
                                        </div>
                                        <p class="fontSize-0-9 colorG">Acomplishments</p>
                                        <div class="customTextBox flex-row">
                                            <i class="fas fa-square-full"></i><textarea  class="customTextBox customTextArea colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel' rows='8' cols='30'></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cvRightSide" class="six.columns">
                                <div class="row">
                                    <div class="twelve.columns">
                                        <h4 class="text-bold-custom">SKILLS & COMPETENCIES</h4>
                                    </div>
                                </div>
                                <!-- Special Inputs -->
                                <div id="skillsDiv" class="row">
                                    <div class="twelve.columns containerTag">
                                        <div id='app'>
                                            <div class='tagHere text-center'>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Thinking through first principles</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Marketing</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Micromanagement</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Goal Orientated</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Resiliency</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Future Focused</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Leadership</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Creativity</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Time Management</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Persistence</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Turning ideas into companies</span>
                                                </div>
                                                <div class="tag text-center sampleTag">
                                                    <a href=""></a>
                                                    <span>Long term thinking</span>
                                                </div>
                                            </div>
                                            <input type="text" id="inputSkill" placeholder="Type your skills here" autofocus/>
                                        </div>
                                    </div>
                                </div>
                                <!-- Achivements and Certificates -->
                                <div id="education" class="row">
                                    <div class="twelve.columns" id="educationSection">
                                        <h4 class="text-bold-custom">ACHIVEMENTS & CERTIFICATES</h4>
                                        <div id='addAchievements' class="pull-right">
                                            <!-- <i  class="fas fa-plus-circle fa-1x"><span>Add Experience</span></i> -->
                                            <i class="glyphicon glyphicon-plus-sign"></i><span>Add Certificates</span>
                                        </div>
                                        <div class="achivementsSection">
                                            <textarea id="customText1" session-data='webCustomText1' rows="2" class="achivementsText colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel'></textarea>
                                            <textarea rows="1" id="cite1" session-data='webCite1' class='textarea-o-b-i fontSize-0-9' placeholder='Given to people who have mentored'></textarea>
                                        </div>
                                        <div class="achivementsSection sampleachievement">
                                            <textarea  class="achivementsText colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel'></textarea>
                                            <textarea  class='textarea-o-b-i fontSize-0-9' placeholder='Given to people who have mentored'></textarea>
                                        </div>
                                        <div class="achivementsSection sampleachievement">
                                            <textarea  class="achivementsText colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel'></textarea>
                                            <textarea  class='textarea-o-b-i fontSize-0-9' placeholder='Given to people who have mentored'></textarea>
                                        </div>
                                        <div class="achivementsSection sampleachievement">
                                            <textarea  class="achivementsText colorBlack textarea-o-b-i" placeholder='Successfully launched Falcon Heavy, the most powerfull operational rocket in the world by a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) - a mass greater than a 737 jetliner loaded with passenger, crew, luggage and fuel'></textarea>
                                            <textarea  class='textarea-o-b-i fontSize-0-9' placeholder='Given to people who have mentored'></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="twelve.columns">
                                        <h4 class="text-bold-custom">INTERESTS</h4>
                                    </div>
                                </div>
                                <!-- Select Interests -->
                                <div class="row">
                                    <div class="twelve.columns">
                                        <div class='tagInterests text-center'>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-dumbbell"></i>
                                                <p>gym</p>
                                            </div>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-swimming-pool"></i>
                                                <p>swimming</p>
                                            </div>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-basketball-ball"></i>
                                                <p>basketball</p>
                                            </div>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-football-ball"></i>
                                                <p>football</p>
                                            </div>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-bicycle"></i>
                                                <p>biking</p>
                                            </div>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-walking"></i>
                                                <p>walking</p>
                                            </div>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-gamepad"></i>
                                                <p>playing games</p>
                                            </div>
                                            <div class="element sampleInterest">
                                                <i class="fas fa-film"></i>
                                                <p>movies</p>
                                            </div>
                                        </div>
                                        <!-- <input id="interestInput" type="text"  autofocus/> -->
                                        <select name="selects" id="interestInput">
                                            <option value="">Select Interests</option>
                                        </select>
                                        <div id="results"></div>
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
            <div  class="four.columns">
                <div id="info">
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            // include __DIR__.'/models/footer.php';
        ?>

    </div>
        <?php
            // include __DIR__.'/models/pop-up.php';
        ?>
   <!-- scripts bellow -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/buttons.js"></script>
    <script src="assets/js/download.js"></script>
    <script src="assets/js/webDevelopment.js"></script>
    <script src="assets/js/webDevelpmentSpecialInputs.js"></script>
    <script src="assets/js/webDevelopmentSelectsJSON.js"></script>
    <script src="assets/js/webDevelopmentSelectsScript.js"></script>
    <script src="printThis-master/printThis.js"></script>
    <!-- <script src="assets/js/mouseover.js"></script>
    <script src="assets/js/pop-up.js"></script> -->
    <!-- <script src="html2pdf/dist/html2pdf.bundle.min.js"></script> -->
</body>
</html>