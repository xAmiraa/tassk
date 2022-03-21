<html>


<head>

<script  type="text/javascript" src="https://cdn.socket.io/socket.io-1.0.1.js"></script>

<script type="text/javascript" >
var socket=io.connect('ws://127.0.0.1:1215',{
    transports:['websocket']

})

</script>


</head>

<body>
<h1>Hello user </h1>
<ul>
@foreach($data as $post)

<li id="id">{{$post->id}}</li>
<li><input id="button" type="button" name="button" 
onClick="sendUser({{$post->id}})" value="Add User"/>
</li>
<li><Button>Request B</Button></li>

<hr>




@endforeach

</ul>

<p id="header"></p>
<script>

function sendUser(id){
//var id=document.getElementById('id').value;
console.log(id);
socket.emit('example',{
    id:id
})
}

</script>

<script type="text/javascript" >
socket.on('welcomeMessage',function(data){
console.log(data);
})
</script>
</body>
</html>