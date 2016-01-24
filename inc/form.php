<!-- start-form-->
<form class="" action="index.html" method="post">
  <div class="form-group">
    <label for="nome">Nome Completo</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome">
    <label for="email">E-mail</label>
    <input type="email" name="email" class="form-control" placeholder="E-mail">
    <label for="telefone">Telefone</label>
    <input type="tel" name="telefone" class="form-control" placeholder="Telefone">
    <label for="data">Data do Evento</label>
    <input type="date" name="data" class="form-control" placeholder="Data do Evento">
    <select class="form-control" name="local">
      <option>Chácara</option>
      <option>Salão</option>
      <option>Residência</option>
    </select>
    <select class="form-control" name="tipo">
      <option>Casamento</option>
      <option>Festa Infantil</option>
      <option>Festa 15 anos</option>
      <option>Evento Corporativo</option>
    </select>
    <label for="numero">Número de Pessoas</label>
    <input type="number" name="numero" value="20" step="1" min="10" max="40">
    <select class="form-control" name="cidade">
      <option>São Roque</option>
      <option>Mairinque</option>
      <option>Araçariguama</option>
      <option>Ibiúna</option>
      <option>Alumínio</option>
      <option>Sorocaba</option>
    </select>
    <textarea name="msg" rows="8" cols="40" class="form-control" placeholder="Digite Sua Mensagem"></textarea>

  </div>

</form>
