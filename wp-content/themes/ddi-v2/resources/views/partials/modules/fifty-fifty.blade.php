<div class="page-section fifty-fifty {{ $c->background_color }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            @if ($c->group_a_image)
                <img src="{{ $c->group_a_image }}" class="img-fluid" alt=""/>
            @elseif($c->group_a_content)               
                {!! $c->group_a_content !!}
            @endif
            </div>
            <div class="col-sm-6">
            @if($c->group_b_image)
                <img src="{{ $c->group_b_image }}" class="img-fluid" alt=""/>
            @elseif($c->group_b_content)
                {!! $c->group_b_content !!}
            @endif
            </div>
        </div>
    </div>
</div>