
<x-layout>

    <div class="container-fluid bg-login">
        <div class="row justify-content-center">
    
            <div class="col-12 col-md-6 shadow-form m-5">
                <form method="POST" action="{{route('login')}}" class="p-4  my-5 rounded-4">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bolder">Email </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bolder">Password </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    </div>
                    <button type="submit" class="btn btn-dark mt-4">{{__('ui.login')}}</button>
                    <p class="my-3 text-dark fs-6 fw-semibold">
                        {{__('ui.loginRegister')}} <a class="text-dark" href="{{route('register')}}">{{__('ui.here')}}</a>
                  </form>
            </div>
        </div>
    </div>









</x-layout>