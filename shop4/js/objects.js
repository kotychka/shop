function userRun() {
	console.log("Im run");
}

var user = {
	name: "Artem",
	age: 43,
	run: userRun
};

// console.log(user.name);
// console.log(user.age);
// user.run();

var user2 = new Object();
// var user2 = {};
user2.name= "Sveta";
user2.fname= "Larionova";

// console.log(user2.fname);

var users = {
	artem: 123,
	lena: 321,
	sveta: 231
}

users["dima"] = 111;

// console.log(users["lena"])

for (key in users) {
	// console.log(key + ":" + users[key]);
}

var mas = [1, 2, 3, 4, 5, 6, "str", 6, {name: "Artem"}];

mas.push("new str");

mas[3] = 56;
mas[4] = 42;

for (var i = 0; i < mas.length; i++) {
	// console.log(mas[i]);
}

var str = "string";

for (var i = 0; i < str.length; i++) {
	// console.log(str[i]);
}

var arr = new Array();
arr.push("new str");
// console.log(arr);

var admin = {name:"Vasia"}

var admin2 = {};

for (key in admin) {
	admin2[key] = admin[key];
}

admin.name = "Lena";

// console.log(admin2.name)

user = {
	name: "Artem",
	ag: 42,
	job: {
		title: "Proprllers",
		address: {
			"country":"Ru",
			str: "St. P"
		}
	}
}

// console.log(user.job.address.country)

user = {
	name: "Artem",
	age: 43,
	run: function () {
		console.log("run")
	}
};

// user.run();

// var obj = new Object(); 

function Animal() {
	var fox = "fox";

	this.type = "Fox";
	this.age = 28;

	function mov() {
		console.log("mov")
	}

	this.say = function () {
		mov();
	}
}

var fox = new Animal();

fox.say();

var foxes = [new Animal(), new Animal(), new Animal()];

fox = {
	type: "Fox",
	age: 28,
	run: function () {
		console.log(this.age);
	}
}

// fox.run();
// 									div			div				
console.dir(window.document.body.children[0].children[0].innerText);

console.log(window.document.body
	.children[1]
	.children[0]
	.children[1]
	.innerText);

// window.location.href = "http://google.com";
