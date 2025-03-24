<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . ('$PingPong') . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel="stylesheet" type="text/css" href="styles.css">';
    echo '</head>';
    echo '<body>';
}


 function outputBannerNavigation($pageName){
    //  Output banner and first part of navigation
    echo '<div class="banner">My Game Website Logo</div>';
       echo '<div class="navigation">';
    
    //Array of pages to link to
    $linkNames = array("Home", "Game", "About", "Help", "Registration", "Leaderboard");
    $linkAddresses = array("home.php", "game.php", "leaderboard.php", "help.php","registration.php");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</div>';
}

//Outputs closing body tag and closing HTML tag
function outputFooter(){
    echo '</body>';
    echo '</html>';
}
