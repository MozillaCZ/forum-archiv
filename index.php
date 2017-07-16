<?php
$query_string=$_SERVER['QUERY_STRING'];
parse_str($query_string, $query_array);
unset($query_array['sid']);
$request_url=$_SERVER['REQUEST_URI'];
$request_url_without_query=str_replace($query_string, '', $request_url);
$web_archive_link='https://web.archive.org/web/https://forum.mozilla.cz'.$request_url_without_query.http_build_query($query_array);
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <title>Podpora Firefoxu a produktů Mozilla v češtině</title>
    <link rel="icon" type="image/ico" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="css/responsive-bundle.css">
    <link rel="stylesheet" media="screen" href="css/tabzilla.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
</head>

<body>

    <div id="mozilla-infobar" class="mozilla-infobar infobar-hidden" role="dialog" aria-hidden="true" data-infobar="update">
        <p></p>
        <ul>
            <li><button class="btn-accept button green" type="button"></button></li>
            <li><button class="btn-cancel" type="button"></button></li>
        </ul>
    </div>

    <div id="wrap">
        <div id="tabzilla">
            <a href="https://www.mozilla.cz/">Mozilla.cz</a>
        </div>
        <header>
            <h1 id="logo">
                <a href="https://www.mozilla.cz/"><img src="img/logo.png" alt="Mozilla.cz"></a>
            </h1>
        </header>
        <main>
            <p>
                Podpora aplikací Mozilla byla přesunuta na&nbsp;server <a href="https://www.mozilla.cz/podpora/"><strong>Podpora Mozilly</strong></a>.
                <br>
                O&nbsp;údržbu nápovědy i odpovědi na&nbsp;vaše dotazy se tam i nadále stará česká komunita <a href="https://www.mozilla.cz/">Mozilla.cz</a>.
            </p>
        </main>
    </div>
    <footer>
        <p>Staré fórum případně naleznete v archivu <a href="<?php echo $web_archive_link; ?>">web.archive.org</a>. Jeho obsah už je ale zastaralý.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/infobar.js"></script>
    <script src="js/google-analytics.js"></script>
</body>

</html>

