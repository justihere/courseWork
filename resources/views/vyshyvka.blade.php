<html>
    <head>
        <title>
            Вишивка
        </title>
        
        <link href = "{{asset('css/vyshyvka.css')}}" rel="stylesheet">

   

    </head>
    <body>
        
        <div class="container_for_title">
            <p  align = "center">Вишивка</p>
        </div>
    
       
        @foreach($products as $product)
        <div class="wrapper">
            <div >
                <div >
                    <img src = "{{asset($product->product_img)}}">
                </div>
                <div class="labelImage">
                    <p class="labelImageContent">
                        {{$product->product_name}} </p>
                    <p class="price">{{$product->product_price}} ₴</p>
                    
                </div>
            </div>
        </div>
        @endforeach
            
        </div> 
        <p> </p>
        <div class="labelResize">
            <div class="finally_labelImage">
                <p align="center"><a lass="labelImageContent" href="/">На головну >></a></p>
            </div> 
        </div>

    </div>

    </body>
</html>