<?php
    include('serverFunctions.php');
    checkCookie();
    checkHttps();
    checkSession();
?>

<noscript> Javascript is not enabled. Please, enable it! </noscript>
<LINK href="mainStyle.css" rel=stylesheet type="text/css">

<TITLE>SaveMyHealth GignedIn</TITLE>

<head>
    <h1 class="mainTitle">
        SaveMyHealth
    </h1>
</head>

<body>
    <?php include('sidebar.php'); ?>
    <?php include('mainTable.php'); ?>
</body>