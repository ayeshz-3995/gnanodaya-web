<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>‍ශ්‍රී ඥානෝදය මහා පිරිවෙන</title>

    <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.1-web/css/all.min.css" rel="stylesheet">
    <link href="asset/font/flaticon/flaticon.css" rel="stylesheet">
    <link href="asset/font/abhaya/font.css" rel="stylesheet">

    <style>
    body {
        font-family: 'Abhaya Libre' !important;
    }
    </style>
    <link rel="stylesheet" href="Magnific-Popup-master/dist/magnific-popup.css">

    <link href="asset/css/style.css?v=1" rel="stylesheet">
    <link href="asset/css/com.css?v=1" rel="stylesheet">
   


</head>


<body>
    <?php require_once('resources/header/index.php');


    if( !isset($_GET['tag']) || $_GET['tag']=='home') {
        require_once('resources/slider/index.php');
        require_once('resources/mainabout/index.php');
        require_once('resources/event/index.php');
        require_once('resources/news/index.php');
        require_once('resources/service/index.php');
        require_once('resources/gallery/index.php');
        require_once('resources/videos/index.php');
        require_once('resources/donation/index.php');

    }

    elseif($_GET['tag']=='dev-home') {
        require_once('resources/dev-home/index.php');
    }

    elseif($_GET['tag']=='developments') {
        require_once('resources/dev-description/index.php');
    }

    elseif($_GET['tag']=='history') {
        require_once('resources/history/index.php');
    }

    elseif($_GET['tag']=='youth') {
        require_once('resources/youth/index.php');
    }

    elseif($_GET['tag']=='create') {
        require_once('resources/about/index.php');
    }

    elseif($_GET['tag']=='preschool') {
        require_once('resources/preschool/index.php');
    }

    elseif($_GET['tag']=='gallery') {
        require_once('resources/gallery/main.php');
    }

    elseif($_GET['tag']=='contact') {
        require_once('resources/contac/contac.php');
    }

    elseif($_GET['tag']=='sponcers') {
        require_once('resources/donation/main.php');

    }

    elseif($_GET['tag']=='garbage') {
        require_once('resources/garbage/index.php');

    }

    elseif($_GET['tag']=='computerlab') {
        require_once('resources/computer/index.php');

    }

    elseif($_GET['tag']=='dhamma') {
        require_once('resources/dhamma school/index.php');

    }

    require_once('resources/footer/index.php');

    ?><script src="asset/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="asset/js/scroll.js"></script>
    <script src="Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            }
        });
    });
    </script>

    <!-- <script>
     $(document).ready(function (){
    $(document).scroll(function () {

        var el = $('.scr-pos');
        var offset = el.offset();
        var scroll_start = $(this).scrollTop();

    

        if(scroll_start > (offset.top + el.height() - 50)) {
            $("#header").addClass('sc');
            $(".navbar").addClass('navbar-dark');
        } else {
            $('header').removeClass('sc');
            $(".navbar").addClass('navbar-light');
        }

    });
});
</script> -->
</body>

</html>