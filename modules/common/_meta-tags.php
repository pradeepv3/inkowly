
<!-- SEO Meta Tags -->
<?php 
    $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
    $pageUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Free Html Template - Inkowly</title>
<meta name="description" content="Free Html Template - Inkowly" />
<meta name="keywords" content="Free html template" />
<meta name="author" content="Avanto" />

<meta property="og:title" content="Free Html Template - Inkowly">
<meta property="og:description" content="Free Html Template - Inkowly">
<meta property="og:image" content="">
<meta property="og:url" content="<?php echo $pageUrl; ?>">
<meta name="twitter:card" content="summary_large_image">