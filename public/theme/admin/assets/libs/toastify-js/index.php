<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toastify JS - Pure JavaScript Toast Notificaton Library</title>
    <meta name="description" content="Toastify is a pure JavaScript library that lets you create notifications toasts/messages.">
    <meta name="keywords" content="Javascript,Library,Toastify">
    <meta name="author" content="apvarun">
    <link rel="stylesheet" type="text/css" href="example/script.css">
    <link rel="stylesheet" type="text/css" href="src/toastify.css">
</head>

<body id="root">
    <div class="container">
        <div class="lead">
            <h1>Toastify JS</h1>
        </div>
        <p>Better notification messages</p>
        <div class="buttons">
            <a href="#" id="new-toast" class="button">Try</a>
            <a href="https://github.com/apvarun/toastify-js/blob/master/README.md" target="_blank" class="button">Docs</a>
            <a href="https://twitter.com/intent/tweet?text=Pure+JavaScript+library+for+better+notification+messages&url=https://apvarun.github.io/toastify-js/&hashtags=JavaScript,toast&via=apvarun"
                target="_blank" class="button">Tweet</a>
        </div>
        <div class="docs">
            <h2>Usage</h2>
            <code>
                <p>Toastify({</p>
                <p class="pad-left">text: "This is a toast",</p>
                <p class="pad-left">duration: 3000</p>
                <p>}).showToast();</p>
            </code>
        </div>
        <div class="repo">
            <iframe src="https://ghbtns.com/github-btn.php?user=apvarun&repo=toastify-js&type=star&count=true&size=large" frameborder="0"
                scrolling="0" width="160px" height="30px"></iframe>
        </div>
    </div>
</body>

<script type="text/javascript" src="src/toastify.js"></script>
<script type="text/javascript" src="example/script.js"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-105870436-1', 'auto');
    ga('send', 'pageview');
</script>

</html>