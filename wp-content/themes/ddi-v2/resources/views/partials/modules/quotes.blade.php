<div class="page-section quotes">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="quote__list">
          @forelse($quotes as $q)
              <li class="quout_items">
                <div class="card-block">
                  <h4 class="card-title text-center">{{$q->message}}</h4>
                  <h4 class="card-title text-center">{{$q->quoter}}</h4>
                </div>
              </li>
            @empty
              <li class="alert alert-danger">No Images</li>
            @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>