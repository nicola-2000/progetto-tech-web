<!--direttiva per aggiungere dei props-->
@props(['isActive' => false])
    <a class="{{ $isActive ? 'bg-secondary' : ''}} nav-link link-underline-opacity-0"   
        {{$attributes}}>{{$slot}}
    </a>
