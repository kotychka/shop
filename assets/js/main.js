var products = [
	{
		"title": "iPhone",
		"price": "300"
	},
	{
		"title": "Android",
		"price": "250"
	},
	{
		"title": "Phone",
		"price": "200"
	}	
]

$(function () {
	$(".in_cart").click(function(){
		console.dir($(this).attr("data-id"));

		var id = $(this).attr("data-id");

		if ($("#cart").html() == "Корзина пуста") {
			$("#cart").html(render(products[id]))
		} else {
			$("#cart").append(render(products[id]))
		}
	
	})


	$("body").on("click", ".product-rm", function() {
		$(this).parent().remove()

		if ($(".product-rm").length == 0) {
			$("#cart").html("Корзина пуста")
		}
	});
})

function render (product) {
	var template = "<div>" + product.title + ", Цена " + product.price + " <button class = 'product-rm'>Удалить</button> </div>"

	return template
}







// 	// var x=12;
// 	// var y=5;
// 	// var result=x+y;
// 	// alert(result);

// 	// var message="Hello world!";
// 	// var hello;
// 	// hello=message;
// 	// console.log(message);
// 	// console.log(hello);

// // var admin;
// // var name;
// // name="Василий";
// // admin=name;
// // console.log(admin);
// // alert(admin);

// // var result=prompt("Ты серьезно?", "yes");
// // var isAdmin=confirm("Вы - администратор?");

// // console.log(result, isAdmin); 

// function iter() {
// 	var elements = document.getElementsByTagName("li");

// 	for (var i=0; i<elements.length; i++) {
// 		console.log(elements[i]);
// 	}

// 	// console.log(document.getElementsByID(ul.menu))
// }

// function more() {
// 	var div = document.createElement('div');
// 	div.className = "success";
// 	div.innerHTML = "Вы добавили товар в корзину!";

// 	// document.body.appendChild(div);

// 	var p = document.querySelector("p");

// 	document.body.insertBefore(div, p)

// // 	document.body.innerHTML = "<div>Вы добавилитовар в корзину!</div>"
// }