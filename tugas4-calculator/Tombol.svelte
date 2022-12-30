<script>
  import { count, activeOperation, firstNumber } from "./hasil.js";

  export let angka = "";
  export let disabled = false;
  export let style = "";
  let operation = "";
  let angkaPertama = 0;
  let localCount = 0;

  $: {
    if (angka === "+" || angka === "-" || angka === "*" || angka === "/") {
      disabled =
        operation === "+" ||
        operation === "-" ||
        operation === "*" ||
        operation === "/";
    }
  }

  count.subscribe((val) => {
    localCount = val;
  });

  firstNumber.subscribe((val) => {
    angkaPertama = val;
  });

  activeOperation.subscribe((val) => {
    operation = val;
  });

  function addNumber() {
    switch (angka) {
      case "C":
        count.update((n) => "");
        break;

      case "+":
        activeOperation.update((n) => "+");
        firstNumber.update(() => localCount);
        count.update(() => "");
        break;

      case "-":
        activeOperation.update((n) => "-");
        firstNumber.update(() => localCount);
        count.update(() => "");
        break;

      case "*":
        activeOperation.update((n) => "*");
        firstNumber.update(() => localCount);
        count.update(() => "");
        break;

      case "/":
        activeOperation.update((n) => "/");
        firstNumber.update(() => localCount);
        count.update(() => "");
        break;

      case "=":
        switch (operation) {
          case "+":
            count.update(
              () => parseFloat(angkaPertama) + parseFloat(localCount)
            );
            break;

          case "-":
            count.update(
              () => parseFloat(angkaPertama) - parseFloat(localCount)
            );
            break;

          case "*":
            count.update(
              () => parseFloat(angkaPertama) * parseFloat(localCount)
            );
            break;

          case "/":
            count.update(
              () => parseFloat(angkaPertama) / parseFloat(localCount)
            );
            break;

          default:
            break;
        }
        activeOperation.update(() => "X");
        break;

      default:
        count.update((n) => n + angka);
        break;
    }
  }
</script>

<button {disabled} on:click={addNumber} {style}>{angka}</button>

<style>
  button {
    width: 50px;
    height: 50px;
    font-size: 20px;
    margin: 5px;
  }
</style>
