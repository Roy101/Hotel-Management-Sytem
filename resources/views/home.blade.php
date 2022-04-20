@extends('layouts.app')

@section('content')

<div align="right"><a href="/input" class="btn btn-primary">Item List</a></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- <div class="panel panel-default"> -->
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    </div>




                    <h1 align="center">Welcome !</h1>

                    <h4 align="center">You are logged in !</h4>

                    
                    <h2 align="center">If you want to take order from customers, click the button bellow.</h2>

           <div align="center"><a href="/m1" class="btn btn-primary">Order</a></div> 


<?php

use App\tokentotal;
$token6 = tokentotal::all();
$token14 = 0;

        foreach ($token6 as $data) {
            if ($data->id == 1) {
                $token14 = $data->total_sell;
            }
        }


?>

<h1 align="center">Till now the total sale is {{$token14}} .</h1>  

<h2 align="center">The total sale can be updated by pressing the button given bellow :</h2>

<div align="center"><a href="/totalEdit" class="btn btn-primary">Edit Total Sale</a></div>    


                
           <!--  </div> -->
        </div>
    </div>
</div>
@endsection
