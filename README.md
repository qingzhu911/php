 # 设置cookie/改变cookie

### setcookie('username',$username,time() + 86400 * 30);//cookie第一个参数名字随便起,第二个参数是值,第三个参数是保存的时长
### count($_COOKIE) > 0   判断cookie有多少个
### $users = serialize($users);   将数组压缩成字节流存入cookie
### $users = unserialize($_COOKIE['users']);   解压cookie
