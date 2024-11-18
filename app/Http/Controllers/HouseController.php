<?php

namespace App\Http\Controllers;

use App\Http\Resources\BoardingHouseResource;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function getAllAPI() {
        $boardingHouse = House::with(['rooms.facilities.facility', 'facilities.facility'])->get();
        return BoardingHouseResource::collection($boardingHouse);
    }

    public function index() {
        $datas = House::with(['rooms.facilities', 'facilities.facility'])->get();
        // dd($datas);
        return view('admin.house.index', compact(['datas']));
    }

    public function map($id)
    {
        $data = House::find($id);
        return view('admin.house.map', compact('data'));
    }

}
