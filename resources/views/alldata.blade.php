
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @role('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table table-striped">
                <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">10th Marks</th>
      <th scope="col">12th Marks</th>
      <th scope="col">Grad</th>
    </tr>
  </thead>
  <tbody>
  <?php
    /*$con=mysqli_connect("localhost","root","","spatieexp");

    $sql="SELECT id,name,email, tenth, twelvth, grad FROM users";
    $result=$con->query($sql);

    if ($result->num_rows>0)
    {

        while($row=$result->fetch_assoc())
        {
            echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["tenth"]."</td><td>".$row["twelvth"]."</td><td>".$row["grad"]."</td></tr>";

    }echo"</table>";
}
else
{
 echo"0 result";
}
$con->close();
*/
?>
@foreach($users as $datas)
<tr>
    <td>{{$datas->id}}</td>
    <td>{{$datas->name}}</td>
    <td>{{$datas->email}}</td>
    <td>{{$datas->tenth}}</td>
    <td>{{$datas->twelvth}}</td>
    <td>{{$datas->grad}}</td>
    
        

</tr>
@endforeach
</tbody>
</table>

                </div>
            </div>
        </div>
    </div>
@endrole

</body>
</html>