@include('layout.main-layout')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<style>
    body {
    background: url('images/fotoLR.png');
}
</style>
  <body>
    <div class="container overflow-hidden">
        <div class="row gx-5">
            <div class="col">
                <div class="p-5 mt-5 fs-1 fw-bolder"style="color:#F0EBCE">Setiap Donasi<br>membawa Perubahaan</div>
            </div>
            <div class="col">
                <div class="card mt-5">
                    <div class="card-body bg-success text-light">
                        @if(session()->has('success'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(session()->has('LoginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('LoginError')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="username my-2">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input id="username" class="form-control @error('username')is-invalid @enderror" type="text" name="username" required autofocus>
                            </div>
                            <div class="form-group mt-3">
                                <label for="password my-2">Password</label>
                                <input id="password" class="form-control" type="text" name="password" required>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary" style="width: 400px;">masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>