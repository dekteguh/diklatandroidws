<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Propinsi;

class PropinsiController extends Controller
{
  public function index(){
      $props = Propinsi::all();
      return json_encode($props);
  }

  public function prop($id){
      $prop = Propinsi::find($id);
      return json_encode($prop);
  }

  public function update($id, $data = array()){
      $prop = Propinsi::find($id);
      $prop->nama = $data['nama'];
      $prop->latitude = $data['latitude'];
      $prop->longitude = $data['longitude'];
      $prop->save();
  }

  public function delete($id){
      $prop = Propinsi::find($id);
      $prop->delete();
  }
}
