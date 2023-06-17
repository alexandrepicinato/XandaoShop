<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Cartdata;
use App\Models\Products_list;
use App\Models\Sellers_list;
use App\Models\Selllogindata;
use App\Models\Userlogindata;
class profile extends Controller
{
    public function __construct(Sellers_list $sellers_list, Selllogindata $selllogindata, Userlogindata $Userlogindata, Products_list $Products_list){
        $this->Sellers_list = $sellers_list;
        $this -> Selllogindata = $selllogindata;
        $this -> Userlogindata = $Userlogindata;
        $this -> Products_list = $Products_list;
        $this -> Sellers_list = $sellers_list;


    }
    public function storeform(){
        return view('NewStore');
    }
    public function storeclient(Request $Request){
        $this->Sellers_list->create([
            'name'=>  $Request -> name,
            'bannerimg'=> $Request ->image,
            'document'=>  $Request -> document,
            'number'=>$Request -> number,
            'url_to_sell'=>$Request-> url_to_sell,
            'password'=>$Request->password,
            'namefantasy' => $Request ->namefantasy,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
    public function  clientLogin (Request $Request ){
        $password =($Request->password);
        //Valida se o usuario e senha existem dentro do banco de dados 
        $loginloja = $this -> Sellers_list ->where('document', $Request->user) ->where('password',$password )->get();
        //Caso o usuario exista ele cria o token de acesso 
        if (count($loginloja) > 0){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 50; $i++) {
               $randomString .= $characters[rand(0, $charactersLength - 1)];
           }
           $token = $randomString.md5(date('y-m-d'));
           //Armazena ele nos cookies do navegador 
            setcookie('mireliAuthToken', $token);
            //Armazenando uma copia tambem dentro do banco de dados para conferencia do backend
            $this->Selllogindata->create([
                'iduser'=>$loginloja[0] -> name,
                'sellerid'=> $loginloja[0] -> id,
                'token'=>  $token,
                'hash'=> md5(date('y-m-d')),
                'netandress' => $_SERVER['REMOTE_ADDR'],
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
            return redirect('/store/'.$loginloja[0] -> id);
            
        }
        else{
            //Caso nao corresponda o usuario e senha é avisado que os dados são invalidos 
            return view('erroscreen', [
                'errorcode'=>"Error",
                'description'=>"Falha Ao Logar Dados Invalidos"
            ]);
        }
    }
    public function buynow($p1){
        $loginloja = $this -> Sellers_list ->where('id', $p1)->get();
        return redirect($loginloja[0]->url_to_sell);

    }
}
