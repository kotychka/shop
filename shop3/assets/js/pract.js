function checkAge (age) {
	if (age > 18) {
		return "ok";
	} else {
		return "no"
	}
}

console.log(checkAge(20)) // ok

console.log(checkAge(16)) // no


function sin() {
	return 1
} 

function cos() {
	return 2
}

var result = sin() + cos()
