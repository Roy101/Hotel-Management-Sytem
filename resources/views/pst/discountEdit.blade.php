@extends('layouts.app')

@section('content')
<h1>Edit Discount</h1>

    <?php 

        $editDiscount = 0; 
 
        foreach($discount as $data) {
            if ($data->id == 1) {
            $editDiscount = 1;
        }
    }

    ?>
            @if($editDiscount == 1)
            {!! Form::open(['action' => 'c2@discountUpdate', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Edit the Discount here :')}}
            {{Form::text('title', $data->discount, ['class' => 'form-control', 'placeholder' => 'Write the Discount.'])}}
        </div>

            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}    
            {!! Form::close() !!}
            @endif
@endsection