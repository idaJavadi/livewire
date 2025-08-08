<div>
    @foreach($tasks as $task)
        <livewire:task-item :task="$task" :key="$task['id']"></livewire:task-item>
    @endforeach
</div>
