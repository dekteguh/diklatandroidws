<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KabKota;
use App\Http\Requests;

class KabKotaController extends Controller
{
  public function index(){
      $kakos = KabKota::all();
      return json_encode($kakos);
  }

  public function listkako($prop_id){
      $kakos = KabKota::where('prop_id',$prop_id)->get();
      return json_encode($kakos);
  }

  public function kako($id){
      $kakos = KabKota::find($id);
      return json_encode($kakos);
  }

  public function update($id, $data = array()){
      $kakos = KabKota::find($id);
      $kakos->nama = $data['nama'];
      $kakos->latitude = $data['latitude'];
      $kakos->longitude = $data['longitude'];
      $kakos->save();
  }

  public function delete($id){
      $kakos = KabKota::find($id);
      $kakos->delete();
  }
}
