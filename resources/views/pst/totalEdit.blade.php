@extends('layouts.app')

@section('content')
<h1>Editing Total sale</h1>
    <?php 

        $editTotal = 0; 
 
        foreach($total as $data) {
            if ($data->id == 1) {
            $editTotal = 1;
        }
    }

    ?>
            @if($editTotal == 1)
            {!! Form::open(['action' => 'c2@totalUpdate', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Edit the Total sale here :')}}
            {{Form::text('title', $data->total_sell, ['class' => 'form-control', 'placeholder' => 'Write the name of the food item.'])}}
        </div>

            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}    
            {!! Form::close() !!}
            @endif
@endsection