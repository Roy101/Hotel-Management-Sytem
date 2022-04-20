@extends('layouts.app')

@section('content') 



<div class="container">
<div align="center">
<a href="/beefInput" class="btn btn-default">Beef Burger</a>
<a href="/chickenInput" class="btn btn-default">Chicken Burger</a>
<a href="/houseInput" class="btn btn-default">Club Special Burgers</a>
<a href="/frenchInput" class="btn btn-default">French Fries</a>
<a href="/pastaInput" class="btn btn-default">Pasta</a>
<a href="/proteineInput" class="btn btn-default">Proteine Items</a>
<a href="/plattersInput" class="btn btn-default">Platters</a>
<a href="/beverageInput" class="btn btn-default">Beverage</a>
<a href="/addsInput" class="btn btn-default">Adds-On</a>
</div>


<br>
<br>





<div class="container">
<div class="media" align="center">
  <div class="media-left">
    <!-- <div class="thumbnail"> -->

      <table class="table table-hover table-responsive table-bordered">
  

<?php

use App\showing;
$show = showing::all();
?>


        @foreach($show as $data) 
          @if($data->number>0)
            <tr>
                <td >{{$data->food_items}}</td>
                <!-- <td>{{$data->price}}</td> -->
                <td>{{$data->number}}</td>
                <!-- <td>{{$data->total}}</td> -->
                <td>{{$data->quality}}</td>
                <td>{{$data->adds}}</td>
                <td>{{$data->parcel}}</td>
            </tr>
          @endif
        @endforeach
        




</table>
    
   
     
          
          <!-- </div> -->
  </div>

  <div class="media-right">
   <!--  <div class="thumbnail"> -->

      <div align="center">
  <a href="/discountEdit" class="btn btn-primary">Edit Discount</a><br><br><br>
<a href="/submit" class="btn btn-primary">Submit</a>

<?php

use App\tokentotal;
$token5 = tokentotal::all();
$token11 = 0;
$token12 = 0;
        foreach ($token5 as $data) {
            if ($data->id == 1) {
                $token11 = $data->token;
            }
        }

$token12 = $token11 + 1;


?>




<h1>The token for the next order is {{$token12}}+ .</h1>
<h2>The token can be updated by pressing the button given bellow :</h2>

<a href="/tokenEdit" class="btn btn-primary">Edit Token</a>

</div>
    
   
          
          <!-- </div> -->
  </div>
</div> 
</div>






<br>
<br>


</div>

@endsection 




