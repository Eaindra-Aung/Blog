<x-layout>
    <!-- single blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div>
            <div>Author - <a href="/users/{{$blog->author->username}}">
              {{$blog->author->name}}</a></div>
             <div><a href="/categories/{{$blog->category->slug}}"><span class="badge bg-primary">{{$blog->category->name}}</span></a></div>
            <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
          </div>
          <p class="lh-md mt-3">
             {{$blog->body}}
          </p>
        </div>
      </div>
    </div>
     <!-- new section for comment box  -->
     <section class="container">
       <div class="col-md-8 mx-auto">
        @auth
        <x-card-wrapper>
          <form action ="/blogs/{{$blog->slug}}" method="POSt">
            <div class="mb-3">
            <textarea name="body" class="form-control border-0" cols="10" rows="5" placeholder="say something...."></textarea> 
            @error('body')
              <p class="text-danger">{{$message}}</p>
            @enderror
          
          </div>
            <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Submit</button></div>
          </form>
        </x-card-wrapper>
        @else
        <p class="text-center">Please <a href="/login">Log In</a> </p>
        @endauth
       </div>
     </section>
    <!-- //comment section -->
    <x-comments :comments="$blog->comments"/>
  
    <!-- subscribe new blogs -->
    <x-subscribe />
    <x-blogs_you_may_like :ramdomBlogs="$ramdomBlogs" />
    <!-- footer -->
</x-layout>
         


