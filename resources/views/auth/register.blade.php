<x-layout>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card p-4 my-3 shadow-sm">
                <h1>Register Form</h1>
            <form method="POST" action="/register">
                @csrf
                <!-- name -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" 
                name="name" value="{{old('name')}}">
                <x-error name="name" />
                
            </div>
            <!-- username -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" 
                name="username" value="{{old('username')}}">
                <x-error name="username" />
                
            </div>
            <!-- email -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input   type="email" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" 
                name="email" value="{{old('email')}}">
                  <x-error name="email"/>
            </div>
            <!-- password  -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input  required type="password" class="form-control" id="exampleInputPassword1" 
                name="password">
                <x-error name="password"/>
            </div>
            <!-- submit  -->
                <button  type="submit" class="btn btn-primary">Submit</button>
                <ul>
                <x-error name="submit"/>
                </ul>
            <!-- <ul>
             @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
               
            </ul> -->
            </form>
         </div>
        </div>
   </div>
</div>
</x-layout>