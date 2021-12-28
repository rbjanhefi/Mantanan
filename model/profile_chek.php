<?php

include 'profile_show.php';

if( empty($username)||$username==""||
    empty($firstname)||$firstname==""||
    empty($lastname)||$lastname=="" ||
    empty($phone)||$phone==""||
    empty($birthdate)||$birthdate=="" ||
    empty($address)||$address==""){

        header("location:profile.php?error=You must complete the profile data first!");
        exit();
}

?>