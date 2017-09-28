            var connect = function (push_title, push_message, push_childID, push_childName, push_childImg, push_create_date, push_diary_content, push_check_title) {
                
                var connectPort = "8081";
                var connectAddress = "japan-okyo.c9users.io";

                connectServer(connectAddress,connectPort);
                
                sendPushMessage(push_title,  push_message, push_childID, push_childName, push_childImg, push_create_date, push_diary_content, push_check_title);
  
            }
            
            
            var connectServer = function (host,port) {
                
                var options = {'forceNew':true};
                var url = 'http://' + host + ':' + port;
                socket = io.connect(url, options);
                
                socket.on('connect', function() {
                	println(url + "에 연결 됨");

                    socket.on('message', function(message) {
                        console.log(JSON.stringify(message));
                        println('<p>수신 메시지 : ' + message.title + ', ' + message.message + '</p>');
                    });

                    socket.on('response', function(response) {
                    	console.log(JSON.stringify(response));
                    	println('메시지를 보냈습니다. : ' + response.command + ', ' + response.code + ', ' + response.message);
                    });
                    
                });

                socket.on('disconnect', function() {
                    println('연결 종료');
                });

                function println(data) {
				console.log(data);
                // alert(data);
			}
                
            }
            
            var sendPushMessage = function (send_title, send_message, send_childID, send_childName, send_childImg, send_create_date, send_diary_content, send_check_title) {
                var push_title = send_title;
                var push_txt = send_message;
                var check_title = send_check_title;
                console.log("타이틀1 : "+check_title);
                var check_diary_content = send_diary_content;
                var check_childID = send_childID;
                var check_childName = send_childName;
                var check_childImg = send_childImg;
                var check_create_date = send_create_date;
                
                
//                var output = {sender:sender, recepient:recepient, command:'chat', type:'text', data:data};
                //var output = {push_title : push_title, push_message : push_txt, check_title : check_title, check_message : check_txt};
                var output = {push_title : push_title, push_txt : push_txt, check_title: check_title, check_diary_content : check_diary_content, check_childID : check_childID, check_childName : check_childName, check_childImg : check_childImg, check_create_date : check_create_date};
                    console.log('서버로 보낼 데이터 : ' + JSON.stringify(output));

                    if (socket == undefined) {
                        alert('서버에 연결되어 있지 않습니다. 먼저 서버에 연결하세요.');
                        return;
                    }

                    socket.emit('message', output);
            }
            