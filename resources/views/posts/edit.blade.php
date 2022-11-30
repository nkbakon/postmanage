<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h5 class="font-bold text-center text-black">Edit Post</h5><br>
                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @method('PUT')
                        @csrf
                        Title:
                        <br>
                        <input type="text" name="title" value="{{ $post->title }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                        <br><br>
                        Post:
                        <br>
                        <textarea name="post_text" cols="30" rows="5" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ $post->post_text }}</textarea>                        
                        <br><br>
                        Category:
                        <br>
                        <select name="category_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                            <option value="" disabled>Select a category from here</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected($category->id == $post->category_id)>{{ $category->name }}</option>
                            @endforeach
                        </select>                                               
                        <br><br>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-sky-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-400 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Save</button>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
