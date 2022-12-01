<!-- component -->
<div class="flex bg-white">
	<div class="md:flex w-2/5 md:w-1/4 h-screen sticky text-white top-0 bg-violet-500 border-r hidden">
		<div class="mx-auto py-10">
			<ul>
				<li class="{{ (request()->segment(1) == 'dashboard') ? 'bg-violet-700 border-violet-700': '' }} px-3 py-1 flex space-x-2 mt-10 rounded-md border border-violet-500 cursor-pointer hover:bg-violet-600 hover:border-violet-700">					
					<span class="font-semibold"><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></span>
				</li>
				@if (auth()->user()->is_admin)
				<li class="{{ (request()->segment(1) == 'categories') ? 'bg-violet-700 border-violet-700': '' }} px-3 py-1 flex space-x-2 mt-10 rounded-md border border-violet-500 cursor-pointer hover:bg-violet-600 hover:border-violet-700">					
					<span class="font-semibold"><a href="{{ route('categories.index') }}"><i class="fa fa-th-list"></i> Categories</a></span>
				</li>
				<li class="{{ (request()->segment(1) == 'posts') ? 'bg-violet-700 border-violet-700': '' }} px-3 py-1 flex space-x-2 mt-10 rounded-md border border-violet-500 cursor-pointer hover:bg-violet-600 hover:border-violet-700">					
					<span class="font-semibold"><a href="{{ route('posts.index') }}"><i class="fa fa-square-o"></i> Posts</a></span>
				</li>
				@endif
			</ul>
		</div>
	</div>
	<main class="min-h-screen w-full bg-white border-l">        
        {{ $slot }}		
    </main>
</div>
