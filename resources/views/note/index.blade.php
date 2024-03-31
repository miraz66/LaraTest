<x-app-layout>
    <div class="max-w-5xl mx-auto py-20 ">
        <div class="flex justify-between">
            <p
                class="font-semibold text-3xl text-neutral-700 relative after:absolute after:bg-yellow-500 after:h-1 after:left-0 after:w-full after:-bottom-2">
                New Notes</p>
            <a href="{{ route('note.create') }}"
                class="bg-yellow-200 py-3 px-14 flex items-center rounded-md hover:bg-yellow-300 ease-in-out duration-200">
                New Note
            </a>
        </div>

        <div class="pt-10 grid grid-cols-3 auto-rows-auto gap-6">
            @foreach ($notes as $note)
                <div
                    class="py-6 bg-yellow-100 px-5 flex flex-col justify-between rounded-md shadow-md hover:shadow-lg hover:shadow-yellow-300 ease-in-out duration-200">
                    <p>ID: {{ $note->id }}</p>
                    <div class="text-neutral-600">
                        {{ Str::words($note->note, 50) }}

                        <dd class="text-sm py-2 font-serif">{{ $note->created_at }}</dd>
                    </div>
                    <div class="pt-4 flex gap-5">
                        <a class="text-white rounded-md bg-neutral-500 px-4 py-1 hover:bg-slate-600 duration-200 flex items-center"
                            href="{{ route('note.show', $note) }}">View</a>
                        <a class="text-white rounded-md bg-neutral-500 px-4 py-1 hover:bg-slate-600 duration-200 flex items-center"
                            href="{{ route('note.edit', $note) }}">Edit</a>

                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 px-8 py-2 rounded-sm text-white hover:bg-red-400 duration-200">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10 p-4 flex flex-col">
            {{ $notes->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>
