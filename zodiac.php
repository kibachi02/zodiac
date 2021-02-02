<?php
function h( $str ) {
    return htmlspecialchars( $str, ENT_QUOTES, "UTF-8");
}

function eto( $year ) {
    $etos = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
    return $etos[ ($year - 4) % 12];
}

function etoImages ( $year ) {
    $etoImgs = [
        "https://4.bp.blogspot.com/-9nAPirOIyc8/Vq88uH4ErvI/AAAAAAAA3ek/tREBpFR6RLE/s400/nezumi_marathon.png",
        "http://4.bp.blogspot.com/-OvqTTiAK1sc/Vn-CpKKjrsI/AAAAAAAA2MY/Y_IAu9aeGMc/s180-c/eto_remake_ushi.png",
        "https://1.bp.blogspot.com/-rhFM44DlrHc/XWS5Z6xseQI/AAAAAAABUR0/hZSwlkQQU7I2c5DSOamU3SsmNdRCFT5DACLcBGAs/s180-c/circus_tora_hinowakuguri.png",
        "http://4.bp.blogspot.com/-Z2ykRJRjF_E/UZYlosPc6kI/AAAAAAAATSU/aIpN_5KdUFY/s180-c/undoukai_tokyousou_usagi.png",
        "http://3.bp.blogspot.com/-myxrV3KxVtE/UZNyBmQuSkI/AAAAAAAASe0/_KECHftG2KA/s180-c/dragon.png",
        "https://2.bp.blogspot.com/-RSVqFSB8xz0/UZRBaGhbsWI/AAAAAAAASlI/tWKpLf94Ggc/s180-c/hebi_blue.png",
        "http://3.bp.blogspot.com/-omADWVDayrM/UYtbvlVYaMI/AAAAAAAARq0/VPo2BH54Uag/s180-c/eto_uma.png",
        "https://1.bp.blogspot.com/-mI8DPMbV3D8/Wat2E4slCII/AAAAAAABGUg/FE2G9sLFk78ex8h0sX4Rg2DVM5B6HwGvgCLcBGAs/s180-c/animal_stand_hitsuji.png",
        "https://3.bp.blogspot.com/-BV5Sko-jQKA/Wat2KidaWaI/AAAAAAABGVg/D_aW77uZll8JeP0YME9wSoe38IFXN7UQwCLcBGAs/s180-c/animal_stand_saru.png",
        "https://1.bp.blogspot.com/-g_lX9tb-edg/Wp0NtGLQnTI/AAAAAAABKiw/kzm0HvLcybUzfHIyDgbdTkTNsaYDcxargCLcBGAs/s180-c/bird_toriyoke_toge.png",
        "https://1.bp.blogspot.com/-noejtvMJM8Q/V4SA7f_DLbI/AAAAAAAA8OM/Ajwehtq2jCgO2QvPdxGJz5I290VyUZVLQCLcB/s180-c/dog_akitainu.png",
        "https://2.bp.blogspot.com/-M6GTmD-us5w/W5i2UtmGTwI/AAAAAAABO2A/D2KBm-MSc4QO1EuZpMM9GhAknKL10hG9wCLcBGAs/s180-c/eto_inoshishi_fukubukuro.png"
    ];
    return $etoImgs[ ($year - 4) % 12];
}

$year = filter_input(INPUT_GET, "year", FILTER_VALIDATE_INT );
?>
<!DOCTYPE html>
    <head>
        <title>干支チェックアプリ</title>
        <link rel="stylesheet" type="text/css" href="zodiac.css">
    </head>
    <body>
    <h1>干支計算機</h1>
    <?php if (empty($year)):  ?>
        <p>生まれた年を入力してください</p>
        <form method="get">
            <label>年</label>:
            <input name="year" type="number" value="<?= h(date( "Y" )) ?>">
        </form>
    <?php else: ?>
        <p><?= h($year) ?>年は<?= eto($year) ?>年です。</p>
        <img src= "<?= etoImages ( $year ) ?>" alt="干支の画像" width="300">
    <?php endif; ?>
    <!-- zodiac.phpだと起動しなかったが、chap5_7.phpにすると起動した⇨なぜ？http://localhost/zodiac.php  このあと、zodiac.phpに戻したらなぜかできた-->
    </body>
</html>
    
    