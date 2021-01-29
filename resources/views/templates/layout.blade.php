
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
 
    <link rel="icon" href="favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom styles for this template -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
   
<!-- Styles -->
<link   href="{{URL::asset('css/Styles.css')}} rel="stylesheet" type="text/css">
@yield('script')
</head>

<body>

<header>


    
</header>


<main role="main" class="container">
    <br/><br/><br/>
    <div class="row mt-315">
        <div class="col-15" width="100%">
      
            @yield('content')
        </div>
       
    </div>
</main>


</body>
</html>