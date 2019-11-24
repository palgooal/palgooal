<div class="owl-carousel">
        @foreach ($works as $work)
            
        @if (App::isLocale('en'))
        
        <div class="member">
                <div class="member-details">
                <img src="{{asset('/images/'.$work->image)}}" class="img-responsive" alt=""></a>
                <div class="overlay">
                <div class="member-info-overlay">
                <h4><a href="{{$work->url}}" target="_blank">{{$work->name_en}}</a></h4>
                </div>
                </div>
                </div>
                <div class="member-info">
                <h4>{{$work->name_en}}</h4>
                </div>
                </div>
        
        @else
        
        <div class="member">
                <div class="member-details">
                <img src="{{asset('/images/'.$work->image)}}" class="img-responsive" alt=""></a>
                <div class="overlay">
                <div class="member-info-overlay">
                <h4><a href="{{$work->url}}" target="_blank">{{$work->name_ar}}</a></h4>
                </div>
                </div>
                </div>
                <div class="member-info">
                <h4>{{$work->name_ar}}</h4>
                </div>
                </div>
        
        @endif
                
                @endforeach
  </div> 
