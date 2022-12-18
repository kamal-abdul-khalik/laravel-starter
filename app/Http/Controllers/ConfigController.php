<?php

namespace App\Http\Controllers;

use App\Authorizable;
use App\Models\Setting;

class ConfigController extends Controller
{
    use Authorizable;

    public function edit()
    {
        return view('admin.setting.edit', [
            'type_menu' => '',
            'setting' => Setting::findOrFail(1),
        ]);
    }

    public function update()
    {
        request()->validate([
            'desc' => 'max:150|min:10',
            'about' => 'max:150|min:10',
            'address' => 'required',
        ]);

        $data = request()->all();
        Setting::findOrFail(1)->update($data);

        return redirect()->back()
            ->with('info', 'This Setting was updated');
    }
}
