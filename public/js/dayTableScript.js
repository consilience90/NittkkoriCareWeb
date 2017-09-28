/*jslint white: true, browser: true, undef: true, nomen: true, eqeqeq: true, plusplus: false, bitwise: true, regexp: true, strict: true, newcap: true, immed: true, maxerr: 14 */
/*global window: false, REDIPS: true */

/* enable strict mode */
"use strict";

// create redips container
var redips = {};


// redips initialization
redips.init = function () {
	var num = 0,			// number of successfully placed elements
		rd = REDIPS.drag;	// reference to the REDIPS.drag lib
	// initialization
	rd.init();
	// define "green" class name as exception for green cells
	rd.mark.exceptionClass.month = 'month_cell';
	// define "orange" class name as exception for orange cells
	rd.mark.exceptionClass.week = 'week_cell';
	// set hover color
	rd.hover.colorTd = 'pink';
	// call initially showContent
	redips.showContent();
	// on each drop refresh content
	
	
	
	
	
	
	// --------------------드랍이벤트 시작되는 부분------------------------------------------------------------------------
	rd.event.dropped = function (targetCell) {
	var target = targetCell.childNodes; 
	var loadTarget = target[2].innerText; // 컨텐츠 이름
	
		target = target[1];  // 삭제시킬 노드

	console.log(loadTarget);

	
	var parent = target.parentNode; // 삭제시킬 노드의 부모
	var goal = targetCell.nextSibling; // 활동내용 열위치
	var grade = targetCell.nextSibling.nextSibling; //평가항목 열위치
	var goal_txt; //DB에서 로드시킬 활동내용
	var grade_txt; //DB에서 로드시킬 평가항목

	$.ajax({
		url:"http://japan-okyo.c9users.io/contents/get",
		dataType:"jsonp",
		data:{
			contentTitle:loadTarget
		},success:function(result){
			parent.removeChild(target); //노드삭제
			console.log(result.actContentInfo);
			goal.innerHTML=(result.actContentInfo.aContent);
		   grade.innerHTML=(result.assessmentInfo.assContent);
		},error:function(){
			alert('test실패');
		}
	});

	
	
	
	
	// goal.innerHTML=(goal_txt);
	// grade.innerHTML=(grade_txt);
	
	



// function test(){
// 	$.ajax(function(){
// 		url:'https://ide.c9.io/okyo/project/test',
// 		dataType:'jsonp',
// 		success:function(){
// 			alert('성공');
// 		},error:function(){
// 			alert('error');
// 		}
// 	});
// }
// test();

// var xhttp = new XMLHttpRequest();
//   xhttp.open("GET", "https://ide.c9.io/okyo/project/test");
//   xhttp.onreadystatechange = function() {
//     if (xhttp.readyState == 4 && xhttp.status == 200) {
//       //document.getElementById("Context").innerHTML = xhttp.responseText;
//       alert('성공');
//       console.log(xhttp.responseText);
//     }else{
//     	alert('실패');
//     }
//   };
  
  
		redips.showContent();
	};
//-----------------------------------드랍이벤트끝---------------------------------------------------------------------------------




	// call showContent() after DIV element is deleted
	rd.event.deleted = function () {
		redips.showContent();
	};
};


// show TD content
redips.showContent = function () {

	// get content of TD cells in right table
	var td1 = redips.getContent('td1'),
		td2 = redips.getContent('td2'),
		td3 = redips.getContent('td3'),
		td4 = redips.getContent('td4'),
		// set reference to the message DIV (below tables)
		message = document.getElementById('message');
	// show block content
	// message.innerHTML = 'td1 = ' + td1 + '<br>' +
	// 					'td2 = ' + td2 + '<br>' +
	// 					'td3 = ' + td3 + '<br>' +
	// 					'td4 = ' + td4;
};


// get content (DIV elements in TD)
redips.getContent = function (id) {
	// window.alert("dd");
	var td = document.getElementById(id),
		content = '',
		cn, i;
	// // TD can contain many DIV elements
	// for (i = 0; i < td.childNodes.length; i++) {
	// 	// set reference to the child node
	// 	cn = td.childNodes[i];
	// 	// childNode should be DIV with containing "drag" class name
	// 	if (cn.nodeName === 'DIV' && cn.className.indexOf('drag') > -1) { // and yes, it should be uppercase
	// 		// append DIV id to the result string
	// 		content += cn.id + '_';
	// 	}
	// }
	// cut last '_' from string
	content = content.substring(0, content.length - 1);
	// return result
	return content;
};


// add onload event listener
if (window.addEventListener) {
	window.addEventListener('load', redips.init, false);
}
else if (window.attachEvent) {
	window.attachEvent('onload', redips.init);
}
