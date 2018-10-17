<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
            @foreach($breadcrumbs as $brKey=> $br)
                @if( floatval($brKey+1) < count($breadcrumbs) )
                    <li><a href="{{ $br['route'] }}"> {{ $br['title'] }}</a></li>
                @else
                    <li> {{ $br['title'] }} </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>