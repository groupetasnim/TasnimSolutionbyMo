<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
       <h2 class="mb-4">Laravel Alpha Validation Rule Examle</h2>
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    
        <form  method="post" action="{{ route('alpha-validate.form') }}" novalidate>
            @csrf
            <div class="form-group mb-2">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Submit" class="btn btn-danger btn-block">
            </div>
        </form>
    </div>
</body>
</html>