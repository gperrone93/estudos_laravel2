<div class="task">
    <div class="title">
        <input type="checkbox" onchange="taskUpdate(this)" data-id = "{{$data['id']}}"
        @if($data['is_done'])
            checked
        @endif
        />
        <div class="task_title"> {{ $data['title'] ?? '' }} </div>
    </div>
    <div class="priority">
        <div class="sphere" style="background-color:{{$data['category']->color}};" > </div>
        <div class=""> {{ $data['category']->title ?? '' }} </div>
    </div>
    <div class="action">
        <a href="{{route('task.edit', ['id'=>$data['id']])}}">
            <img src="/assets/images/icon-edit.png" />
        </a>
        <a href="{{route('task.delete', ['id'=>$data['id']] )}}">
            <img src="/assets/images/icon-delete.png" />
        </a>
    </div>
</div>
