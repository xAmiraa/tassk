@extends('layouts.layout')
@section('content')
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="col-12">
<ul class="list-group  mt-3 ">
@foreach($Data as $item)
  <li class="list-group-item d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 rounded">
    <div class="ms-2 me-auto">
    <span id="id" class="fw-bold">ID: </span>{{$item->productId}}
    <br>
      <span class="fw-bold" id="title">Title : </span>{{$item->title}}
    <br>
      <span class="fw-bold" id="price">Price : </span>{{$item->price}}
      <br>
      <span id="requestTYpe" class="fw-bold">Request type : </span>{{$item->requestTYpe}}
      <br>

      <span id="description" class="fw-bold">Description : </span>{{$item->description}}
    </div>
  </li>
  @endforeach
<div id="newElement"></div>
</ul>

  </div>


 


</div>

<script  type="text/javascript" src="https://cdn.socket.io/socket.io-1.0.1.js"></script>

<script type="text/javascript" >
var socket=io.connect('ws://127.0.0.1:1215',{
    transports:['websocket']
})

</script>
<script type="text/javascript" >
///socket.on('message',function(data){
//console.log('data,'+data);
//document.getElementById("header").innerHTML = `<h1>${data}</h1?` ;
//})
socket.on('message',function(data){
//document.getElementById('newElement').innerHTML=`${data.title}`

  console.log('data is ',data);
  var li = document.createElement("li");
  li.className="list-group-item d-flex justify-content-between align-items-center pt-2 pb-2 mb-3 rounded"
 var div = document.createElement('div');
 div.className = "ms-2 me-auto";
  li.appendChild(div);

  //ID
var idName = document.createElement('span');
idName.className = "fw-bold";
idName.innerHTML=`ID : ${data.id}`
var idvalue = document.createElement('span');
idvalue.innerHTML=` ${data.id}`
div.appendChild(id)

div.appendChild(idvalue)
var br=document.createElement('br');
div.appendChild(br)
//title
var titleName= document.createElement('span');
titleName.className = "fw-bold";
titleName.innerHTML=`Title : `
div.appendChild(titleName)
var titlevalue= document.createElement('span');
titlevalue.innerHTML=`${data.title}`
div.appendChild(titlevalue)
var br=document.createElement('br');
div.appendChild(br)
//price

var priceName= document.createElement('span');
priceName.className = "fw-bold";
priceName.innerHTML=`Price : `
div.appendChild(priceName)
var pricevalue= document.createElement('span');
pricevalue.innerHTML=`${data.price}`
div.appendChild(pricevalue)
var br=document.createElement('br');
div.appendChild(br)


//requestTYpe

var requestTYpeName= document.createElement('span');
requestTYpeName.className = "fw-bold";
requestTYpeName.innerHTML=`Request Type : `
div.appendChild(requestTYpeName)
var requestTYpeValue= document.createElement('span');
requestTYpeValue.innerHTML=`${data.requestTYpe}`
div.appendChild(requestTYpeValue)


//description

var descriptionName= document.createElement('span');
descriptionName.className = "fw-bold";
descriptionName.innerHTML=`Description : `
div.appendChild(descriptionName)
var descriptionValue= document.createElement('span');
descriptionValue.innerHTML=`${data.description}`
div.appendChild(descriptionValue)

document.getElementById('newElement').appendChild(li)

 //var li=document.getElementById("newElement");

  //const span=document.createElement("span");
  //span.className = "fw-bold";
  //span.innerHTML = `ID : `;
  //div.appendChild(`${data[0].id}`);

 //li.appendChild(div);
  //var array = @json($Data);
////  console.log(array,"array");
//  array.push(dataComming);

  //console.log(array,"array after");


})
</script>

@endsection