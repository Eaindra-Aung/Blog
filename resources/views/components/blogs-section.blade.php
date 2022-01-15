@props(['blogs'])

   <!-- @props(['blog','data'=>'this is data'])  -->
<!-- default value set up -->


<section class="container text-center" id="blogs">
      <h1 class="display-5 fw-bold mb-4">Blogs</h1>
      <div class="">
        <x-category-dropdown />
        <!-- <select name="" id="" class="p-1 rounded-pill mx-3">
          <option value="">Filter by Tag</option>
        </select> -->
      </div>
      <form action="/" method="GET"  class="my-3">
        <div class="input-group mb-3">
          @if(request('category'))
          <input
          name="category"
            type="hidden"
            value="{{request('search')}}"
          />
          @endif
          @if(request('username'))
          <input
          name="username"
            type="hidden"
            value="{{request('username')}}"
          />
          @endif
          <input
          name="username"
            type="text"
            value="{{request('username')}}"
            autocomplete="false"
            class="form-control"
            placeholder="Search Blogs..."
          />
          <button
            class="input-group-text bg-primary text-light"
            id="basic-addon2"
            type="submit"
          >
            Search
          </button>
        </div>
      </form>
      <div class="row">
        @forelse($blogs as $blog)
          <div class="col-md-4 mb-4">
             <x-blogs-card :blog="$blog" />
          </div>
          @empty
        <p class="text-center">No Blogs Found.</p>
        @endforelse
        {{$blogs->links()}} 
      </div>
    </section>