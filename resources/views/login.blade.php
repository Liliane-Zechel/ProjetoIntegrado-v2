<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
    @if(session()->has('msg_error'))
    <div class="row" mt="4" mb="4">
      <div class="col-10">
        <div class="alert alert-danger" role="alert">
          {{session()->get('msg_error')}}
        </div>
      </div>
    </div>
    @endif
        <div class="row">
            <div class="col-4 max-auto">
                <h1 class="text-center">LOGIN</h1>
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{route('login.login')}}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Senha">
                            </div>

                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-success">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>