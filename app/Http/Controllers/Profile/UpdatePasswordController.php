<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Fortify\UpdateUserPassword;

class UpdatePasswordController extends UpdateUserPassword
{
    public function edit()
    {
        return view('admin.profile.update-password',['type_menu' => '']);
    }

    public function updatePassword()
    {
        $this->update(request()->user(), request()->all());

        return redirect()->route('password.edit')
            ->with('success', 'Password berhasil diupdate');
    }
}
