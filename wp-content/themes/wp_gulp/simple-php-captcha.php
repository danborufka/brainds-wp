<?php

// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);





function render_captcha_image()
{
    ob_start();
        $code=rand(1000,9999);
        $_SESSION["code"]=$code;

        $im = imagecreatefrompng(get_template_directory() . "/backgrounds/cloth-alike.png");

        $fg = imagecolorallocate($im, 0, 0, 0); //background color blue
        $bg = imagecolorallocate($im, 255, 255, 255);//text color white

        imagefill($im, 0, 0, $bg);
        imagettftext($im, 20, mt_rand(-30, 20), 30 + mt_rand(10, 40), 30 + mt_rand(10, 20), $fg,get_template_directory() . "/fonts/times_new_yorker.ttf", $code);

        // header("Cache-Control: no-cache, must-revalidate");
        // header('Content-type: image/png');
        imagepng($im);

        $output = ob_get_contents();
        imagedestroy($im);

    ob_end_clean();

    echo '<img src="data:image/png;base64,'.base64_encode($output).'" />';

}


// render_captcha_image();
