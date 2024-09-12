<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RepairPosted;
use App\Mail\RepairUpdate;

class RepairController extends Controller
{
    public function index()
    {   
        $repairs = Repair::where('status', '!=', 'naprawiony')->latest()->simplePaginate(9);

        return view('/employee', ['repairs' => $repairs]);
    }

    public function adminIndex()
    {   
        $repairs = Repair::where('id', '>=', 0)->latest()->simplePaginate(6);

        return view('/admin/admin-repair', ['repairs' => $repairs]);
    }
    public function store()
    {
        //validate
        request()->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'adress' => ['required'],
        'email' => ['required'],
        'device' => ['required'],
        'fault' => ['required']
        ]);

        $repair = Repair::create([
            'f_name' => request('first_name'),
            'l_name' => request('last_name'),
            'adress' => request('adress'),
            'email' => request('email'),
            'device' => request('device'),
            'fault' => request('fault'),
            'status' => 'Wysłano Zgłoszenie'
        ]);

        Mail::to($repair->email)->send(
            new RepairPosted($repair)
        );
        //dd($repair);
        return redirect('/repairListing');
    }

    public function edit(Repair $repair)
    {
        return view('edit-repair', ['repair' => $repair]);
    }

    public function update(Repair $repair)
    {
        //validate
        request()->validate([
        'status' => ['required'],
        ]);

        $repair->update([
            'status' => request('status'),
        ]);

        Mail::to($repair['email'])->send(
            new RepairUpdate($repair)
        );

        return redirect('/employee');
    }

    public function adminEdit(Repair $repair)
    {
        return view('admin/admin-edit-repair', ['repair' => $repair]);
    }

    public function adminUpdate(Repair $repair)
    {
        //validate
        request()->validate([
        'status' => ['required'],
        ]);

        $repair->update([
            'status' => request('status'),
        ]);

        Mail::to($repair['email'])->send(
            new RepairUpdate($repair)
        );

        return redirect('/admin/admin-repair');
    }

    public function destroy($id)
    {

        $id = Repair::where('id',$id)->delete();

        return redirect('admin/admin-repair')->with('success', 'Data Deleted');
    }
}
