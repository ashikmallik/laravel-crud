<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <a href="{{route('home.create')}}" class="btn btn-info m-3">create</a>
    <table class="table table-striped">
        <tr>
            <th>name</th>
            <th>eamil</th>
            <th>phone</th>
            <th>address</th>
            <th>salary</th>
            <th>action</th>
        </tr>
        @foreach ($cruds as $crud)
        <tr>
            <td>{{$crud->name}}</td>
            <td>{{$crud->email}}</td>
            <td>{{$crud->phone}}</td>
            <td>{{$crud->address}}</td>
            <td>{{$crud->salary}} tk</td>
            <td><a href="{{ route('home.edit',$crud->id) }}" class="btn btn-info">edit</a>
                <a href="{{route('home.delete',$crud->id)}}" class="btn btn-danger" onclick="confirm('are your sure? delete your data')">delete</a>
            </td>
        </tr>
        
        @endforeach
        
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>