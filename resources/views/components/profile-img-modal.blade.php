<div class="modal fade modal-custom" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Inserimento foto profilo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="profile_img" method="POST" enctype="multipart/form-data" action="{{route('profile-img-store')}}">
        @csrf
        <div class="modal-body">
          <input type="file" name="profile_img" id="profile-img">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Inserisci foto</button>
        </div>
      </form>
    </div>
  </div>
</div>