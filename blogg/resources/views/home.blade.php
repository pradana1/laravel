<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="{{  route('subscribe')  }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="email" id="" class="form-control {{  $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Masukan email anda" value="{{ old('email') }}">

                @if ($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>

            <input type="submit" class="btn btn-primary" value="subscribe">
        </form>
    </div>
</body>

</html>