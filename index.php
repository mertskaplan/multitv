<?php

    if (isset($_GET['cn']) && isset($_GET['cs'])) {
        $chanels = array_combine($_GET['cn'], $_GET['cs']);
    } else {  
        $chanels = array(
            "NTV" => "XEJM4Hcgd3M",
//            "CNN Türk" => "X_EWYemclKA", // Diğer uygulamalarda oynatma, video sahibi tarafından devre dışı bırakıldı
            "Habertürk" => "SqHIO2zhxbA",
            "Haber Global" => "fx5_pi-1Zqo",
            "TRT Haber" => "Rc5qrxlJZzc",
//          "A Haber" => "g4QA9Sh_g_8", // telif hakki sebebiyle kaldirildi
            "TV 100" => "sd94keSra6A",
            "Halk TV" => "L0aI7O5KrVU",
            "24 TV" => "TPbdeNMaAZY",
            "TGRT Haber" => "8YPC2IV7ve0",
            "KRT TV" => "3QDiWPZ2D_k",
            "TELE 1" => "mRK3wXGdsLk",
            "Bengü Türk" => "7su_1By-cBk",
            "Bloomberg HT" => "hHSmBJk6w0c",
            "Ulusal Kanal" => "SdCJquYL-CQ",
            "Artı TV" => "xpoetRCJKqY",
            "TVNET" => "SR396EBvGUk",
            "Ülke TV" => "1-Ng6S1dhNI",
            "Flash Haber TV" => "zjhWKpr2YnY",
        );
    }

    if (isset($_GET['channel']) && $_GET['channel'] == "16") {
        $channel = 16;
        $iframeDivClass = 'col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center p-0';
    } else {
        $channel = 9;
        $iframeDivClass = 'col-md-4 col-sm-6 col-xs-12 text-center p-0';
    }

    $chanels = array_slice($chanels, 0, $channel);
    $autoplay = (!isset($_GET['autoplay']) || $_GET['autoplay'] == 'on') ? 1 : 0;
?>
<!doctype html>
<html lang="tr" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Aynı anda birden fazla haber kanalını, televizyonu ya da YouTube kanalını izleyebileceğiniz bir çoklu ekran uygulaması.">
    <meta name="keywords" content="Multi TV, multi screen, çoklu ekran, çoklu haber kanalı, haber kanalları, YouTube, aynı anda">
    <meta name="author" content="Mert S. Kaplan, mail@mertskaplan.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#212529">
    <meta property="og:title" content="Multi TV - Haber kanallarını aynı anda izle" />
    <meta property="og:description" content="Aynı anda birden fazla haber kanalını, televizyonu ya da YouTube kanalını izleyebileceğiniz bir çoklu ekran uygulaması." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lab.mertskaplan.com/multitv/" />
    <meta property="og:image" content="https://lab.mertskaplan.com/multitv/assets/img/screenshots/screenshot-1280.jpg" />
    <meta property="og:locale" content="tr_TR" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@mertskaplan">
    <meta name="twitter:title" content="Multi TV - Haber kanallarını aynı anda izle">
    <meta name="twitter:description" content="Aynı anda birden fazla haber kanalını, televizyonu ya da YouTube kanalını izleyebileceğiniz bir çoklu ekran uygulaması.">
    <meta name="twitter:image" content="https://lab.mertskaplan.com/multitv/assets/img/screenshots/screenshot-1280.jpg">
    <title>Multi TV - Haber kanallarını aynı anda izle</title>
    <link rel="canonical" href="https://lab.mertskaplan.com/multitv/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="apple-touch-icon" href="assets/img/logo/multitv-192.png">
    <style>
        .msk-container {
            aspect-ratio: 16/9;
            max-height: 100vh;
            max-width: 100vw;
            margin: 0 auto;
        }
        .row div {
            max-height: 33.333vh;
        }
        .row div, iframe {
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
    </style>
</head>
<body class="text-bg-dark">
    <div class="msk-container">
        <div class="row justify-content-around align-items-center m-0">
<?php
    foreach ($chanels as $chanel => $slug) {
        echo '
            <div class="'. $iframeDivClass .'">
                <iframe class="d-grid" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/'. $slug .'?autoplay='. $autoplay .'&mute=1" title="'. $chanel .'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        ';
    }
?>
        </div>
    </div>
    <button class="msk-optionsButton btn btn-dark position-fixed rounded-0 position-absolute top-50 end-0 translate-middle-y" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="Ayarlar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
        </svg>
        <span class="d-none">Ayarlar</span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-scroll="true" >
        <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasRightLabel">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="22" height="36" viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet" style="vertical-align: top;">
                    <g transform="translate(0,512) scale(0.100000,-0.100000)" fill="#fff"><path d="M1954 5101 c-69 -31 -111 -106 -101 -180 3 -23 78 -167 201 -385 108 -192 196 -352 196 -357 0 -4 -282 -10 -627 -11 -618 -3 -629 -3 -693 -25 -210 -72 -376 -248 -437 -463 -17 -62 -18 -141 -18 -1590 0 -1701 -5 -1573 70 -1725 85 -173 260 -310 450 -350 104 -22 3025 -22 3129 0 241 51 437 240 503 485 17 61 18 166 18 1590 0 1449 -1 1528 -18 1590 -66 231 -248 413 -473 470 -73 19 -111 20 -681 20 -343 0 -603 4 -603 9 0 5 88 166 197 357 219 389 224 402 181 484 -55 107 -185 132 -269 52 -25 -25 -101 -150 -224 -369 -103 -183 -191 -333 -195 -333 -4 0 -92 150 -195 333 -103 182 -201 347 -218 365 -51 52 -122 65 -193 33z m2139 -1301 c75 -28 130 -79 167 -153 l30 -62 -2 -1510 c-3 -1458 -4 -1511 -22 -1545 -38 -71 -77 -109 -144 -142 l-67 -33 -1495 0 -1495 0 -67 33 c-67 33 -106 71 -144 142 -18 34 -19 87 -22 1545 l-2 1510 30 62 c36 73 92 125 164 152 50 19 88 20 1533 20 1460 1 1483 1 1536 -19z"/>
                    <path d="M2500 2505 c-152 -56 -990 -432 -1013 -454 -41 -38 -57 -73 -57 -128 0 -62 33 -121 85 -151 72 -42 113 -31 430 107 154 68 315 138 358 157 l77 33 0 -122 c0 -141 10 -185 50 -231 40 -45 79 -60 143 -54 46 5 426 164 982 412 98 44 135 92 135 176 0 113 -105 198 -208 170 -22 -5 -194 -77 -383 -160 -189 -82 -346 -150 -350 -150 -4 0 -9 62 -11 138 -3 122 -6 141 -26 177 -48 80 -130 111 -212 80z"/></g>
                </svg>
                <span>Multi TV | Ayarlar</span></h4>
            <div>
                <button type="button" class="btn-fullsc btn-close-white" data-bs-dismiss="offcanvas" onclick="toggle_fullscreen();" aria-label="Tam ekran"></button>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Kapat"></button>
            </div>
        </div>
        <div class="offcanvas-body">
            <h5>Kanal sayısı</h5>
            <div class="btn-group w-100" role="group" aria-label="Ayarlar">
                <a type="button" class="btn btn-outline-light rounded-0<? echo ($channel == 9) ? ' active' : ''; ?>" href=".">9 kanal</a>
                <a type="button" class="btn btn-outline-light rounded-0<? echo ($channel == 16) ? ' active' : ''; ?>" href="?channel=16">16 kanal</a>
            </div>

            <form methot="get" action="">
                <h5 class="mt-4">Başlangıç seçenekleri</h5>
                <div class="form-check form-switch">
                    <? echo ($autoplay == 1) ? '<input type="hidden" value="off" name="autoplay">' : ''; ?>
                    <input class="form-check-input" type="checkbox" role="switch" id="autoplay" name="autoplay"<? echo ($autoplay == 1) ? ' checked="checked"' : ''; ?>>
                    <label class="form-check-label" for="autoplay">Otomatik onatma</label>
                </div>

                <h5 class="mt-4">Kanalları değiştir</h5>
                <span class="form-text">Kanal adresi bölümüne YouTube yayın adresi uzantısını girmelisiniz.</span>

                <input type="hidden" aria-label="Kanal" placeholder="Kanal" name="channel" value="<? echo $channel; ?>" class="form-control rounded-0">
                <div id="sortable">
<?php
    foreach ($chanels as $cn => $cs) {
?>
                    <div class="input-group mt-1">
                        <input type="text" aria-label="Kanal adı" placeholder="Kanal adı" name="cn[]" value="<? echo $cn; ?>" class="form-control rounded-0">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </span>
                        <input type="text" aria-label="Kanal adresi" placeholder="Kanal adresi" name="cs[]" value="<? echo $cs; ?>" class="form-control rounded-0">
                    </div>
<?php
    }
?> 
                </div>
                <button type="submit" class="btn btn-outline-light w-100 rounded-0 mt-2 mb-5">Ayarları değiştir</button>
            </form>
            <div class="mt-2 py-2 text-center position-absolute bottom-0 start-50 translate-middle-x text-bg-dark" style="font-size:.78em; width: 368px;">
                <a href="https://mertskaplan.com" target="_blank" rel="author external" class="link-light text-decoration-none">Mert S. Kaplan</a> tarafından <a href="https://github.com/mertskaplan/multitv/blob/main/LICENSE" rel="license external nofollow noopener" target="_blank" class="link-light text-decoration-none">MIT Lisansı<a> ile geliştirildi | 
                <a href="https://github.com/mertskaplan/multitv" rel="external noopener" target="_blank" class="link-light text-decoration-none">GitHub</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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

        if ('serviceWorker' in navigator) {navigator.serviceWorker.register('assets/js/sw.js').then(function() {}, function() {});}
    </script>
</body>
</html>
