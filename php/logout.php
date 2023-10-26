<?php
    session_destroy();
    function goto_url($url, $seconds=0) { die("<meta http-equiv='REFRESH' content='$seconds;url=$url'>"); }
    goto_url("../Chungman.html");
?>