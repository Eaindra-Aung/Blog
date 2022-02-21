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
                <input required type="email" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" 
                name="email" value="{{old('email')}}">
                <x-error name="email"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input required type="password" class="form-control" id="exampleInputPassword1" 
                name="password">
                <x-error name="password"/>
            </div>
            <button type="submit" class="btn btn-primary"
            >Submit</button>
            <ul>
            <x-error name="submit"/>
            </ul>
        
            </form>
         </div>
        </div>
   </div>
</div>
</x-layout>