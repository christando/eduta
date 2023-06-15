<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;
use Dotenv\Regex\Success;
use Illuminate\Mail\Message;
use Symfony\Component\VarDumper\Cloner\Data;

class EdutaAPIController extends Controller
{
    public function read()
    {
        $plm = Pelamar::all();

        return response()->json([
            "success" => true,
            "message" => "No Error occurred",
            "data" => $plm
        ], 200);
    }

    public function create(Request $request)
    {
        $plm = Pelamar::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'tingkat_pendidikan'=>$request->tingkat_pendidikan,
            'bidang_keahlian'=>$request->bidang_keahlian
        ]);

        if($plm)
        {
            return response()->json([
                'success' => true,
                'message' => "Successfully added",
                'data' => $plm
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "failed to add the data",
            ],400);
        }
    }

    public function update($id, Request $request)
    {
        $plm = Pelamar::find($id)->update([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'tingkat_pendidikan'=>$request->tingkat_pendidikan,
            'bidang_keahlian'=>$request->bidang_keahlian
        ]);

        if($plm)
        {
            return response()->json([
                'success' => true,
                'message' => "data updated successfully",
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "data failed to update",
            ],400);
        }
    }

    public function delete($id)
    {
        $plm = Pelamar::find($id);
        $plm->delete();

        if($plm)
        {
            return response()->json([
                'success' => true,
                'message' => "data deleted successfully"
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "data failed to delete"
            ],400);
        }
    }
}
