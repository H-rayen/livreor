<?php 
    
    function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }
    function is_logged_in() {
    return isset($_SESSION['login']);
}

?>