<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{

    public function index()
    {
        return view('pages.settings.index', [
            'settings' => Setting::all()
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'app_name' => 'required|string',
            'app_logo' => 'nullable|image|mimes:png,jpg,jpeg',
            'app_brand' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);

        Setting::set('app_name', $request->app_name);

        if ($request->hasFile('app_logo')) {
            $oldLogo = Setting::get('app_logo');
            if ($oldLogo && Storage::disk('public')->exists($oldLogo)) {
                Storage::disk('public')->delete($oldLogo);
            }
            $logoPath = $request->file('app_logo')->store('logos', 'public');
            Setting::set('app_logo', $logoPath);
        }

        if ($request->hasFile('app_brand')) {
            $oldBg = Setting::get('app_brand');
            if ($oldBg && Storage::disk('public')->exists($oldBg)) {
                Storage::disk('public')->delete($oldBg);
            }
            $bgPath = $request->file('app_brand')->store('brands', 'public');
            Setting::set('app_brand', $bgPath);
        }

        return back()->with('success', 'تم تحديث الإعدادات بنجاح!');
    }
}
