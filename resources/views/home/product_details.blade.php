<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />


      <style media="screen">
        /* Basic Styling */
  html, body {
    height: 100%;
    width: 100%;
    margin: 0;
    font-family: 'Roboto', sans-serif;
  }
   
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 15px;
    display: flex;
  }
  
  
  /* Columns */
  .left-column {
    width: 65%;
    position: relative;
  }
   
  .right-column {
    width: 35%;
    margin-top: 60px;
  }
  
  
  /* Left Column */
  .left-column img {
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    transition: all 0.3s ease;
  }
   
  .left-column img.active {
    opacity: 1;
  }
  
  
  /* Product Description */
  .product-description {
    border-bottom: 1px solid #E1E8EE;
    margin-bottom: 20px;
  }
  .product-description span {
    font-size: 12px;
    color: #358ED7;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
  }
  .product-description h1 {
    font-weight: 300;
    font-size: 52px;
    color: #43484D;
    letter-spacing: -2px;
  }
  .product-description p {
    font-size: 16px;
    font-weight: 300;
    color: #86939E;
    line-height: 24px;
  }
  
  
  /* Product Color */
  .product-color {
    margin-bottom: 30px;
  }
   
  .color-choose div {
    display: inline-block;
  }
   
  .color-choose input[type=&amp;quot;radio&amp;quot;] {
    display: none;
  }
   
  .color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
    display: inline-block;
    width: 40px;
    height: 40px;
    margin: -1px 4px 0 0;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 50%;
  }
   
  .color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
    border: 2px solid #FFFFFF;
    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
  }
   
  .color-choose input[type=&amp;quot;radio&amp;quot;]#red + label span {
    background-color: #C91524;
  }
  .color-choose input[type=&amp;quot;radio&amp;quot;]#blue + label span {
    background-color: #314780;
  }
  .color-choose input[type=&amp;quot;radio&amp;quot;]#black + label span {
    background-color: #323232;
  }
   
  .color-choose input[type=&amp;quot;radio&amp;quot;]:checked + label span {
    background-image: url(images/check-icn.svg);
    background-repeat: no-repeat;
    background-position: center;
  }
  
  
  /* Cable Configuration */
  .cable-choose {
    margin-bottom: 20px;
  }
   
  .cable-choose button {
    border: 2px solid #E1E8EE;
    border-radius: 6px;
    padding: 13px 20px;
    font-size: 14px;
    color: #5E6977;
    background-color: #fff;
    cursor: pointer;
    transition: all .5s;
  }
   
  .cable-choose button:hover,
  .cable-choose button:active,
  .cable-choose button:focus {
    border: 2px solid #86939E;
    outline: none;
  }
   
  .cable-config {
    border-bottom: 1px solid #E1E8EE;
    margin-bottom: 20px;
  }
   
  .cable-config a {
    color: #358ED7;
    text-decoration: none;
    font-size: 12px;
    position: relative;
    margin: 10px 0;
    display: inline-block;
  }
  .cable-config a:before {
    content: &amp;quot;?&amp;quot;;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    border: 2px solid rgba(53, 142, 215, 0.5);
    display: inline-block;
    text-align: center;
    line-height: 16px;
    opacity: 0.5;
    margin-right: 5px;
  }
  
  /* Product Price */
  .product-price {
    display: flex;
    align-items: center;
  }
   
  .product-price span {
    font-size: 26px;
    font-weight: 300;
    color: #43474D;
    margin-right: 20px;
  }
   
  .cart-btn {
    display: inline-block;
    background-color: #7DC855;
    border-radius: 6px;
    font-size: 16px;
    color: #FFFFFF;
    text-decoration: none;
    padding: 12px 30px;
    transition: all .5s;
  }
  .cart-btn:hover {
    background-color: #64af3d;
  }
      </style>

   </head>
   <body>
      <div class="hero_area">
            {{-- htan to header seaction edw  --}}
            @include('home.header')
            <!-- slider section -->


            <div style="padding-bottom:150px;"class="container">
     
                <!-- Left Column / Headphones Image -->
                <div style="margin-left:260px;" class="left-column">
                  <img style="width: 280px; margin-right:40px;" data-image="black" src="product/{{$product->image}}" alt="">
                  <img style="width: 280px; margin-right:40px;" data-image="blue" src="product/{{$product->image}}" alt="">
                  <img style="width: 280px; margin-right:40px;" data-image="red" class="active" src="product/{{$product->image}}" alt="">
                </div>
               
               
                <!-- Right Column -->
                <div class="right-column">
               
                  <!-- Product Description -->
                  <div class="product-description">
                    <span>{{$product->catagory}}</span>
                    <h1>{{$product->title}}</h1>
                    <p>{{$product->description}}</p>
                  </div>
               
                  <!-- Product Configuration -->
                  <div class="product-configuration">
               
                    <!-- Product Color -->
            
               
                    <!-- Cable Configuration -->
                    <div class="cable-config">
                      <span>Cable configuration</span>
               
                      <a href="#">How to configurate your headphones</a>
                    </div>
                  </div>
                  {{-- style="border:1px double rgb(71, 71, 71); padding : 17px; padding-right:0px;" --}}
                <div>
                  <h6>Price :</h6>
                  <!-- Product Pricing -->
                  <div class="product-price">
                       
                    @if ($product->discount_price !=null)

                    <span style="color : rgb(14, 42, 108)">
                        
                       {{$product -> discount_price}}$
                    </span>
                       
                    <span style="text-decoration: line-through red; color : rgb(5, 13, 98)">
                     
                       
                       {{$product->price}}$
                    </span>
    
                    @else
    
                    <span >
                       {{$product->price}}$
                    </span>
                        
                    @endif
                    {{-- <span>148$</span> --}}
                        <br>
                        <br>
                        <h1></h1>                    
                    <a  href="#" class="cart-btn">Add to cart</a> 
                  </div>
                </div>
              </div>
            </div>
          
  
{{-- 
      <div style="margin: auto;  padding:30px;" class="col-sm-6 col-md-4 col-lg-4">
       

        <div style="width: 420px; padding:25px;">
           <div style="width:381px;" class="img-box">
              <img style="width:381px; height:274px;"
              src="product/{{$product->image}}" alt="">
           </div >
           <div class="detail-box" style="width:381px;>
              <h3 style="text-shadow:1px 1px 2px black,0 0 2px ">
                {{$product->title}} 
              </h3>
               



                @if ($product->discount_price !=null)

                <h4 style="color : rgb(165, 11, 11)">
                    Discount Price:
                   ${{$product -> discount_price}}
                </h4>
                   
                <h6 style="text-decoration: line-through red; color : rgb(5, 13, 98)">
                    Price :
                   
                   ${{$product->price}}
                </h6>

                @else

                <h4 style="color :rgb(37, 12, 141)">
                  Price : ${{$product->price}}
                </h4>
                    
                @endif

                <h6>Product Catagory : {{$product->catagory}}</h6>

                <h6>Description : {{$product->description}}</h6>

                <h6>Quantity : {{$product->quantity}}</h6>

                <a class="btn btn-primary" href="">Add to Cart</a>
           </div>

            
           </div>
        </div>
     </div>
         --}}



            <!-- subscribe section -->
            @include('home.suscribe')
            <!-- end subscribe section -->
            
            <!-- client section -->
            @include('home.client')
            <!-- end client section -->
            <!-- footer start -->
            @include('home.footer')
            <!-- footer end -->

      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="/home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="/home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="/home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="/home/js/custom.js"></script>
   </body>
</html>