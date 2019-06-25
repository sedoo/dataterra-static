<?php
require_once 'inc/functions.php';
require_once 'header.php';
$locale = get_browser_language();
?>

<body>
    <?php
    include('menu.php');

    if ($locale == "fr") {
        require_once "index_fr.php";
    }
    else {
        require_once "index_en.php";
    }
    ?>

<?php
include('asset/svg/dataterra.svg');
?>

    <script type="text/javascript" src="asset/js/fullpage.min.js"></script>
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            // verticalCentered: false,
            anchors: ['firstSectionAnchor', 'chiffresAnchor', 'aerisAnchor', 'odatisAnchor', 'theiaAnchor', 'formaterAnchor', 'partenairesAnchor'],
            menu: '#menu',
            lazyLoad: true,
            //to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
            css3: false,
           navigation: true,
//            slidesNavigation: true,
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
               $('.js-scrollTo').on('click', function() { // Au clic sur un élément
               var page = $(this).attr('href'); // Page cible
               var speed = 750; // Durée de l'animation (en ms)
               $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
               return false;
           });
            
            $(".burger").click(function () {
                $(".navbar ul").toggleClass("active");
                $(".burger").toggleClass("active");

                var delay = 0;
                $('.navbar ul li').each(function () {
                    var $li = $(this);

                    setTimeout(function () {
                        $li.toggleClass('transition-open');
                    }, delay += 100); // delay 100 ms
                });

            });
        });
    </script>
</body>

</html>