<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Mail\keepInMail;
use App\Models\Contact;
use App\Models\keepInTouch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class formController extends Controller
{
    public function keepInTouch(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'city' => 'required',
        ]);


        $Contact = new keepInTouch();
        $Contact->name = $request['name'];
        $Contact->email = $request['email'];
        $Contact->phone = $request['phone'];
        $Contact->city = $request['city'];

        $Contact->save();
     
            Mail::to('info@excelholdings.pk')->send(new keepInMail($Contact)); 
        return redirect()->back()->with(['success' => 'Form Submit Successfully']);
    }

    public function keepIn(Request $request)
    {
        $data = keepInTouch::orderBy('id', 'DESC')->paginate(5);
        return view('dashboards.admins.forms.keefInTouch', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function destroy($id)
    {
        keepInTouch::find($id)->delete();
        return redirect()->route('admin.keepIn')->with('success', 'User deleted successfully');
    }


    /* contact Us */
    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);
       

        $Contact = new Contact;
        $Contact->name = $request['name'];
        $Contact->email = $request['email'];
        $Contact->phone = $request['phone'];
        $Contact->subject = $request['subject'];
        $Contact->message = $request['message'];
        $Contact->save();
        Mail::to('info@excelholdings.pk')->send(new contactMail($Contact)); 
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }

    public function contact(Request $request)
    {
        $data = Contact::orderBy('id', 'DESC')->paginate(5);
        return view('dashboards.admins.forms.contact', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contacts')
            ->with('success', 'User deleted successfully');
    }
}
