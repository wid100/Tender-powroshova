   @extends('layouts.frontend.master')

   @section('content')
       <form action="">
           <div class="live-tender-wrapper">
               <h1 class="tender-title">Change Password</h1>
               <div class="live-table-wrapper mt-3">
                   <div class="row">
                       <div class="col-md-6">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-input-field">
                                       <label for="name">Old Password</label>
                                       <input type="text" id="name" name="name" />
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-input-field">
                                       <label for="name">New Password</label>
                                       <input type="text" id="name" name="name" />
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-input-field">
                                       <label for="name">Confirm Password</label>
                                       <input type="text" id="name" name="name" />
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>


               <div class="participate-btn">
                   <button class="custom-btn mt-4">Update</button>
               </div>
           </div>
       </form>
   @endsection
