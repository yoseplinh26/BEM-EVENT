<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="pBTd9oyS9r3MrwJQczg5u4W9DDWCCJSh7o4j3qdP" />
    <title>Events BEM Online Ticketing {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"> Events BEM </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('registrasi') }}">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main class="py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                  <form method="POST" action="http://harian.trpl20.com/password/email">
                    <input type="hidden" name="_token" value="pBTd9oyS9r3MrwJQczg5u4W9DDWCCJSh7o4j3qdP" />
                    <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus />
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Kirim Link untuk Reset Password</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
