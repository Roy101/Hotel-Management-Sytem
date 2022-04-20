@extends('layouts.app')

@section('content') 

<div class="container">
<h1>Orders</h1>
<?php
	$price = 0;
  $chickenprice = 0;
  $houseprice = 0;
  $frenchprice = 0;
  $proteineprice = 0;
  $pastaprice = 0;
  $plattersprice = 0;
  $beverageprice = 0;
  $addsprice = 0;
  $totalSell = 0;
  $totalSell2 = 0;
  $dscnt = 0;
?>



  <table class="table table-hover table-responsive table-bordered">
  <tr>
    
    <th>Food Items</th>
    <th>Quality</th>
    <th>Number of Item</th>
    

    
  </tr>
  
    <tbody>
 

@foreach($result as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($chickenResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($houseResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($frenchResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($proteineResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($pastaResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($plattersResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($beverageResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($addsResult as $data)
@if($data->number != 0)
<tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->number}}</td>
</tr>



@endif
@endforeach



@foreach($token as $data)
<h4 align="center"> Token No : {{$data->token}}</h4>
@endforeach

</tbody>
</table>








<button onclick="myFunction()" class="btn btn-primary">Print</button>

<script>
function myFunction() {
    window.print();
}
</script>




<a href="/resetData" class="btn btn-primary"/>Reset</a>

</div>


@endsection