<div class="container mt-5">
    <h1 class="mb-4">Posts Management</h1>

    <!-- Form -->
    <form wire:submit.prevent="{{ $isEditMode ? 'update' : 'create' }}">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea class="form-control" wire:model="content"></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ $isEditMode ? 'Update' : 'Create' }}</button>
    </form>

    <!-- Display Posts -->
    <table class="table mt-4">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" wire:click="edit({{ $post->id }})">Edit</button>
                        <button class="btn btn-danger btn-sm" wire:click="delete({{ $post->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="alert alert-success mt-3">{{ session('message') }}</div>
    @endif
</div>
