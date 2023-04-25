<x-layout page="Login">
    <x-slot name="btn">
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot>

    <section id="task_section">
        <h1>Entrar</h1>

        <form method="POST" action="{{route('user.login_action')}}">
            @csrf

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





            <x-form.botao_form
                name="Entrar"
            ></x-form.botao_form>


        </form>
    </section>





</x-layout>
