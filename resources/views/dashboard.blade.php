<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .screen
        {
            background-color:#e9967a;
        }
        </style>
</head>
<body class="screen">
<div class="alert alert-success" role="alert">    
<h2 class="alert-heading">
            {{ __('Dashboard') }}
        </h2>
  
    <div>
        <div>
            <div>
                <hr>
                <p class="mb-0">
                    {{ __("You're logged in!") }}
                </div>
                <div>
    </div>
</div>
            </div>
        </div>
    </div>
    <a href="{{ url('/') }}" class="cr"><button type="button" class="btn btn-secondary">Homepage</button></a>
    <a href="{{ url('/crud') }}" class="crud"><button type="button" class="btn btn-secondary">View Data</button></a>
    @role('admin')
    <a href="{{ url('/admin') }}" class="crud"><button type="button" class="btn btn-secondary">Admin Dashboard</button></a>
    @endrole
    <hr>
    <div>
    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="button" class="btn btn-secondary" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
    </button>
    </div>
                </form>
    </button>

</body>
</html>
      
      