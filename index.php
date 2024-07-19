    $image_count = 4; // lets say you have 5 images from 0-4
    $number = rand( 0 , $image_count );

    // fetch random image from directory
    $dir = dirname(__FILE__);
    $file = $dir.'/image-'.$number.'.jpg';

    // write out
    $type = 'image/jpg';
    header('Content-Type:'.$type);
    header('Content-Length: ' . filesize($file));
    readfile($file);
