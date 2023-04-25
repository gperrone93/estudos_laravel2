<x-layout>
    <x-slot name="btn">
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot>

    <section id="task_section">
        <h1>Editar Tarefa</h1>

        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}"/>

            <x-form.checkbox_input
                name="is_done"
                label="Titulo das Task"
                required=""
                checked="{{$task->is_done}}"
            ></x-form.checkbox_input>

            <x-form.text_input
                name="title"
                label="Titulo das Task"
                required=""
                placeholder="Digite o titulo da Tarefa"
                value="{{$task->title}}"
            ></x-form.text_input>

            <x-form.text_input
                name="due_date"
                label="Data de Realização"
                required=""
                placeholder=""
                type="datetime-local"
                value="{{$task->due_date}}"

            ></x-form.text_input>


            <x-form.select_input
                name="category_id"
                label="categoria"
            >
                @foreach($categories as $cat)
                    <option
                        value="{{$cat->id}}"
                        @if($cat->id == $task->category_id)
                            selected
                        @endif
                    >{{$cat->title}}</option>
                @endforeach

            </x-form.select_input>

            <x-form.textarea_input
                label="Descrição"
                name="description"
                id="description"
                placeholder="Descrição da Task"
                value="{{$task->description}}"
            ></x-form.textarea_input>

            <x-form.botao_form
                name="Editar Tarefa"
            ></x-form.botao_form>


        </form>
    </section>
</x-layout>
