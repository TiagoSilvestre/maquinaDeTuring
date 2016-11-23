const btn = document.querySelector('button')

const tpl = `
<td>{{id}}</td>
<td>( <select name="escreve:{{id}}:*"><option></option><option value="*">*</option><option value="-">-</option><option value="a">a</option><option value="b">b</option><option value="ini">ini</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:*">,<select name="direcao:{{id}}:*"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
<td>( <select name="escreve:{{id}}:-"><option></option><option value="*">*</option><option value="-">-</option><option value="a">a</option><option value="b">b</option><option value="ini">ini</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:-">,<select name="direcao:{{id}}:-"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
<td>( <select name="escreve:{{id}}:a"><option></option><option value="*">*</option><option value="-">-</option><option value="a">a</option><option value="b">b</option><option value="ini">ini</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:a">,<select name="direcao:{{id}}:a"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
<td>( <select name="escreve:{{id}}:b"><option></option><option value="*">*</option><option value="-">-</option><option value="a">a</option><option value="b">b</option><option value="ini">ini</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:b">,<select name="direcao:{{id}}:b"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
<td>( <select name="escreve:{{id}}:ini"><option></option><option value="*">*</option><option value="-">-</option><option value="a">a</option><option value="b">b</option><option value="ini">ini</option></select>, <input type="text" class="inpEst" name="proxEstado:{{id}}:ini">,<select name="direcao:{{id}}:ini"><option></option><option value="D">D</option><option value="E">E</option></select>)</td>
`
const table = document.querySelector('tbody')

btn.addEventListener('click', appendRow)

function appendRow() {
  const row = document.createElement('tr')
  row.innerHTML = tpl.replace(/{{id}}/g, ++appendRow._counter)

  document.getElementById("qtdEstados").value = appendRow._counter
  table.appendChild(row)
}

appendRow._counter = 0