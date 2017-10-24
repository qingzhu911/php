var http = require("http");
var fs = require("fs");

var server = http.createServer(function(request,response){
	// console.log(request.url);
	/*
		text/plain    返回纯文本
		text/html    返回的是html
		application/json    返回的是html
		
	*/
	response.writeHead(200,{"Content-type":"text/html"});
	// response.writeHead(200,{"Content-type":"text/plain"});//返回json格式
	// response.writeHead(200,{"Content-type":"application/json"});//json特有格式
	//创建读取html
	var myReadStream = fs.createReadStream(__dirname + "/index.html","utf8");
	
	// var myReadStream = fs.createReadStream(__dirname + "/users.json","utf8");
	//谁请求,返回给谁
	myReadStream.pipe(response);

	//将对象以json格式返回:
	// var users = {
	// 	name:"heny",
	// 	age:30,
	// 	gender:"male"
	// }
	// response.end(JSON.stringify(users));
});
server.listen(3000,"127.0.0.1");
console.log("server is running...");