<div class="people-list col-lg-4" id="people-list">
    <div class="search" style="text-align: center">
        <a href="{{url('/home')}}" style="font-size:16px; text-decoration:none; color: white;"><i class="fa fa-user"></i>&nbsp; {{ucwords(auth()->user()->first_name . ' ' . auth()->user()->surname)}}</a>
    </div>
    <ul class="list">
    
        @foreach($threads as $inbox)
            {{-- Only display family members --}}
            @if($inbox->withUser->linked_to_family == Auth::user()->linked_to_family)
                @if(!is_null($inbox->thread))
            <li class="clearfix">
                <a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">
                <img src="{{$inbox->withUser->avatar}}" alt="avatar" />
                <div class="about">
                    <div class="name">{{ucwords($inbox->withUser->first_name . ' ' . $inbox->withUser->surname)}}</div>
                    <div class="status">
                        @if(auth()->user()->id == $inbox->thread->sender->id)
                            <span class="fa fa-reply"></span>
                        @endif
                        <span>{{substr($inbox->thread->message, 0, 20)}}</span>
                    </div>
                </div>
                </a>
            </li>
                @endif
            @endif
        @endforeach
    

    </ul>
</div>
