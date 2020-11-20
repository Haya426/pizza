@extends("layout.layout")
@section("content")

<div class="container mt-4">
    <h1 class="grey-text d-inline">Welcome from Pizza Project</h1>
    <img src="{{asset('images/pizzalogo.png')}}" class="img-reponsive mt-3">
@if(Session("success"))
    <div class="alert alert-success">
    {{Session("success")}}
    </div>
@endif

    <!-- Material form login -->
<div class="card mt-3">

    <h5 class="card-header indigo white-text text-center py-4">
      <strong>Pizza order form</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
    
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="{{route('order')}}" method="post" >
        @csrf
        <!-- Email -->
        <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="username">
            <label for="materialLoginFormEmail">Customer Name</label>
            @error("username")
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        <div class="md-form">
          <input type="text" id="materialLoginFormEmail" class="form-control" name="pizza_name">
          <label for="materialLoginFormEmail">Pizza Name</label>
          @error("pizza_name")
          <p class="text-danger">{{$message}}</p>
      @enderror
        </div>
  
        <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="toppings">
            <label for="materialLoginFormEmail">Toppings</label>
            @error("toppings")
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="sauce">
            <label for="materialLoginFormEmail">Sauce</label>
            @error("sauce")
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
  
          <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="price">
            <label for="materialLoginFormEmail">Price</label>
            @error("price")
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Order</button>
        <!-- Register -->
        <p>Not a member?
          <a href="">Register</a>
        </p>
  
        <!-- Social login -->
        <p>or sign in with:</p>
        <a type="button" class="btn-floating btn-fb btn-sm">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a type="button" class="btn-floating btn-tw btn-sm">
          <i class="fab fa-twitter"></i>
        </a>
        <a type="button" class="btn-floating btn-li btn-sm">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a type="button" class="btn-floating btn-git btn-sm">
          <i class="fab fa-github"></i>
        </a>
  
      </form>
      <!-- Form -->
  
    </div>
  
  </div>
  <!-- Material form login -->
</div>
 @endsection