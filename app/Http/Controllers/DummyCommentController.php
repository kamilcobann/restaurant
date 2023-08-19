<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyCommentController extends Controller
{
    public function getComments()
    {
        $data=[];

        for($i = 1; $i<20; $i++){
            array_push($data,
                [
                    "id"=> $i, "comment"=> "Comment $i", "customer_name"=> "Customer $i", "customer_image"=> "https://picsum.photos/50/50?random=$i"
                ]
            );
        }
       
        array_push($data,[                    "id"=> 21, "comment"=> "
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa ea tempora inventore optio consequuntur natus rem temporibus vel eaque ad?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa ea tempora inventore optio consequuntur natus rem temporibus vel eaque ad?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa ea tempora inventore optio consequuntur natus rem temporibus vel eaque ad?", "customer_name"=> "Customer 21", "customer_image"=> "https://picsum.photos/50/50?random=$21"
    ]);
        return response()->json([
            'status' => true,
            'dummy_data' => $data,
        ]);
    }
}
