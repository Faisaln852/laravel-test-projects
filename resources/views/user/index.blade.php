@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                {!! Form::open(['route' => 'user.store','method'=>'post']) !!}
                <div class="form-control">
                    {!! form::label('name', 'Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'enter name']) !!}
                    @if ($errors->has('name'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('name') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                <div class="form-control">
                    {!! Form::label('email', 'Email') !!}
                    {!! form::email('email',null,['class'=>'form-control','placeholder' => 'enter email']) !!}
                    @if ($errors->has('email'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('email') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                <div class="form-control">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password',['class'=>'form-control','placeholder' => 'enter password']) !!}
                    @if ($errors->has('password'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('password') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                <div class="form-control">
                    {!! Form::label( 'Confirm Password') !!}
                    {!! form::password('confirm-password',['class'=>'form-control','placeholder' => 'enter password']) !!}
                    @if ($errors->has('confirm-password'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('confirm-password') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                {!! Form::submit('submit',['class'=>'btn btn-success']) !!}

                {!! form::close() !!}

            </div>
        </div>

    </div>
@endsection






