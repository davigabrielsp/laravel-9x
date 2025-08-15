@extends('site.layouts.app')
@section('content')
    <div class="informacao-pagina"><br><br><br>
        <div class="contato-principal">
            @component('site.layouts._components.form_contato', ['class' =>  'borda-preta'])
            <p>Equipe vai entrar em contato</p>
            @endcomponent
        </div>
    </div>
@endsection