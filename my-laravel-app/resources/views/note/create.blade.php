<x-layout>
    <div class="w-full max-w-2xl bg-white shadow-soft rounded-xl p-6">
        <h1 class="text-2xl font-semibold text-primary text-center mb-6">📝 Create Note</h1>

        <form action="{{ route('note.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-600 font-medium">Note:</label>
                <textarea name="note" rows="5" class="w-full p-3 border rounded-lg focus:ring focus:ring-indigo-300" required></textarea>
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('note.index') }}" class="bg-gray-300 px-4 py-2 rounded-lg shadow-md hover:bg-gray-400 transition">🔙 Cancel</a>
                <button type="submit" class="bg-primary px-4 py-2 text-white rounded-lg shadow-md hover:bg-indigo-600 transition">
                    ✅ Save
                </button>
            </div>
        </form>
    </div>
</x-layout>
