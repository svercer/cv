<!DOCTYPE html>
<html>

<head>
    <title>Category</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="assets/images/favicon.ico" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
        <!-- index CSS -->
        <link rel="stylesheet" href="assets/css/category.css" />
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row" id="headingCategory">
                <div class="col-md-10 col-md-offset-1 text-left">
                    <h1 class="colorBlack ">Choose your category</h1>
                </div>
            </div>
            <!-- category cards -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="categoryDiv">
                                <div class="categoryTitle text-center">
                                    <p class="colorBlack">Web Development</p>
                                </div>
                                <div class="text-right btnDiv">
                                    <a class="btnChoose" href="" role="button">CHOOSE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class=" categoryDiv">
                                <div class="categoryTitle text-center">
                                    <p class="colorBlack">Data Science</p>
                                </div>
                                <div class="text-right btnDiv">
                                    <a class="btnChoose" href="" role="button">CHOOSE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class=" categoryDiv">
                                <div class="categoryTitle text-center">
                                    <p class="colorBlack">Digital Marketing</p>
                                </div>
                                <div class="text-right btnDiv">
                                    <a class="btnChoose" href="" role="button">CHOOSE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class=" categoryDiv">
                                <div class="categoryTitle text-center">
                                    <p class="colorBlack">Design</p>
                                </div>
                                <div class="text-right btnDiv">
                                    <a id="4" class="btnChoose" href="" role="button">CHOOSE</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> <!--cards finished-->
            <?php
                include_once __DIR__.'/models/banners.php';
            ?>
        </div>
    </div>
</div>
<!--scripts bootstrap.js and j.Query-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script>
            
        $(document).ready(function () {
            $('.btnChoose').on('click', function(e){
                e.preventDefault()
                // let link = $('.categoryTitle').text()
                let clickTarget = $(this).parent().siblings().children().text()
                clickTarget = clickTarget.toLowerCase().replace(/ /g,'')
                console.log(clickTarget)
                location.href = clickTarget + '.php'
            })
        });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>
