<?php
// namespace Asm\Php2\Controllers\Client;

// use Illuminate\Http\Request;
// use Asm\Php2\Commons\Controller;

// class ContactController extends Controller
// {
//     public function index()
//     {
//         // Show the contact form view
//         return view('contact_form');
//     }

//     public function store(Request $request)
//     {
//         // Validate the form data
//         $request->validate([
//             'id' => 'required|string|max:255',
//             'name' => 'required|string|max:255',
//             'total' => 'required|numeric',
//             'noidung' => 'required|string',
//         ]);

//         // Retrieve validated form data
//         $data = $request->only(['id', 'name', 'total', 'noidung']);

//         // Process and store the data as needed (e.g., save to database)
//         // Example: Contact::create($data);

//         // Redirect or show a success message
//         return redirect('/contact')->with('success', 'Contact form submitted successfully!');
//     }
// }
