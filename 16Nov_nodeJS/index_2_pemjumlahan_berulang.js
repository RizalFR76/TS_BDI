// in module
const readline = require("readline-sync");
var a;
var b;
var hasil;
// const readline = require("readline-sync");
// console.info("Program penambahan");
// const a = readline.question("Masukan angka pertama : ");
// const b = readline.question("Masukan angka kedua : ");

// function add(a, b) {
// 	var hasil = a + b;
// 	return hasil;
// }
// const hasil1 = add(parseInt(a), parseInt(b));
// console.log("penjumlahan");
// console.log(hasil1);

// var c = readline.question("mau menjumlahkan bilangan (ya)= ");
// while (c == "ya") {
// 	console.info("Program penambahan");
// 	console.info("=================================");
// 	a = readline.question("Masukan angka pertama : ");
// 	b = readline.question("Masukan angka kedua : ");
// 	function add(a, b) {
// 		hasil = a + b;
// 		return hasil;
// 	}
// 	const hasil1 = add(parseInt(a), parseInt(b));
// 	console.log("penjumlahan");
// 	console.log(hasil1);
// 	c = readline.question("mau menjumlahkan bilangan lagi tidak (ya)= ");
// }

// do {
// 	console.info("Program penambahan");
// 	console.info("=================================");
// 	hasil = add();
// 	console.log(hasil);
// 	var lanjut = readline.question("mau lanjut (ya)?");
// 	if (lanjut != "ya") {
// 		console.log("=====================================");
// 		console.log("Selesai");
// 	}
// } while (lanjut == "ya");

function add(a, b) {
	a = readline.question("Masukan angka pertama : ");
	b = readline.question("Masukan angka kedua : ");
	a = parseInt(a);
	b = parseInt(b);
	var hasil = a + b;
	return hasil;
}

