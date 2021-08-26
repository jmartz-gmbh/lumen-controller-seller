<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function latest(Request $request){
        $connection = DB::table('sellers');

        $sellers = $connection->get();

        $this->addData('shops',$sellers);
        $this->addMessage('success','All your Sellers.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function id(Request $request, int $id){
        $seller = DB::table('sellers')
            ->where('id','=',$id);

        $count = $seller->count();

        if($count === 1){
            $this->addData('seller',$seller->first());
        }
        else{
            $this->addMessage('success','Seller doesnt exists.');
        }

        return $this->getResponse();
    }

    public function key(Request $request, string $key){
        $seller = DB::table('sellers')
            ->where('key','=',$key);

        $count = $seller->count();

        if($count === 1){
            $this->addData('seller',$seller->first());
        }
        else{
            $this->addMessage('success','Seller doesnt exists.');
        }

        return $this->getResponse();
    }
}
