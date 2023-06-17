<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Cartdata;
use App\Models\Products_list;
use App\Models\Sellers_list;
use App\Models\Selllogindata;
use App\Models\Userlogindata;

class products extends Controller
{
    public function __construct(Sellers_list $sellers_list, Selllogindata $selllogindata, Userlogindata $Userlogindata, Products_list $Products_list){
        $this->Sellers_list = $sellers_list;
        $this -> Selllogindata = $selllogindata;
        $this -> Userlogindata = $Userlogindata;
        $this -> Products_list = $Products_list;

    }
    public function productssell($p1){
        $itensloja = $this -> Products_list ->where('seller_id',$p1)->get();
        if(isset($_COOKIE['mireliAuthToken'])){
            $logued=1;
        }
        else{
            $logued=0;
        }
        return view('SellStore',
        [
            'products' => $itensloja,
            'idloja' => $p1,
            'logued' => $logued
        ]);
    }
    public function productdata($p1,$p2){
        $itendata = $this -> Products_list ->where('id',$p2)->get();
        $selldata = $this -> Sellers_list ->where('id',$p1)->get();

        return view('ProductsDetail',
        [
            'products' => $itendata,
            'sellerdata'=>$selldata,
            'sellerid' =>$p1
        ]);
    }
    public function NewProductForm($p1, Request $Request){
        return view('NewProduct');
    }
    public function newproduct($p1, Request $Request){
        $check = $this -> Selllogindata -> where('token', $_COOKIE['mireliAuthToken']) ->get();
        if (count($check) > 0){
            if($p1 = $check[0] -> sellerid){
                $newitem =$this ->  Products_list ->create([
                    'productname'=> $Request -> name,
                    'product_description'=> $Request ->description,
                    'product_price'=> $Request->value,
                    'promotion_price'=> $Request->promovalue,
                    'product_image'=> $Request -> image." ",
                    'product_seller'=> $p1,
                    'seller_id'=> $p1,
                    'productname'=> $Request ->name,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString()
        
                ]);
                return redirect("/store/".$p1."/");
    
            }
            else{
                return view('erroscreen', [
                    'errorcode'=>"Error",
                    'description'=>"Voce Nao esta logado como este usuario para mecher nos produtos dele "
                ]);
            }
        }
        else{
                return view('erroscreen', [
                    'errorcode'=>"Error",
                    'description'=>"Voce Nao esta logado como este usuario para mecher nos produtos dele "
                ]);
        }
    }
    public function updateForm ($p2){
        $itendata = $this -> Products_list ->where('id',$p2)->get();
        return view('UpdateProduct', [
            'iteninfo' => $itendata
        ]);

    }
    public function updateProduct($p2, Request $Request){
        if(isset($_COOKIE['mireliAuthToken'])){
            $check = $this -> Selllogindata -> where('token', $_COOKIE['mireliAuthToken']) ->get();
        }
        else{
            $check =[];
        }
        if (count($check) > 0){
            if($p1 = $check[0] -> sellerid){
                $newitem =$this ->  Products_list ->where('id', $p2) -> update([
                    'productname'=> $Request -> name,
                    'product_description'=> $Request ->description,
                    'product_price'=> $Request->value,
                    'promotion_price'=> $Request->promovalue,
                    'product_image'=> $Request -> image." ",
                    'product_seller'=> $p1,
                    'seller_id'=> $p1,
                    'updated_at' => Carbon::now()->toDateTimeString(),
                    'productname'=> $Request ->name
        
                ]);
                return redirect("/store/".$p1."/");
    
            }
            else{
                return view('erroscreen', [
                    'errorcode'=>"Error",
                    'description'=>"Voce Nao esta logado como este usuario para mecher nos produtos dele "
                ]);
            }
        }
        else{
                return view('erroscreen', [
                    'errorcode'=>"Error",
                    'description'=>"Voce Nao Esta Logado "
                ]);
        }
    }
    public function deleteProduct($p2, Request $Request){
        if(isset($_COOKIE['mireliAuthToken'])){
            $check = $this -> Selllogindata -> where('token', $_COOKIE['mireliAuthToken']) ->get();
        }
        else{
            $check =[];
        }
        if (count($check) > 0){
            if($p1 = $check[0] -> sellerid){
                $newitem =$this ->  Products_list ->where('id', $p2) -> delete();
                return redirect("/store/".$p1."/");
    
            }
            else{
                return view('erroscreen', [
                    'errorcode'=>"Error",
                    'description'=>"Voce Nao esta logado como este usuario para mecher nos produtos dele "
                ]);
            }
        }
        else{
                return view('erroscreen', [
                    'errorcode'=>"Error",
                    'description'=>"Voce Nao esta logado  "
                ]);
        }
    }
}
