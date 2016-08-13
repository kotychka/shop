function checkAge(age) {

	var f = function (){

	}

	if (age > 18) {
		f = function () {
			console.log("ok")
		};
	} else {
		f = function () {
			console.log("no")
		};
	} 

	f();
}

function got(callback) {
	callback();
}

var f = function(){
	console.log("Hello!")
} 

got(f)

var sum = new Function('a,b', 'return a + b;')
var result = sum(1,2);
console.log(result);