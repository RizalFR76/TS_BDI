const jeniskelamin = "laki-laki";
let golongan_darah = "AB";
var warna_rambut = "hitam";

if (jeniskelamin == "laki-laki" && warna_rambut == "hitam") {
  console.log("itu aku");
} else {
  console.log("orang lain");
}

// var arr = Array(2)
//   .fill(null)
//   .map(() => Array(4));
// arr[0][0] = "foo";
// console.info(arr);
// console.info(arr[0][0], arr[1][0]);

// console.log(warna_rambut);
var kec = ["a", "b", "c"];
var kab_jateng = ["semarang", "solo"];
var kab_jatim = ["surabaya", "malang"];
var kab_jabar = ["bandung"];
var prov = [{ jateng: kab_jateng }, { jatim: kab_jatim }, { jabar: kab_jabar }];

// var arr = {
//     prov[0]:kab_jateng,
//     prov[1] : kab_jatim,
//     prov [2] : kab_jabar,
// };

var dosen = {
  nama: "dosen1",
  nip: 131432,
  jabatan: "dekan",
};

console.log("==========================");
console.log(dosen);
console.log("==========================");
console.log(prov);
console.log("==========================");

// var prov2 = [{ jateng: kab_jateng }];

// console.log(prov2);

var arr1 = ["0", "1", "2"];

console.log(arr1);
console.log("============setelah push=========");
arr1.push("4");
console.log(arr1);
console.log("=========================");
