@extends('layouts.app')

@section('content') 
<div class="container">
<h1>Order input for Proteine Items</h1>





<form  method="POST" action='{{action("c2@proteine")}}'  >
    <!--send controller hiden data -->
    {{csrf_field()}}
    <input type="hidden"  name="_token" value="{{ csrf_token() }}">

  <table class="table table-hover table-responsive table-bordered">
  <tr>
    
    <th>Food Items</th>
    <th>price</th> 
    <th>Number of Item</th>
    <th>Parcel</th>
    <!-- <th>Quality</th> -->
    
  </tr>
  
    <tbody>
 

@foreach($data as $data)
<tr>
  <td >{{$data->food_items}}</td>
  <?php $id = 'food'.$data->id; 
     $price ="price".$data->id;
     $piece = "piece".$data->id;
     $quality = "quality".$data->id;
   ?>
  <input type="hidden" name="food[]" value="{{$data->id}}"/>
  <td>{{$data->price}} </td>
   <input type="hidden" name="price[]" value="{{$data->price}}" />
  <td><input type="text" name="piece[]"/></td>
  <td><select  name="parcel[]">
    <option value="No" >No</option>
   <option value="Yes" >Yes</option>
  </select></td>
</tr>
@endforeach

</tbody>
</table>

<input type="submit"  class="btn btn-primary"/>
</form>

@endsection 






