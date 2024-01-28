<div>
    @isset($data)
        <nav class="rounded-md font-bold my-auto flex p-3 border border-gray-600">
            <ol class="inline-flex items-center space-x-1 md:space-x-2" id="url_header">
                @foreach ($data as $title => $link)
                    @if (!is_null($link))
                        <li><a href="{{ $link }}" class="text-gray-500 hover:text-black">{{ $title }}</a>
                        </li>
                        <li><span class="text-gray-500 mx-2"><i class="fas fa-angle-right"></i></span></li>
                    @else
                        <li class="text-black font-bold">{{ $title }}</li>
                    @endif
                @endforeach
            </ol>
        </nav>
    @endisset
</div>
