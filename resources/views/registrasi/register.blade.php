@include('layout.main-layout')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link rel="stylesheet" href="publice/css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body{
    background: url('images/fotoLR.png');
}
  </style>

  <body>
    <div class="container overflow-hidden">
        <div class="row gx-5">
            <div class="col">
            <div class="p-5 mt-5 text-light fs-1">Setiap Donasi<br>membawa Perubahaan</div>
            </div>
            <div class="col">
            <div class="card mt-5">
                <div class="card-body bg-success text-light">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="my-input my-2">Full Name</label>
                            <input id="full_name" class="form-control @error('full_name') is invalid @enderror" type="text" name="full_name" required value="{{ old('full_name') }}">
                            @error('full_name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="my-input my-2">Username</label>
                            <input id="username" class="form-control @error('username') is invalid @enderror" type="text" name="username" required value="{{ old('username') }}">
                            @error('username')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="my-input my-2">Email</label>
                            <input id="email" class="form-control @error('email') is invalid @enderror" type="text" name="email" required value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="my-input my-2">Nomer Telepon</label>
                            <input id="telpon" class="form-control @error('telpon') is invalid @enderror" type="text" name="telpon" required value="{{ old('telpon') }}">
                            @error('telpon')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="my-input my-2">Password</label>
                            <input id="password" class="form-control @error('password') is invalid @enderror" type="text" name="password" required>
                            @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <a type="button" class="btn btn-warning mt-3" href="/">Pelajari Lebih Lanjut</a>
                        <button type="submit" class="btn btn-primary mt-3 ms-2">Daftar Sekarang</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>