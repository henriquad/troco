//================================================== calcular =============================================
let clicado; // Variável global para armazenar o campo clicado
const din = [20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 25, 10, 5, 1];

function parsePtBR(value) {
  if (!value && value !== 0) return 0;
  return parseFloat(String(value).replace(/\./g, "").replace(",", ".")) || 0;
}

// Calcular:
// a) tipos de notas e moedas: [200, 100, 50, 20, 10, 5, 2, 1, 0,50, 0,25, 0,10, 0,05, 0,01]
// b) notas e moedas para cada valor
// c) soma das notas e moedas para cada tipo de nota e de moeda
// d) total em reais da mutiplicação das quantidades das notas calculadas (b) pelo valor (a) de cada tipo de moeda
// e) total geral em reais
// e) conferir se o total geral em reais (e) é igual ao total vindo das multiplicações (d)
// f) permitir a alteração da quantidade de notas em moedas para ajustes
// g) verificar se a soma total em reais ficou igual a soma das multiplicações (d)

function calcular() {
  let totalGeral = 0;

  for (let j = 15; j < 365; j += 14) {
    const idLinha = j.toString().padStart(3, "0");
    const campoPrincipal = document.getElementById("TextBox" + idLinha);
    if (!campoPrincipal) continue;
    const valorNumerico = parsePtBR(campoPrincipal.value);
    totalGeral += valorNumerico;
    let sobraCentavos = Math.round(valorNumerico * 100);
    for (let i = 0; i < din.length; i++) {
      const idNota = (j + 1 + i).toString().padStart(3, "0");
      const campoNota = document.getElementById("TextBox" + idNota);
      if (campoNota) {
        const qtde = Math.floor(sobraCentavos / din[i]);
        campoNota.value = qtde > 0 ? qtde : "";
        sobraCentavos -= qtde * din[i];
      }
    }
  }
  const campoTotal = document.getElementById("Total");
  if (campoTotal) {
    campoTotal.value = totalGeral.toLocaleString("pt-BR", {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2,
    });
  }

  for (let qtde = 0; qtde < 13; qtde++) {
    let qtdeTotal = 0;
    for (let j = 16 + qtde; j < 365; j += 14) {
      const idLinha = j.toString().padStart(3, "0");
      const campoPrincipal = document.getElementById("TextBox" + idLinha);
      if (!campoPrincipal) continue;
      const valorNumerico = parsePtBR(campoPrincipal.value);
      qtdeTotal += valorNumerico;
    }

    document.getElementById(
      "TextBox30" + qtde.toString().padStart(2, "0"),
    ).value = qtdeTotal;
  }

  let totalCentavosAjustados = 0;
  for (let m = 0; m < 13; m++) {
    const idQ = m.toString().padStart(2, "0");
    let qMoeda = parsePtBR(document.getElementById("TextBox30" + idQ).value);
    let ajuste = parsePtBR(document.getElementById("TextBox40" + idQ).value);
    let qMoedaAjustado = qMoeda + ajuste;
    let peso = din[m];
    let subtotalCentavos = qMoedaAjustado * peso;
    let SubTotal = subtotalCentavos / 100;

    document.getElementById("TextBox30" + idQ).value =
      qMoedaAjustado !== 0 ? qMoedaAjustado : "";
    document.getElementById("TextBox50" + idQ).value = SubTotal.toFixed(2);

    totalCentavosAjustados += subtotalCentavos;
  }

  let somaAjustada = totalCentavosAjustados / 100;
  const campoTotalQ = document.getElementById("Total");
  let Tot1 = campoTotalQ ? parsePtBR(campoTotalQ.value) : 0;

  if (Math.abs(Tot1 - somaAjustada) > 0.009) {
    alert(
      "Atenção: os ajustes alteraram os totais calculados. \n" +
        "Total geral = R$ " + Tot1.toFixed(2) + "\n" +
        "Soma ajustada = R$ " + somaAjustada.toFixed(2) + "\n" +
        "Verifique os ajustes antes de prosseguir."
    );
  }
}

//==============================================função limpar ===============================================
function limpar() {
  for (let lin = 15; lin <= 364; lin++) {
    const idV = lin < 100 ? "0" + lin : lin;
    document.getElementById("TextBox" + idV).value = ""; // ======= limpar valores digitados e quantidades calculadas =========
  }

  for (let i = 0; i < 13; i++) {
    const id = i < 10 ? "0" + i : i;
    document.getElementById("TextBox30" + id).value = ""; // ============== limpar total quantidades ========
    document.getElementById("TextBox40" + id).value = ""; // ============== limpar ajustes ==================
    document.getElementById("TextBox50" + id).value = ""; // ============== limpar totais colunas ===========
  }

  document.getElementById("Total").value = "0";
}

//=========================================== função limpar apenas Ajustes ==================================
function limparAjustes() {

  for (let i = 0; i < 13; i++) {
    const id = i < 10 ? "0" + i : i;
    document.getElementById("TextBox40" + id).value = ""; // ============== limpar ajustes ==================
  }
}

//================================ guardar valor do campo a ser repetido ====================================
function guardar(campo) {
  clicado = campo;
}

//======================================== repetir valor guardado ===========================================
function repetir() {
  let AA = clicado.toString().padStart(3, "0");
  let val = document.getElementById("TextBox" + AA).value;

  let nC = clicado + 14;
  const idi = nC.toString().padStart(3, "0");
  document.getElementById("TextBox" + idi).value = val;
  clicado = clicado + 14;
}
