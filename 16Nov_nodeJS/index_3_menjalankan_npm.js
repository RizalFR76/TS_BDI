import readline from "readline-sync";
var a;
var b;
var hasil;
do {
	console.info("Program penambahan");
	console.info("=================================");
	hasil = add();
	console.log(hasil);
	var lanjut = readline.question("mau lanjut (ya)?");
	if (lanjut != "ya") {
		console.log("=====================================");
		console.log("Selesai");
	}
} while (lanjut == "ya");

function add(a, b) {
	a = readline.question("Masukan angka pertama : ");
	b = readline.question("Masukan angka kedua : ");
	a = parseInt(a);
	b = parseInt(b);
	var hasil = a + b;
	return hasil;
}
