var name = "Artem";
var c = 1;


function count(a, b, c) {
	d = a + b + c;
	// console.log(c);	
	return d;	
}

var d = 10

// console.log(d);

// console.log(count(1, 2, 3));
// console.log(count(4, 5, 6));
// console.log(count(7, 8, 9));
// console.log(count(9, 10, 11));
// console.log(count(12,13, 14));

var s = count(15, 16, 17);
// console.log(s);

if (count(1,2,3) == 6) {
	// console.log("ok");
}

console.log(pow(2, 4));

function pow(x, n) {
  if (n != 1) { // пока n != 1, сводить вычисление pow(x,n) к pow(x,n-1)
     return x * pow(x, n - 1);
  } else {
    return x;
  }
}

var sum = function (a, b) {
	return a + b;
}

console.log(sum(2, 4));

function hello(fnc) {
	fnc();
}

// var message  = function () {
// 	console.log("Hello!");
// }

hello(function () {
	console.log("Hello!");
});
