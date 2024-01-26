<x-layout> 
    
    <x-category-navbar></x-category-navbar>
    <x-masthead title='announcements'></x-masthead>

    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            
            @forelse ($articles as $article)
            
            <x-card-welcome 
            :article="$article"
            ></x-card-welcome>
            
            
            @empty
            <div class="col-12 my-5">
                <h2 class="text-center text-light">{{__('ui.noArticle')}}</h2>
                <p class="text-center text-light">
                    {{__('ui.articleCreate')}} <a href="{{route('article.create')}}" class="text-white">{{__('ui.here')}}</a>
                </p>
            </div>
            
            
            
            @endforelse
            {{-- {{$articles->links()}} --}}
            
            
            
            
        </div> 
    </div>
    
    
    
    
</x-layout>