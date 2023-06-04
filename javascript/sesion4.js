function primeFactors(n) {
    const factors = [];
    let divisor = 2;
  
    while (n >= 2) {
      if (n % divisor == 0) {
        factors.push(divisor);
        n = n / divisor;
      } else {
        divisor++;
      }
    }
    //return factors;
    pintarPrimos(factors);
  }

  function pintarPrimos(factors) {
    //asignar a numero1 el primer elemento del array
    // let [numero1] = [...factors];
    let base = factors[1];
    let exponente = 1;
    let pizarra = document.getElementById("pizarra");
    pizarra.innerHTML = "";
    for (let i = 0; i < factors.length; i++) {
      if (base == factors[i + 1]) {
        exponente++;
      } else {
        //pintar datos
      
        let superScript = document.createElement("sup");
        superScript.textContent = exponente;
        pizarra.append(base, exponente == 1 ? "" : superScript, " ");
        // console.log(base, "^", exponente);
        base = factors[i + 1];
        exponente = 1 ;
      }
    }
  }