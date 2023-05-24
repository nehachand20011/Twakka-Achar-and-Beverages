@extends('site.template')
@section('css')
<style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: #fccb06;

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: #fccb06;
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
@stop
@section('content')
<section class="h-100 gradient-form" style="background-color: #660202;">
    <div class="container py-5 h-50">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <h4 class="mt-1 mb-5 pb-1">Customer Login</h4>
                    <small>Please login to your account</small>
                  </div>
              
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Email</label>
                      <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Your Email Address" required autofocus/>
                      
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22">Password</label>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password"/>
                      <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                     
                      
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <h4 class="mt-1 mb-5 pb-1">Customer Register</h4>
                    <small>Create your account</small>
                  </div>
                   <!-- Session Status -->
       
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control"
                      placeholder="Your full name" required/>
                    
                  </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Email</label>
                      <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Your Email Address" required/>
                      
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22">Password</label>
                      <input type="password" id="password" name="password" class="form-control" required/>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Password Confirmation</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required/>
                  </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>  
                  </form>
  
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
