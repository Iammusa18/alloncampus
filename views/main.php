<?php
/**
 *  Main site view
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AllOnCampus</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/formstyle.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">


    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>

</head>
<!-- Styleswitcher
================================================== -->
<div class="colors-switcher">
    <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>
    <ul class="colors-list">
        <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
        <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
        <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;"
                                 class="light-blue"></a></li>
        <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>

        <li class="no-margin"><a title="light-green" class="light-green"
                                 onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
        <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>

    </ul>

</div>
<!-- Styleswitcher End
================================================== -->
<body class="index">

<div id="front">
    <?php
    include("front.php"); //front page temp
    ?>
</div>

<div id="admin">
</div>

<!-- jQuery Version 2.1.1 -->
<script src="js/jquery-2.1.1.min.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    
    
<!-- Bootstrap Core JavaScript -->
<script src="asset/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/classie.js"></script>
<script src="js/count-to.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/styleswitcher.js"></script>


<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/script.js"></script>
<script>
    var loadAdmin = function () { //function for showing admin page
        $.post(
            'controllers/admin.php',
            {
                action: 'index'
            },
            function (data) {
                $('#front').hide();
                $('#admin')
                    .html(data)
                    .show();
            });
        return false;
    };
  

    var loadFront = function () { //function for showing front page
        $('#admin').hide();
        $('#front').show();
        return false;
    };

    $(document).ready(function () {
        $('a[href=#admin]').on('click', loadAdmin); //Action for Admin link menu click - shows admin page
    });
</script>

</body>

</html>
