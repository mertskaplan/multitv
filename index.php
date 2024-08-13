<?php
/*
    Name: Multi TV
    Version: 2.0
    Author: Mert S. Kaplan, mail@mertskaplan.com
    Licence: MIT Licence - https://github.com/mertskaplan/multitv/blob/main/LICENSE
    Source: https://github.com/mertskaplan/multitv
*/

$root = 'https://lab.mertskaplan.com/multitv/';

if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
    $lang = 'en';
} elseif (isset($_GET['lang']) && $_GET['lang'] == 'fr') {
    $lang = 'fr';
} elseif (isset($_GET['lang']) && $_GET['lang'] == 'es') {
    $lang = 'es';
} else {
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['tr', 'en', 'fr', 'es']; 
    $lang = (in_array($browserLang, $acceptLang)) ? $browserLang : 'tr';
}

require_once 'i18n/'. $lang .'.php';

if (isset($_GET['cs'])) { // Interim compatibility code for v1.5 release
    $_GET['vs'] = $_GET['cs'];
}

if (isset($_GET['cn']) && isset($_GET['vs'])) {
    $channels = array_filter(array_combine($_GET['cn'], $_GET['vs']));
    $channel = count($channels);
} else {  
    $channels = array(
        "NTV" => "-RORLrBwJD0",
//      "CNN Türk" => "X_EWYemclKA", // Diğer uygulamalarda oynatma, video sahibi tarafından devre dışı bırakıldı
        "Habertürk" => "8xSMAv3w1Sk", // Diğer uygulamalarda oynatma, video sahibi tarafından devre dışı bırakıldı
        "Haber Global" => "6BX-NUzBSp8",
        "TRT Haber" => "og4Bl9zD6l8",
//      "A Haber" => "g4QA9Sh_g_8", // telif hakki sebebiyle kaldirildi
        "Halk TV" => "-HJwrahoMsQ",
        "Sözcü TV" => "ztmY_cCtUl0",
        "TELE 1" => "cKRg0a8yArE",
        "TV 100" => "P5BOJKmWaaI",
        "EKOL TV" => "zHr9jLECE6Q",
//       "Show TV" => "ouuCjEjyKVI",
        "KRT TV" => "1zzKaji_Egw",
        "TGRT Haber" => "2-PxQVVcr6A",
        "Ulusal Kanal" => "i204rhujm0o",
//       "Elips TV" => "GpOJj53sLCo",
        "Bloomberg HT" => "hHSmBJk6w0c", // Diğer uygulamalarda oynatma, video sahibi tarafından devre dışı bırakıldı
        "TVNET" => "KdhO7SV9tF8",
        "Ülke TV" => "YbBtCFThQQE",
        "Bengü Türk" => "GcuWWVOZEi8",
        "24 TV" => "n19HNr5dRHQ",
//      "TV5" => "aLiAdO8C2Mo",
//      "Kanal 5" => "wPjNLUvSmGA",
//      "360 TV" => "z-P0IXjzHQ",
        "beIN Sports Haber" => "OypUpUTYAHI",
        "Ekotürk TV" => "VP_h4FNHWlY",
        "Artı TV" => "Fr5mpbeYpFE",
        // "Flash Haber TV" => "NrI9To8g9EI",
        // "Fatih Altaylı" => "ZgOw5f_J0mY",
        // "Cüneyt Özdemir" => "FsT3k6jm-bs",
        // "Nevşin Mengü" => "Re5MzQntuYs",
        // "Kanal D" => "FnCjX-2Tt0g",
        // "Fox TV" => "UF9KvTnZdic",
        // "Cadde TV" => "pIU0HC2OveA",
    );
}
$channel = (isset($_GET['channel']) && (int)$_GET['channel'] > 0) ? (int)$_GET['channel'] : 6;
if ($channel > count($channels)) {
    $channel = count($channels);
}

$grid[1] = [12];
$grid[2] = [6,6];
$grid[3] = [6,6,6];
$grid[4] = [6,6,6,6];
$grid[5] = [8,[4,2],12,12,4,4];
$grid[6] = [8,[4,2],12,12,4,4,4];
$grid[7] = [4,4,4,4,4,4,4];
$grid[8] = [4,4,4,4,4,4,4,4];
$grid[9] = [4,4,4,4,4,4,4,4,4];
$grid[10] = [6,6,3,3,3,3,3,3,3,3];
$grid[11] = [6,[6,4],6,6,6,6,3,3,3,3,3,3];
$grid[12] = [6,[6,4],6,6,6,6,3,3,3,3,3,3,3];
$grid[13] = [6,[6,4],6,6,6,6,3,3,3,3,3,3,3,3];
$grid[14] = [3,3,3,3,3,3,3,3,3,3,3,3,3,3];
$grid[15] = [3,3,3,3,3,3,3,3,3,3,3,3,3,3,3];
$grid[16] = [3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3];
$grid[17] = [4,4,4,3,3,3,3,3,3,3,3,2,2,2,2,2,2];
$grid[18] = [4,4,4,4,4,4,2,2,2,2,2,2,2,2,2,2,2,2];
$grid[19] = [4,4,4,4,4,[4,4],6,6,6,6,2,2,2,2,2,2,2,2,2,2];
$grid[20] = [4,4,4,4,4,[4,4],6,6,6,6,2,2,2,2,2,2,2,2,2,2,2];
$grid[21] = [4,4,4,4,4,[4,4],6,6,6,6,2,2,2,2,2,2,2,2,2,2,2,2];
$grid[22] = [4,4,[4,4],6,6,6,6,4,4,[4,4],6,6,6,6,2,2,2,2,2,2,2,2,2,2];
$grid[23] = [4,4,[4,4],6,6,6,6,4,4,[4,4],6,6,6,6,2,2,2,2,2,2,2,2,2,2,2];
$grid[24] = [4,4,[4,4],6,6,6,6,4,4,[4,4],6,6,6,6,2,2,2,2,2,2,2,2,2,2,2,2];
$grid[25] = [[12,5],'c','c','c','c','c',[12,5],'c','c','c','c','c',[12,5],'c','c','c','c','c',[12,5],'c','c','c','c','c',[12,5],'c','c','c','c','c'];

$channels = array_slice($channels, 0, $channel);
$selectedChannels = explode("cn", $_SERVER["QUERY_STRING"],2)[1];
$selectedChannels = (is_null($selectedChannels)) ? '' : '?cn'. $selectedChannels;
$autoplay = (isset($_GET['autoplay']) && $_GET['autoplay'] == 'off') ? 0 : 1;

function translate($text, $variable = false) {
    global $i18n;
    if ($variable) {
        if (is_array($variable)) {
            $x = 1;
            foreach ($variable as $var) {
                if ($x === 1) {
                    $return = str_replace('%text%', $var, $i18n[$text]);
                } else {
                    $return = str_replace('%text'.$x.'%', $var, $return);
                }
                $x++;
            }
        } else {
            $return = str_replace('%text%', $variable, $i18n[$text]);
        }
    } else {
        $return = $i18n[$text];
    }
    return $return;
}

$title = (isset($_GET['channel']) && (int)$_GET['channel'] > 0) ? translate('channel-numbered-title', $channel) : $i18n['title'];
$description = (isset($_GET['channel']) && (int)$_GET['channel'] > 0) ? translate('channel-numbered-description', $channel) : $i18n['description'];

?>
<!doctype html>
<html lang="<?php echo $lang; ?>" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $i18n['keywords']; ?>">
    <meta name="author" content="Mert S. Kaplan, mail@mertskaplan.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#212529">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $root; ?>">
    <meta property="og:image" content="<?php echo $root; ?>assets/img/screenshots/screenshot-1280.jpg" />
    <meta property="og:locale" content="<?php echo $i18n['locale']; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@mertskaplan">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/img/screenshots/screenshot-1280.jpg">
    <meta name="apple-mobile-web-app-title" content="Multi TV">
    <link rel="canonical" href="<?php echo $root . $lang; ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo $root; ?>tr">
    <link rel="alternate" hreflang="tr" href="<?php echo $root; ?>tr">
    <link rel="alternate" hreflang="en" href="<?php echo $root; ?>en">
    <link rel="alternate" hreflang="fr" href="<?php echo $root; ?>fr">
    <link rel="alternate" hreflang="es" href="<?php echo $root; ?>es">
    <link href="<?php echo $root; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo $root; ?>favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>assets/img/logo/multitv-16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>assets/img/logo/multitv-32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="<?php echo $root; ?>assets/img/logo/multitv-48.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/img/logo/multitv-180.png">
    <link rel="apple-touch-startup-image" href="<?php echo $root; ?>assets/img/logo/multitv-maskable-725.png">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/img/logo/logo.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <link rel="manifest" href="<?php echo $root; ?>manifest.webmanifest">
    <style>
        .msk-container {
            max-height: 100vh;
            max-width: 100vw;
            margin: 0 auto;
        }
        .msk-aspectRatio {
            aspect-ratio: 16/9;
        }
        .msk-optionsButton:hover span {
            display: inline !important;
        }
        .form-control:focus, .btn-close:focus {
            outline: none;
            box-shadow: none;
        }
        .btn-fullsc {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: .25em .25em;
            color: #000;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: .375rem;
            opacity: .5;
        }
        .btn-fullsc:hover {
            color: #000;
            text-decoration: none;
            opacity: .75;
        }
        .msk-authorLicense {
            font-size:.78em;
            max-width: calc(100% - 32px);
            width: 367px;
        }
        @-webkit-keyframes blinker {
            from {background-color: #f00;}
            to {background-color: #212529;}
        }
        .msk-optionsButton {
            text-decoration: blink;
            -webkit-animation-name: blinker;
            -webkit-animation-duration: 0.6s;
            -webkit-animation-iteration-count: 10;
            -webkit-animation-timing-function: ease-in-out;
            -webkit-animation-direction: alternate;
        }
    </style>
</head>
<body class="text-bg-dark">
    <div class="msk-container msk-aspectRatio">
        <div class="row msk-aspectRatio justify-content-center align-items-center m-0">
<?php
    $x = $y = $z = 0;
    foreach ($channels as $channelName => $slug) {
        if (is_array($grid[$channel][$x])) {
            $y = $x;
            $z = $grid[$channel][$x][1];
            echo '
                <div class="row col-12 col-sm-'. $grid[$channel][$x][0] .' p-0 m-0">
            ';
            $x++;
        }
        $col = ($grid[$channel][$x] == 'c') ? 'col' : 'col-12 col-sm-'. $grid[$channel][$x];
        echo '
            <div class="'. $col .' msk-aspectRatio text-center p-0">
                <iframe class="d-grid msk-aspectRatio" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/'. $slug .'?autoplay='. $autoplay .'&mute=1" title="'. $channelName .'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" loading="lazy" allowfullscreen></iframe>
            </div>
        ';
        if ($x !== 0 && $z + $y == $x) {
            echo '
                </div>
            ';
        }
        $x++;
    }
?>
        </div>
    </div>
    <button class="msk-optionsButton btn btn-dark position-fixed rounded-0 position-absolute top-50 end-0 translate-middle-y" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="<?php echo $i18n['settings']; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
        </svg>
        <span class="d-none"><?php echo $i18n['settings']; ?></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-scroll="true" >
        <div class="offcanvas-header">
            <h1 class="offcanvas-title h4" id="offcanvasRightLabel">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="22" height="36" viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet" style="vertical-align: top;">
                    <g transform="translate(0,512) scale(0.100000,-0.100000)" fill="#fff"><path d="M1954 5101 c-69 -31 -111 -106 -101 -180 3 -23 78 -167 201 -385 108 -192 196 -352 196 -357 0 -4 -282 -10 -627 -11 -618 -3 -629 -3 -693 -25 -210 -72 -376 -248 -437 -463 -17 -62 -18 -141 -18 -1590 0 -1701 -5 -1573 70 -1725 85 -173 260 -310 450 -350 104 -22 3025 -22 3129 0 241 51 437 240 503 485 17 61 18 166 18 1590 0 1449 -1 1528 -18 1590 -66 231 -248 413 -473 470 -73 19 -111 20 -681 20 -343 0 -603 4 -603 9 0 5 88 166 197 357 219 389 224 402 181 484 -55 107 -185 132 -269 52 -25 -25 -101 -150 -224 -369 -103 -183 -191 -333 -195 -333 -4 0 -92 150 -195 333 -103 182 -201 347 -218 365 -51 52 -122 65 -193 33z m2139 -1301 c75 -28 130 -79 167 -153 l30 -62 -2 -1510 c-3 -1458 -4 -1511 -22 -1545 -38 -71 -77 -109 -144 -142 l-67 -33 -1495 0 -1495 0 -67 33 c-67 33 -106 71 -144 142 -18 34 -19 87 -22 1545 l-2 1510 30 62 c36 73 92 125 164 152 50 19 88 20 1533 20 1460 1 1483 1 1536 -19z"/>
                    <path d="M2500 2505 c-152 -56 -990 -432 -1013 -454 -41 -38 -57 -73 -57 -128 0 -62 33 -121 85 -151 72 -42 113 -31 430 107 154 68 315 138 358 157 l77 33 0 -122 c0 -141 10 -185 50 -231 40 -45 79 -60 143 -54 46 5 426 164 982 412 98 44 135 92 135 176 0 113 -105 198 -208 170 -22 -5 -194 -77 -383 -160 -189 -82 -346 -150 -350 -150 -4 0 -9 62 -11 138 -3 122 -6 141 -26 177 -48 80 -130 111 -212 80z"/></g>
                </svg>
                <span>Multi TV | <?php echo $i18n['settings']; ?></span>
            </h1>
            <div>
                <button type="button" class="btn-fullsc btn-close-white" data-bs-dismiss="offcanvas" onclick="toggle_fullscreen();" aria-label="<?php echo $i18n['fullscreen']; ?>"></button>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="<?php echo $i18n['close']; ?>"></button>
            </div>
        </div>
        <div class="offcanvas-body">
            <h2 class="h5"><?php echo $i18n['language']; ?></h2>
            <p><a href="<?php echo $root; ?>tr" class="text-white text-decoration-none">Türkçe</a> | <a href="<?php echo $root; ?>en" class="text-white text-decoration-none">English</a> | <a href="<?php echo $root; ?>fr" class="text-white text-decoration-none">Français</a> | <a href="<?php echo $root; ?>es" class="text-white text-decoration-none">Español</a></p>
            <h2 class="h5"><?php echo $i18n['number-of-channels']; ?></h2>
            <div class="btn-group w-100" role="group" aria-label="<?php echo $i18n['settings']; ?>">
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 4)  ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/4'.  $selectedChannels; ?>" rel="alternate">4</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 6)  ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/6'.  $selectedChannels; ?>" rel="alternate">6</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 9)  ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/9'.  $selectedChannels; ?>" rel="alternate">9</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 10) ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/10'. $selectedChannels; ?>" rel="alternate">10</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 13) ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/13'. $selectedChannels; ?>" rel="alternate">13</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 16) ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/16'. $selectedChannels; ?>" rel="alternate">16</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 18) ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/18'. $selectedChannels; ?>" rel="alternate">18</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 21) ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/21'. $selectedChannels; ?>" rel="alternate">21</a>
                <a type="button" class="btn btn-outline-light rounded-0<?php echo ($channel == 25) ? ' active' : ''; ?>" href="<?php echo $root . $lang . '/25'. $selectedChannels; ?>" rel="alternate">25</a>
            </div>

            <form methot="get" action="">
                <h2 class="mt-4 h5"><?php echo $i18n['change-channels']; ?></h2>
                <span class="form-text"><?php echo $i18n['change-channels-text']; ?></span>
                <div id="sortable">
<?php
    foreach ($channels as $cn => $vs) { // channel name => video-slug
?>
                    <div class="input-group mt-1">
                        <input type="text" aria-label="<?php echo $i18n['channel-name']; ?>" placeholder="<?php echo $i18n['channel-name']; ?>" name="cn[]" value="<?php echo $cn; ?>" class="form-control rounded-0">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </span>
                        <input type="text" aria-label="<?php echo $i18n['video-slug']; ?>" placeholder="<?php echo $i18n['video-slug']; ?>" name="vs[]" value="<?php echo $vs; ?>" class="form-control rounded-0">
                    </div>
<?php
    }
?> 
                </div>
                <span id="add" class="btn btn-outline-light w-100 rounded-0 mt-2 mb-3"><?php echo $i18n['add-new-channel']; ?></span>
                <button type="submit" class="btn btn-outline-light w-100 rounded-0 mt-2 mb-5"><?php echo $i18n['save-settings']; ?></button>
            </form>
            <div class="mt-2 py-2 text-center position-fixed bottom-0 text-bg-dark msk-authorLicense">
                <?php echo $i18n['author-license']; ?> | 
                <a href="https://github.com/mertskaplan/multitv" rel="external noopener" target="_blank" class="link-light text-decoration-none">GitHub</a>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
    <script src="<?php echo $root; ?>assets/js/combined.min.js"></script>
    <script>
        $( function() {
            $( "#sortable" ).sortable();
        } );

        function toggle_fullscreen() {
            if (!document.fullscreenElement && // alternative standard method
                !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
                document.body.setAttribute("fullscreen","") 
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
                document.body.removeAttribute("fullscreen") 
            }
        }
        function check_fullscreen() { // Because users can exit & enter fullscreen differently
            if (document.fullscreenElement || document.webkitIsFullScreen || document.mozFullScreen) { 
                document.body.setAttribute("fullscreen","") 
            } else { 
                document.body.removeAttribute("fullscreen") 
            }
        }
        setInterval(function(){ check_fullscreen();}, 1000);

        if ('serviceWorker' in navigator) {navigator.serviceWorker.register('<?php echo $root; ?>assets/js/sw.js').then(function() {}, function() {});}

        $("#add").click(function (e) {
            $("#sortable").append('<div class="input-group mt-1"><input type="text" aria-label="<?php echo $i18n['channel-name']; ?>" placeholder="<?php echo $i18n['channel-name']; ?>" name="cn[]" value="" class="form-control rounded-0"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/></svg></span><input type="text" aria-label="<?php echo $i18n['video-slug']; ?>" placeholder="<?php echo $i18n['video-slug']; ?>" name="vs[]" value="" class="form-control rounded-0"></div>');
        });
    </script>
</body>
</html>
