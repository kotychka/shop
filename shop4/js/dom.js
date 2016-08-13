// for (var i = 0; i < document.body.childNodes.length; i++) {
// 	console.log(document.body.childNodes[i]);
// }

// console.log(document.body.firstChild);
// console.log(document.body.lastChild);

// console.log(document.documentElement)


// document.getElementById('inner').innerHTML = "<span>span</span>";

// // console.log(window['inner'])

// document.getElementById('inner').style.background = "red";


// var divs = document.getElementsByTagName("div");

// // divs.push("tet");

// console.log(divs);

var table = document.getElementById("age-table");


var elements = table.getElementsByTagName("input");

for (var i = 0; i < elements.length; i++) {
	var input = elements[i];
	// console.log("val: " + input.value + " checked: " + input.checked+ " name: " + input.name);
}

var first = table.getElementsByTagName("input")[0];

// console.log(first);

elements = document.getElementsByName("gender");

for (var i = 0; i < elements.length; i++) {
	var input = elements[i];
	// console.log("val: " + input.value + " checked: " + input.checked+ " name: " + input.name);
}

// elements = document.getElementsByClassName("special");
// console.log(elements);

var agren = document.querySelectorAll(".header-nav a");
// console.log(agren);

for (var i = 0; i < agren.length; i++) {
	agren[i].style.color = "#00f";
}

var logo = document.querySelector("#logo")

logo.style.background = "#f00";

var d = document.createElement('div');
d.innerText = "div";

document.body.appendChild(d);

var parentElem = document.body;
var elem = d.cloneNode(true);
elem.innerText = "div2";
var nextSibling = document.querySelectorAll(".special")[1];

parentElem.insertBefore(elem, nextSibling)
var l = document.querySelectorAll(".special").length;
for (var i = 0; i < l; i++) {
	document.body.removeChild(document.querySelectorAll(".special")[0]);
}
