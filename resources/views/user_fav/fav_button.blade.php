@if (Auth::user()) 
    @if (Auth::user()->is_fav($micropost->id))
        {!! Form::open(['route' => ['user.unfav', $micropost->id], 'method' => 'delete' ] ) !!}
            {!! Form::submit('Unfav', ['class' => "btn btn-success  btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.fav', $micropost->id], ] ) !!}
            {!! Form::submit('Fav', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif