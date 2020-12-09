<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRequest;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{

    public function index()
    {
        $agencies= Agency::all();
        return view('list',compact('agencies'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(AddRequest $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');

    }


    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        return view('edit',compact('agency'));
    }


    public function update(Request $request,$id)
    {
        $agency = Agency::findOrFail($id);
        $agency->fill($request->all());
        $agency->save();
//        dd($agency);
        return redirect()->route('agency.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $agency = Agency::findOrFail($id);
       $agency->delete();
       return redirect()->back();
    }
    public function search(Request  $request){
        $agencies = DB::table('agencies')
            ->where('agencyName','LIKE','%'.$request->search.'%')
            ->orWhere('address','LIKE','%'.$request->search.'%')
            ->get();
        return view('list', compact('agencies'));
    }
}
