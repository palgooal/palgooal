<div style="text-align: center; padding: 20px;">
        <h2 style="margin:0; padding: 0;">Hover to pause the slider</h2>
        
        <div class="wrapper">
                @foreach ($works->take(5) as $work)
                <div id="@if($loop->first) rotate-slider @endif">
            
                <a href="http://blog.dota2.com/" target="_blank"><img src="{{asset('images/'.$work->image)}}" alt="DOTA 2"/></a>
           
            </div>
        </div>
        @endforeach

    </div>
    

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>