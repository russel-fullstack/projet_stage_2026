<div class="space-y-1.5" x-data="{ currentLevel: '{{ $selected }}' }">
    <label class="block text-xs font-black text-gray-900">Niveau visé</label>
    <div class="p-1.5 bg-gray-100/80 rounded-2xl flex items-center gap-1">
        @foreach($levels as $level)
            <button
                type="button"
                @click="currentLevel = '{{ $level }}'"
                :class="currentLevel === '{{ $level }}' ? 'bg-white text-[#002266] shadow-sm font-black' : 'text-gray-500 font-bold hover:text-gray-700'"
                class="flex-1 py-2.5 text-xs rounded-xl transition-all text-center"
            >
                {{ $level }}
            </button>
        @endforeach
        <input type="hidden" name="level" :value="currentLevel">
    </div>
</div>
