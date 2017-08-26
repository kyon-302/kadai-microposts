@extends('layouts.app')

@section('content')
     <div class="text-center">
         <h1>Sign up</h1>
     </div>
     
     <div class="row">
         <div class="col-md-6 col-md-offset-3">
             
             {!! form::open(['route'=>'signup.post']) !!}
                <div class=form-group>
                     {!! form::label('name','Name')!!}
                     {!! form::text('name',old('name'),['class=>'form-control']) !!}
                </div>
                
                <div class=form-group>
                     {!! form::label('email','Email')!!}
                     {!! form::text('email',old('email'),['class=>'form-control']) !!}
                </div>
                
                <div class=form-group>
                     {!! form::label('password','Password')!!}
                     {!! form::text('password',['class=>'form-control']) !!}
                </div>
                
                <div class=form-group>
                     {!! form::label('password_confirmation','Confirmation')!!}
                     {!! form::text('password_confirmation',['class=>'form-control']) !!}
                </div>
                
                {!! form::submit('Sign up',['class'=>'btn btn-primary btn-block'] !!}
             {!! form::close() !!}
         </div>
     </div>
    
@endsection