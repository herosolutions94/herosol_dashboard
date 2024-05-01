<?php

    $page = substr(basename($_SERVER['PHP_SELF']), 0, -4);

    if ($_SERVER['HTTP_HOST'] != 'localhost') {

        $baseurl = "http://herosolutions.com.pk/muqadsa/herosol_dashboard/";

    } else {

        $baseurl = "http://localhost/herosol_dashboard/";

    }

?>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="title" content="Home - herosol_dashboard">
<meta name="description" content="">
<meta name="keywords" content="home, herosol_dashboard">

<meta property="og:type" content="website">
<meta property="og:url" content="<?=$baseurl?>">
<meta property="og:title" content="Home - herosol_dashboard">
<meta property="og:description" content="">
<meta property="og:image" content="<?=$baseurl?>images/thumbnail.png">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="<?=$baseurl?>">
<meta property="twitter:title" content="Home - herosol_dashboard">
<meta property="twitter:description" content="">
<meta property="twitter:image" content="<?=$baseurl?>images/thumbnail.png">

<!-- Css files -->

<!-- CommonCss Css -->

<link type="text/css" rel="stylesheet" href="css/commonCss.css">

<!-- Main Css -->

<link type="text/css" rel="stylesheet" href="css/main.css?v=1">

<!-- datatables Css -->

<link type="text/css" rel="stylesheet" href="css/datatables.css">
<!-- Media-Query Css -->

<link type="text/css" rel="stylesheet" href="css/responsive.css?v=2">
<link type="text/css" rel="stylesheet" href="css/app.css">

<!-- Favicon -->

<link type="image/png" rel="icon" href="images/fav.png">

<!-- font awesome pro icon -->

<link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
    href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">

<!-- font awesome pro icon -->
<link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
    href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

<?php require_once('includes/commonjs.php'); ?>