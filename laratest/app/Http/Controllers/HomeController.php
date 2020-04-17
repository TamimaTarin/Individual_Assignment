<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){

		

		return view('home.index');
	}    

	public function list(){

		$buses = $this->getbusList();
		return view('home.view_buses', ['buses'=> $buses]);
	}
	public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30|min:8',
            'operator' => 'required|max:30|min:3',
            'seat_row' => 'required',
            'seat_column' => 'required',
            'route' => 'required',
            'fare' => 'required',
            'departure' => 'required',
			'arrival'=>'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['operator']=$request->operator;
        $data['seat_row']=$request->seat_row;
        $data['seat_column']=$request->seat_column;
        $data['route']=$request->route;
        $data['fare']=$request->fare;
        $data['departure']=$request->departure;
        $data['arrival']=$request->arrival;
        $buses=DB::table('buses')->insert($data);
		if($data->save()){
			return redirect()->route('home.list');
		}else{
			return redirect()->route('home.add');
		}

    }

	public function edit(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30|min:8',
            'operator' => 'required|max:30|min:3',
            'seat_row' => 'required',
            'seat_column' => 'required',
            'route' => 'required',
            'fare' => 'required',
            'departure' => 'required',
			'arrival'=>'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['operator']=$request->operator;
        $data['seat_row']=$request->seat_row;
        $data['seat_column']=$request->seat_column;
        $data['route']=$request->route;
        $data['fare']=$request->fare;
        $data['departure']=$request->departure;
        $data['arrival']=$request->arrival;
        $buses=DB::table('buses')->where('id',$id)->update($data);
		if($data->save()){
			return redirect()->route('home.list');
		}else{
			return redirect()->route('home.edit');
		}
    }
	public function delete($id)
    {
        $buses=DB::table('buses')->where('id',$id)->delete();
       return redirect()->route('home.list');
        
    }
}