   @extends('layouts.frontend.master')

   @section('content')
       <div class="live-tender-wrapper">
           <h1 class="tender-title">Supplier Details Information</h1>
           <form action="{{ route('user.supplier.update', $supplier->id) }}" method="post" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="live-table-wrapper mt-3">
                   <h2 class="table-text-list">Basic Info</h2>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-input-field">
                               <label for="name">Supplier Name</label>
                               <input type="text" id="name" name="name" value="{{ $supplier->name }}" />
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="email">Sign Up Email</label>
                               <input type="text" id="email" name="email"value="{{ $supplier->email }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="country">Country</label>
                               <input type="text" id="country" name="country"value="{{ $supplier->country }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="city">City</label>
                               <input type="text" id="city" name="city" value="{{ $supplier->city }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="supplier_type">Supplier Type</label>
                               <input type="text" id="supplier_type" name="supplier_type"
                                   value="{{ $supplier->supplier_type }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="supplier_business">Supplier Business Type</label>
                               <input type="text" id="supplier_business" name="supplier_business"
                                   value="{{ $supplier->supplier_business }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="item_category">Item Category</label>
                               <input type="text" id="item_category" name="item_category"
                                   value="{{ $supplier->item_category }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="trade_license">Trade License No.</label>
                               <input type="text" id="trade_license" name="trade_license"
                                   value="{{ $supplier->trade_license }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="trade_license_expared">Trade License Expiration Date</label>
                               <input type="date" id="trade_license_expared" name="trade_license_expared"
                                   value="{{ $supplier->trade_license_expared }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="trade_license_renewed">Trade License Renewal/Issue Date</label>
                               <input type="date" id="trade_license_renewed" name="trade_license_renewed"
                                   value="{{ $supplier->trade_license_renewed }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="update_vat">Updated VAT Registration No.</label>
                               <input type="text" id="update_vat" name="update_vat"
                                   value="{{ $supplier->update_vat }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="tax_identity">Tax Identification Number (TIN)</label>
                               <input type="text" id="tax_identity" name="tax_identity"
                                   value="{{ $supplier->tax_identity }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="tax_circle">Tax Circle</label>
                               <input type="text" id="tax_circle" name="tax_circle"
                                   value="{{ $supplier->tax_circle }}" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="cradit_rating">Credit Rating</label>
                               <input type="text" id="cradit_rating" name="cradit_rating"
                                   value="{{ $supplier->cradit_rating }}" />
                           </div>
                       </div>
                       <div class="col-md-12">
                           <div class="form-input-field">
                               <label for="comment">Comments</label>
                               <textarea name="comment" id="comment" cols="30" rows="5"> {{ $supplier->comment }} </textarea>
                           </div>
                       </div>
                   </div>
                   <div class="user-mangement-table-item">
                       <h2 class="table-text-list">BIN Information</h2>
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead class="tender-table-header">
                                   <tr>
                                       <th scope="col">
                                           Business Identification Number (BIN)
                                       </th>
                                       <th scope="col">Vat Circle</th>
                                       <th scope="col">BIN Address</th>
                                       <th scope="col">Document</th>
                                   </tr>
                               </thead>
                               <tbody class="tender-table-body">
                                   <tr>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="bin_info[bin]"
                                                   placeholder="bin"value="{{ $supplier->bin_info['bin'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="bin_info[vat]"
                                                   placeholder="vat"value="{{ $supplier->bin_info['vat'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="bin_info[bin_address]"
                                                   placeholder="bin_address"value="{{ $supplier->bin_info['bin_address'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="upload-img custom-btn">
                                               <input type="file"
                                                   name="bin_info[document]"value="{{ $supplier->bin_info['document'] }}" />
                                               <img src="{{ asset('assets-frontend/images/icons/file.svg') }}"
                                                   alt="" />
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
               <div class="live-table-wrapper">
                   <h2 class="table-text-list">Contact Info</h2>

                   <div class="user-mangement-table-item">
                       <h3 class="table-user-text-list">
                           Company Contact Information
                       </h3>
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead class="tender-table-header">
                                   <tr>
                                       <th scope="col">Address</th>
                                       <th scope="col">Mobile No.</th>
                                       <th scope="col">E-mail </th>
                                       <th scope="col">Fax</th>
                                       <th scope="col">Website</th>
                                   </tr>
                               </thead>
                               <tbody class="tender-table-body">
                                   <tr>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="contact[address]"
                                                   placeholder="Address"value="{{ $supplier->contact['address'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="contact[mobile_no]"
                                                   placeholder="Mobile No."value="{{ $supplier->contact['mobile_no'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="contact[email]"
                                                   placeholder="E-mail"value="{{ $supplier->contact['email'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="contact[fax]"
                                                   placeholder="Fax"value="{{ $supplier->contact['fax'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="contact[website]"
                                                   placeholder="Website"value="{{ $supplier->contact['website'] }}">
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <div class="user-mangement-table-item">
                       <h3 class="table-user-text-list">Company Contact Person</h3>
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead class="tender-table-header">
                                   <tr>
                                       <th scope="col">Name</th>
                                       <th scope="col">Mobile No.</th>
                                       <th scope="col">E-mail </th>
                                       <th scope="col">Remarks</th>
                                   </tr>
                               </thead>
                               <tbody class="tender-table-body">
                                   <tr>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="company_info[name]"
                                                   placeholder="name"value="{{ $supplier->company_info['name'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="company_info[mobile]"
                                                   placeholder="Mobile"value="{{ $supplier->company_info['mobile'] }}">

                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="company_info[email]"
                                                   placeholder="Email"value="{{ $supplier->company_info['email'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="company_info[ramarks]"
                                                   placeholder="Ramarks"value="{{ $supplier->company_info['ramarks'] }}">
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <div class="user-mangement-table-item">
                       <h3 class="table-user-text-list">Bank Information</h3>
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead class="tender-table-header">
                                   <tr>
                                       <th scope="col">Bank Name</th>
                                       <th scope="col">Branch</th>
                                       <th scope="col">Account Title </th>
                                       <th scope="col">Account Number</th>
                                       <th scope="col">Remarks</th>
                                   </tr>
                               </thead>
                               <tbody class="tender-table-body">
                                   <tr>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="bank_info[bank_name]"value="{{ $supplier->bank_info['bank_name'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="bank_info[branch]"value="{{ $supplier->bank_info['branch'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="bank_info[account_title]"value="{{ $supplier->bank_info['account_title'] }}">

                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="bank_info[account_number]"value="{{ $supplier->bank_info['account_number'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="bank_info[remarks]"value="{{ $supplier->bank_info['remarks'] }}">
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
               <div class="live-table-wrapper">
                   <h2 class="table-text-list">Documents</h2>

                   <div class="user-mangement-table-item">

                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead class="tender-table-header">
                                   <tr>
                                       <th scope="col">Document Type</th>
                                       <th scope="col">Year</th>
                                       <th scope="col">Document Name</th>
                                       <th scope="col">Document</th>
                                   </tr>
                               </thead>
                               <tbody class="tender-table-body">
                                   <tr>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="document_a[documant_type]"value="{{ $supplier->document_a['documant_type'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="document_a[year]"value="{{ $supplier->document_a['year'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="document_a[name]"value="{{ $supplier->document_a['name'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="upload-img custom-btn">
                                               <input type="file"
                                                   name="document_a[file]"value="{{ $supplier->document_a['file'] }}" />
                                               <img src="{{ asset('assets-frontend/images/icons/file.svg') }}"
                                                   alt="" />
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="document_b[documant_type]"value="{{ $supplier->document_b['documant_type'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="document_b[year]"value="{{ $supplier->document_b['year'] }}">
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text"
                                                   name="document_b[name]"value="{{ $supplier->document_b['name'] }}">
                                           </div>
                                       </td>
                                       <td>
                                           <div class="upload-img custom-btn">
                                               <input type="file" name="document_b[file]"
                                                   value="{{ $supplier->document_b['file'] }}" />
                                               <img src="{{ asset('assets-frontend/images/icons/file.svg') }}"
                                                   alt="" />
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>

               <div class="participate-btn">
                   <button type="submit" class="custom-btn mt-4">Create</button>
               </div>
           </form>
       </div>
   @endsection
