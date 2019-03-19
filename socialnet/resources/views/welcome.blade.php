@extends('layouts.master')

<!--define the title section -->
@section('title')
    Welcome!
@endsection



@section('content')


        <div class="row">

                 <div class="col-md-6">
                     <h3>Sign Up</h3>
                         <form action="#" method="post">
 
                                 <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="text" name="email" class="form-control">
                                    <label for="first_name">Your First Name</label>
                                    <input type="text" name="first_name" class="form-control">
                                    <label for="email">Your Last Name</label>
                                    <input type="text" name="last_name" class="form-control">
                                
                                             
                                 </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
 
                 </div>

                 <div class="col-md-6">
                    <h3>Sign in</h3>
                        <form action="#" method="post">

                                <div class="form-group">
                                   <label for="email">Your Email</label>
                                   <input type="text" name="email" class="form-control">
                                   <label for="email">Your Password</label>
                                   <input type="text" name="password" class="form-control">
                                            
                                </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>

                </div> 
        </div>
 

     
   
@endsection