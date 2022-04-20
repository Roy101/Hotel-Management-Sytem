<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m1;
use App\chicken;
use App\house;
use App\french;
use App\proteine;
use App\pasta;
use App\platters;
use App\beverage;
use App\adds;
use App\tokentotal;
use App\showing;
use DB;
use Auth;

class c2 extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();
        // if($user->id != 1)
        //     return 


         return view('pst.ind');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pst.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'//,
            // 'category' => 'required'
        ]);

        $post = new m1;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        // $post->discount = $request->input('category');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "";
        // $post->adds = "";
        // $post->parcel = "";
        // $post->adds_price = 0;
        $post->save();

        return 'Item Added';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = m1::find($id);
        return view('pst.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = m1::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = m1::find($id);
        $post->delete();

        return 'Post deleted';
    }


    public function beef(Request $req)
    {

         DB::table('m1s')
            ->update(['total' => 0]);

        DB::table('m1s')
            ->update(['quality' => ""]);

        DB::table('m1s')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $quality1 = $req->quality[$key];
            $add1 = $req->add[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = m1::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            $add = adds::all();

            $adds_price1 = 0;

            foreach ($add as $data) {
            if ($data->food_items == $add1) {
                $adds_price1 = $data->price;
            }
        }

            


            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['quality' => $quality1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['adds' => $add1]); 

            DB::table('showings')
                ->where('id',$showid)
                ->update(['adds_price' => $adds_price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]); 

                   

                   

               }

        };
        return view('pst.ind');

    }






    public function chicken(Request $req)
    {


        DB::table('chickens')
            ->update(['total' => 0]);

        DB::table('chickens')
            ->update(['quality' => ""]);

        DB::table('chickens')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $quality1 = $req->quality[$key];
            $add1 = $req->add[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = chicken::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            $add = adds::all();

            $adds_price1 = 0;

            foreach ($add as $data) {
            if ($data->food_items == $add1) {
                $adds_price1 = $data->price;
            }
        }

            


            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['quality' => $quality1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['adds' => $add1]); 

            DB::table('showings')
                ->where('id',$showid)
                ->update(['adds_price' => $adds_price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]);
               }

        };
        return view('pst.ind');

         
        
    }









public function house(Request $req)
    {


        DB::table('houses')
            ->update(['total' => 0]);

        DB::table('houses')
            ->update(['quality' => "NULL"]);

        DB::table('houses')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = house::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            

            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]);
               }

        };
        return view('pst.ind');

         
        
    }


    public function french(Request $req)
    {


        DB::table('frenches')
            ->update(['total' => 0]);

        DB::table('frenches')
            ->update(['quality' => 'NULL']);

        DB::table('frenches')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = french::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            

            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]);
               }

        };
        return view('pst.ind');

         
        
    }


    public function proteine(Request $req)
    {


        DB::table('proteines')
            ->update(['total' => 0]);

        DB::table('proteines')
            ->update(['quality' => "NULL"]);

        DB::table('proteines')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = proteine::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            

            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]);
               }

        };
        return view('pst.ind');

         
        
    }


    public function pasta(Request $req)
    {


        DB::table('pastas')
            ->update(['total' => 0]);

        DB::table('pastas')
            ->update(['quality' => "NULL"]);

        DB::table('pastas')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = pasta::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            

            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]);
               }

        };
        return view('pst.ind');

         
        
    }


    public function platters(Request $req)
    {


        DB::table('platters')
            ->update(['total' => 0]);

        DB::table('platters')
            ->update(['quality' => "NULL"]);

        DB::table('platters')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = platters::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            

            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]);
               }

        };
        return view('pst.ind');

         
        
    }


    public function beverage(Request $req)
    {


        DB::table('beverages')
            ->update(['total' => 0]);

        DB::table('beverages')
            ->update(['quality' => "NULL"]);

        DB::table('beverages')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $parcel1 = $req->parcel[$key];
            

            $beef = beverage::all();


            foreach ($beef as $data) {
            if ($data->id == $food1) {
                $foodItem1 = $data->food_items;
            }
        }

            

            $showtbl = showing::all();
            $showid = 0;
        foreach ($showtbl as $data) {
            if ($data->number == 0) {
                $showid = $data->id;
                break;
            }
        }



            
        if($piece1 != null){

             DB::table('showings')
                 ->where('id',$showid)
                 ->update(['food_items' => $foodItem1]);

            DB::table('showings')
                ->where('id',$showid)
                ->update(['price' => $price1]);    

            DB::table('showings')
                ->where('id',$showid)
                ->update(['total' => $price1*$piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['number' => $piece1]);

            
            DB::table('showings')
                ->where('id',$showid)
                ->update(['parcel' => $parcel1]);
               }

        };
        return view('pst.ind');

         
        
    }


    public function adds(Request $req)
    {


        DB::table('adds')
            ->update(['total' => 0]);

        DB::table('adds')
            ->update(['quality' => "NULL"]);

        DB::table('adds')
            ->update(['number' => 0]);

        foreach ($req->food as $key=>$value) {
            
            $food1 = $req->food[$key];
            $price1 = $req->price[$key];
            $piece1 = $req->piece[$key];
            $quality1 = $req->quality[$key];

            
        if($piece1 != null){
            DB::table('adds')
                ->where('id',$food1)
                ->update(['total' => $price1*$piece1]);

            // DB::table('adds')
            //     ->where('id',$food1)
            //     ->update(['quality' => $quality1]);

            DB::table('adds')
                ->where('id',$food1)
                ->update(['number' => $piece1]);
               }

        };
        return view('pst.ind');

         
        
    }












    public function input()
    {
        $result = m1::all();
        $chickenResult = chicken::all();
        $houseResult = house::all();
        $frenchResult = french::all();
        $proteineResult = proteine::all();
        $pastaResult = pasta::all();
        $plattersResult = platters::all();
        $beverageResult = beverage::all();
        $addsResult = adds::all();


        
        return view('pst.action')->with('result', $result)
                                 ->with('chickenResult', $chickenResult)
                                 ->with('houseResult', $houseResult)
                                 ->with('frenchResult', $frenchResult)
                                 ->with('proteineResult', $proteineResult)
                                 ->with('pastaResult', $pastaResult)
                                 ->with('plattersResult', $plattersResult)
                                 ->with('beverageResult', $beverageResult)
                                 ->with('addsResult', $addsResult);
    }







    public function beefInput()
    {
        $datas = m1::all();
        $adds = adds::all();

        return view('order.beefInput')->with('data', $datas)
                                      ->with('adds', $adds);
    }

    
    public function chickenInput()
    {
        $datas = chicken::all();
        $adds = adds::all();
        return view('order.chickenInput')->with('data', $datas)
                                         ->with('adds', $adds);
    }








    public function houseInput()
    {
        $datas = house::all();
        return view('order.houseInput')->with('data', $datas);
    }

    public function frenchInput()
    {
        $datas = french::all();
        return view('order.frenchInput')->with('data', $datas);
    }

    public function proteineInput()
    {
        $datas = proteine::all();
        return view('order.proteineInput')->with('data', $datas);
    }

    public function pastaInput()
    {
        $datas = pasta::all();
        return view('order.pastaInput')->with('data', $datas);
    }

    public function plattersInput()
    {
        $datas = platters::all();
        return view('order.plattersInput')->with('data', $datas);
    }

    public function beverageInput()
    {
        $datas = beverage::all();
        return view('order.beverageInput')->with('data', $datas);
    }

    public function addsInput()
    {
        $datas = adds::all();
        return view('order.addsInput')->with('data', $datas);
    }





public function kichen()
    {
    


        $result = m1::all();
        $chickenResult = chicken::all();
        $houseResult = house::all();
        $frenchResult = french::all();
        $proteineResult = proteine::all();
        $pastaResult = pasta::all();
        $plattersResult = platters::all();
        $beverageResult = beverage::all();
        $addsResult = adds::all();


        $token = tokentotal::all();
        return view('pst.kichen')->with('result', $result)
                                 ->with('chickenResult', $chickenResult)
                                 ->with('houseResult', $houseResult)
                                 ->with('frenchResult', $frenchResult)
                                 ->with('proteineResult', $proteineResult)
                                 ->with('pastaResult', $pastaResult)
                                 ->with('plattersResult', $plattersResult)
                                 ->with('beverageResult', $beverageResult)
                                 ->with('addsResult', $addsResult)
                                 ->with('token', $token);
    }







    public function submit()
    {
        $token1 = tokentotal::all();
        $test = 0;
        foreach ($token1 as $data) {
            if ($data->id == 1) {
                $test = $data->token;
            }
        }

        DB::table('tokentotals')
            ->where('id',1)
            ->update(['token' => ($test % 200) + 1]);


        // $result = m1::all();
        // $chickenResult = chicken::all();
        // $houseResult = house::all();
        // $frenchResult = french::all();
        // $proteineResult = proteine::all();
        // $pastaResult = pasta::all();
        // $plattersResult = platters::all();
        // $beverageResult = beverage::all();
        // $addsResult = adds::all();


        // $token = tokentotal::all();
        // return view('pst.result')->with('result', $result)
        //                          ->with('chickenResult', $chickenResult)
        //                          ->with('houseResult', $houseResult)
        //                          ->with('frenchResult', $frenchResult)
        //                          ->with('proteineResult', $proteineResult)
        //                          ->with('pastaResult', $pastaResult)
        //                          ->with('plattersResult', $plattersResult)
        //                          ->with('beverageResult', $beverageResult)
        //                          ->with('addsResult', $addsResult)
        //                          ->with('token', $token);


            $result = showing::all();
            $token = tokentotal::all();
            return view('pst.result')->with('result', $result)
                                     ->with('token', $token);


    }


    public function reset()
    {
        DB::table('showings')
            ->update(['food_items' => ""]);

        DB::table('showings')
            ->update(['price' => 0]);    

        DB::table('showings')
            ->update(['total' => 0]);

        DB::table('showings')
            ->update(['quality' => ""]);

        DB::table('showings')
            ->update(['number' => 0]);

        DB::table('showings')
            ->update(['adds' => ""]);

        DB::table('showings')
            ->update(['parcel' => ""]);   

        DB::table('showings')
            ->update(['adds_price' => 0]);           







        DB::table('m1s')
            ->update(['total' => 0]);

        DB::table('m1s')
            ->update(['quality' => ""]);

        DB::table('m1s')
            ->update(['number' => 0]);


        DB::table('chickens')
            ->update(['total' => 0]);

        DB::table('chickens')
            ->update(['quality' => ""]);

        DB::table('chickens')
            ->update(['number' => 0]);





            DB::table('houses')
            ->update(['total' => 0]);

        DB::table('houses')
            ->update(['quality' => "NULL"]);

        DB::table('houses')
            ->update(['number' => 0]);


            DB::table('frenches')
            ->update(['total' => 0]);

        DB::table('frenches')
            ->update(['quality' => "NULL"]);

        DB::table('frenches')
            ->update(['number' => 0]);


            DB::table('proteines')
            ->update(['total' => 0]);

        DB::table('proteines')
            ->update(['quality' => "NULL"]);

        DB::table('proteines')
            ->update(['number' => 0]);


            DB::table('pastas')
            ->update(['total' => 0]);

        DB::table('pastas')
            ->update(['quality' => "NULL"]);

        DB::table('pastas')
            ->update(['number' => 0]);


            DB::table('platters')
            ->update(['total' => 0]);

        DB::table('platters')
            ->update(['quality' => "NULL"]);

        DB::table('platters')
            ->update(['number' => 0]);


            DB::table('beverages')
            ->update(['total' => 0]);

        DB::table('beverages')
            ->update(['quality' => "NULL"]);

        DB::table('beverages')
            ->update(['number' => 0]);


            DB::table('adds')
            ->update(['total' => 0]);

        DB::table('adds')
            ->update(['quality' => "NULL"]);

        DB::table('adds')
            ->update(['number' => 0]);




        return view('pst.ind');
    }

    public function reset2()
    {
        return view('pst.rs');
    }


    public function tokenEdit()
    {
        $tokens = tokentotal::all();
        return view('pst.tokenEdit')->with('tokens', $tokens);
    }


    public function tokenUpdate(Request $request)
    {
        $tkn = $request->input('title') - 1;

        
        DB::table('tokentotals')
                ->where('id',1)
                ->update(['token' => $tkn]);

        return '<h1 align="center">Token has been updated</h1>';
    }


    public function discountEdit()
    {
        $discount = tokentotal::all();
        return view('pst.discountEdit')->with('discount', $discount);
    }


    public function discountUpdate(Request $request)
    {
        $dscnt = $request->input('title');;
        
        DB::table('tokentotals')
                ->where('id',1)
                ->update(['discount' => $dscnt]);

        return '<h1 align="center">Discount has been updated</h1>';
    }


    public function totalEdit()
    {
        $total = tokentotal::all();
        return view('pst.totalEdit')->with('total', $total);
    }


    public function totalUpdate(Request $request)
    {   
        $ttl = $request->input('title');;
        
        DB::table('tokentotals')
                ->where('id',1)
                ->update(['total_sell' => $ttl]);

        return '<h1 align="center">Total sale has been updated</h1>';
        

    }


    public function createChicken()
    {
        return view('crt.createChicken');
    }

    public function storeChicken(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new chicken;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "";
        $post->save();

        return 'Item Added';
    }

     
    
    public function createHouse()
    {
        return view('crt.createHouse');
    }
 

    public function storeHouse(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new house;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "NULL";
        $post->save();

        return 'Item Added';
    }

  
    public function createFrench()
    {
        return view('crt.createFrench');
    }

       

    public function storeFrench(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new french;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "NULL";
        $post->save();

        return 'Item Added';
    }

    public function createProteine()
    {
        return view('crt.createProteine');
    }


    public function storeProteine(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new proteine;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "NULL";
        $post->save();

        return 'Item Added';
    }

  
    public function createPasta()
    {
        return view('crt.createPasta');
    }


    public function storePasta(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new pasta;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "NULL";
        $post->save();

        return 'Item Added';
    }


    public function createPlatters()
    {
        return view('crt.createPlatters');
    }


    public function storePlatters(Request $request)  
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new platters;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "NULL";
        $post->save();

        return 'Item Added';
    }

 
    public function createBeverage()
    {
        return view('crt.createBeverage');
    }


    public function storeBeverage(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);

        $post = new beverage;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->category = $request->input('category');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "NULL";
        $post->save();

        return 'Item Added';
    }


    public function createAdds()
    {
        return view('crt.createAdds');
    }


    public function storeAdds(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new adds;
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->number = 0;
        $post->total = 0;
        $post->quality = "NULL";
        $post->save();

        return 'Item Added';
    }
    

    public function itemAdd()
    {
        return view('pst.itemAdd');
    }



    public function editChicken($id)
    {
        $post = chicken::find($id);
        return view('pst.editchicken')->with('post', $post);
    } 


    public function editHouse($id)
    {
        $post = house::find($id);
        return view('pst.edithouse')->with('post', $post);
    }


    public function editFrench($id)
    {
        $post = french::find($id);
        return view('pst.editfrench')->with('post', $post);
    }


    public function editProteine($id)
    {
        $post = proteine::find($id);
        return view('pst.editproteine')->with('post', $post);
    }


    public function editPasta($id)
    {
        $post = pasta::find($id);
        return view('pst.editpasta')->with('post', $post);
    }


    public function editPlatters($id)
    {
        $post = platters::find($id);
        return view('pst.editplatters')->with('post', $post);
    }


    public function editBeverage($id)
    {
        $post = beverage::find($id);
        return view('pst.editbeverage')->with('post', $post);
    }


    public function editAdds($id)
    {
        $post = adds::find($id);
        return view('pst.editadds')->with('post', $post);
    }

    

    public function updateAdds(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = adds::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    public function updateBeverage(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);

        $post = beverage::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->category = $request->input('category');
        $post->save();

        return 'Item updated';
    }

    public function updatePlatters(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = platters::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    public function updatePasta(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = pasta::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    public function updateProteine(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = proteine::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    public function updateFrench(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = french::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    public function updateHouse(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = house::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    public function updateChicken(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = chicken::find($id);
        $post->food_items = $request->input('title');
        $post->price = $request->input('body');
        $post->save();

        return 'Item updated';
    }

    public function destroyChicken($id)
    {
        $post = chicken::find($id);
        $post->delete();

        return 'Item deleted';
    }

    public function destroyHouse($id)
    {
        $post = house::find($id);
        $post->delete();

        return 'Item deleted';
    }

    public function destroyFrench($id)
    {
        $post = french::find($id);
        $post->delete();

        return 'Item deleted';
    }

    public function destroyProteine($id)
    {
        $post = proteine::find($id);
        $post->delete();

        return 'Item deleted';
    }

    public function destroyPasta($id)
    {
        $post = pasta::find($id);  
        $post->delete();

        return 'Item deleted';
    }

    public function destroyPlatters($id)
    {
        $post = platters::find($id);
        $post->delete();

        return 'Item deleted';
    }

    public function destroyBeverage($id)
    {
        $post = beverage::find($id);   
        $post->delete();

        return 'Item deleted';
    }

    public function destroyAdds($id)
    {
        $post = adds::find($id);
        $post->delete();

        return 'Item deleted';
    }

    



}
