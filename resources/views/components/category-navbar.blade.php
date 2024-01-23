<div class="container-fluid p-3">
    <div class="row justify-content-evenly">
        
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
        
            <a href="{{route('categoryShow',[1])}}" class="d-flex flex-column align-items-center decoration-none ">
                
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' )  text-white @else icon-custom @endif">{{__('ui.furniture')}}</p>

                <i class="fa-solid fa-couch fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i>
            </a>
            
        </div>
        
        <div class="col-5 col-md-3 col-lg-1  category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[2])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class="  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.electronics')}}</p>
                <i class="fa-solid fa-laptop fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif "></i> 
            </a>
        </div>
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[3])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.videogames')}}</p>
                <i class="fa-solid fa-gamepad fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i> 
            </a>
        </div>
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[4])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.sport')}}</p>
                <i class="fa-solid fa-baseball-bat-ball fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i> 
            </a>
        </div>
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[5])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.properties')}}</p>
                <i class="fa-solid fa-house fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i>
            </a>
        </div>
        <div class="col-5 ccol-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[6])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.music')}}</p>
                <i class="fa-solid fa-music fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i> 
            </a>
        </div>
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[7])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.fashion')}}</p>
                <i class="fa-solid fa-shirt fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i> 
            </a>
        </div>
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[8])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.gardening')}}</p>
                <i class="fa-solid fa-trowel fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i>
            </a>
        </div>
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[9])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.accessories')}}</p>
                <i class="fa-solid fa-screwdriver-wrench fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i>
            </a>
        </div>
        <div class="col-5 col-md-3 col-lg-1 category-nav-link d-flex flex-column justify-content-center p-3 my-1">
            <a href="{{route('categoryShow',[10])}}" class="d-flex flex-column align-items-center decoration-none">
                <p class=" @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif">{{__('ui.animals')}}</p>
                <i class="fa-solid fa-dog fa-xl  @if (Route::currentRouteName() == 'homepage' || Route::currentRouteName() == 'article.index' ) text-white @else icon-custom @endif"></i> 
            </a>
        </div>
    </div>
</div>
