let f = 450;
let c = ((f - 32) * 5) / 9;
if (c > 300) {
  console.log(`panas ${c}`);
} else if (c < 250) {
  console.log(`dingin ${c}`);
} else {
  console.log(`normal ${c}`);
}
