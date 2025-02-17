import { test } from "node:test";
import assert from "node:assert";
import { sum } from "./index.js";

test("sum saya harus benerin jumlahin dua angka", () => {
  assert.strictEqual(sum(1, 2), 3);
  assert.strictEqual(sum(-1, 1), 0);
  assert.strictEqual(sum(0, 0), 0);
  assert.strictEqual(sum(-2, -3), -5);
});
