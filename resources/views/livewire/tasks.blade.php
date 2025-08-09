<div>
    <h1>وظایف</h1>
    <p>این صفحه برای نمایش وظایف است</p>
    <form wire:submit.prevent="addTask" class="mb-4">
        <input type="text" wire:model="newTask" class="form-control mb-2" placeholder="وظیفه جدید" >
        <button type="submit"  class="btn btn-danger">افزودن تسک جدید</button>
    </form>

    <ul>
        @foreach($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$task->name}}
                <button class="btn btn-primary" wire:click="deleteTask({{$task->id}})">حذف وظیفه</button>
            </li>
        @endforeach
    </ul>
</div>
