<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class AddStaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('admin.staff.index', compact('staff'));
    }

    public function create()
    {
        return view('admin.staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email',
            'phone_number' => 'required|string|max:15',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'hire_date' => 'required|date',
            'birth_date' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:Active,On Leave,Terminated',
        ]);

        $staff = new Staff($request->all());

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/staff');
            $image->move($destinationPath, $imageName);
            $staff->photo = "/images/staff/" . $imageName;
        }

        $staff->save();

        Toastr::success('Staff member added successfully!');
        return redirect()->route('admin.staff.index');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('admin.staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email,' . $staff->id,
            'phone_number' => 'required|string|max:15',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'hire_date' => 'required|date',
            'birth_date' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:Active,On Leave,Terminated',
        ]);

        $staff->update($request->all());

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/staff');
            $image->move($destinationPath, $imageName);
            $staff->photo = "/images/staff/" . $imageName;
        }

        $staff->save();

        Toastr::success('Staff member updated successfully!');
        return redirect()->route('admin.staff.index');
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        Toastr::success('Staff member deleted successfully!');
        return redirect()->route('admin.staff.index');
    }
}