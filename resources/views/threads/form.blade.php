<div>
    <select class="bg-slate-800 border-slate-900 w-full rounded-md p-3 text-white/60 text-xs capitalize mb-4" name="category_id" id="category_id" required>
        <option value="">-- Seleccionar categoría</option>
            @if (isset($categories) and count($categories))
                @foreach ($categories as $categoryItem)
                    <option {{ old('category_id', $thread->category_id) == $categoryItem->id ? 'selected' : '' }} value="{{ $categoryItem->id }}">{{ $categoryItem->name }}</option>
                @endforeach
            @else

            @endif
    </select>

    <input class="bg-slate-800 border-slate-900 w-full rounded-md p-3 text-white/60 text-xs capitalize mb-4" wire:model="search" type="text" name="title" id="" placeholder="Título" value="{{ old('title', $thread->title) }}">

    <textarea class="bg-slate-800 border-slate-900 w-full rounded-md p-3 text-white/60 text-xs capitalize mb-4" name="body" rows="10" placeholder="Descripción del problema">{{ old('body', $thread->body) }}</textarea>
</div>
