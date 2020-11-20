@extends("layout.layout")
@section("content")
<div class="container">
        <h1 class="purple-text">Pizza order list</h1>

        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Pizza Name</th>
                    <th scope="col">Toppings</th>
                    <th scope="col">Sauce</th>
                    <th scope="col">Price</th>
                    <th scope="col">order complete</th>
                    <th scope="col">Order edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td><button class="btn btn-sm btn-success">order complete</button></td>
                    <td><button class="badge btn-warning" data-toggle="modal" data-target="#modalLoginForm"> order edit</button></td>

                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Otto</td>
                    <td><button class="btn btn-sm btn-success">order complete</button></td>
                    <td><button class="badge btn-warning" data-toggle="modal" data-target="#modalLoginForm"> order edit</button></td>

                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>@twitter</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td><button class="btn btn-sm btn-success">order complete</button></td>
                    <td><button class="badge btn-warning "data-toggle="modal" data-target="#modalLoginForm"> order edit</button></td>

                </tr>
                </tbody>
              </table>

              <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Order</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="container">
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
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>
              </div>
 @endsection