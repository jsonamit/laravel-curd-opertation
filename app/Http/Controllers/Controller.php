<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
            $Clientdata = Client::select('*')->get();
            return view('home')->with(['client' => $Clientdata]);
    }
     public function insert(Request $request)
     {


                $Client = new Client([
                            'email' => $request->get('email'),
                            'qualification' => $request->get('qualification')
                 ]);
                 $Client->save();
                 $Clientdata = Client::select('*')->get();
                 return view('home')->with(['client' => $Clientdata]);
     }

        public function delete(Request $request)
          {

                    Client::where('id',$request->id)->delete();
                    $Clientdata = Client::select('*')->get();
                    return view('home')->with(['client' => $Clientdata]);
          }

     public function update(Request $request)
     {
         $Clientdata = Client::where('id',$request->id)->get();
         return view('update')->with(['client' => $Clientdata]);
     }

      public function updateclient(Request $request)
      {
            Client::where('id',$request->id)->update(
                [
                  'email' => $request->get('email'),
                  'qualification' => $request->get('qualification')
                ]
              );
            $Clientdata = Client::select('*')->get();
            return view('home')->with(['client' => $Clientdata]);
      }
}
