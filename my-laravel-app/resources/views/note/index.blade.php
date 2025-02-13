<x-layout>
    <div class="w-full max-w-3xl bg-white shadow-soft rounded-xl p-6">
        <h1 class="text-2xl font-semibold text-primary text-center mb-6">📒 Laravel Notes</h1>

        <!-- New Note Button -->
        <div class="flex justify-end mb-4">
            <a href="{{route('note.create')}}" class="bg-primary px-4 py-2 rounded-lg shadow-md hover:text-white hover:bg-indigo-600 transition">
                ➕ New Note
            </a>
        </div>

        <!-- Notes List -->
        <div class="space-y-4">
            @foreach ($notes as $note)
                <div class="bg-softBg p-4 rounded-lg shadow-soft border border-gray-200">
                    <p class="text-lg font-medium">{{ Str::words($note->note,30) }}</p>
                    <div class="flex justify-end space-x-2 mt-2">
                        <a href="{{route('note.show', $note)}}" class="text-primary hover:underline">🔍 View</a>
                        <a href="{{route('note.edit', $note)}}" class="text-green-500 hover:underline">✏️ Edit</a>
                        <a href="{{route('note.destroy', $note)}}" class="text-red-500 hover:underline">🗑 Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
