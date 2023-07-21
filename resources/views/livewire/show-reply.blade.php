<div>
    <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
        <div class="p-4 flex gap-4">
            <div>
                <img class="rounded-md" src="{{ $reply->user->avatar() }}" alt="{{ $reply->user->name }}">
            </div>
            <div class="w-full">

                <p class="mb-2 flex text-blue-600 font-semibold text-xs">
                    {{ $reply->user->name }}
                </p>
                <p class="text-white/60 text-xs">
                    {{ $reply->body }}
                </p>
                <p class="mt-4 text-white/60 text-xs flex gap-2 justify-end">
                    <a class="hover:text-white" href="">
                        Responder
                    </a>
                    <a class="hover:text-white" href="">
                        Editar
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
