<x-auth-layout title="Masuk">
    <section class="fxt-template-animation fxt-template-layout7" data-bg-image="{{asset('assets/img/bg.jpeg')}}">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="login-7.html" class="fxt-logo"><img src="img/logo-7.png" alt="Logo"></a>
							<p>Login into your pages account</p>
						</div>
						<div class="fxt-form">
                            @if(session('loginError'))
                            <div>
                                <b>Oops!</b> {{ session('loginError') }}
                            </div>
                            @endif
							<form class="auth-login-form mt-2" action="{{ route('auth.do_login') }}" method="POST">
                                @csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="username" id="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" >
									</div>
								</div>
                                @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********" >
										<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
									</div>
								</div>
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<button type="submit" class="fxt-btn-fill">Log in</button>
									</div>
								</div>
							</form>
						</div>
						<div class="fxt-footer">
							<div class="fxt-transformY-50 fxt-transition-delay-9">
								<p>Don't have an account?<a href="{{ route('auth.do_register') }}" class="switcher-text2 inline-text">Register</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</x-auth-layout>