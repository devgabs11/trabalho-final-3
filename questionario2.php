<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>SEJUC / CONECTA JOVEM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .verde {
      background-color: #4682B4;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .verde img {
      height: 60px;
      object-fit: contain;
    }

    .card {
      max-width: 600px;
      margin: 30px auto;
      border-radius: 12px;
    }

    form {
      padding: 20px 30px;
    }

    .form-label {
      font-weight: 600;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 8px 20px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .form-check {
      margin-top: 8px;
      margin-bottom: 8px;
    }

    .checks {
      margin-left: 30px;
    }
  </style>
</head>

<body>
  <div class="verde">
    <img src="imagens/link_gov.png" alt="Logo Governo">
    <img src="imagens/brasao_mga.png" alt="Brasão">
  </div>

  <div class="card shadow">
    <div class="card-header text-center bg-light">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00008B" class="bi bi-check2-square" viewBox="0 0 16 16">
        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z"/>
        <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0"/>
      </svg>&nbsp;&nbsp;<b>Questionário</b>
    </div>

    <form id="formInteresses" onsubmit="enviarDados(event)">
      <div class="checks">
        <h6 class="text-center mt-3">Quais áreas você quer mais cursos?</h6>

        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Informática"> <label class="form-check-label">Informática</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Mídia e Multimeios"> <label class="form-check-label">Mídia e Multimeios</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Marketing"> <label class="form-check-label">Marketing</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Arte e Cultura"> <label class="form-check-label">Arte e Cultura</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Empreendedorismo"> <label class="form-check-label">Empreendedorismo</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Vendas"> <label class="form-check-label">Vendas</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Administração"> <label class="form-check-label">Administração</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="Agronomia"> <label class="form-check-label">Agronomia</label></div>
      </div>
      <div class="mt-4 text-center">
        <label for="cursos" class="form-label">Você tem interesse em participar de cursos de capacitação profissional?</label>
        <select name="cursos" id="cursos" class="form-select">
          <option value="">Selecione</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>
      </div>
      <div class="mt-4 text-center">
        <label for="cursos" class="form-label">Qual horário você prefere para cursos?</label>
        <select name="cursos" id="cursos" class="form-select">
          <option value="">Selecione</option>
          <option value="manha">Manhã</option>
          <option value="noite">Noite</option>
          <option value="tarde">Tarde</option>
        </select>
      </div>
      <div class="checks">
        <h6 class="text-center mt-3">Quais esportes você mais gosta de praticar?</h6>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="futebol"><label class="form-check-label">Futebol</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="volei"><label class="form-check-label">Vôlei</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="skate"><label class="form-check-label">Skate</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="dança"><label class="form-check-label">Dança</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="musculacao"><label class="form-check-label">Musculação</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="arte/cultura"><label class="form-check-label">Artes marciais</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="bmx"><label class="form-check-label">BMX</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="outro"><label class="form-check-label">Outro</label></div>
      </div>
      <div class="mt-4 text-center">
        <label>Que tipo de espaço esportivo você sente falta na sua região?</label>
        <input type="text" class="form-control" name="nome" required>
      </div>
      <div class="mt-4 text-center">
        <label for="cursos" class="form-label">Que tipo de conteúdo você mais consome?</label>
        <select name="cursos" id="cursos" class="form-select">
          <option value="">Selecione</option>
          <option value="filmes">Filmes</option>
          <option value="series">Séries</option>
          <option value="jogos">Jogos</option>
          <option value="redes sociais">Redes Sociais</option>
          <option value="outros">Outros</option>
        </select>
      </div>
      <div class="checks">
        <h6 class="text-center mt-3">Que estilos musicais você mais gosta de ouvir?</h6>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="pop"><label class="form-check-label">Pop</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="sertanejo"><label class="form-check-label">Sertanejo</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="funk"><label class="form-check-label">Funk</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="hiphop"><label class="form-check-label">Rap/Hip Hop</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="rock"><label class="form-check-label">Rock</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="eletromica"><label class="form-check-label">Eletrônica</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="gospel"><label class="form-check-label">Gospel</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="internacional"><label class="form-check-label">Internacional</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="interesses[]" value="outro"><label class="form-check-label">Outro</label></div>
      </div>
      <div class="text-center mt-4 mb-3">
        <button type="submit">ENVIAR</button>
      </div>

      <p id="mensagem" class="text-center"></p>
    </form>
  </div>

  <script>
    function enviarDados(e) {
      e.preventDefault(); // impede o formulário de recarregar a página

      const checkboxes = document.querySelectorAll('input[name="interesses[]"]:checked');
      const interessesSelecionados = Array.from(checkboxes).map(cb => cb.value);
      const cursoSelecionado = document.getElementById('cursos').value;

      if (interessesSelecionados.length === 0) {
        document.getElementById('mensagem').textContent = "⚠️ Selecione pelo menos uma área!";
        return;
      }

      const dados = new FormData();
      dados.append('interesses', JSON.stringify(interessesSelecionados));
      dados.append('curso', cursoSelecionado);

      fetch('salvar.php', {
        method: 'POST',
        body: dados
      })
      .then(response => response.text())
      .then(retorno => {
        document.getElementById('mensagem').textContent = retorno;
        document.getElementById('formInteresses').reset(); // limpa o formulário
      })
      .catch(error => {
        document.getElementById('mensagem').textContent = "❌ Erro ao enviar dados.";
        console.error(error);
      });
    }
  </script>
</body>
</html>
