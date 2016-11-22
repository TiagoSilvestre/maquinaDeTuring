const btn = document.querySelector('button')

const tpl = `
<td>{{id}}</td>
<td>( <select name="escreve:{{id}}:*"><option></option><option value="*">*</option><option value="vazio">&Oslash;</option><option value="ini">&rarr;</option><option value="fim">F</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:*">,<select name="direcao:{{id}}:*"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
<td>( <select name="escreve:{{id}}:vazio"><option></option><option value="*">*</option><option value="vazio">&Oslash;</option><option value="ini">&rarr;</option><option value="fim">F</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:vazio">,<select name="direcao:{{id}}:vazio"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
<td>( <select name="escreve:{{id}}:ini"><option></option><option value="*">*</option><option value="vazio">&Oslash;</option><option value="ini">&rarr;</option><option value="fim">F</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:ini">,<select name="direcao:{{id}}:ini"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
`
const table = document.querySelector('table')

btn.addEventListener('click', appendRow)

function appendRow() {
  const row = document.createElement('tr')
  row.innerHTML = tpl.replace(/{{id}}/g, ++appendRow._counter)

  document.getElementById("qtdEstados").value = appendRow._counter
  table.appendChild(row)
}

appendRow._counter = 0