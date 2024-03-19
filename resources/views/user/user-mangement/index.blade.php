   @extends('layouts.frontend.master')

   @section('content')
       <form action="">
           <div class="live-tender-wrapper">
               <h1 class="tender-title">Supplier Details Information</h1>
               <div class="live-table-wrapper mt-3">
                   <h2 class="table-text-list">Basic Info</h2>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-input-field">
                               <label for="name">Supplier Name</label>
                               <input type="text" id="name" name="name" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="name">User Name</label>
                               <input type="text" id="name" name="name" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="name">Sign Up Email</label>
                               <input type="text" id="name" name="name" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="name">Country</label>
                               <input type="text" id="name" name="name" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">City</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Supplier Type</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Supplier Business Type</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Item Category</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Trade License No.</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Trade License Expiration Date</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Trade License Renewal/Issue Date</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Updated VAT Registration No.</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Tax Identification Number (TIN)</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Tax Circle</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-input-field">
                               <label for="">Credit Rating</label>
                               <input type="text" id="" name="" />
                           </div>
                       </div>
                       <div class="col-md-12">
                           <div class="form-input-field">
                               <label for="">Comments</label>
                               <textarea name="" id="" cols="30" rows="5"></textarea>
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
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="upload-img custom-btn">
                                               <input type="file" />
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
                                               <input type="text" name="" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="name" />
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
                                               <input type="text" name="" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="name" />
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
                                               <input type="text" name="" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="name" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" name="name" />
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
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="upload-img custom-btn">
                                               <input type="file" />
                                               <img src="{{ asset('assets-frontend/images/icons/file.svg') }}"
                                                   alt="" />
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>

                                       <td>
                                           <div class="form-input-field">
                                               <input type="text" id="name" name="name" />
                                           </div>
                                       </td>
                                       <td>
                                           <div class="upload-img custom-btn">
                                               <input type="file" />
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
                   <button class="custom-btn mt-4">Update</button>
                   <button class="custom-btn tender-close-btn mt-3">Close</button>
               </div>
           </div>
       </form>
   @endsection
