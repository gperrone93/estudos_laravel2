<x-layout>
    <x-slot name="btn">
        <a href="{{ route('login')  }}" class="btn btn-primary">
            Ja possui conta? Faça login
        </a>
    </x-slot>

    <section id="task_section">
        <h1>Registre-se</h1>

        <form method="POST" action="{{route('user.register_action')}}">
            @csrf

            @if($errors->any())
                <ul class="alert alert-error">
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <x-form.text_input
                name="name"
                label="Seu nome"
                required=""
                type="text"
                placeholder="Digite seu nome"
            ></x-form.text_input>

            <x-form.text_input
                name="email"
                label="Seu E-mail"
                required=""
                type="email"
                placeholder="Digite Seu e-mail"
            ></x-form.text_input>

            <x-form.text_input
                name="password"
                label="Sua Senha"
                required=""
                type="password"
                placeholder="Digite uma senha"
            ></x-form.text_input>

            <x-form.text_input
                name="password_confirmation"
                label="Confirme sua senha"
                required=""
                type="password"
                placeholder="Confirme sua senha"
            ></x-form.text_input>




            <x-form.botao_form
                name="Cadastre-se"
            ></x-form.botao_form>


        </form>
    </section>




</x-layout>
