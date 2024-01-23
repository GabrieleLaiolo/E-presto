<footer class="py-3 gradient-footer footer w-100  bottom-0 ">
  <div class="d-flex justify-content-center">
    <div class="hr"></div>
  </div>
  <div class="container-fluid mb-4 mt-5">
    <div class="row justify-content-center">
      <div class="col-10">
        @auth
        @if (Auth::user()->is_revisor == 0)  
        <p class="text-center">{{__('ui.textFooter')}}</p>
        @else
        <h4 class="text-center fw-bold">E-presto</h4>
        @endif
        @endauth

        @guest
        <p class="text-center">{{__('ui.textFooter')}}</p>
        @endguest
      </div>
      <div class="col-10 d-flex justify-content-center">
        
        @auth
        @if (Auth::user()->is_revisor == 0)        
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{__('ui.workWithUs')}}</button>
        @endif
        @endauth
    
        @guest
        <a href="{{route('login')}}">
          <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{__('ui.workWithUs')}}</button>
        </a>
        @endguest       
      </div>
    </div>
  </div>
 
  <ul class="nav justify-content-center pb-1 mb-3">

    <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-body-secondary"><p class="text-white">Home</p></a></li>
    <li class="nav-item"><a href="{{route('article.index')}}" class="nav-link px-2 text-body-secondary"><p class="text-white">{{__('ui.articles')}}</p></a></li>
    {{-- <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li> --}}
    <li class="nav-item">
      <x-_locale lang="it"></x-_locale>
    </li>
    <li class="nav-item">
      <x-_locale lang="en"></x-_locale>
    </li>
    <li class="nav-item">
      <x-_locale lang="fr"></x-_locale>
    </li>    
 
  </ul>
 
  <div class="d-flex justify-content-center">
    
    
    <div class="hr"></div>
  </div>
  
  <p class="text-center text-white mt-3">© 2023 Company, Inc</p>
  

</footer>