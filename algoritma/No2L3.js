let PABP = 70;
let MTK = 82;
let DPK = 77;
let rataRata = (PABP + MTK + DPK) / 3;
if (rataRata >= 80 && rataRata <= 100) {
  console.log("Cetak Grade A", rataRata);
} else if (rataRata > 75 && rataRata < 80) {
  console.log("Cetak Grade B", rataRata);
} else if (rataRata > 75 && rataRata <= 65) {
  console.log("Cetak Grade C", rataRata);
} else if (rataRata >= 45 && rataRata < 65) {
  console.log("Cetak Grade D", rataRata);
} else if (rataRata > 0 && rataRata < 45) {
  console.log("Cetak Grade E", rataRata);
} else {
  console.log("Cetak Grade K", rataRata);
}
