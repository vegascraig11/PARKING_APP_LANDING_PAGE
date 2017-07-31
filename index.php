<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MYCAR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container-fluid">
    <div class="row header ">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="logo col-sm-6">
                <img src="images/header-logo.png" id="logo"/>
            </div>
            <div class="app-link col-sm-6 no-pad-right">
                <a class="pull-right" data-toggle="modal" data-target="#myModal">
                    <img src="images/button_get_the_app.png"/>

                </a>

            </div>

        </nav>

    </div>
    <div class="row top">
        <div class="col-sm-5 hero-banner">
            <h2 class="white">
                PARK <br>
                <span>SM</span>ARTER</h2>
            <p class="white">
                Never forget where your parking spot is again.
                MyCar makes it easier than ever before.
            </p>

            </h2>
            <p>

            </p>
        </div>
        <div class="col-sm-7 hero-two">

        </div>
        <div class="col-sm-8 col-sm-push-2 text-center email-form">
            <form class="form" method="post" action="subscribe.php">
                <!--                <input type="text" class="form-control" placeholder="Enter Email Address ...."/>-->
                <!--                <button class="btn grey-button"></button>-->
                <div class="input-group">
                    <input type="text"
                           class="form-control"
                           placeholder="Enter Email Address ...."
                           name="email"
                           id="email"
                           required="required">
                    <div class="input-group-btn white">
                        <button class="btn grey-button" type="submit">SUBSCRIBE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row pin-park">
        <div class="col-sm-6">
            <img src="images/phone_mockup1.png" class="phone-mockup"/>
        </div>
        <div class="col-sm-6 park-pin-pad">
            <div class="icon-container text-center">
                <img class="text-center location-icon" src="images/icon_pin_location.png"/>
            </div>
            <h2>Park & Pin your Location</h2>
            <p>
                With MyCar parking, use your phones GPS to record the exact location of you parking spot, and then use
                the directions feature to find it.
                Gone are the days of wondering where you parked! With MyCar you will always know!
            </p>

        </div>

    </div>
    <div class="row grey-background">
        <div class="col-sm-6 park-pin-pad">
            <div class="icon-container text-center">
                <img class=" location-icon" src="images/icon_parking_type.png"/>

            </div>
            <h2 class="white">Choose parking Type</h2>
            <p class="white">
                With MyCar Parking, you can choose the type of parking session you need whether you are parked on the
                street or in a garage.
                Most car parking apps just set your location with GPS, but that does not always work in structured
                parking garages. MyCar prompts you to input the specific parking information such as floor, spot and any
                other custom notes that will help you find your car
            </p>
        </div>
        <div class="col-sm-6 text-center">
            <img src="images/phone_mockup_2.png"/>
        </div>

    </div>

    <div class="row green-background">
        <div class="col-sm-6">
            <img src="images/phone_mockup_3.png"/>
        </div>
        <div class="col-sm-6 park-pin-pad">
            <div class="icon-container text-center">
                <img class="text-center location-icon" src="images/icon_never_forget.png"/>
            </div>
            <h2 class="white">Never Forget Again</h2>
            <p class="white">
                With MyCar parking, we do all of the work for you! You will never walk out of that restaurant, amusemant
                park, or mall and wonder "Where did I park MyCar again? Simply open MyCar and pin your parking location.
                When it is time to return to your car, it will be displayed on the map with a "Get Directions" button.
                Never forget where you are parked again!
            </p>
        </div>
    </div>
    <div class="row download-background">
        <div class="text-center">
            <img src="images/icon_logo2.png" class="icon-container"/>
            <h2 class="white">Download The MYCAR App</h2>
            <p class="helvetica white">Get a link to download the app sent to you.</p>
            <button class="white-bordered btn no-background" data-toggle="modal" data-target="#myModal">Email Me The
                App
            </button>
<!--            <button class="btn text-me-button" data-toggle="modal" data-target="#myModalText">Text me The App</button>-->
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">
                        <img src="images/header-logo.png"/></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/img_apple.png"
                                 id="emailAppButton"/>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/img_google.png" id="phoneAppButton"/>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div id="myModalText" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">
                        <img src="images/header-logo.png"/></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/img_apple.png"
                                 id="textAppleButton"/>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/img_google.png" id="textAndroidButton"/>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div id="emailApp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">
                        <img src="images/header-logo.png"/></h4>
                </div>
                <div class="modal-body">
                    <form class="form " method="post" action="email_us.php">
                        <!--                <input type="text" class="form-control" placeholder="Enter Email Address ...."/>-->
                        <!--                <button class="btn grey-button"></button>-->
                        <div class="input-group">
                            <input type="email"
                                   name="email"
                                   id="email"
                                   required="required"
                                   class="form-control"
                                   placeholder="Enter Email Address ...."
                                   name="search">
                            <div class="input-group-btn white">
                                <button class="btn grey-button" type="submit">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <div id="phoneApp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">
                        <img src="images/header-logo.png"/></h4>
                </div>
                <div class="modal-body">
                    <form class="form " method="post" action="email_us.php">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Email Address ...."
                                   name="search">
                            <div class="input-group-btn white">
                                <button class="btn grey-button" type="submit">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <div id="textApple" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">
                        <img src="images/header-logo.png"/></h4>
                </div>
                <div class="modal-body">
                    <form class="form " method="post" action="send_txt.php">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Phone Number ...."
                                   name="search">
                            <div class="input-group-btn white">
                                <button class="btn grey-button" type="submit">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <div id="textAndroid" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">
                        <img src="images/header-logo.png"/></h4>
                </div>
                <div class="modal-body">
                    <form class="form " method="post" action="send_txt.php">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Phone Number ...."
                                   name="search">
                            <div class="input-group-btn white">
                                <button class="btn grey-button" type="submit">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#logo").on("click", function () {
//            alert('sjflsdf')
            $('html,body').animate({
                    scrollTop: $(".top").offset().top
                },
                'slow');
        });


        $('#emailAppButton').on('click', function () {
            $("#myModal").modal('hide');
            $("#emailApp").modal('show');

        })
        $('#phoneAppButton').on('click', function () {
            $("#myModal").modal('hide');
            $("#phoneApp").modal('show');

        })
        $('#textAppleButton').on('click',function(){
            $("#myModalText").modal('hide');
            $("#textApple").modal('show');
        })
        $('#textAndroidButton').on('click',function(){
            $("#myModalText").modal('hide');
            $("#textAndroid").modal('show');
        })

    })

</script>

</body>
</html>