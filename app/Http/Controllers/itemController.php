<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class itemController extends Controller
{
    public function getFeatured(){
        $res=DB::select("SELECT * from item where featured=1");
        return view("home")->with("res",$res);
    }

    public function getItem(){
        $res=DB::select("SELECT * from item");
        return view("shop")->with("res",$res);
    }

    public function addToCart($itemID,$userID){
        $userID=Session::get('userID');
        $cartItems=DB::select("select * from cart where userID='$userID' and itemID='$itemID'");

        if(count($cartItems)==0){
           $query=DB::insert("INSERT into cart(itemID,userID,quantity) values('$itemID' , '$userID' , 1)");
        }
        else{
            $query=DB::update("update cart set quantity=quantity+1  where userID='$userID' and itemID='$itemID'");
        }

        return redirect("/shop");
        
    }

    public function getCartItems(){
        $userID=Session::get('userID');
        $data=DB::select("select cart.id as cartID , item.imgPath as imgPath , item.name as itemName ,
        item.price as price , cart.quantity as quantity from cart inner join item on cart.itemID=item.id 
        where cart.userID=$userID");


        $total=DB::select("select sum(cart.quantity * item.price) as total from 
        cart inner join item on cart.itemID=item.id where cart.userID=$userID");
        return view("cart",with(["data"=>$data,"total"=>$total[0]->total]));
    }

    public function deleteFromCart($cartID){

        $query=DB::delete("delete from cart where id='$cartID'");
        return redirect("/cart");

    }

    public function checkout(){
        $userID=Session::get('userID');
        $insertInvoice=DB::insert("insert into invoice (userID) values('$userID')");
        $LastinvoiceID=DB::select("select id from invoice where userID=1 order by id desc");
        $data = DB::select("select cart.itemID as itemID,item.price as price ,
        cart.quantity as quantity from cart inner join item on item.id=cart.itemID where cart.userID=1");
        $invoiceID=$LastinvoiceID[0]->id;
        foreach($data as $cartRow){
            $insertOrder=DB::insert("insert into orders(itemID,userID,price,quantity,invoiceID)
             values(?,?,?,?,?)",[$cartRow->itemID , $userID , $cartRow->price , $cartRow->quantity , $invoiceID]);
        }
        $deleteQuery=DB::delete("delete from cart where userID='$userID'");
        return redirect("/home");
    }






}
