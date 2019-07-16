<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>
  <a href="{{route('add')}}" class="btn btn-info">add</a>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Tieu De</th>
        <th>Noi dung</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Name</td>
        <td>{{$array['name']}}</td>
        
      </tr>
      <tr>
        <td>Age</td>
        <td>{{$array['age']}}</td>
        
      </tr>
      <tr>
        <td>Address</td>
        <td>{{$array['address']}}</td>
        
      </tr>
      <tr>
        <td>Lop</td>
        <td>{{$array['lop']}}</td>
        
      </tr>
      
    </tbody>
  </table>
</div>

</body>
</html>
