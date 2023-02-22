<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>laravel database user table</title>
    

</head>
<body>
<div class="card">
    <div class="card-header text-center font-weight-bold">
      Table of users
    </div>
<table border="2px">
  <tr>
    <th>Name</th>
    <th>Email</th>
    
</tr>
@foreach($data as $data)
<tr>
  <td>{{$data->name}}</td>
  <td>{{$data->email}}</td>
</tr>
@endforeach
</table>

</body>
</html>
