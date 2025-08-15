@isset($fornecedores)

        @forelse($fornecedores as $indice => $fornecedor)
        Iteracao atual:{{ $loop->iteration }}
            Fornecedor: {{ $fornecedor['nome'] }}<br>
        @if($loop->first)
            Primeira iteração
        @endif
         @if($loop->last)
            ultima iteração
        @endif

        {{ $loop->count }}
        @empty
            nenhum dado..
        @endforelse

@endisset



