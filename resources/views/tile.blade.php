<li class="c-panel">
    <div class="c-panel_left">
        <img src="{{ asset('assets/images/') }}/{{$content['status']}}.png">
        <p class="c-panel_left-status">{{$content['status']}}</p>
        <p class="c-panel_left-released">*: {{$content['bornAt']}}</p>
        @if(!empty($content['diedAt']))
            <p class="c-panel_left-died">🕇: {{$content['diedAt']}}</p>
        @endif
        @if(!empty($content['review']))
            <p><a style="text-decoration: underline" target="_blank" href="{{$content['review']}}">Review here</a></p>
        @endif
        @if(!empty($content['statement']))
            <p><a style="text-decoration: underline" target="_blank" href="{{$content['statement']}}">Official Statement</a></p>
        @endif
    </div>
    <div class="c-panel_right">
        <h2>{{$content['title']}}</h2>
        @isset($content['developer'])
            <p class="c-panel_right-developer"><strong>Developer</strong>: {{$content['developer']}}</p>
        @endisset
        <p>{{$content['description']}}</p>
    </div>
</li>
