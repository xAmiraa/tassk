@extends('layouts.layout')
@section('content')
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($Data as $item)
<div class="col">
    <div class="card">
      <img src="{{$item->image}}" class="card-img-top dim" alt="image">
      <div class="card-body">
        <h5 class="card-title">{{$item->title}}</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button class="btn btn-success" onClick="sendUser({{$item->id}},'Add To Card')">Add To Cart</button>
        <button  class="btn btn-secondary text-end" onClick="sendUser({{$item->id}},'Add To Wish List')">Add To Wish List</button>
      </div>
    </div>
  </div>
@endforeach

 


</div>
<script>

function sendUser(id,requestTYpe){
//var id=document.getElementById('id').value;
console.log(id,requestTYpe);
socket.emit('sendProduct',{
    id:id,
    requestType:requestTYpe
})
}

</script>
@endsection
