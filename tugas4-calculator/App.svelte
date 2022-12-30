<script>
  import { count, activeOperation, firstNumber } from "./hasil.js";
  import Tombol from "./Tombol.svelte";

  let value = 0;
  let operation = "";
  let angkaPertama = 0;

  firstNumber.subscribe((val) => {
    angkaPertama = val;
  });

  activeOperation.subscribe((val) => {
    operation = val;
  });

  count.subscribe((val) => {
    value = val;
  });
</script>

<div
  style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh;"
>
  <div>
    <textarea bind:value />
  </div>
  <div>
    <Tombol angka="1" />
    <Tombol angka="2" />
    <Tombol angka="3" />
    <Tombol angka="+" />
  </div>
  <div>
    <Tombol angka="4" />
    <Tombol angka="5" />
    <Tombol angka="6" />
    <Tombol angka="-" />
  </div>
  <div>
    <Tombol angka="7" />
    <Tombol angka="8" />
    <Tombol angka="9" />
    <Tombol angka="*" />
  </div>
  <div>
    <Tombol angka="C" />
    <Tombol angka="0" />
    <Tombol angka="=" />
    <Tombol angka="/" />
  </div>
</div>

<style>
  textarea {
    font-size: 1.5em;
    width: 240px;
  }
</style>
