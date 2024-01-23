

<div class="container-fluid">
    <div class="row justify-content-end">
        <div class="col-4">
            
            <form action="{{route('articles.search')}}" method="GET" class="d-flex" role="search">
                <input name="searched" id="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    
</div>
