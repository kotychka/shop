// click
// contectmenu
// mouseover
// mousedown
// mousemove

// submit
// focus

// keydown
// keyup

// domcontentloaded

function showName() {
	var inp = document.getElementById("name");

	var val = inp.value;

	alert(val);
}

function showElements() {
	// var elements = document.getElementsByTagName('p');

	// // console.log(elements[0].innerText)

	// elements[0].innerText = "<a href='#'>Foo</a>";
	// elements[1].innerHTML = "<a href='#'>Foo</a>";

	var ps = document.getElementsByClassName('first')
	
	console.log(ps)	

	var elem = document.querySelector('p.first')

	var elements = document.querySelectorAll('p')

	// console.log(elements)
}


function iter (element) {
	var elements = element.getElementsByTagName("li")

	for (var i = 0; i < elements.length; i++) {
		console.log(elements[i]);
	}

	// console.log(element.innerText)
}

function more() {
	var div = document.createElement('div');
	div.className = "success";
	div.innerHTML = "Выдобавили товар в корзину!";

	// document.body.appendChild(div)

	// var li = document.createElement('li');
	// li.innerHTML = "Выдобавили товар в корзину!";

	// var list = document.getElementById("list")

	// list.insertBefore(li, list.children[1])

	// var bt = document.querySelector("input[type=button]")
	var p = document.querySelector("p")

	document.body.insertBefore(div, p)
	// document.body.innerHTML = "<div>Выдобавили товар в корзину!</div>";
}

// var f = {
// 	hi: function() {

// 	}
// }

// function user() {
// 	this.hi = function() {
// 		console.log("hello")
// 	}
// }

// var u = new user()

// u.hi();

// window.document.body.onload = loaded

// function loaded() {





// }

$(function(){

	// $("#more").click(function() {
	// 	// $("p").html($("#name").val())
	// 	$("p").toggle("slow");
		
	// })


	$("input[type=text]").on("focus", function() {
		console.log("focused")
	})

	$("input[type=text]").on("focus", function() {
		console.log("focused2")
	})

	$("#more").click(function(){

		$.ajax({
			url: "/data.json"
		}).done(function(data){
			console.log(data)
		});

	})
})
