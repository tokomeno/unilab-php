<?php

session_start();


unset($_SESSION['isLoggedIn']);



header("Location: http://localhost/unilab/lecture-5");


exit();








