<x-layout page="Dashboard">


    <x-slot name="btn">
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar Tarefa
        </a>

        <a href="{{route('logout')}}" class="btn btn-primary">
            Sair
        </a>

    </x-slot>


    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>

            <div class="graph_header-date">

                <a href="{{ route('home', ['date' => $data['date_prev_button'] ]) }}"> <img src="/assets/images/icon-prev.png"> </a>

                {{ $data['date_as_string'] }}

                <a href="{{ route('home', ['date' => $data['date_next_button'] ]) }}"> <img src="/assets/images/icon-next.png"> </a>

            </div>
        </div>
        <div class="graph_header-subtitle">
            <b>Tarefas: 3/6</b>
        </div>
        <div class="graph-placeholder">

        </div>

        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png">
            Restam 3 Tarefas para serem realizadas
        </div>

    </section>

    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="tast_list">

            @foreach($data['tasks'] as $task)
                <x-task :data=$task ></x-task>
            @endforeach
        </div>
    </section>

    <script>
        async function taskUpdate(element){
            let status = element.checked;
            let taskId = element.dataset.id;
            let url = '{{route('task.update')}}'

            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type' : 'application/json',
                    'accept' : 'pplication/json'
                },
                body: JSON.stringify({status, taskId, _token: '{{ csrf_token() }}'})
            });

            if(result.success) {
                alert('Task Atualizada');
            }else {
                element.status = !element.status;
            }
        }
    </script>

</x-layout>


