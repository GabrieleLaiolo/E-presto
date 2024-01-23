<x-layout>
  
  {{-- Category nav --}}
  <x-category-navbar></x-category-navbar>
  
  
  <div class="container-fluid">
    <div class="row justify-content-center">
      
      @forelse ($category->articles as $article)
      
      <x-card-welcome 
      :article="$article"
      ></x-card-welcome>
      
      @empty 
      <div class="col-12 col-md-6 my-5">
        <h2 class="text-center">Non sono presenti annunci in questa categoria!</h2>
        <p class="text-center">
          Crea un nuovo articolo <a href="{{route('article.create')}}">qui</a>
        </p>
      </div>
      @endforelse
      
    </div> 
  </div>
  
</x-layout>