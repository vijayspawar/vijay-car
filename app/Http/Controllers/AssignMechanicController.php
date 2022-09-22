<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Mechaniccars;
use App\Models\Mechanic;

use Auth;
class AssignMechanicController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
	
	
    public function index()
    {
        $mechaniccars = Mechaniccars::orderBy('id','desc')->get();
        return view('mechanicCars.index',['mechaniccars' => $mechaniccars]);
    }

    
    public function create()
    {
        $owner = Owner::orderBy('id','desc')->get();
        $mechanic = Mechanic::orderBy('id','desc')->get();
		return view('mechanicCars.create',['owner'=>$owner,'mechanic'=>$mechanic]);
    }

    public function store(Request $request)
    {
      
        $request->validate([            
            'category' => 'required',
            'owner_id ' => 'required',
            'mechanic_id' => 'required',
                        
            
        ]);
		$data = $request->all();
		$saved = Mechaniccars::create($data);		
		return redirect('/assignMechanic');
    }

    public function edit($id)
    {
		$Mechaniccars = Mechaniccars::find($id);         
        $owner = Owner::orderBy('id','desc')->get();
        $mechanic = Mechanic::orderBy('id','desc')->get();
		return view('mechanicCars.edit',['mechanicCars'=>$Mechaniccars,'owner'=>$owner,'mechanic'=>$mechanic]);


      
    }

    public function update(Request $request,$id)
    {
        
		$Mechaniccars = Mechaniccars::find($id);
       
		$Mechaniccars->update($request->all());
		 return redirect('/assignMechanic');
		
    }

}
