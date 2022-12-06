<x-app-layout>
@if (session('status'))
    <div class="text-black m-2 p-4 bg-green-200">
        {{ session('status') }}
    </div>
@endif
@if (session('edit'))
    <div class="text-black m-2 p-4 bg-yellow-200">
        {{ session('edit') }}
    </div>
@endif
@if (session('delete'))
    <div class="text-black m-2 p-4 bg-red-200">
        {{ session('delete') }}
    </div>
@endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 bg-sky-500 border border-gray-300 rounded-md font-semibold text-xs text-black uppercase tracking-widest shadow-sm hover:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Add new post</a><br><br>
                    
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-base text-left text-gray-700 dark:text-gray-400">
                            <thead class="text-sm text-gray-800 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="flex justify-between">
                                    <th scope="col" class="py-3 px-6">
                                        Title
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Post
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Category
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr class="flex justify-between bg-white border-b dark:bg-gray-800 dark:border-gray-700">                                    
                                    <td class="py-4 px-6">
                                        {{ $post->title }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $post->post_text }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $post->category->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                            <a href="{{ route('posts.edit', $post) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" >Edit</a>                     
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Delete</button>
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
    </div>
</x-app-layout>
