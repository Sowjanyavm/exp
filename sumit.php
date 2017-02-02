<?php 
session_start(); 
if ($_POST["key"] != $_SESSION["key"] OR $_SESSION["captcha"]=='')  { 
     echo  '<strong>Incorrect verification code.</strong>'; 
} else { 
     // add form data processing code here 
     echo  '<strong>Verification successful.</strong>'; 
}; 
?>