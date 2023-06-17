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
                            <img src="https://i.pinimg.com/originals/a6/d6/a9/a6d6a98b0692fb33917d1a4384c369fd.png"/>
                            <h1>Nome Da Loja </h1>
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
                                                            <div>
                                                                <div>
                                                                    <div>
                                                                        <div class="productsslider">
                                                                        @if ($products->count() > 0)
                                                                        @foreach ($products as $item)

                                                                            <div class="productdiv">
                                                                                <div class="productsbox">
                                                                                    <div>
                                                                                        <div>
                                                                                            <img src="{{$item -> product_image}}"/>
                                                                                            <h1>{{$item -> productname}}</h1>
                                                                                            <h4>{{$item -> product_description}}</h4>
                                                                                            <p>{{$item -> promotion_price}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @endif
                                                                        </div>
                                                                        <div>
                                                                            <div>
                                                                                <div>
                                                                                    @if ($products->count() > 0)

                                                                                    <table>
                                                                                        <tbody class="tableproducts">
                                                                                        @foreach ($products as $item)
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div>
                                                                                                        <img src="{{$item -> product_image}}" />
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <h1>{{$item -> productname}}</h1>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <h4>R${{$item -> product_price}}</h4>
                                                                                                    <h4>R${{$item -> promotion_price}}</h4>
                                                                                                </td>
                                                                                                <td>
                                                                                                    @if($logued == 1)
                                                                                                    <a href="/store/{{$item -> seller_id}}/produto/{{$item -> id}}/updateform"><button  class="bt btred">Atualizar Produtos </button></a>
                                                                                                    <a href="/store/{{$item -> seller_id}}/produto/{{$item -> id}}/delete"><button  class="bt btred">Deletar  Produtos </button></a>
                                                                                                    @endif
                                                                                                    <a href="/store/{{$item -> seller_id}}/produto/{{$item -> id}}"><button  class="bt btgreen">Detalhes do Produto </button></a>                                                                                                </td>
                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="/store/{{$idloja}}/cadastrar"><button class="bt btred">Novo Produto </button></a>
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
    </div>
</body>
</html>