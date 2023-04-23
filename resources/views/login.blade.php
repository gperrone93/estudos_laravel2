<x-layout page="Login">
    <x-slot name="btn">
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot>

    Tela de login
    <a href="{{route('home')}}">
        Ir para home
    </a>
</x-layout>
