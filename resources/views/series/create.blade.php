<x-layout title="Adicionar Série">
  <form action="/series/salvar" method="post">
    @csrf
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da série">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</x-layout>