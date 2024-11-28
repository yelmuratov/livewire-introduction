<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h3 class="text-lg font-bold mb-4">{{ $postId ? 'Edit Post' : 'Create Post' }}</h3>

            <form>
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title</label>
                    <input type="text" id="title" wire:model="title" class="shadow appearance-none border rounded w-full py-2 px-3">
                    @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-gray-700">Content</label>
                    <textarea id="content" wire:model="content" class="shadow appearance-none border rounded w-full py-2 px-3"></textarea>
                    @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button wire:click.prevent="store" class="btn btn-success">Save</button>
                    <button wire:click.prevent="closeModal" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
