@extends('layouts.app')

@section('content')

<div class="container">

<a href="/itemAdd" class="btn btn-primary">Add Item</a>
<h1>Item List</h1>


<h2>Beef Burger</h2>
@if(count($result) > 0)

@foreach($result as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/edit" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>Chicken Burger</h2>
@if(count($chickenResult) > 0)

@foreach($chickenResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/editChicken" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyChicken', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!}
 --></div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>Club Special Burgers</h2>
@if(count($houseResult) > 0)

@foreach($houseResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/editHouse" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyHouse', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>French Fry</h2>
@if(count($frenchResult) > 0)

@foreach($frenchResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
<!--  <a href="/m1/{{$post->id}}/editFrench" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyFrench', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>Proteine Items</h2>
@if(count($proteineResult) > 0)

@foreach($proteineResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/editProteine" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyProteine', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>Pasta</h2>
@if(count($pastaResult) > 0)

@foreach($pastaResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/editPasta" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyPasta', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>Platters</h2>
@if(count($plattersResult) > 0)

@foreach($plattersResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/editPlatters" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyPlatters', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>Beverage</h2>
@if(count($beverageResult) > 0)

@foreach($beverageResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/editBeverage" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyBeverage', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach

@else
<p>No post......</p>
@endif


<h2>Adds-On</h2>
@if(count($addsResult) > 0)

@foreach($addsResult as $post)

<div class="well">
 <h3>{{$post->food_items}}</h3>
 <p>{{$post->price}}</p>
 <!-- <a href="/m1/{{$post->id}}/editAdds" class="btn btn-default">Edit</a>
 {!! Form::open(['action' => ['c2@destroyAdds', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 	{{Form::hidden('_method','DELETE')}}
 	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
 {!! Form::close() !!} -->
</div>
@endforeach



@else
<p>No post......</p>
@endif


</div>


@endsection






