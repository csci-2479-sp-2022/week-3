<x-layout>
    <h1>{{$game->title}}</h1>
    <p>Release year: {{$game->releaseYear}}</p>
    <p>System: {{$game->system}}</p>
    <p>Completed {{$game->completedYesNo()}}</p>
    <p><a href="/games">Go back</a></p>
</x-layout>
