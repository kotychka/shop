	// var x=12;
	// var y=5;
	// var result=x+y;
	// alert(result);

	// var message="Hello world!";
	// var hello;
	// hello=message;
	// console.log(message);
	// console.log(hello);

// var admin;
// var name;
// name="Василий";
// admin=name;
// console.log(admin);
// alert(admin);

// var result=prompt("Ты серьезно?", "yes");
// var isAdmin=confirm("Вы - администратор?");

// console.log(result, isAdmin); 

function iter() {
	var elements = document.getElementsByTagName("li");

	for (var i=0; i<elements.length; i++) {
		console.log(elements[i]);
	}

	// console.log(document.getElementsByID(ul.menu))
}

function more() {
	var div = document.createElement('div');
	div.className = "success";
	div.innerHTML = "Вы добавили товар в корзину!";

	// document.body.appendChild(div);

	var p = document.querySelector("p");

	document.body.insertBefore(div, p)

// 	document.body.innerHTML = "<div>Вы добавилитовар в корзину!</div>"
}