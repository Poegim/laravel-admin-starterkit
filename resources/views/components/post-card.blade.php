<!-- This is an example component -->
<div class="w-full max-w-lg mx-auto h-full overflow-hidden rounded-lg">
    <div class="bg-white shadow-md border border-gray-200 max-w-md h-full">
        <div class="flex flex-col justify-between h-full">
            <div class="h-full">
                <a href="#">
                    @if (!$post->getFirstMediaUrl() == '')
                    <img class="h-full rounded-t-lg w-full object-cover" src="{{ $post->getFirstMediaUrl() }}"
                    alt="">
                    @else
                    <x-filament::icon
                    icon="heroicon-o-no-symbol"
                    class="max-h-fit w-full m-auto"
                    />
                    @endif
                </a>
            </div>
            <div class="p-5">
                <a href="#">
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{!!$post->title!!}</h5>
                </a>
                <p class="font-normal text-gray-400 dark:text-gray-600 mb-3">{{$post->excerpt()}}</p>
                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                    href="#">
                    Read more
                </a>
            </div>
        </div>
    </div>
</div>
