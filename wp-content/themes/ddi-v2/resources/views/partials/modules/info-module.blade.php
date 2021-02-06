<div class="info-module">
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3>{{$c->title}}</h3>
          {{$c->content}}
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="info_module__item info-module__{{$c->phone_info['icon_select']}}">
            <div class="info_module__item-title">{{$c->phone_info['call_me']}}</div>
            <div class="info_module__item-content">{{$c->phone_info['phone_number']}}</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="info_module__item info-module__{{$c->email_info['icon_select']}}">
            <div class="info_module__item-title">{{$c->email_info['email_me']}}</div>
            <div class="info_module__item-content">{{$c->email_info['email_address']}}</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="info_module__item info-module__{{$c->location_info['icon_select']}}">
            <div class="info_module__item-title">{{$c->location_info['visit_me']}}</div>
            <div class="info_module__item-content">{{$c->location_info['address']}}</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          {!! $c->contact_form['contact_form'] !!}
        </div>
        <div class="col-sm-6">
          
          {!! $c->map['map'] !!}
        </div>
      </div>
    </div>
  </div>
</div>