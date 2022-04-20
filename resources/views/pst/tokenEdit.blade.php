@extends('layouts.app')

@section('content')
<h1>Edit Token</h1>

    <?php 

        $editToken = 0; 
 
        foreach($tokens as $data) {
            if ($data->id == 1) {
            $editToken = 1;
        }
    }

    ?>
            @if($editToken == 1)
            {!! Form::open(['action' => 'c2@tokenUpdate', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Edit the Token here :')}}
            {{Form::text('title', $data->token, ['class' => 'form-control', 'placeholder' => 'Write the name of the food item.'])}}
        </div>

            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}    
            {!! Form::close() !!}
            @endif
@endsection