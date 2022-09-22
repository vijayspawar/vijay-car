<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Support\Facades\Hash;
use Auth;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	
    public function index()
    {
        $cars = Car::orderBy('id','desc')->get();
        return view('cars.index',['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner = Owner::orderBy('id','desc')->get();
		return view('cars.create',['owner'=>$owner]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([            
            'number' => 'required',
            'model' => 'required',
            'color' => 'required',
            'engine_type' => 'required',
            'owner_id' => 'required',
            'car_category' => 'required',            
            
        ]);
		$data = $request->all();
		$saved = Car::create($data);		
		return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$car = Car::find($id);         
        $owner = Owner::orderBy('id','desc')->get();       
        return view('cars.edit',['car' => $car,'owner'=>$owner]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
		$car = Car::find($id);
        $request->validate([
            'number' => 'required',
            'model' => 'required',
            'color' => 'required',
            'engine_type' => 'required',
            'owner_id' => 'required',
            'car_category' => 'required'
        ]);	
		$car->update($request->all());
		 return redirect('/cars');
		
    }

    

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
