<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="assets/images/favicon.ico" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
        <!-- index CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <div id="intro" class="container-fluid">
        <div class="row" id="inMain">
            <div id="together" class="col-md-6">
                <div id="inText" class="inSet text-left">
                    <h1 class="text-left"><strong>The Ultimate <br>
                    CV & Portfolio Check - List</strong></h1>
                    <p class="colorP">
                        Are you a Web Developer, Data Scientist, Digital Marketer or a Designer? <br>
                        Have your CV and portfolio in check and create a 5-start
                        representation <br> of your skills with this guide
                    </p>
                    <div>
                        <a id="stepInside"class="btn btn-sm" role="button">STEP INSIDE</a>
                    </div>
                </div>
            </div>
            <div  class="col-md-6 ">
               <div class="inSet" id="inImg">
                    <img src="assets/images/index_background.png" alt="png" />
               </div>
            </div>
        </div>
        <?php

            include __DIR__.'/models/footer.php';
        ?>
    </div>

 <!--scripts bootstrap.js and j.Query-->
<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $('#stepInside').click(function(){
            location.href = 'category.php'
        })
    
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>