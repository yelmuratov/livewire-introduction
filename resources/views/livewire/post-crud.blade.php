<div class="p-5">
    <button wire:click="create" class="btn btn-primary">Create Post</button>
    @if ($isOpen)
        @include('livewire.create-edit-modal')
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <button wire:click="edit({{ $post->id }})" class="btn btn-primary">Edit</button>
                        <button wire:click="delete({{ $post->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
