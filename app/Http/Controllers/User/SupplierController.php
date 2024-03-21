<?php

namespace App\Http\Controllers\User;

use App\Models\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{


    public function index()
    {

        $userId = Auth::id();

        $supplier = Supplier::where('user_id', $userId)->first();

        if ($supplier) {
            return view('user.user-mangement.edit', ['supplier' => $supplier]);
        } else {
            // return back()->with('error', 'Supplier data not found for the authenticated user.');
            return view('user.user-mangement.create');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {
        // Create a new Supplier instance
        $supplier = new Supplier();
        $supplier->user_id = Auth::user()->id;
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->country = $request->input('country');
        $supplier->city = $request->input('city');
        $supplier->supplier_type = $request->input('supplier_type');
        $supplier->supplier_business = $request->input('supplier_business');
        $supplier->item_category = $request->input('item_category');
        $supplier->trade_license = $request->input('trade_license');
        $supplier->trade_license_expared = $request->input('trade_license_expared');
        $supplier->trade_license_renewed = $request->input('trade_license_renewed');
        $supplier->update_vat = $request->input('update_vat');
        $supplier->tax_identity = $request->input('tax_identity');
        $supplier->tax_circle = $request->input('tax_circle');
        $supplier->cradit_rating = $request->input('cradit_rating');
        $supplier->comment = $request->input('comment');

        // Save contact information
        $supplier->contact = $request->input('contact');

        // Save BIN information
        if ($request->hasFile('bin_info.document')) {
            $supplier->bin_info = [
                'bin' => $request->input('bin_info.bin'),
                'vat' => $request->input('bin_info.vat'),
                'bin_address' => $request->input('bin_info.bin_address'),
                'document' => $request->file('bin_info.document')->store('bin_documents', 'uploads'),
            ];
        } else {
            // If no file uploaded, store other BIN info without the document
            $supplier->bin_info = [
                'bin' => $request->input('bin_info.bin'),
                'vat' => $request->input('bin_info.vat'),
                'bin_address' => $request->input('bin_info.bin_address'),
                'document' => null, // or any default value you prefer
            ];
        }

        // Save company information
        $supplier->company_info = $request->input('company_info');

        // Save bank information
        $supplier->bank_info = $request->input('bank_info');

        // Save document_a information
        if ($request->hasFile('document_a.file')) {
            $supplier->document_a = [
                'documant_type' => $request->input('document_a.documant_type'),
                'year' => $request->input('document_a.year'),
                'name' => $request->input('document_a.name'),
                'file' => $request->file('document_a.file')->store('documents', 'uploads'), // Corrected key
            ];
        } else {
            $supplier->document_a = [
                'documant_type' => $request->input('document_a.documant_type'),
                'year' => $request->input('document_a.year'),
                'name' => $request->input('document_a.name'),
                'file' => null,
            ];
        }
        // Save document_b information
        if ($request->hasFile('document_b.file')) {
            $supplier->document_b = [
                'documant_type' => $request->input('document_b.documant_type'),
                'year' => $request->input('document_b.year'),
                'name' => $request->input('document_b.name'),
                'file' => $request->file('document_b.file')->store('documents', 'uploads'), // Corrected key
            ];
        } else {
            $supplier->document_b = [
                'documant_type' => $request->input('document_b.documant_type'),
                'year' => $request->input('document_b.year'),
                'name' => $request->input('document_b.name'),
                'file' => null,
            ];
        }
        // Save the supplier data
        $supplier->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Supplier information has been stored successfully');
    }

    public function update(Request $request, $id)
    {
        // Retrieve the supplier record from the database
        $supplier = Supplier::findOrFail($id);

        // Update the supplier fields with the new data
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->country = $request->input('country');
        $supplier->city = $request->input('city');
        $supplier->supplier_type = $request->input('supplier_type');
        $supplier->supplier_business = $request->input('supplier_business');
        $supplier->item_category = $request->input('item_category');
        $supplier->trade_license = $request->input('trade_license');
        $supplier->trade_license_expared = $request->input('trade_license_expared');
        $supplier->trade_license_renewed = $request->input('trade_license_renewed');
        $supplier->update_vat = $request->input('update_vat');
        $supplier->tax_identity = $request->input('tax_identity');
        $supplier->tax_circle = $request->input('tax_circle');
        $supplier->cradit_rating = $request->input('cradit_rating');
        $supplier->comment = $request->input('comment');

        // Update contact information
        $supplier->contact = $request->input('contact');

        // Update BIN information
        if ($request->hasFile('bin_info.document')) {
            $supplier->bin_info = [
                'bin' => $request->input('bin_info.bin'),
                'vat' => $request->input('bin_info.vat'),
                'bin_address' => $request->input('bin_info.bin_address'),
                'document' => $request->file('bin_info.document')->store('bin_documents', 'uploads'),
            ];
        } else {
            // If no file uploaded, update other BIN info without the document
            $supplier->bin_info = [
                'bin' => $request->input('bin_info.bin'),
                'vat' => $request->input('bin_info.vat'),
                'bin_address' => $request->input('bin_info.bin_address'),
                'document' => $supplier->bin_info['document'] ?? null,
            ];
        }

        // Update company information
        $supplier->company_info = $request->input('company_info');

        // Update bank information
        $supplier->bank_info = $request->input('bank_info');

        // Update document_a information
        if ($request->hasFile('document_a.file')) {
            $supplier->document_a = [
                'documant_type' => $request->input('document_a.documant_type'),
                'year' => $request->input('document_a.year'),
                'name' => $request->input('document_a.name'),
                'file' => $request->file('document_a.file')->store('documents', 'uploads'), // Corrected key
            ];
        } else {
            $supplier->document_a = [
                'documant_type' => $request->input('document_a.documant_type'),
                'year' => $request->input('document_a.year'),
                'name' => $request->input('document_a.name'),
                'file' => $supplier->document_a['file'] ?? null,
            ];
        }

        // Update document_b information
        if ($request->hasFile('document_b.file')) {
            $supplier->document_b = [
                'documant_type' => $request->input('document_b.documant_type'),
                'year' => $request->input('document_b.year'),
                'name' => $request->input('document_b.name'),
                'file' => $request->file('document_b.file')->store('documents', 'uploads'), // Corrected key
            ];
        } else {
            $supplier->document_b = [
                'documant_type' => $request->input('document_b.documant_type'),
                'year' => $request->input('document_b.year'),
                'name' => $request->input('document_b.name'),
                'file' => $supplier->document_b['file'] ?? null,
            ];
        }

        // Save the updated supplier data
        $supplier->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Supplier information has been updated successfully');
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
