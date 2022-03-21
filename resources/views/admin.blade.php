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
<p id="header"></p>




<script type="text/javascript" >
///socket.on('message',function(data){
//console.log('data,'+data);
//document.getElementById("header").innerHTML = `<h1>${data}</h1?` ;
//})
socket.on('message',function(data){
console.log(data);
document.getElementById("header").innerHTML = `<h1>${data}</h1?` ;
})
</script>
<script type="text/javascript" >
socket.on('welcomeMessage',function(data){
console.log(data);
for (let index = 0; index < array.data; index++) {
    const element = array[index];
console.log(element);
    
}
})
</script>
</body>
</html>