<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="/js/FetchCalculation.js" defer></script>
    <title> home - Backend2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <div class="header">Backend2</div>
    <a href="/home" class="Home">Home</a>
</header>
<div class="content">
    @yield('content')
</div>
<footer>© 2022 - Backend2</footer>
</body>
</html>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 7%;
    }

    .content {
        margin-top: 15px;
    }

    header {
        padding-top: 3%;
        padding-bottom: 3%;
        background-color: black;
        color: gray;
        font-size: 20px;
        font-weight: bold;
        margin: -10px -10px -10px -8%;
        text-align: left;
    }

    .header {
        font-size: 30px;
        padding-left: 7%;
        display: inline-block;
    }

    .Home {
        padding-left: 45px;
        color: gray;
        text-decoration: none;
    }

    h2 {
        font-size: 48px;
    }

    .menu li {
        padding: 9px;
    }

    .menu a {
        text-decoration: none;
        color: #3473b6;
        font-size: 20px;
    }

    footer {
        border-top: solid 1px gainsboro;
        padding-top: 35px;
        margin-top: 30px;
        font-size: 16px;
    }
    .col-md-12 {
        width: 600px;
    }
    .col-md-12 .form-control{
        border: rebeccapurple 2px solid ;
    }
    #operation{
        margin-top: 10px;
    }

    .form-control-list option
    {

        width: 40px;
    }
    button{
        margin-top: 11px;
    }

</style>

