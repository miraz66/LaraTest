<x-layout>
    <div class="max-w-5xl mx-auto py-20 ">
        <div class="flex justify-between">
            <p
                class="font-semibold text-3xl text-neutral-700 relative after:absolute after:bg-yellow-500 after:h-1 after:left-0 after:w-full after:-bottom-2">
                New Notes</p>
            <button class=""></button>
        </div>

        <div class="pt-10 grid grid-cols-3 auto-rows-auto gap-6">
            @foreach ($notes as $notes)
                <div class="py-6 bg-yellow-100 px-5 flex flex-col justify-between rounded-md shadow-md">
                    <div class="text-neutral-600">
                        {{ Str::words($notes->note, 50) }}

                        <dd class="text-sm py-2 font-serif">{{ $notes->created_at }}</dd>
                    </div>
                    <div class="pt-4 flex gap-5">
                        <a class="text-white rounded-md bg-neutral-500 px-4 py-1 hover:bg-slate-600 duration-200"
                            href="{{ route('note.show', $notes) }}">View</a>
                        <a class="text-white rounded-md bg-neutral-500 px-4 py-1 hover:bg-slate-600 duration-200"
                            href="{{ route('note.edit', $notes) }}">Edit</a>
                        <button
                            class="bg-red-500 px-6 py-1 rounded-md text-white hover:bg-red-400 duration-200">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
