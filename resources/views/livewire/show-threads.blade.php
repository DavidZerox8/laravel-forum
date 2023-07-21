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
                                Avatar
                            </div>
                            <div class="w-full">
                                <h2 class="mb-4 flex items-start justify-between">
                                    <a href="" class="text-xl font-semibold text-white/90">
                                        {{ $threadItem->title }}
                                    </a>
                                    <span class="rounded-full text-xs py-2 px-4 capitalize" style="color: teal; border: 1px solid teal;">
                                        Nombre Categoría
                                    </span>
                                </h2>
                                <p class="flex items-center justify-between w-full text-xs">
                                    <span class="text-blue-600 font-semibold">
                                        Usuario
                                        <span class="text-white/90">
                                            {{ $threadItem->created_at->diffForHumans() }}
                                        </span>
                                    </span>
                                    <span class="text-slate-700">
                                        Respuestas y Botón
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else

            @endif
        </div>
    </div>
</div>
