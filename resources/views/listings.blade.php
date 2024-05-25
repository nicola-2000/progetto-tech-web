<x-layout>
    <x-slot:heading>
        Listings page
    </x-slot:heading>
    <ul>
        @foreach ($listings as $listing)
            <li>
                <a class="link-tertiary" href='/listings/{{$listing['id']}}'>
                Title: {{ $listing['title'] }}</strong> pays: {{ $listing['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
