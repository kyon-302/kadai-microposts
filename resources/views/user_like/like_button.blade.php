
@if (Auth::user()->is_liking($micropost->id))
    {!! Form::open(['route' => ['user.unlike', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unlike', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.like', $user->id]]) !!}
        {!! Form::submit('Like', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif
