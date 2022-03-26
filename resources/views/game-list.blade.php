<x-layout>
    <x-slot name="title">Game list</x-slot>
    <h1>Game list</h1>

    <table>
        <tr>
            <th>Title</th>
            <th>Release Year</th>
            <th>System</th>
            <th>Completed</th>
            <th></th>
        </tr>
        @foreach($games as $game)
        <tr>
            <td>{{$game->title}}</td>
            <td>{{$game->releaseYear}}</td>
            <td>{{$game->system}}</td>
            <td>{{$game->completedYesNo()}}</td>
            <td><a href="/games/{{$game->id}}">View</a></td>
        </tr>
        @endforeach
    </table>
</x-layout>
