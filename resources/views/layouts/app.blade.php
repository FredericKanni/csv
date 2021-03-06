<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
           <!-- css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">


    </head>
    <body>
    
         <!-- NAVBAR -->
    @include('partials.navbar')


     <!-- SIDEBAR -->
     @include('partials.sidebar')

  
   
      <!-- FOOTER -->
    @include('partials.footer')

   
    <!-- SCRIPT pour vuejs -->
 <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
