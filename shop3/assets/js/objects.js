var user = {
	name: "Artem",
	getAge: function() {
		console.log(this)
		return 20;
	},
	sayHi: function () {
		console.log("Hello, " + this.name)
	}
}

// user.sayHi();	

user.name = "Vasili";

// user.sayHi();

var ar = {
	"one": 1,
	"two": 2
}

// console.log(ar["one"])

for (i in ar) {
	// console.log(i);
	// console.log(ar[i])
}

var hous = [5, 1, 3, 4, 5];

console.log(hous[0])

for (i in hous) {
	console.log(i)
	console.log(hous[i])
}

