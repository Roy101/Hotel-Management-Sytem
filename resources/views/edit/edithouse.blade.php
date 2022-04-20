@extends('layouts.app')

@section('content')
<h1>Edit House</h1>
{!! Form::open(['action' => ['c2@updateHouse', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Food Item')}}
            {{Form::text('title', $post->food_items, ['class' => 'form-control', 'placeholder' => 'Write the name of the food item.'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Price')}}
            {{Form::text('body', $post->price, ['class' => 'form-control', 'placeholder' => 'Write the price of the food item.'])}}
        </div>
         {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}    
{!! Form::close() !!}
@endsection













