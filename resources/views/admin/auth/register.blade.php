<x-auth-layout title="register">
    <section class="fxt-template-animation fxt-template-layout7" data-bg-image="{{asset('assets/img/bg.jpeg')}}">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="login-7.html" class="fxt-logo"><img src="img/logo-7.png" alt="Logo"></a>
							<p>Register for create an account</p>
						</div>
						<div class="fxt-form">
							<form class="auth-register-form mt-2" action="{{route('auth.do_register')}}" method="POST">
                                @csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" id="username" class="form-control " name="username" placeholder="Nama Lengkap" required="required">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
									</div>
								</div>
                                <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<select name="prodi" class="form-control">
                                            <option disabled selected>Prodi</option>
                                                <option value="D3TI">D3TI</option>
                                                <option value="D3TK">D3TK</option>
                                                <option value="D4TRPL">D4 TRPL</option>
                                                <option value="S1Informatika">S1 Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Manajemen Rekayasa">Manajemen Rekayasa</option>
                                                <option value="Teknik Elektro">Teknik Elektro</option>
                                                <option value="Teknik Bioproses">Teknik Bioproses</option>                                         
                                        </select>
									</div>
								</div>
                                <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" id="name" class="form-control" name="nim" placeholder="Nim Mahasiswa " required="required">
									</div>
								</div>
                                <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <select name="jenis_kelamin" class="form-control">
                                            <option disabled selected>Jenis Kelamin</option>
                                                <option value="Laki-Laki">Pria</option>
                                                <option value="Perempuan">Wanita</option>                                         
                                        </select>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
										<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<button type="submit" class="fxt-btn-fill">Log in</button>
									</div>
								</div>
							</form>
						</div>
						<div class="fxt-footer">
							<div class="fxt-transformY-50 fxt-transition-delay-9">
								<p>Already have an account?<a href="{{ route('auth.index') }}" class="switcher-text2 inline-text">Log in</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</x-auth-layout>