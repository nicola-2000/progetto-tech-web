<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a class="link-tertiary" href='/jobs/{{$job['id']}}'>
                Title: {{ $job['title'] }}</strong> pays: {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
