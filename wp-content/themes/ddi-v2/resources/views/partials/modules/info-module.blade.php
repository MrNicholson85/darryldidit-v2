<div class="info-module">
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="info-module__title section-title section-title--tight">{!! $c->title !!}</div>
          <div class="info-module__content section-content">{{$c->content}}</div>
        </div>
      </div>
      <div class="info-module__contact-items">
        <div class="row">
          <div class="col-sm-4">
            <div class="info-module__item">
              <div class="info-module__icon"><i class="fas {{$c->phone_info['icon_select']}}"></i></div>
              <div>
                <div class="info-module__item-title">{{$c->phone_info['call_me']}}</div>
                <div class="info-module__item-content">{{$c->phone_info['phone_number']}}</div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="info-module__item">
              <div class="info-module__icon"><i class="fas {{$c->email_info['icon_select']}}"></i></div>
              <div>
                <div class="info-module__item-title">{{$c->email_info['email_me']}}</div>
                <div class="info-module__item-content">{{$c->email_info['email_address']}}</div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="info-module__item">
              <div class="info-module__icon info-module__icon--thin"><i class="fas {{$c->location_info['icon_select']}}"></i></div>
              <div>
                <div class="info-module__item-title">{{$c->location_info['visit_me']}}</div>
                <div class="info-module__item-content">{{$c->location_info['address']}}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="info-module__form-map">
        <div class="row">
          <div class="col-sm-5">
            {!! $c->contact_form['contact_form'] !!}
          </div>
          <div class="col-sm-7">
            {!! $c->map['map'] !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>