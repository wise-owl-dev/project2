<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('posts.create') }}" 
                       class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                        Add new post
                    </a>
                    
                    <br /><br />
                    
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b text-left">Title</th>
                                <th class="px-6 py-3 border-b text-left">Category</th>
                                <th class="px-6 py-3 border-b text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 border-b">{{ $post->title }}</td>
                                    <td class="px-6 py-4 border-b">{{ $post->category->name }}</td>
                                    <td class="px-6 py-4 border-b">
                                        <a href="{{ route('posts.edit', $post) }}" 
                                           class="text-blue-600 hover:text-blue-900">
                                            Edit
                                        </a>
                                        
                                        <form method="POST" action="{{ route('posts.destroy', $post) }}" 
                                              class="inline-block ml-4">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    onclick="return confirm('Are you sure?')"
                                                    class="text-red-600 hover:text-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>