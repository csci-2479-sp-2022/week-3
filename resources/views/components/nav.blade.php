<div>
    {{ $heading }}
    {{ $slot }}

    @foreach($links as $link)
    <a href="{{$link['url']}}">{{$link['text']}}</a>
    @endforeach
</div>
