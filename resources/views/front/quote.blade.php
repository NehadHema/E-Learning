<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="random quotes show">
    <meta name="keywords" content="random ,quotes ">
    <title>Quotes App</title>
    <link rel="stylesheet" href="{{asset('front/css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front/css')}}/style1.css">
</head>
<body class="quotebody">
    <div class="quote">
       <div class="container my-5">
        <h1 class="mt-5">Quote of the Day</h1>
        <p class="mt-5">Press the button below to recieve a random quote!</p>
        <button class="mt-5" onclick="newQuote()">New Quote</button>
        <div id="quoteDisplay"></div>
        <div id="quoteAuthor"></div>
       </div>
    </div>
    <script src="{{asset('front/js')}}/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front/js')}}/main.js"></script>
</body>
</html>