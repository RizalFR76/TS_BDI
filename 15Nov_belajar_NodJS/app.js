// const http = require("http");

// const hostname = "127.0.0.1";
// const port = 3000;

// const server = http.createServer((req, res) => {
//   res.statusCode = 200;
//   res.setHeader("Content-Type", "text/plain");
//   res.end("Hello, World!\n");
// });

// server.listen(port, hostname, () => {
//   console.log(`Server running at http://${hostname}:${port}/`);
// });

// function add(a, b) {
//   return a + b;
// }

// const hasil = add(2, 3);
// console.log(hasil);

const readline = require("readline-sync");
console.info("Program penambahan");
const a1 = readline.question("masukan angka pertama : ");
const a2 = readline.question("masukan angka kedua : ");

function add(a, b) {
  return a + b;
}

const hasil = add(parseInt(a1), parseInt(a2));
console.log(hasil);

// npm install --save-dev @babel/core @babel/cli @babel/present-env @babel/node
