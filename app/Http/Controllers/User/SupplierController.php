<?php

namespace App\Http\Controllers\User;

use App\Models\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request->all());
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'country' => 'required|string',
            'city' => 'nullable|string',
            'supplier_type' => 'nullable|string',
            'supplier_business' => 'nullable|string',
            'item_category' => 'nullable|string',
            // Add validation rules for other fields
            'comment' => 'nullable|string',
            'bin_info.bin' => 'nullable|string',
            'bin_info.vat' => 'nullable|string',
            'bin_info.bin_address' => 'nullable|string',
            'bin_info.document' => 'nullable',



            'contact.address' => 'nullable|string',
            'contact.mobile_no' => 'nullable|string',
            'contact.email' => 'nullable|email',
            'contact.fax' => 'nullable|string',
            'contact.website' => 'nullable|string',
            // Add validation rules for other fields
            'company_info.name' => 'nullable|string',
            'company_info.mobile' => 'nullable|string',
            'company_info.email' => 'nullable|email',
            'company_info.ramarks' => 'nullable|string',
            // Add validation rules for other fields
            'bank_info.bank_name' => 'nullable|string',
            'bank_info.branch' => 'nullable|string',
            'bank_info.account_title' => 'nullable|string',
            'bank_info.account_number' => 'nullable|string',
            'bank_info.remarks' => 'nullable|string',
            // Add validation rules for other fields
            'document_a.documant_type' => 'nullable|string',
            'document_a.year' => 'nullable|string',
            'document_a.name' => 'nullable|string',
            'document_a.file' => 'nullable|file',
            // Add validation rules for other fields
            'document_b.documant_type' => 'nullable|string',
            'document_b.year' => 'nullable|string',
            'document_b.name' => 'nullable|string',
            'document_b.file' => 'nullable|file',
        ]);
        dd($validatedData);
        // Create a new Supplier instance
        $supplier = new Supplier();
        $supplier->user_id = Auth::user()->id;
        $supplier->name = $validatedData['name'];
        $supplier->email = $validatedData['email'];
        $supplier->country = $validatedData['country'];
        $supplier->city = $validatedData['city'];
        $supplier->supplier_type = $validatedData['supplier_type'];
        $supplier->supplier_business = $validatedData['supplier_business'];
        $supplier->item_category = $validatedData['item_category'];
        // Assign values for other fields
        $supplier->comment = $validatedData['comment'];

        // Save contact information
        $supplier->contact = $validatedData['contact'];

        // Save BIN information
        $supplier->bin_info = $validatedData['bin_info'];

        // Save company information
        $supplier->company_info = $validatedData['company_info'];

        // Save bank information
        $supplier->bank_info = $validatedData['bank_info'];

        // Save document information
        $supplier->document_a = $validatedData['document_a'];
        $supplier->document_b = $validatedData['document_b'];

        // Save the supplier data
        $supplier->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Supplier information has been stored successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
