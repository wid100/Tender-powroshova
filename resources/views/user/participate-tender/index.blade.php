   @extends('layouts.frontend.master')

   @section('content')
       <section class="in-tender">
           <div class="tender-interface">
               <!-- Tender Options -->
               <div class="title-wrapper">
                   <h3 class="i-name">Participate in Tender / EoI</h3>
               </div>
               <div class="selection-bar">
                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="tender-tab-li">
                           <a class="tender-tab active" id="tender-fee-tab" data-toggle="tab" href="#tender-fee"
                               role="tab" aria-controls="tender-fee" aria-selected="true">
                               <div class="sd-nav">Tender Fee</div>
                           </a>
                       </li>
                       <li class="tender-tab-li">
                           <a class="tender-tab" id="compliance-tab" data-toggle="tab" href="#compliance" role="tab"
                               aria-controls="compliance" aria-selected="false">
                               <div class="sd-nav">Compliance</div>
                           </a>
                       </li>
                       <li class="tender-tab-li">
                           <a class="tender-tab" id="submit-offer-tab" data-toggle="tab" href="#submit-offer" role="tab"
                               aria-controls="submit-offer" aria-selected="false">
                               <div class="sd-nav">Submit Offer</div>
                           </a>
                       </li>
                   </ul>

                   <div class="tab-content live-table-wrapper mt-4" id="myTabContent">
                       <div class="tab-pane fade show active" id="tender-fee" role="tabpanel"
                           aria-labelledby="tender-fee-tab">
                           <div class="tender-fee-form">
                               <form action="">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Tender Ref
                                                   No:</label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Tender Ref No" value="BPD/2024/RFQ-565" required />
                                           </div>
                                       </div>

                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Tender
                                                   Title:</label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Tender Title"
                                                   value="RFQ for Camera and SD Memory Card. [BPD/2024/RFQ-617]" required />
                                           </div>
                                       </div>

                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Tender Payment
                                                   Details</label>
                                               <div class="table-responsive">
                                                   <table class="table participate-tender-table table-hover">
                                                       <thead class="tender-table-header">
                                                           <tr>
                                                               <th scope="col">Tender Id</th>
                                                               <th scope="col">Payment Type</th>
                                                               <th scope="col">Required Amount (BDT)</th>
                                                               <th scope="col">Paid Amount (BDT)</th>
                                                               <th scope="col">Payment Date</th>
                                                               <th scope="col">Status</th>
                                                           </tr>
                                                       </thead>
                                                       <tbody class="tender-table-body">
                                                           <tr>
                                                               <td>01</td>
                                                               <td>Bkash</td>
                                                               <td>1020.00</td>
                                                               <td>1020.00</td>

                                                               <td>15/03/2024</td>

                                                               <td>Paid</td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Payment
                                                   Type:*</label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Payment Type" value="" required />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Required Amount
                                                   (BDT):*</label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Required Amount" value="" required />
                                           </div>
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Transaction
                                                   Type:*</label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Transaction Type" value="" required />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Amount
                                                   (BDT):*</label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Amount" value="" required />
                                           </div>
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Document
                                                   Name</label>
                                               <div class="d-flex align-items-center gap-2">
                                                   <input type="text" class="form-control" />
                                                   <div class="upload-img custom-btn">
                                                       <input type="file" />
                                                       <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                           alt="" />
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Remarks:</label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Remarks" value="" required />
                                           </div>
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="validationCustom01">Payment
                                                   Date *</label>
                                               <input class="form-control" type="date" name=""
                                                   id="" />
                                           </div>
                                       </div>
                                   </div>
                                   <button class="custom-btn" type="submit">Add</button>
                               </form>
                           </div>
                       </div>

                       <div class="tab-pane fade" id="compliance" role="tabpanel" aria-labelledby="compliance-tab">
                           <form action="">
                               <div class="tender-item-details-wrapper">
                                   <h2 class="table-text-list">
                                       Compliance - [ RFQ for Camera and SD Memory Card.
                                       [BPD/2024/RFQ-617] ]
                                   </h2>
                                   <div class="table-responsive">
                                       <table id="myTable" class="table participate-table table-hover">
                                           <thead class="tender-table-header">
                                               <tr>
                                                   <th scope="col">Requirement</th>
                                                   <th scope="col">Comply*</th>
                                                   <th scope="col">Comments</th>
                                                   <th scope="col">Upload</th>
                                               </tr>
                                           </thead>
                                           <tbody class="tender-table-body">
                                               <!-- <tr>
                                    <td>Product Catalogue</td>
                                    <td>
                                      <ul class="participate-checkbox">
                                        <li>
                                          <input type="radio" id="yes" />
                                          <label for="yes">Yes</label>
                                        </li>
                                        <li>
                                          <input type="radio" id="no" />
                                          <label for="no">No</label>
                                        </li>
                                        <li>
                                          <input type="radio" id="other" />
                                          <label for="other">Others</label>
                                        </li>
                                      </ul>
                                    </td>
                                    <td>
                                      <input
                                        class="form-control-item"
                                        type="text"
                                        placeholder="Enter comments (Max 250 characters)"
                                      />
                                    </td>

                                    <td>
                                      <div class="upload-img custom-btn">
                                        <input type="file" />
                                        <img
                                          src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                          alt=""
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      At least 2 years relevant experience on
                                      similar Field
                                    </td>
                                    <td>
                                      <ul class="participate-checkbox">
                                        <li>
                                          <input type="radio" id="yes" />
                                          <label for="yes">Yes</label>
                                        </li>
                                        <li>
                                          <input type="radio" id="no" />
                                          <label for="no">No</label>
                                        </li>
                                        <li>
                                          <input type="radio" id="other" />
                                          <label for="other">Others</label>
                                        </li>
                                      </ul>
                                    </td>
                                    <td>
                                      <input
                                        class="form-control-item"
                                        type="text"
                                        placeholder="Enter comments (Max 250 characters)"
                                      />
                                    </td>

                                    <td>
                                      <div class="upload-img custom-btn">
                                        <input type="file" />
                                        <img
                                          src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                          alt=""
                                        />
                                      </div>
                                    </td>
                                  </tr> -->
                                           </tbody>
                                       </table>
                                       <div onclick="addRow()" class="custom-btn w-auto d-inline-block">
                                           add
                                       </div>
                                   </div>
                               </div>
                               <div class="tender-item-details-wrapper mt-3">
                                   <h2 class="table-text-list">
                                       Required Document List - [ RFQ for 1.2 KW Solar System
                                       [BPD/2024/RFQ-620] ]
                                   </h2>
                                   <div class="table-responsive">
                                       <table class="table participate-table table-hover">
                                           <thead class="tender-table-header">
                                               <tr>
                                                   <th scope="col" class="particate-title-text w-25">
                                                       Document Title
                                                   </th>
                                                   <th scope="col">Mandatory</th>
                                                   <th scope="col">Comments</th>
                                                   <th scope="col">Upload</th>
                                               </tr>
                                           </thead>
                                           <tbody class="tender-table-body">
                                               <tr>
                                                   <td>
                                                       Copy of Trade license / Equivalent Document
                                                   </td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       Up to date copy of Tax Payment receipt /
                                                       Equivalent Document for international vendor
                                                   </td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>TIN Certificate</td>
                                                   <td></td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>BIN Certificate</td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>

                               <div class="participate-btn">
                                   <button class="custom-btn mt-3">Save & Next</button>
                                   <button class="custom-btn tender-close-btn mt-3">
                                       Close
                                   </button>
                               </div>
                           </form>
                       </div>

                       <div class="tab-pane fade" id="submit-offer" role="tabpanel" aria-labelledby="submit-offer-tab">
                           <form action="">
                               <div class="tender-item-details-wrapper mt-3">
                                   <h2 class="table-text-list">
                                       Tender Item List - [ RFQ for the Medical Equipment.
                                       [BPD/2024/RFQ-626] ]
                                   </h2>
                                   <div class="table-responsive">
                                       <table class="table participate-table table-hover">
                                           <thead class="tender-table-header">
                                               <tr>
                                                   <th scope="col">Sl.</th>
                                                   <th scope="col">Select</th>
                                                   <th scope="col">Lot/Group</th>
                                                   <th scope="col">Item Name</th>
                                                   <th scope="col">Quantity</th>
                                                   <th scope="col">Delivery Schedule</th>
                                                   <th scope="col">Technical Information</th>
                                                   <th scope="col">Financial Information</th>
                                                   <th scope="col">Offer Price</th>
                                                   <th scope="col">Status</th>
                                               </tr>
                                           </thead>
                                           <tbody class="tender-table-body">
                                               <tr>
                                                   <td>01</td>
                                                   <td>
                                                       <input type="checkbox" />
                                                   </td>
                                                   <td>Lot-1</td>

                                                   <td>Lancet</td>
                                                   <td>710.00</td>
                                                   <td>
                                                       <a href="#" class="show-color-text">
                                                           Show Details
                                                       </a>
                                                   </td>
                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/file.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <img src="{{ asset('assets-frontend/images/icons/tk-icon.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                                   <td>0.00</td>
                                                   <td>Not Applied</td>
                                               </tr>
                                               <tr>
                                                   <td colspan="7"></td>
                                                   <!-- Use colspan to merge cells -->
                                                   <td>Total</td>
                                                   <td>0.00</td>
                                                   <td>Not Applied</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                                   <div class="form-input-field mt-2">
                                       <label for="">Comments</label>
                                       <textarea name="" id="" cols="30" rows="5"></textarea>
                                   </div>
                                   <div class="participate-btn">
                                       <button class="custom-btn mt-4 btn-main-color">
                                           Save
                                       </button>
                                       <button class="custom-btn mt-4">Submit</button>
                                       <button class="custom-btn tender-close-btn mt-4">
                                           Close
                                       </button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   @endsection
