let nama = "dyn";
let gajipokok = 5000000;
let tunjangan = 0.2 * gajipokok;
let pajak = 0.15 * (gajipokok + tunjangan);
let gajibersih = gajipokok + tunjangan - pajak;

console.log(
  `nama, ${nama} tunjangan ${tunjangan} pajak ${pajak} gaji bersih ${gajibersih}`
);
