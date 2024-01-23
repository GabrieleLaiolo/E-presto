<x-layout>
  
  
  <a href="{{route('article.index')}}" class=""><button class="btn btn-dark shadow ms-3 my-4"><i class="fa-solid fa-arrow-left fa-bounce me-2"></i> Torna indietro</button></a>
  <div class="container-fluid  ">
    <div class="row align-items-center "> 
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center ">
        @if (!$article->images->isEmpty())
        {{-- <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach ($article->images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
              <img src="{{$image->getUrl(400, 300)}}" class="img-fluid img-custom rounded" alt="Immagine identificativa del prodotto">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> --}}
        <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
        thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
        @foreach ($article->images as $image)
        <swiper-slide>
                  
          <img src="{{$image->getUrl(400, 300)}}" class="img-fluid img-custom rounded" alt="Immagine identificativa del prodotto">
                  
        </swiper-slide>
        @endforeach
       
      </swiper-container>
      
      <swiper-container class="mySwiper2 " space-between="10" slides-per-view="4" free-mode="true"
        watch-slides-progress="true">
        @foreach ($article->images as $image)
        <swiper-slide>
                  
          <img src="{{$image->getUrl(400, 300)}}" class="img-fluid img-custom rounded" alt="Immagine identificativa del prodotto">
                  
        </swiper-slide>
        @endforeach
        
      </swiper-container>
        
        
        @else
        <div class="m-5">
          <img src="/storage/image/default.jpg" alt="Immagine di default">
        </div>
        @endif
      </div> 
      
      <div class="col-12 col-md-6   p-0 ">
        <div class="text-center w-100 d-flex flex-column align-items-center ">
          <h2 class="display-2 fw-semibold mb-5">{{$article->title}}</h2>
          <h3 class="badge  rounded-pill text-bg-danger shadow fs-1 mb-5" >{{$article->price}} €</h3>
          <p class="fs-3 my-4 ">{{$article->body}}</p>
          <p><span class="badge text-bg-secondary shadow fs-5">{{$article->category->name}}</span></p>
          <div class=" shadow p-3 w-75 my-2  ">
            
            @foreach ($image->labels as $label)
              <p class=" badge m-1 p-1 tag-custom rounded-pill text-bg-dark text-nowrap"> #{{$label}} </p>
            @endforeach
          </div>
        </div>
      </div>  
      
    </div>
  </div> 
  
  {{-- PROVE --}}








</x-layout>