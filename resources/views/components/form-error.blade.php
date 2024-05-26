@props(['name'])

@error($name)
    <p {{$attributes->merge(['class' => 'default styles...'])}}>{{$message}}</p>
@enderror