<?php

namespace App\Http\Controllers\API;

use App\Models\Telephone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TelephoneController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Daftar data telepon berhasil diambil.',
            'data' => Telephone::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'position' => 'nullable|string',
            'department' => 'nullable|string',
            'address' => 'nullable|string',
            'employee_number' => 'nullable|string',
            'office_phone' => 'nullable|string',
            'home_phone' => 'nullable|string',
        ]);

        $telephone = Telephone::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Data telepon berhasil ditambahkan.',
            'data' => $telephone
        ], 201);
    }

    public function show($id)
    {
        $telephone = Telephone::find($id);

        if (!$telephone) {
            return response()->json([
                'success' => false,
                'message' => 'Data telepon tidak ditemukan.',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail data telepon berhasil diambil.',
            'data' => $telephone
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $telephone = Telephone::find($id);

        if (!$telephone) {
            return response()->json([
                'success' => false,
                'message' => 'Data telepon tidak ditemukan.',
                'data' => null
            ], 404);
        }

        $data = $request->validate([
            'name' => 'sometimes|required|string',
            'position' => 'nullable|string',
            'department' => 'nullable|string',
            'address' => 'nullable|string',
            'employee_number' => 'nullable|string',
            'office_phone' => 'nullable|string',
            'home_phone' => 'nullable|string',
        ]);

        $telephone->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Data telepon berhasil diperbarui.',
            'data' => $telephone
        ], 200);
    }

    public function destroy($id)
    {
        $telephone = Telephone::find($id);

        if (!$telephone) {
            return response()->json([
                'success' => false,
                'message' => 'Data telepon tidak ditemukan.',
                'data' => null
            ], 404);
        }

        $telephone->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data telepon berhasil dihapus.',
            'data' => null
        ], 200);
    }
}
