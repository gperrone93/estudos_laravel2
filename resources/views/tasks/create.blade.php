<x-layout>
    <x-slot name="btn">
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot>

    <section id="task_section">
        <h1>Criar Tarefa</h1>

        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input
                name="title"
                label="Titulo das Task"
                required=""
                placeholder="Digite o titulo da Tarefa"
            ></x-form.text_input>

            <x-form.text_input
                name="due_date"
                label="Data de Realização"
                required=""
                placeholder=""
                type="datetime-local"
            ></x-form.text_input>


            <x-form.select_input
                name="category_id"
                label="categoria"
            >
                @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                @endforeach

            </x-form.select_input>

            <x-form.textarea_input
                label="Descrição"
                name="description"
                id="description"
                placeholder="Descrição da Task"
            ></x-form.textarea_input>

            <x-form.botao_form
                name="Atualizar Tarefa"
            ></x-form.botao_form>


        </form>
    </section>
</x-layout>
