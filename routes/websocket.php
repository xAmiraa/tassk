<?php


use Illuminate\Http\Request;
use SwooleTW\Http\Websocket\Facades\Websocket;
use App\Models\Product;
use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| Websocket Routes
|--------------------------------------------------------------------------
|
| Here is where you can register websocket events for your application.
|
*/

Websocket::on('connect', function ($websocket, Request $request) {
    echo "New User connected";
    $websocket->emit('welcomeMessage',"WElcome we are connected");
});

Websocket::on('disconnect', function ($websocket) {
    // called while socket on disconnect
});

Websocket::on('sendProduct', function ($websocket, $data) {
   
   $user=Product::find($data['id']);
   $user->requestTYpe=$data['requestType'];
   $user->save();
   Admin::create([ 
'productId'=>$user->id,
'title'=>$user->title,
'price'=>$user->price,
'description'=>$user->description,
'category'=>$user->category,
'image'=>$user->image,
'requestTYpe'=>$user->requestTYpe,
   ]);
    var_dump($user);
    $allDatafromAdmin=Admin::all();
    Websocket::broadcast()->emit('message',$user);

    //Websocket::on('test', 'ExampleController@method');
    $websocket->emit('message', $user);
});
