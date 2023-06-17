<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .banner{
            background-color: rgb(55, 231, 158);
        }
        .banner>div>div{
            display: flex;
            justify-content: center;
        }
        .banner>div>div>div{
            padding: 5%;
        }
        .banner>div>div>div>img{
            width: 100%;
            max-width: 200px;
        }
        .banner>div>div>div>h1{
            width: 100%;
        }
        .micontainer{
            background-color: rgb(245,245,245);
        }
        .productsslider{
            display: grid;
            grid-template-columns: repeat(3, 1fr);

        }
        @media only screen and (hover: none) and (pointer: coarse){
            .productsslider{
            display: grid;
            grid-template-columns: repeat(1, 1fr);

        }
        }
        .productdiv{
            padding: 5%;
        }
        .productsbox{
            background-color: rgb(200,200,200);
            border-radius: 25px;
            width: 100%;
            aspect-ratio: 1/1;
            display: block;
        }
        .productsbox:hover{
            transform:scaleX(0.95);
        }
        .productsbox >div>div{
            width: 100%;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: flex-start;
            align-items: center;
        }
        .productsbox >div>div>img{
            width: 80%;
            border-radius: 100%;
            aspect-ratio: 1/1;
        }
        .productsbox >div>div>h1{
            text-align: center;
        }
        .tableproducts{
            width: 100%;
        }
        table{
            width:100%
        }
        .tableproducts >tr{
            width: 100%;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
            text-align: center;
        }
        .tableproducts >tr>td{
            width: 100%;

        }
        .tableproducts >tr>td>div{
            width: 100%;
        }
        .tableproducts >tr>td>div>img{
            width: 100%;
            max-width: 500px;
        }
        .bt{
            border: 1px solid #25692A;
            border-radius: 4px;
            display: inline-block;
            cursor: pointer;
            font-family: Verdana;
            font-weight: bold;
            font-size: 13px;
            padding: 6px 10px;
            text-decoration: none;
        }
        .bt:active {
            position: relative;
            top: 2px;
        }
        .btred{
            border-color: #f59f78;
            background: linear-gradient(to bottom, #ee1818 5%, #fc6f12 100%);
            box-shadow: inset 0px 1px 0px 0px #d7ecfd;
            color: #fff;
            text-shadow: 0px 1px 0px #528009;
        }
        .btred:hover {
            background: linear-gradient(to bottom, #f3a96c 5%, #e23737 100%);
        }
        .btgreen{
            border-color: #adfd9c;
            background: linear-gradient(to bottom, #00f566 5%, #00fa00 100%);
            box-shadow: inset 0px 1px 0px 0px #d7ecfd;
            color: #fff;
            text-shadow: 0px 1px 0px #528009;
        }
        .btgreen:hover {
            background: linear-gradient(to bottom, #38d424 5%, #18be2e 100%);
        }
    </style>
</head>
<body>
    <div>
        <div>
            <div class="banner">
                <div>
                    <div>
                        <div>
                            <img src="{{$products[0] ->product_image}}"/>
                            <h1>{{$products[0] ->productname}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <div>
                                                <div>
                                                    <div>
                                                        <div>
                                                            <p>{{$products[0]-> product_description}}</p>
                                                        </div>
                                                        <div>
                                                            <h5 style="color:green;">Preço Original:R${{$products[0] ->product_price}}</h5>
                                                            <h4 style="color:green;">Preço Promocional :R${{$products[0]->promotion_price}}</h4>
                                                        </div>
                                                        <div>
                                                            <a href="/buynow/{{$sellerid}}"><button class="bt btred">Comprar Agora</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>