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

    <!-- Style -->
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{elixir("css/app.css")}}">

    <style>
        .grad {
            background: red; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #597EEA, #97B3FC); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #597EEA, #97B3FC); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #597EEA, #97B3FC); /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #597EEA, #97B3FC); /* Standard syntax */
        }
    </style>
    
</head>
<body>
    @include('intro')

    @include('projects')

    @include('contact')


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
