<div>
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <div class="container-fluid bg-image">
            <div class="row justify-content-center">              
                <div class="col-12 col-md-6 shadow-form m-5 bg-dark text-light"> 

        <form enctype="multipart/form-data" class="p-4 border-4 shadow rounded " wire:submit="articleStore">
            
            {{-- <div class="mb-3">
                <label for="img" class="form-label"> Allega file</label>
                <input type="file"  name="img"  class="form-control"  id="img" >
            </div> --}}

            <div class="mb-3">
                <label for="title" class="form-label">{{__('ui.nameArticle')}}</label>
                <input type="text" wire:model.blur='title' class="form-control" id="title">
                <ul class="small-text">
                    <li><p class="m-0 fst-italic">{{__('ui.titleObbligatory')}}</p></li>
                    <li><p class="m-0 fst-italic">{{__('ui.campObbligatory')}}</p></li>
                </ul>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{__('ui.price')}}</label>
                <input type="number" step="0.01" wire:model.blur='price' class="form-control" id="price">
                <ul class="small-text">
                    <li><p class="m-0 fst-italic">{{__('ui.titleObbligatory')}}</p></li>
                    <li><p class="m-0 fst-italic">{{__('ui.obbligatoryCamp')}}</p></li>
                </ul>
            </div>
            <div class="mb-4">
                <label for="images" class="form-label">{{__('ui.images')}}</label>
                <input wire:model="temporary_images" type="file" id="images" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" 
                    placeholder="immagine">
                 @error('temporary_images.*')
                    <p class="text-danger mt-2">{{$message}}</p>

                 @enderror

            </div>
            @if(!empty($images))
            
                <div class="row">
                    <div class="col-12">
                        <p>Anteprima foto:</p>
                        <div class="row border border-4 rounded shadow pt-4">
                            @foreach($images as $key => $image)
                            <div class="col  my-3">
                                
                                <div class="img-preview d-flex justify-content-center align-items-center rounded">  
                                    
                                    @if ($image) 
                                    <img class="img-preview" src="{{ $image->temporaryUrl() }}">
                                    @endif
                                
                                </div>
                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.delete')}}</button>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            
            @endif
           
            <div class="d-flex flex-column mb-3">
                <label for="body" class="form-label">{{__('ui.description')}}</label>
                <textarea class="form-control" name="body" wire:model.blur='body' id="body" cols="40" rows="3"></textarea>
                <ul class="small-text">
                    <li><p class="m-0 fst-italic">{{__('ui.titleObbligatory')}}</p></li>
                    <li><p class="m-0 fst-italic">{{__('ui.required1')}}</p></li>
                    <li><p class="m-0 fst-italic">{{__('ui.required2')}}</p></li>
                </ul>
            </div>
            <div class="mb-3">

                <label for="category" class="form-label">{{__('ui.category')}}</label>
                
                <select class="form-select" wire:model.defer="category" id="category" aria-label="Default select example">

                    <option value="" hidden>{{__('ui.selectCategory')}}</option>

                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                        
                </select>

                <ul class="small-text">
                    <li><p class="m-0 fst-italic">{{__('ui.titleObbligatory')}}</p></li>
                </ul>
                
            </div>
            <button  type="submit" class="btn-canvas-cus">{{__('ui.insert')}}</button>
        </form>
    </div>
    
</div>

</div>
    
</div>
</div>