<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Throwable;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact-us');
    }

    public function send(Request $request)
    {
        try {
            // (Optional) lightweight trace
            Log::info('Contact form submission started', [
                'ip'    => $request->ip(),
                'agent' => $request->userAgent(),
            ]);

            $data = $request->validate([
                'name'    => ['required', 'string', 'max:120'],
                'email'   => ['required', 'email', 'max:180'],
                'phone'   => ['nullable', 'string', 'max:40'],
                'message' => ['required', 'string', 'max:5000'],
            ]);

            // Recipients
            $to = ['raghavan@bumblebees.co.in', 'jayveesepl@gmail.com'];
            $cc = ['jakuvabuildtech@gmail.com', 'jayveeengineering@yahoo.com'];

            Log::info('Preparing to send contact mail', ['to' => $to, 'cc' => $cc]);

            // Send synchronously (no queue worker needed)
            Mail::to($to)->cc($cc)->send(new ContactMessage($data));

            Log::info('Contact mail sent successfully');

            // Redirect explicitly to the contact page with flash
            return redirect()
                ->route('contact.show')
                ->with('success', 'Your message has been sent. We will get back to you soon.');
        } catch (Throwable $e) {
            Log::error('Contact form submission failed', [
                'message' => $e->getMessage(),
                'trace'   => app()->environment('local') ? $e->getTraceAsString() : null,
            ]);

            // Redirect to contact page with error + old input
            return redirect()
                ->route('contact.show')
                ->withErrors(['message' => 'We could not send your message at the moment. Please try again later.'])
                ->withInput();
        }
    }
}
