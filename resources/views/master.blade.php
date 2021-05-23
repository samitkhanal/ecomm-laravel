<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E comm project</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">

  </script>

<!--add by me for slider-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <style>
        .custom-login{
            height:500px;
            padding-top:100px;
        }
        img.slider-img{
            height: 600px !important;

        }
        img.slider-center{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .custom-product{
            height:900px;
        }
        .slider-text{
            background-color: #35443585 !important;
        }
        .trending-wrapping{
            margin:30px;
        }
        .trending-image{
            height:100px;
        }

        .trending-item{

            float:left;
            width:19.5%;
            border: 1px solid black;
            margin-right:3px;
            text-align:center
        }
        img.trending-center{
            margin-top:20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .detail-img{
            height:300px;
        }
        .search-box{
            width:500px !important
        }
        .cart-list-divider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom:20px;
        }



    </style>
</body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</html>
