let totaldetik = 5440;
let jam = Math.floor(totaldetik / 3600);
let sisadetikjam = totaldetik % 3600;

let menit = Math.floor(sisadetikjam / 60);
let sisadetikmenit = sisadetikjam % 60;

console.log(`jam ${jam}, menit ${menit}, detik ${sisadetikmenit}`);
