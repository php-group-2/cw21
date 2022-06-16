@forelse ($tasks as $task)
    <a href="{{ route('tasks.show', $task) }}">{{ $task->id }}</a> - {{ $task->title }}
    {{ $task->deadline ? '- ' . $task->deadline : '' }}
    <a href="{{ route('tasks.edit', $task) }}">Edit</a>
    {{-- <a href="/tasks/{{ $task->id }}/edit">Edit</a> --}}
    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@empty
    <p>No tasks found</p>
@endforelse
<a href="{{ route('tasks.create') }}">Create a Task</a>
