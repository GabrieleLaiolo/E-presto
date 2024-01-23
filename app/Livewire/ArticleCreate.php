<?php

namespace App\Livewire;

use File;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;




class ArticleCreate extends Component
{
    // public $img;
    use WithFileUploads;

    public $title;
    public $price;
    public $body;
    public $user_id;
    public $category;
    public $category_id;
    public $article;
    public $images=[];
    public $image;
    public $temporary_images;
    

    public $categoryChecks = [];

    protected $rules=[

        'title'=> 'required|min:3',
        'price'=>'required|max:10',
        'body'=>'required|min:15|max:500',
        'category'=>'required',
        'images.*'=>'image|max:2048',
        'temporary_images.*'=>'image|max:2048',

    ];
    protected $messages=[
        
        'title.required'=> 'Il titolo obbligatorio',
        'price.required'=> 'Il prezzo è obbligatorio',
        'body.required'=> 'Il corpo obbligatorio',
        'category.required'=> 'La categoria è obbligatoria',
        'title.min'=> 'Il titolo deve contenere almeno 3 caratteri',
        'body.min'=> 'Il corpo del testo deve contenere almeno 15 caratteri',
        'body.max'=> 'Il corpo del testo non deve contenere più di 500 caratteri',
        'temporary_images.*.image'=>'Il file deve essere una immagine ',
        'temporary_images.*.max'=>'Il file deve avere una grandezza massima di: 2 Mb',
        'images.*.image'=>'Il file deve essere una immagine ',
        'images.*.max'=>'Il file deve avere una grandezza massima di: 2 Mb',
        'price.max'=>'Il prezzo non deve superare le 9 cifre'

    ];

    public function updatedTemporaryImages(){

        if($this->validate(['temporary_images.*'=>'image|max:2048',])){

            foreach($this->temporary_images as $image){

                $this->images[]=$image;
            }

        }


    }

    public function removeImage($key){

        if (in_array($key, array_keys($this->images)))
        {unset($this->images[$key]);}

    }


    // public function store(){

    //     $this->validate();
    //     $this->article = Category::find($this->category)->articles()->create($this->validate());
        
    // }


    
    public function articleStore(){


        // dd($this->category);


        // $this->user_id = Auth::user()->id;

        $this->validate();

        $this->article = Category::find($this->category)->articles()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'body'=>$this->body,
            'user_id'=>Auth::user()->id
        ]);

        if(count($this->images)){

            foreach($this->images as $image)
            {
                // $this->article->images()->create(['path'=>$image->store('public/image')]);

                $newFileName= "articles/{$this->article->id}";
                $newImage= $this->article->images()->create(['path'=>$image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400 , 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }

            File::deletedirectory(storage_path('/app/livewire-tmp'));
        }

        $this->article->user()->associate(Auth::user());

        // $article->categories()->attach($this->category_id);



        

        // Article::create([
        //     'title'=>$this->title,
        //     'price'=>$this->price,
        //     'body'=>$this->body, 
        //     'user_id'=>$user->id,
        //     'category_id'=>Category::id()
        // ]);

        // Category::create([
        //     'name'=>$this->name
        // ]);
      
        session()->flash('message' , __('ui.articleRevision')) ;

        $this->reset(); 

    }
    // public function updated($propertyName){

    //     $this->validateOnly($propertyName);

    // }

    public function render()
    {
        $categories = Category::all();
        
        return view('livewire.article-create', compact('categories'));
    }
}
