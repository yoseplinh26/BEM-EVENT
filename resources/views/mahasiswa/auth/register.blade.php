<!DOCTYPE html>
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Events BEM Online Ticketing</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
        <script src="js/registrasi.js"></script>
        <link rel="stylesheet" href="css/registrasi.css">
      </head>
      <body>
        <br/>
        <div class="login">
          @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <div class="logo-cover">
            <img src="{{asset('img/7.png')}}">
                                   </div>
          <form action="{{ route('auth.do_register') }}" method="post">
              {{ csrf_field() }}
            <div class="form-group">   
                <input type="text" class="form-control"  name="username"  placeholder="Username" value="{{ old('name') }}"/>
              @error('name')
              <span class="invalid-feedback" >
                  <strong>{{ $message }}</strong>
              </span>          
              @enderror
            </div>

            <div class="form-group">               
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}"/>
              @error('email')
              <span class="invalid-feedback" >
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <div class="form-group">
              <div class="fxt-transformY-50 fxt-transition-delay-1">
                <select name="prodi" class="form-control">
                <option disabled selected>Prodi</option>
                  <option value="D3TI">D3TI</option>
                  <option value="D3TK">D3TK</option>
                  <option value="D4TRPL">D4 TRPL</option>
                  <option value="Informatika">Informatika</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  <option value="Manajemen Rekayasa">Manajemen Rekayasa</option>
                  <option value="Teknik Elektro">Teknik Elektro</option>
                  <option value="Teknik Bioproses">Teknik Bioproses</option>                                         
                </select>
              </div>
            </div>

            <br>
            <div class="form-group">   
                <input type="text" class="form-control"  name="nim"  placeholder="NIM Mahasiswa" value="{{ old('name') }}"/>
              @error('name')
              <span class="invalid-feedback" >
                  <strong>{{ $message }}</strong>
              </span>          
              @enderror
            </div>

            <div class="form">   
                <input list="jeniskelamin" class="form-control"  name="jenis_kelamin"  placeholder="Jenis Kelamin">
  <datalist id="jeniskelamin">
    <option value="Laki-Laki">
    <option value="Perempuan">
    </datalist>
              @error('name')
              
              <span class="invalid-feedback" >
                  <strong>{{ $message }}</strong>
              </span>          
              @enderror
            </div>
            <br>  
            <div class="form-group">
              <div class="input-group">
                <input type="password" id="pass" class="form-control" name="password" placeholder="Password" />
                @error('password')
                <span class="invalid-feedback" >
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                  <span id="mybutton" onclick="change()" class="input-group-text">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                      <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <input type="password" id="pass" class="form-control" name="password" placeholder=" Konfirmasi Password" />
                @error('password')
                <span class="invalid-feedback" >
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                  <span id="mybutton" onclick="change()" class="input-group-text">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <br />
            <button type="submit" name="login" class="btn btn-primary ">Register</button>
            <div class="bottom">
               <p> sudah memiliki akun? <a href="{{ route('auth.index') }}"><b>login</b></a>
              
                            </div>
            </div>
          </form>
        </div>
      </body>
</html>
