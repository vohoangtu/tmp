<!-- Css Files --><?php$css = [    "assets/css/animate.min.css",    "assets/bootstrap53/bootstrap.min.css",    "assets/fontawesome611/all.css",    "assets/confirm/confirm.css",    "assets/holdon/HoldOn.css",    "assets/holdon/HoldOn-style.css",    "assets/mmenu/mmenu.css",    "assets/fancybox3/jquery.fancybox.css",    "assets/fancybox3/jquery.fancybox.style.css",    "assets/photobox/photobox.css",//"slick/slick.css",    //"slick/slick-theme.css",    //"slick/slick-style.css",    "assets/fotorama/fotorama.css",    "assets/fotorama/fotorama-style.css",    "assets/magiczoomplus/magiczoomplus.css",    "assets/datetimepicker/jquery.datetimepicker.css",    "assets/owlcarousel2/owl.carousel.css",    "assets/owlcarousel2/owl.theme.default.css",    "assets/simplenotify/simple-notify.css",    "assets/fileuploader/font-fileuploader.css",    "assets/fileuploader/jquery.fileuploader.min.css",    "assets/fileuploader/jquery.fileuploader-theme-dragdrop.css",    "assets/css/app.min.css"];foreach ($css as $path) {    echo '<link href="' . $path . '?v=' . filemtime(__FILE__) . '" rel="stylesheet">' . PHP_EOL;}?><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet"><!-- Background --><?php$bgbody = $d->rawQueryOne("select status, options, photo from #_photo where act = ? and type = ? limit 0,1", array('photo_static', 'background'));if (!empty($bgbody['status']) && strpos($bgbody['status'], 'hienthi') !== false) {    $bgbodyOptions = json_decode($bgbody['options'], true)['background'];    if ($bgbodyOptions['type_show']) {        echo '<style type="text/css">body{background: url(' . UPLOAD_PHOTO_L . $bgbody['photo'] . ') ' . $bgbodyOptions['repeat'] . ' ' . $bgbodyOptions['position'] . ' ' . $bgbodyOptions['attachment'] . ' ;background-size:' . $bgbodyOptions['size'] . '}</style>';    } else {        echo ' <style type="text/css">body{background-color:#' . $bgbodyOptions['color'] . '}</style>';    }}?><!-- Js Google Analytic --><?= $func->decodeHtmlChars($setting['analytics']) ?><!-- Js Head --><?= $func->decodeHtmlChars($setting['headjs']) ?>