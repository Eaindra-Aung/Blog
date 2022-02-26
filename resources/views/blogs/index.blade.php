
<x-layout>
    <!-- navbar -->
    <!-- hero section -->
    @if (session('success'))
    <div class="alert alert-success text-center">Welcome! {{session('success')}}</div>
    @endif
    
     <x-hero />
    
    <!-- blogs section -->
  <x-blogs-section :blogs="$blogs" />

    <!-- subscribe new blogs -->
      
    <!-- footer -->
    
</x-layout>

