
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div >
        <div >
            <div >
                <div>
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SR.NO</th>
      <th scope="col">Profile Information</th>
      <th scope="col">Profile Data</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Name</td>
      <td>{{ Auth::user()->name }}</td>
      <td>
        <x-dropdown-link :href="route('profile.edit2')">
        <button type="button" class="btn btn-secondary btn-sm">{{ __('Edit/Delete') }}</button>
                        </x-dropdown-link>
</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mail-ID</td>
      <td>{{ Auth::user()->email }}</td>
      <td>
        <x-dropdown-link :href="route('profile.edit2')">
        <button type="button" class="btn btn-secondary btn-sm">{{ __('Edit/Delete') }}</button>
                        </x-dropdown-link>
</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Tenth Marks</td>
      <td>{{ Auth::user()->tenth }}</td>
      <td>
        <x-dropdown-link :href="route('profile.edit2')">
        <button type="button" class="btn btn-secondary btn-sm">{{ __('Edit/Delete') }}</button>
                        </x-dropdown-link>
</td>

    </tr>

    <tr>
      <th scope="row">4</th>
      <td>12th Marks</td>
      <td>{{ Auth::user()->twelvth }}</td>
      <td>
        <x-dropdown-link :href="route('profile.edit2')">
        <button type="button" class="btn btn-secondary btn-sm">{{ __('Edit/Delete') }}</button>
                        </x-dropdown-link>
</td>

    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Degree</td>
      <td>{{ Auth::user()->grad}}</td>
      <td>
        <x-dropdown-link :href="route('profile.edit2')">
        <button type="button" class="btn btn-secondary btn-sm">{{ __('Edit/Delete') }}</button>
                        </x-dropdown-link>
</td>

    </tr>
    
    
    <!-- <tr>
      <th scope="row">2</th>
      <td>Tenth Marks</td>
      <td>{{ Auth::user()->tenth }}</td>

    </tr> -->
    
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>

</body>
</html>