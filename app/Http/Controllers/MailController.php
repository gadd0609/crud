<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;


class MailController extends Controller
{

    public function index()
    {
        $mails = Mail::paginate();

        return view('mail.index', compact('mails'))
            ->with('i', (request()->input('page', 1) - 1) * $mails->perPage());
    }

    public function create()
    {
        $mail = new Mail();
        return view('mail.create', compact('mail'));

    }

    public function store(Request $request)
    {
        request()->validate(Mail::$rules);

        $mail = Mail::create($request->all());

        return redirect()->route('mails.index')
            ->with('success', 'Mail created successfully.');
    }

    public function show($id)
    {
        $mail = Mail::find($id);

        return view('mail.show', compact('mail'));
    }

    public function edit($id)
    {
        $mail = Mail::find($id);

        return view('mail.edit', compact('mail'));
    }

    public function update(Request $request, Mail $mail)
    {
        request()->validate(Mail::$rules);

        $mail->update($request->all());

        return redirect()->route('mails.index')
            ->with('success', 'Mail updated successfully');
    }

    public function destroy($id)
    {
        $mail = Mail::find($id)->delete();

        return redirect()->route('mails.index')
            ->with('success', 'Mail deleted successfully');
    }

}
