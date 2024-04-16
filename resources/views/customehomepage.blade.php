<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .page {
  border: 5px;
  position: absolute;
  right: 50%;
  top:50%;
  transform: translate(50%, -50%);
  padding: 10px;
}

.antialiased 
{
  background-color:#ececec;
}

.dash 
{
    border:5px;
    padding:2px;
}

.logg 
{
    border:5px;

    padding:2px;
}

.adminlog
{
    border:5px;
    padding:2px;
}

.registerr 
{
    border:5px;
    padding:2px;
}

h2
{
   color:black;
}

h1

{
    color: black;
}

    </style>
       
</head>
<body class="antialiased">

    <div class="page">
            @if (Route::has('login'))
                <div class="Text">
                    @auth
                    
                    <a href="{{ url('/dashboard') }}" class="dash"><h1>Dashboard<h1></a>
                        @else
                    <div class="logg">
                      <a href="{{ route('login') }}" class="log"><h2>LOG IN<h2></a>
</div>
                      <div class = "adminlog">
                      <a href="{{ url('/admin') }}" class="log"><h2>LOG IN (Admin)<h2></a>
</div>

                        @if (Route::has('register'))
                        <div class="registerr">
                            <a href="{{ route('register') }}" class="register"><h2>REGISTER<h2></a>
</div>
                        @endif
                    @endauth
                </div>
            @endif

</body>
</html>