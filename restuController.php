<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\resturant as ModelsResturant;
use Illuminate\Http\Request;
use app\resturant;
use Illuminate\Support\Facades\Session;
// use Session;
use App\User;
use Crypt;



class restuController extends Controller
{
   public function index(){
        return view('home');
    }
  

    public function list(){

        $data=ModelsResturant::all();
        //  simplePaginate(2);
        return view('list',["data"=>$data]);
    }



    public function add(Request $req){
        

        $restu=new ModelsResturant(); 
        $restu->name=$req->input('name');
        $restu->email=$req->input('email');
        $restu->address=$req->input('address');
        $restu->save();

        $req->Session()->flash('status', 'You have submitted the page');

        return redirect('list');
    }


    public function delete(string $id){
        
        ModelsResturant::find($id)->delete();

        Session::flash('status', 'You have Deleted  the page');

        return redirect('list');
       
    }

    // public function delete(string $id){

    //     $user=ModelsResturant::table('resturants')
    //                             ->where('id',$id)
    //                             ->delete();
    //     redirect('list');
    // }

    public function edit($id){
        
        $data= ModelsResturant::find($id);

        return view('edit',compact('data'));
    }


    public function update(Request $req){
        

        $restu=ModelsResturant::find($req->input('id')); 
        $restu->name=$req->input('name');
        $restu->email=$req->input('email');
        $restu->address=$req->input('address');
        $restu->save();

        $req->Session()->flash('status', 'You have updated the page');

        return redirect('list');
    }


    public function register(Request $req){

        $user=new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->contact=$req->input('Number');
        $user->save();
        $req->Session()->put('user', $req->input('name'));

        return redirect('/');
    }

    public function login(Request $req){

        $user= User::where('email',$req->input('email'))->get();

        if(Crypt::decrypt($user[0]->password)==$req->input('password'))
        {
            $req->Session()->put('user', $user[0]->name);

            return redirect('/');
            
        }
       
    }




}
