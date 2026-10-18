<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function whatsapp()
    {
        $whatsappNumber = Setting::get('whatsapp_number', '6281234567890');
        $whatsappTemplate = Setting::get('whatsapp_template', 'Halo Admin Pelatihan Fumigasi, saya ingin informasi dan konsultasi pendaftaran pelatihan untuk wilayah {region}. Mohon info jadwal terbaru dan persyaratannya.');

        return view('admin.settings.whatsapp', compact('whatsappNumber', 'whatsappTemplate'));
    }

    public function updateWhatsapp(Request $request)
    {
        $request->validate([
            'whatsapp_number' => 'required|string|max:30',
            'whatsapp_template' => 'required|string|max:1000',
        ]);

        // Clean number
        $number = preg_replace('/[^0-9]/', '', $request->whatsapp_number);
        if (str_starts_with($number, '0')) {
            $number = '62' . substr($number, 1);
        }

        Setting::set('whatsapp_number', $number, 'Nomor WhatsApp Konsultasi', 'whatsapp');
        Setting::set('whatsapp_template', $request->whatsapp_template, 'Template Pesan WhatsApp', 'whatsapp');

        return redirect()->back()->with('success', 'Pengaturan WhatsApp berhasil diperbarui!');
    }

    public function general()
    {
        $settings = [
            'site_name' => Setting::get('site_name', 'SERTIFIKASI FUMIGASI'),
            'site_subtitle' => Setting::get('site_subtitle', 'Standar Keselamatan & Karantina Fumigasi Nasional'),
            'contact_phone' => Setting::get('contact_phone', '+62 812-3456-7890'),
            'contact_email' => Setting::get('contact_email', 'info@pelatihanfumigasi.id'),
            'contact_address' => Setting::get('contact_address', 'Jakarta, Indonesia'),
            'notice_text' => Setting::get('notice_text', 'Catatan penting: Halaman ini adalah halaman informasi dan konsultasi.'),
        ];

        return view('admin.settings.general', compact('settings'));
    }

    public function updateGeneral(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:100',
            'site_subtitle' => 'nullable|string|max:200',
            'contact_phone' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:100',
            'contact_address' => 'nullable|string|max:500',
            'notice_text' => 'nullable|string|max:1000',
        ]);

        foreach ($request->only(['site_name', 'site_subtitle', 'contact_phone', 'contact_email', 'contact_address', 'notice_text']) as $key => $val) {
            Setting::set($key, $val);
        }

        return redirect()->back()->with('success', 'Pengaturan Umum berhasil disimpan!');
    }
}
