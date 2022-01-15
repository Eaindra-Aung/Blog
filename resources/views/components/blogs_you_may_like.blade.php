@props(['blog', 'ramdomBlogs'])

<section class="blogs_you_may_like">
      <div class="container">
        <h3 class="text-center my-4 fw-bold">Blogs You May Like</h3>
        <div class="row text-center">
          @foreach($ramdomBlogs as $blog)
          <div class="col-md-4 mb-4">
              <x-blogs-card :blog="$blog" />
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </section>