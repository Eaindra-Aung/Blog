<x-layout>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card p-4 my-3 shadow-sm">
                <h1>Log In</h1>
            <form method="POST" >
                @csrf
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" 
                name="email" value="{{old('email')}}">
                @error('email')
                   <p class="text-danger">{{$message}}</p> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" 
                name="password">
                @error('password')
                   <p class="text-danger">{{$message}}</p> 
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            </form>
         </div>
        </div>
   </div>
</div>
</x-layout>