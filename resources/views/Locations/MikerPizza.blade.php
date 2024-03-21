@extends('Locations.LocationsHeader')

@section('content')
<div class="container d-flex justify-content-center">
<h1 style="font-family: Poppins;">Select your food.</h1>
<br><br>
</div>
<br><br>

<div class="container"> 
        <div class="row"> 
        <div class="col-md-6">
    <div class="card" style="width: 18rem;">
  <img src="https://www.southernliving.com/thmb/3x3cJaiOvQ8-3YxtMQX0vvh1hQw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/2652401_QFSSL_SupremePizza_00072-d910a935ba7d448e8c7545a963ed7101.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pepperoni Pizza | RM 15.00</h5>
    <p class="card-text">Made with fresh ingredients ! Every bite warms your heart </p>
    <form action="">
      @csrf
      <input type="text">
      <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </form>
  </div>
</div>
    </div>

    <div class="col-md-6">
    <div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzQa8RqLHQhFAAtTPdOhT840TTeBjRhFBt0g&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mushroom Soup | RM 6.50</h5>
    <p class="card-text">Made with fresh ingredients ! Hot and Delicacy. </p>
    <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping"></i></a>
  </div>
</div>
    </div>
        </div> 
    </div>
    <br><br> <!--SPACING BETWEEN CARDS-->
    <div class="container"> 
        <div class="row"> 
        <div class="col-md-6">
    <div class="card" style="width: 18rem;">
  <img src="https://www.simplyrecipes.com/thmb/5JwdiUjcSPTxyuhmdqv8pM8kWs0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Garlic-Bread-METHOD-2-3-1c5f5cfa8bf6408c84c0596eea83f8e8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Garlic Bread | RM 10.00</h5>
    <p class="card-text">Made with fresh ingredients ! Soft and tasteful ! </p>
    <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping"></i></a>
  </div>
</div>
    </div>

    <div class="col-md-6">
    <div class="card" style="width: 18rem;">
  <img src="https://www.paintthekitchenred.com/wp-content/uploads/2023/01/Air-fryer-frozen-chicken-wings-L1-Paint-the-Kitchen-Red.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chicken Wings | RM 10.00</h5>
    <p class="card-text">Made with fresh ingredients ! Spicy or Regular?. </p>
    <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping"></i></a>
  </div>
</div>
    </div>
        </div> 
    </div>







@endsection