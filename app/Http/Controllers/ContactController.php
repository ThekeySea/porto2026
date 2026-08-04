<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'subjek'  => 'required|string|max:150',
            'pesan'   => 'required|string|min:10',
        ], [
            'nama.required'   => 'Nama lengkap wajib diisi.',
            'email.required'  => 'Alamat email wajib diisi.',
            'email.email'     => 'Format email tidak valid.',
            'subjek.required' => 'Subjek pesan wajib diisi.',
            'pesan.required'  => 'Pesan wajib diisi.',
            'pesan.min'       => 'Pesan minimal berisi 10 karakter.'
        ]);

        // Simpan pesan / kirim notifikasi email (dalam produksi)
        // Di sini kita kembalikan respon JSON sukses yang elegan
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih, ' . htmlspecialchars($validated['nama']) . '! Pesan Anda telah berhasil terkirim. Saya akan segera menghubungi Anda kembali.',
            'data'    => $validated
        ]);
    }
}
