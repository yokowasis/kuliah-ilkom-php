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

  let nilai = 0;
  let predikat = "";

  $: {
    if (parseFloat(nilai) >= 41 && parseFloat(nilai) <= 55) {
      predikat = "D";
    } else if (parseFloat(nilai) >= 56 && parseFloat(nilai) <= 60) {
      predikat = "C";
    } else if (parseFloat(nilai) >= 61 && parseFloat(nilai) <= 65) {
      predikat = "BC";
    } else if (parseFloat(nilai) >= 66 && parseFloat(nilai) <= 70) {
      predikat = "B";
    } else if (parseFloat(nilai) >= 71 && parseFloat(nilai) <= 80) {
      predikat = "AB";
    } else if (parseFloat(nilai) >= 81 && parseFloat(nilai) <= 100) {
      predikat = "A";
    } else {
      predikat = "Nilai Tidak Valid";
    }
  }
</script>

<div
  style="display: flex; justify-content: center; align-items: center; flex-direction: column;"
>
  <h1>1. Calculator</h1>
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
  <h1>2. Predikat</h1>
  <div style="display: flex; gap: 10px;">
    <div>
      <h3 style="margin-top: 0;">Masukkan Nilai</h3>
      <input type="text" placeholder="Masukkan Nilai" bind:value={nilai} />
      <p>
        Predikat Anda Adalah : <br /><b style="color: green;">{predikat}</b>
      </p>
    </div>
    <div>
      <table>
        <tr>
          <td>41-55</td>
          <td>D</td>
        </tr>
        <tr>
          <td>56-60</td>
          <td>C</td>
        </tr>
        <tr>
          <td>61-65</td>
          <td>BC</td>
        </tr>
        <tr>
          <td>66-70</td>
          <td>B</td>
        </tr>
        <tr>
          <td>71-80</td>
          <td>AB</td>
        </tr>
        <tr>
          <td>81-100</td>
          <td>A</td>
        </tr>
      </table>
    </div>
  </div>

  <p />
</div>

<style>
  textarea {
    font-size: 1.5em;
    width: 240px;
  }
  table td {
    border: solid 1px #000;
    padding: 5px;
  }
  table {
    border-collapse: collapse;
  }
</style>
