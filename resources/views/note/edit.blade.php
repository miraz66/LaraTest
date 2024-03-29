<x-layout>
    <div class="h-screen flex items-center">
        <div class="py-10 max-w-2xl px-14 mx-auto bg-yellow-100 rounded-xl shadow-xl">
            <form action="{{ route('note.update', $note) }}">
                @csrf
                <textarea name="note" class="text-neutral-600 h-[35rem] w-[35rem] p-5 bg-yellow-50">
                    {{ $note->note }}
    
                </textarea>
                <div class="pt-10 flex gap-5">
                    <a class="text-white rounded-sm bg-neutral-500 px-8 py-2 hover:bg-slate-600 duration-200"
                        href="{{ route('note.index') }}">Cancel</a>
                    <button
                        class="bg-red-500 px-8 py-2 rounded-sm text-white hover:bg-red-400 duration-200">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
