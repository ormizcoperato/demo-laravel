@props(['active' => false])

<a {{$attributes}}
   class="{{ $active ? 'bg-gray-700 text-white':'text-gray-300 hover:bg-gray-500 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium mr-5"
   aria-current="{{$active?'page':'false'}}"
>
    {{$slot}}
</a>
