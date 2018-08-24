<?php
// Parameters
$resume_url = "https://www.visualcv.com/bflo123";
$destination_page = "diloreto_resume.html";

// Get resume file
$cvpage = file_get_contents( $resume_url );

// Force the base to visualcv & deactivate all scripts from firing
$cvpage = str_replace("<head>", '<head><base href="https://www.visualcv.com/app/" />', $cvpage);
$cvpage = preg_replace("/<script.*<\/script>/gU", "", $cvpage);

//$head_start = strpos($cvpage, "<head>") + 6;
//$head_end   = strpos($cvpage, "</head>");

// $cvpage = substr_replace( $cvpage, "", $head_start, ($head_end - $head_start) );

// Write and close filestream
$fp = fopen( $destination_page , 'w+');
fwrite($fp, $cvpage);
fclose($fp);

?>