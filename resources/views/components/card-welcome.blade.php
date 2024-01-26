
<div class="card-sl card m-5 p-0" style="width: 18rem">
  <div class="card-image " >
    <img
    src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400, 300) : '/storage/image/default.jpg'}}" class="card-img " alt="Foto copertina articolo" />
  </div>
  
  <a href="{{route('categoryShow',['category'=>$article->category])}}" class="decoration-none text-black text-center mt-1"><span class="badge rounded-pill text-bg-secondary px-2 py-1 mb-2 ">{{$article->category->name}}</span></a>
  <div class="card-heading text-center fs-3 ">
    {{$article->title}}
  </div>
  <div class="card-text fw-bolder text-center fs-4">
    {{$article->price}} €
  </div>
  <div class="card-text text-center text-truncate">
    {{$article->body}}
  </div>
  
  <a href="{{route('article.show', compact('article'))}}" class="card-button btn btn-dark m-1">Scopri di più</a>
</div>