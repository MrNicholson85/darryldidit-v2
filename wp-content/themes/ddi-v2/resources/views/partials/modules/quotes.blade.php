<div class="page-section quotes">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="quotes__list">
          @forelse($quotes as $q)
              <li class="quotes__items">
                <div class="quotes__item-message">{{$q->message}}</div>
                <span class="quotes__item-quoter">- {{$q->quoter}} -</span>
              </li>
            @empty
              <li class="alert alert-danger">No Images</li>
            @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>