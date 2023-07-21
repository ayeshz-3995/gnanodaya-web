<?php
    class site{
        function sectionheading($title, $op = false){

            echo '<section class="col-md-12 text-center pb-5 section-heading">';
            
            if($op)
                echo '<img src="asset/img/header/lotus-flower-light.svg" >';
            else
                echo '<img src="asset/img/header/lotus-flower-dark.svg">';
            
            echo '<h2 class="'.($op ? 'op' : '').'">'.$title.'</h2>
            </section>';
            
            }

        function pageheading($img,$title){

            echo '<section class="col-md-12 page-heading scr-pos section-2">
                <div class="ovl"></div>
                <img src="'.$img.'" alt="">
                <h2>'.$title.'</h2>
            </section>';

        }
    }
?>