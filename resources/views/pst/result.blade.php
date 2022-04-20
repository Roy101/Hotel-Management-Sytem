<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title>
 -->  <title>BuegerClubRangpur</title>





<style>



body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  padding: 10px;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 8cm;
  
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}




/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

</style>




    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body> 



<?php
	$price = 0;
  $totalPrice = 0;
  $beverageprice = 0;
  $addsprice = 0;
  $totalSell = 0;
  $totalSell2 = 0;
  $dscnt = 0;
?>

<div class="container">

<page size="A4">
  

  <h1>Orders</h1>

  <!-- <table class="table table-hover table-responsive table-bordered"> -->
  <table>
  <tr>
  


<!-- 
    <div class="media-left">Items</div>
    <div class="media" align="center">Quality</div>
    <div class="media-right">Price</div> -->
    
    <th colspan="2"><div style="padding:0px 29px 0px 29px">Items</div></th>
    <th><div style="padding:0px 20px 0px 29px" align="center">Quality</div>  </th>
    <th><div style="padding:0px 20px 0px 20px">Price</div></th> 
    <!-- <th>Number of Item</th>
    <th>Total Price of an item</th> -->
    
    <!-- <th>Adds-On</th>
    <th>Adds-On Price</th> -->


    
  </tr>
  
    
 

@foreach($result as $data)
@if($data->number > 0)
<tr>
<td><div style="padding:0px 20px 0px 20px">{{$data->number}}</div></td>
<td><div>{{$data->food_items}}</div></td>
<td><div align="center">{{$data->quality}}</div></td>
<td><div align="center">{{$data->total}}</div></td>
</tr>

@if($data->adds_price != 0)
<tr>
<td><div style="padding-right:20px"></div></td>
<td><div>{{$data->adds}}</div></td>
<td><div align="center"></div></td>
<td><div align="center">{{$data->adds_price}}</div></td>
</tr>
@endif

@if($data->parcel == 'Yes')
 <tr><td colspan="2">It's Parcel</td></tr>
@endif

<tr><td colspan="4">------------------------------------------------------------</td></tr>

<!-- <tr>
  <td >{{$data->food_items}}</td>
  <td>{{$data->price}}</td>
  <td>{{$data->number}}</td>
  <td>{{$data->total}}</td>
  <td>{{$data->quality}}</td>
  <td>{{$data->adds}}</td>
  <td>{{$data->adds_price}}</td>
</tr> -->

<?php
	$price = $price + $data->total;
  $addsprice = $addsprice + $data->adds_price;
?>

@endif
@endforeach





@foreach($token as $data)
<h4 align="center"> Token No : {{$data->token}}</h4>
@endforeach


</table>

<?php
$totalPrice = $price + $addsprice;
?>


<h2>Total Price = {{$totalPrice}}/-</h2>

<?php


foreach ($token as $data) {
            if ($data->id == 1) {
                $totalSell = $data->total_sell;
                $dscnt = $data->discount;
            }
        }

        $payment = $price - ($price*($dscnt/100)) + $addsprice;

        
  $totalSell2 = $totalSell + $payment;
  DB::table('tokentotals')
            ->where('id',1)
            ->update(['total_sell' => $totalSell2]);

?>

<h1>Discount = {{$dscnt}}%</h1>

<h2>Payment = {{$payment}}/-</h2>


<button onclick="print()" class="btn btn-primary">Print</button>

<a href="/kichen" class="btn btn-primary"/>Order</a>



</page>
</div>

 <script>





// function myFunction() {
//     window.print();
// }
 </script>




</body>
</html>


