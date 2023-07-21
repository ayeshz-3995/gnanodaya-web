<?php
    class pageheader{
        function sectionimg($img,$title){

            echo '<section class="col-md-12 page-heading scr-pos">
            <div class="ovl"></div>
            <img src="'.$img.'" alt="">
            <h2>'.$title.'</h2>
        </section>';

        }
    }
?>