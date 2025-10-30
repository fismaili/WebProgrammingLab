<a {{$attributes}} class="text-white hover:underline py-2 {{ request()->is('/') ? 'text-yellow-400 font-bold' : '' }}">
    {{$slot}}
</a>