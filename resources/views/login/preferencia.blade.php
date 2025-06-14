<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Preferências - GameMind</title>
  <link rel="stylesheet" href="{{ url('CSS/cadastro3.css') }}">
</head>
<body>
  <hr>
  @if ($errors->any())
    <div style="color:red">
    <h3><b>Erro!</b></h3>

    <ul>
        @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
    </ul>
    </div>
@endif 
  <hr>

  <div class="form_cadastro">
    <h2>Selecione suas preferências</h2>

    <form method="POST" action="{{ route('preferencias.store') }}">
      @csrf

      @php
          $disciplinas = [
              'portugues', 'matematica', 'fisica', 'quimica', 'biologia',
              'historia', 'geografia', 'filosofia', 'sociologia', 'ingles'
          ];
      @endphp

      @foreach ($disciplinas as $disciplina)
        <label class="cadastro_pergunta">
          <input type="hidden" name="peso_{{ $disciplina }}" value="0">
          <input type="checkbox" name="peso_{{ $disciplina }}" value="1"
            {{ old('peso_' . $disciplina) ? 'checked' : '' }}
          >
          {{ ucfirst($disciplina) }}
        </label><br>
      @endforeach

      <button type="submit">Salvar Preferências</button>
    </form>
  </div>
</body>
</html>
