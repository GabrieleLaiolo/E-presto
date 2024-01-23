
  
  <!-- Modal --> 
  
  <div class="modal fade bg-form-cust text-light" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content shadow-form m-5 bg-dark text-light">
        <div class="modal-header">
          <h1 class="modal-title fs-5 font-modale" id="staticBackdropLabel">{{__('ui.titleModal')}} {{Auth::user()->name}}</h1>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
     

    <div class="container-fluid">
        <div class="row justify-content-center">
    
            <div class="col-12 ">
                <form method="POST" action="{{route('become.revisor')}}" class="p-1  my-1 rounded-4">
                    @csrf 
                    
                    <div class="mb-3">
                      <label for="name" class="form-label">{{__('ui.username')}}</label>
                      <input type="text" disabled name="name" class="form-control @error('name') is-invalid @enderror" value="{{Auth::user()->name}}" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('ui.userEmail')}}</label>
                        <input type="email" disabled name="email" class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}" id="email">
                    </div> 

                    <div class="mb-3">
                        <label for="body" class="form-label">{{__('ui.textQuestion')}}</label>
                        <textarea class="form-control"  name="body" id="body" cols="35" rows="7"></textarea>
                      </div>
                  <div>
                     <button type="submit" class="btn-canvas-cus">{{__('ui.sendApplication')}}</button>
                  </div>
                
                    
                  </form>
            </div>
        </div>
    </div>
    
 
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>