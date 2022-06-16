{{ $task->id }}- {{ $task->title }}
{{ $task->deadline ? '- ' . $task->deadline : '' }}
{{ $task->description ? '- ' . $task->description : '' }}
<a href="{{ route('tasks.edit', $task) }}">Edit</a>
{{-- <a href="/tasks/{{ $task->id }}/edit">Edit</a> --}}
<form action="{{ route('tasks.destroy', $task) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('tasks.index') }}">tasks</a>
