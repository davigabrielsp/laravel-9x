{{ $slot }}
<form action="{{ route('site.store') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="nome" class="{{ $class }}"><br>
    <input type="text" name="telefone" placeholder="telefone" class="{{ $class }}"><br>
    <input type="text" name="email" placeholder="email" class="{{ $class }}"><br>
    <select name="motivo" id="" class="{{ $class }}">
        <option value="">Motivo</option>
        <option value="duvida">Duvida</option>
        <option value="elogio">elogio</option>
        <option value="reclamacao">reclamacao</option>
    </select>
    <textarea name="mensagem" class="{{ $class }}"></textarea>
    <input type="submit" class="{{ $class }}" value="ENVIAR">
</form>