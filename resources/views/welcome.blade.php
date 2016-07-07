<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wesley Agena</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <style>
        body, html {
            background: url('/img/test-bg.png');
            background-repeat: repeat;
            background-size: 200px 200px;
            height: 100%;
            margin: 0;
        }

        h1, h2, p {
            color: #73938F;
        }

        .intro-text:first-of-type {
            color: #73938F;
            padding-top: 15px;
        }

        .intro-text:last-of-type {
            color: #73938F;
            padding-bottom: 15px;
        }

        .btn-circle.btn-xl.warning {
            border-color: #f06030;
            border-width: 2px;
            color: #f06030;
        }

        .btn-circle.btn-xl.success {
            border-color: #38cb87;
            border-width: 2px;
            color: #38cb87;
        }

        .btn-circle.btn-xl.danger {
            border-color: #f6921f;
            border-width: 2px;
            color: #f6921f;
        }

        .btn-square.btn-xl.warning {
            border-color: #f06030;
            border-width: 2px;
            color: #f06030;
        }

        .btn-square.btn-xl.success {
            border-color: #38cb87;
            border-width: 2px;
            color: #38cb87;
        }

        .btn-square.btn-xl.danger {
            border-color: #f6921f;
            border-width: 2px;
            color: #f6921f;
        }

        .btn-square.btn-xl.brown {
            border-color: #774F38;
            border-width: 2px;
            color: #774F38;
        }

        .btn-square.btn-xl.pink {
            border-color: #E08E79;
            border-width: 2px;
            color: #E08E79;
        }

        .btn-circle.btn-xl {
            width: 140px;
            height: 140px;
            padding: 10px 16px;
            font-size: 48px;
            line-height: 1.33;
            border-radius: 70px;
            background: none;
            margin-bottom: 30px;
        }

        .btn-square.btn-xl {
            width: 100%;
            height: 100%;
            padding: 0;
            font-size: 48px;
            line-height: 1.33;
            border-radius: 10px;
            background: none;
            margin-bottom: 30px;
        }

        .text-warning {
            color: #f06030!important;
        }
        .text-success {
            color: #38cb87!important;
        }
        .text-danger {
            color: #f6921f!important;
        }

        .btn-container {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    @include('intro')

    @include('projects')

    @include('experience')

    @include('contact')


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
