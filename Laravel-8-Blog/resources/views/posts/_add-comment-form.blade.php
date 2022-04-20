@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" id="" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                    placeholder="Quick, think of something to say!" required></textarea>

                @error('body')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror

            </div>

            <div class="flex justify-end border-t border-gray-200 mt-6 pt-6">
                <x-form.button>Post</x-form.button>
            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold"><a href="/register" class="hover:underline">Register</a> or <a href="/login"
            class="hover:underline">log in</a> to post a
        comment!</p>
@endauth