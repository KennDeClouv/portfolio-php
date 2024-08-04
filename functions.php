<?php

function redirectWithError($error)
{
    $_SESSION['_contact_form_error'] = $error;

    header('Location: '.$_SERVER['HTTP_REFERER']);
    echo "<script> alert('Error: $error')</script>";
    die();
}

function redirectSuccess()
{
    $_SESSION['_contact_form_success'] = true;

    header('Location: thanks');
    echo "Your message was sent successfully!";
    die();
}
