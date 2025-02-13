<x-layout>
    <div class="w-full max-w-2xl bg-white shadow-soft rounded-xl p-6">
        <h1 class="text-2xl font-semibold text-primary text-center mb-6">🔍 View Note</h1>

        <div class="bg-softBg p-4 rounded-lg shadow-soft border border-gray-200">
            <p class="text-lg font-medium">{{ $note->note }}</p>
        </div>

        <div class="flex justify-end space-x-2 mt-4">
            <a href="{{ route('note.index') }}" class="bg-gray-300 px-4 py-2 rounded-lg shadow-md hover:bg-gray-400 transition">📜 All Notes</a>
            <a href="{{ route('note.edit', $note) }}" class="bg-green-500 px-4 py-2 text-white rounded-lg shadow-md hover:bg-green-600 transition">✏️ Edit</a>
            <form action="{{ route('note.destroy', $note) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 px-4 py-2 text-white rounded-lg shadow-md hover:bg-red-600 transition">🗑 Delete</button>
            </form>
        </div>
    </div>
</x-layout>
