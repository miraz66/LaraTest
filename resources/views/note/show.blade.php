<x-layout>
    <div class="h-screen flex items-center">
        <div class="py-10 max-w-2xl px-14 mx-auto bg-yellow-100 rounded-xl shadow-xl">
            <dd class="text-sm py-2 font-serif">Created-at: {{ $note->created_at }}</dd>
            <div class="text-neutral-600">
                {{ $note->note }}

            </div>
            <div class="pt-10 flex gap-5">
                <a class="text-white rounded-sm bg-neutral-500 px-8 py-2 hover:bg-slate-600 duration-200"
                    href="{{ route('note.edit', $note) }}">Edit</a>
                <button class="bg-red-500 px-8 py-2 rounded-sm text-white hover:bg-red-400 duration-200">Delete</button>
            </div>
        </div>
    </div>
</x-layout>
