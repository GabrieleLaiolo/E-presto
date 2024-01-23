
<x-layout>
    
    {{-- Category nav --}}
    <x-category-navbar></x-category-navbar>
    
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    
    <x-masthead title='sito'></x-masthead>
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            
            <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
            slides-per-view="auto" coverflow-effect-rotate="20" coverflow-effect-stretch="0" coverflow-effect-depth="100"
            coverflow-effect-modifier="1" coverflow-effect-slide-shadows="false">
            @foreach ($articles as $article)
            <swiper-slide>
                <x-card-welcome 
                :article="$article"
                ></x-card-welcome>
            </swiper-slide>
      
            @endforeach
          </swiper-container>

            
          
            
            
            
            
            
            
        </div> 

    </div>
    

    
</x-layout>