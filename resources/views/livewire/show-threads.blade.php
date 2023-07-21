<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-10 py-12">
        <div class="w-64">
            <a href="" class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
                Preguntar
            </a>

            {{-- List start --}}
            <ul>
                @if (isset($categories) and count($categories))
                    <li class="mb-2">
                        <a href="" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                            <span class="w-2 h-2 rounded-full" style="background-color: lightgreen;"></span>
                            Todos los resultados
                        </a>
                    </li>
                    @foreach ($categories as $categoryItem)
                        <li class="mb-2">
                            <a href="" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                                <span class="w-2 h-2 rounded-full" style="background-color: {{ $categoryItem->color }};"></span>
                                {{ $categoryItem->name }}
                            </a>
                        </li>
                    @endforeach
                @else
                    <li class="mb-2">
                        <a href="" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                            <span class="w-2 h-2 rounded-full" style="background-color: black;"></span>
                            Aún no hay categorias
                        </a>
                    </li>
                @endif
            </ul>

        </div>
        <div class="w-full">

            {{-- Search form here --}}

            @if (isset($threads) and count($threads))
                @foreach ($threads as $threadItem)
                    <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
                        <div class="p-4 flex gap-4">
                            <div>
                                <img class="rounded-md" src="{{ $threadItem->user->avatar() }}" alt="{{ $threadItem->user->name }}">
                            </div>
                            <div class="w-full">
                                <h2 class="mb-4 flex items-start justify-between">
                                    <a href="" class="text-xl font-semibold text-white/90">
                                        {{ $threadItem->title }}
                                    </a>
                                    <span class="rounded-full text-xs py-2 px-4 capitalize" style="color: {{ $threadItem->category->color }}; border: 1px solid {{ $threadItem->category->color }};">
                                        {{ $threadItem->category->name }}
                                    </span>
                                </h2>
                                <p class="flex items-center justify-between w-full text-xs">
                                    <span class="text-blue-600 font-semibold">
                                        {{ $threadItem->user->name }}

                                        <span class="text-white/90">
                                            {{ $threadItem->created_at->diffForHumans() }}
                                        </span>
                                    </span>
                                    <span class="text-slate-700 flex items-center gap-1">
                                        <svg class="h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"></path>
                                        </svg>
                                         {{ $threadItem->replies_count }} {{ $threadItem->replies_count !== 1 ? 'Respuestas' : 'Respuesta' }} {{-- Este campo sale de la consulta al especificar el "withCount('replies')" --}}
                                        | <a href="" class="hover:text-white">Editar</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($threads->hasPages())
                    <div class="px-6 py-3">
                        {{ $threads->links() }}
                    </div>
                @else
                @endif
            @else

            @endif
        </div>
    </div>
</div>
