
<x-layout> 
    
    
    
    
    
    
    
    
    
    
    <div class="container-fluid bg-image">
        <div class="row justify-content-center">
            
            <div class="col-12 col-md-6 shadow-form m-5 bg-dark"> 
                <h1 class="title-register text-center mt-5">{{__('ui.register')}}</h1> 
              <hr class="text-light">
                <form enctype="multipart/form-data" method="POST" action="{{route('register')}}" class="p-4  my-5 rounded-4">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">{{__('ui.nomeUtente')}}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name">
                        <ul class="small-text">
                            <li><p class="m-0 fst-italic text-light">{{__('ui.titleObbligatory')}}</p></li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">{{__('ui.userEmail')}}</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email">
                        <ul class="small-text">
                            <li><p class="m-0 fst-italic text-light">{{__('ui.titleObbligatory')}}</p></li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-light">{{__('ui.Pass')}}</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                        <ul class="small-text">
                            <li><p class="m-0 fst-italic text-light">{{__('ui.required3')}}</p></li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label text-light">{{__('ui.confirmPass')}}</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn-canvas-cus">{{__('ui.register')}}</button>
                    <p class="my-3 text-light">
                        {{__('ui.questionAccount')}} <a class="text-light" href="{{route('login')}}">{{__('ui.here')}}</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
