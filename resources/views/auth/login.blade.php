
@extends("Layout.layoutMaster")

@section("title", "Login")
@section("content")



@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

<div class="img" style="background-image: url({{asset('assets/images/mision-vivienda-e1467143010759.jpg')}})">

	<section class="ftco-section">
		  <div class="container">
				<div class="row justify-content-center">
				</div>
				<div class="row justify-content-center">
					<div class="col-md-7 col-lg-5">
						<div class="wrap">
							<div class="img" style="background-image: url({{asset('assets/images/LOGO.png')}})"></div>
							<div class="login-wrap p-4 p-md-5">
						<div class="d-flex">
							<div class="w-100">
								<h2 class="mb-4">Bienvenido</h2>
							</div>
									<div class="w-100">
										<p class="social-media d-flex justify-content-end">
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
										</p>
									</div>
						</div>
                        <form action="{{ $login_url }}" method="post">
							{{ csrf_field() }}

							{{-- Email field --}}
							<div class="input-group mb-3">
								<input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
									   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
									</div>
								</div>
								@if($errors->has('email'))
									<div class="invalid-feedback">
										<strong>{{ $errors->first('email') }}</strong>
									</div>
								@endif
							</div>

							{{-- Password field --}}
							<div class="input-group mb-3">
								<input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
									   placeholder="{{ __('adminlte::adminlte.password') }}">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
									</div>
								</div>
								@if($errors->has('password'))
									<div class="invalid-feedback">
										<strong>{{ $errors->first('password') }}</strong>
									</div>
								@endif
							</div>

							{{-- Login field --}}
							<div class="row">
								<div class="col-7">
									<div class="icheck-primary">
										<input type="checkbox" name="remember" id="remember">
										<label for="remember">{{ __('adminlte::adminlte.remember_me') }}</label>
									</div>
								</div>
								<div class="col-5">
									<button type=submit class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
										<span class="fas fa-sign-in-alt"></span>
										{{ __('adminlte::adminlte.sign_in') }}
									</button>
								</div>
							</div>

						</form>
					</div>
				</div>
					</div>
				</div>
			</div>

	</section>
</div>



@section('auth_footer')
    {{-- Password reset link --}}
    @if($password_reset_url)
        <p class="my-0">
            <a href="{{ $password_reset_url }}">
                {{ __('adminlte::adminlte.i_forgot_my_password') }}
            </a>
        </p>
    @endif
@stop
@endsection
