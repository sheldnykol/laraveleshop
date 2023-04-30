<!DOCTYPE html>
<html lang="en">

    <base href="/public">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
            
        }
        .font_size
        {
          font-size: 40px;
          padding-bottom: 40px;
        }

        .text_color
        {
          color :black;
        }

        label
        {
          display: inline-block;
          width: 400px;
        }
        
        .div_design
        {
          padding-bottom : 15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">


              @if(session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" 
                aria-hidden="true">x</button>

                {{session()->get('message')}}

              </div>

              @endif


                <div class="div_center">
                    <h1 class="font_size">Update Product</h1>
                    

                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_design">
                    <label>Product Title :</label>
                    <input value="{{$product->title}}" class="text_color" type="text" name="title" placeholder="Write a title " required="">
                    </div>

                    <div class="div_design">
                      <label>Product Description :</label>
                      <input value="{{$product->description}}"class="text_color" type="text" name="description" placeholder="Write a description " required="">
                      </div>
                
                      <div class="div_design">
                        <label>Product Price :</label>
                        <input value="{{$product->price}}" class="text_color" type="number" name="price" placeholder="Write a price " required="">
                        </div> 

                        <div class="div_design">
                          <label>Discount Price :</label>
                          <input  value="{{$product->discount_price}}" class="text_color" type="number" name="discount" placeholder="Write a discount price ">
                          </div>


                        <div>
                          <label class="div_design">Product Quantity :</label>
                          <input value="{{$product->quantity}}" class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="">
                          </div>

                            <div class="div_design">
                              <label>Product Catagory :</label>
                              <select class="text_color" name="catagory" required="">
                                <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>
                                
                                @foreach ($catagory as $catagory)

                                <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                                  
                                  
                              @endforeach
                                
                              </select>

                              </div>
                              <div class="div_design">
                                <label>Current Product Image  :</label>
                                <img height="100" width="100" style="margin:auto" src="/product/{{$product->image}}" >
                                </div>

                              <div class="div_design">
                                <label>Change Product Image  :</label>
                                <input type="file" name="image">
                                </div>


                                <div class="div_design">
                              
                                <input type="submit" value="Update Product" class="btn btn-primary">
                                </div>
                              
                              
                  </form>            
                  </div>


                </div>
            </div>
      {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>