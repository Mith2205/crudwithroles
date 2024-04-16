
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .bod
        {
            background-color:#bdcebe;
        }
        .mod {
            border: 5px;
  position: absolute;
  right: 50%;
  top:50%;
  transform: translate(50%, -50%);
  padding: 10px;
            
        }

        p 
        {
            color:black;
        }
        </style>
</head>
<body class="bod">
    <div class="mod">
<form method="POST" action="{{ url('/create') }}">
@csrf
        <!-- Name -->
        <div>
        <label for="name" class="form-label" value="__('Name')" > Name</label>
            <input type="text" id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
<!--
        <div>
            <x-input-label for="Age" :value="__('Age')" />
            <x-text-input id="Age" class="block mt-1 w-full" type="text" name="Age" :value="old('Age')" required autofocus autocomplete="Age" />
            <x-input-error :messages="$errors->get('Age')" class="mt-2" />
        </div>
-->
        <!-- Email Address -->
        <div class="mt-4">
        <label for="email" class="form-label" value="__('Email')" > Email</label>
            <input type="email" id="email" class="form-control" type="email" name="email" :value="old('name')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="form-label" value="__('Password')">Password</label>

            <input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="form-label" value="__('Confirm Password')" >Confirm Password</label>

            <input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
        

            <button class="btn btn-light ms-4">
                Register
            </button>
        </div>
    </form>
</body>
</html>