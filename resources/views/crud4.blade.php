<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SR.NO</th>
      <th scope="col">Profile Information</th>
      <th scope="col">Profile Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Name</td>
      <td>{{ Auth::user()->name }}</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mail-ID</td>
      <td>{{ Auth::user()->email }}</td>

    </tr>
    
  </tbody>
</table>

</body>
</html>