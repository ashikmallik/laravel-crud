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
    <div class="row m-5">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 col-sm-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <form method="POST" action="{{route('home.update',$crud_edit->id)}}">
                @csrf
                <label for="">name</label>
                <div class="form-group">
                    <input type="text" name="name" id="" placeholder="input your name" class="form-control" value="{{$crud_edit->name}}">
                </div>
                <label for="">eamil</label>
                <div class="form-group">
                    <input type="eamil" name="email" id="" placeholder="input your eamil" class="form-control" value="{{$crud_edit->email}}">
                </div>
                <label for="">phone</label>
                <div class="form-group">
                    <input type="number" name="phone" id="" placeholder="input your phone" class="form-control" value="{{$crud_edit->phone}}">
                </div>
                <label for="">address</label>
                <div class="form-group">
                    <input type="text" name="address" id="" placeholder="input your address" class="form-control" value="{{$crud_edit->address}}">
                </div>
                <label for="">salary</label>
                <div class="form-group">
                    <input type="text" name="salary" id="" placeholder="input your salary" class="form-control" value="{{$crud_edit->salary}}">
                </div>

                <div class="form-group">
                    <input type="submit" value="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-2"></div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>