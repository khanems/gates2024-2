<?php

namespace App\Http\Controllers\web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSetting;
use Illuminate\Support\Facades\Storage;
use Log;

class SettingController extends Controller
{
    public function index()
    {
        // Fetch the first setting record or create one with null/default values
        $settings = AdminSetting::firstOrCreate(
            ['id' => 1], // Assuming you want to ensure only one settings record
            [
            ]
        );

        return view('admin.settings.settings', compact('settings'));
    }


    public function create()
    {
        // Return the form for creating new settings (if needed)
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
    
        // Validate the request
        $request->validate([
            'website_name' => 'nullable|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'dark_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'light_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'country' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'timezone' => 'nullable|string|max:255',
            'currency' => 'nullable|string|max:3',
            'currency_symbol' => 'nullable|string|max:5',
            'currency_pre_symbol' => 'nullable|string|max:1',
            'currency_post_symbol' => 'nullable|string|max:1',
            'date_time_style' => 'nullable|string|max:20',
        ]);

        // Create or update the admin setting
        $settings = AdminSetting::firstOrNew();

        // Handle file uploads (logo, favicon)
        if ($request->hasFile('dark_logo')) {
            if ($settings->dark_logo) {
                Storage::delete($settings->dark_logo);  // Remove the old file
            }
            $settings->dark_logo = $request->file('dark_logo')->store('settings');
        }

        if ($request->hasFile('light_logo')) {
            if ($settings->light_logo) {
                Storage::delete($settings->light_logo);  // Remove the old file
            }
            $settings->light_logo = $request->file('light_logo')->store('settings');
        }

        if ($request->hasFile('favicon')) {
            if ($settings->favicon) {
                Storage::delete($settings->favicon);  // Remove the old file
            }
            $settings->favicon = $request->file('favicon')->store('settings');
        }

        // Fill the remaining fields
        $settings->fill($request->except(['dark_logo', 'light_logo', 'favicon']));
        $settings->save();

        return redirect()->route('admin.settings')->with('success', 'Settings updated successfully!');
    }

    public function edit(AdminSetting $settings)
    {
        // Return the form with existing data for editing
        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request, AdminSetting $settings)
    {
        
        // Validate the request


        // Handle file uploads (logo, favicon)
        if ($request->hasFile('dark_logo')) {
            // Delete the old file if it exists
            if ($settings->dark_logo) {
                $oldFilePath = public_path('assets/settings/' . basename($settings->dark_logo));
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);  // Remove the old file
                }
            }
            // Save the new image in the public/assets/settings folder
            $settings->dark_logo = $request->file('dark_logo')->storeAs('assets/settings', uniqid() . '.' . $request->file('dark_logo')->getClientOriginalExtension(), 'public');
        }

        if ($request->hasFile('light_logo')) {
            // Delete the old file if it exists
            if ($settings->light_logo) {
                $oldFilePath = public_path('assets/settings/' . basename($settings->light_logo));
                log::info($oldFilePath);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);  // Remove the old file
                }
            }
            // Save the new image in the public/assets/settings folder
            $settings->light_logo = $request->file('light_logo')->storeAs('assets/settings', uniqid() . '.' . $request->file('light_logo')->getClientOriginalExtension(), 'public');
        }

        if ($request->hasFile('favicon')) {
            // Delete the old file if it exists
            if ($settings->favicon) {
                $oldFilePath = public_path('assets/settings/' . basename($settings->favicon));
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);  // Remove the old file
                }
            }
            // Save the new image in the public/assets/settings folder
            $settings->favicon = $request->file('favicon')->storeAs('assets/settings', uniqid() . '.' . $request->file('favicon')->getClientOriginalExtension(), 'public');
        }

        // Update the fields

        $settings->fill($request->except(['dark_logo', 'light_logo', 'favicon', '_token']));

        $settings->save();

        return redirect()->route('admin-settings')->with('success', 'Settings updated successfully!');
    }

    public function destroy(AdminSetting $settings)
    {
        // Optionally, remove the files and the record if needed
        if ($settings->dark_logo) {
            Storage::delete($settings->dark_logo);
        }
        if ($settings->light_logo) {
            Storage::delete($settings->light_logo);
        }
        if ($settings->favicon) {
            Storage::delete($settings->favicon);
        }

        // Delete the record
        $settings->delete();

        return redirect()->route('admin.settings')->with('success', 'Settings deleted successfully!');
    }
}
