@extends("layout.layout")
@section("content")

<div class="container mt-4">
    <h2 purple-text mt-5>Welcome from pizza project!</h2>

    <!-- Material form login -->
<div class="card mt-3">

    <h5 class="card-header indigo white-text text-center py-4">
      <strong>Pizza order form</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="#!">
  
        <!-- Email -->
        <div class="md-form">
            <input type="email" id="materialLoginFormEmail" class="form-control">
            <label for="materialLoginFormEmail">Customer Name</label>
          </div>
        <div class="md-form">
          <input type="email" id="materialLoginFormEmail" class="form-control">
          <label for="materialLoginFormEmail">Pizza Name</label>
        </div>
  
        <div class="md-form">
            <input type="email" id="materialLoginFormEmail" class="form-control">
            <label for="materialLoginFormEmail">Toppings</label>
          </div>
          <div class="md-form">
            <input type="email" id="materialLoginFormEmail" class="form-control">
            <label for="materialLoginFormEmail">Sauce</label>
          </div>
  
          <div class="md-form">
            <input type="email" id="materialLoginFormEmail" class="form-control">
            <label for="materialLoginFormEmail">Price</label>
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