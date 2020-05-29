<?php
	// require_once "conection.php";
	// mysqlI_query($conexao, "TRUNCATE TABLE u982252054_feira.pedido");
	//header("location: ../../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spinner Loader CSS puro</title>
</head>

<style>
    body {
        background-color: #dff9fb;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    @keyframes spin {
        to { transform: rotate(360deg);}
    }
    .spinner {
        border: 8px solid rgba(0, 0, 0, 0.1);
        border-left-color: #22a6b3;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1.2s linear infinite;
    }
</style>
<body>

<div class="spinner"></div>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-58087941-1', 'auto');
    ga('send', 'pageview');
    ga('send', 'event', 'labs', 'spinner-loader');
</script>
</body>
</html>