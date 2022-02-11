@props(['comments'])
<section class="container">
    <div class="col-md-8 mx-auto">
        <h5 class="my-3 text-secondary">Comment 3</h5>
        <!-- single comment section -->
        @foreach ($comments  as $comment) 
        <!-- range(1,3) as $item 1 -->
        <x-single-comment :comment="$comment"/>
        @endforeach
    </div>
</section>