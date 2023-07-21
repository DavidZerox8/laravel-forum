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


                @if (isset($is_editing) and $is_editing)
                    <form wire:submit.prevent="updateReply" class="mt-4">
                        <input class="bg-slate-800 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs" wire:model.defer="body" type="text" name="body" id="body" placeholder="Escribe una respuesta">
                    </form>
                @else
                    <p class="text-white/60 text-xs">
                        {{ $reply->body }}
                    </p>
                @endif

                @if (isset($is_creating) and $is_creating)
                    <form wire:submit.prevent="postChild" class="mt-4">
                        <input class="bg-slate-800 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs" wire:model.defer="body" type="text" name="body" id="body" placeholder="Escribe una respuesta">
                    </form>
                @else

                @endif

                <p class="mt-4 text-white/60 text-xs flex gap-2 justify-end">

                    @if (is_null($reply->reply_id))
                        <a class="hover:text-white" href="#" wire:click.prevent="$toggle('is_creating')">
                            {{ $is_creating ? 'Cancelar' : 'Responder' }}
                        </a>
                    @else

                    @endif

                    @can ('update', $reply)
                        <a class="hover:text-white" href="#" wire:click.prevent="$toggle('is_editing')">
                            Editar
                        </a>
                    @endcan
                </p>
            </div>
        </div>
    </div>

    @if (isset($reply->replies) and count($reply->replies))
        @foreach ($reply->replies as $replyItem)
            <div class="ml-8">
                @livewire('show-reply', ['reply' => $replyItem], key('reply-' . $replyItem->id))
            </div>
        @endforeach
    @else

    @endif
</div>
