
@props(['comment'])

<x-card-wrapper >
              <div class="d-flex">
                <div>
                    <img src="{{$comment->author->avatar}}" 
                    width="50"
                    height="50"
                    class="rounded-circle"
                    alt="">
                </div>
                <div class="ms-3">
                    <h6>{{$comment->author->name}}</h6>
                    <p class="text-secondary">{{$comment->created_at->diffForHumans()}}</p>
                    <!-- format("F j,Y, g:i a") -->
                </div>
             </div>
           <p class="mt-3">
             {{$comment->body}}
           </p>
</x-card-wrapper>