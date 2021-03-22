 <style>
     .modal-header {
         background-color: #374871;
         color: white;
         text-align: center;
     }

     .modal-dialog {
         width: 30%;
         border-top-left-radius: 25px;
         background-color: white;
         z-index: 999;

     }

     @media only screen and (max-width: 600px) {
         .modal-dialog {
             width: 100%;
             border-top-left-radius: 25px;
             background-color: white;
         }
     }

     .container-box {
         display: inline-block;
         border: 1px solid #374871;
         background-color: #374871;
         position: fixed;
         top: 30%;
         right: 0;
         margin-right: 0;
         z-index: 999;
         border-radius: 5%;
     }

     .turned-button,
     .turned-button:focus,
     .turned-button:active,
     .turned-button:hover {
         background-color: #374871;
         border-color: #374871;
         color: white;

     }

     .modal-content {
         background: rgba(255, 255, 255, 0.7);
     }

     .rotated {
         transform: rotate(270deg);
         right: -52px;
     }

     .sub_btn,
     .sub_btn:active,
     .sub_btn:hover,
     .sub_btn:focus {
         padding: 10px;
         width: 150px;
         background-color: #374871;
         border-color: #374871;
         color: white;

     }

     input[type="text"],
     input[type="email"] {
         outline: none;
         box-shadow: none !important;
         border: 1px solid #ccc !important;
     }
     /* @media only screen and (max-width: 600px) {
        .turned-button{
            padding: .0rem 1rem;
            font-size: 1.20rem;
                }
        .rotated{
            right: -57px;;
        }
        
        .modal{
            width: 90%;
            height: 90%;
            margin-top: 10%;
        }
                }
                @media only screen and (min-device-width : 600px) and (max-device-width : 1024px) {
        .rotated{
            right: -48px;;
        }
        .modal{
            width: 100%;
            height: 90%;
            margin-top: 10%;
        }
                } */
     
 </style>
 <div class="container-box rotated">
     <button type="button" class="btn btn-lg turned-button" data-toggle="modal" data-target="#exampleModal">
         Enquire Now
     </button>
 </div>
 <!-- Modal -->
 <div class="container ">
     <div class="row">
         <div class="col">
       
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title ml-auto mr-auto" id="exampleModalLabel">
                     Enquire Now
                 </h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form>
                     <div class="form-group">
                         <input type="text" class="form-control input-sm" id="enq_name" placeholder="Enter Full Name *" name="enq_name" required />
                     </div>
                     <div class="form-group">
                         <input type="email" class="form-control" id="enq_email" placeholder="Enter Email Address *" name="enq_email" required />
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="enq_phone" placeholder="Enter Mobile Number *" name="enq_phone" required />
                     </div>
                     <div class="form-row">
                         <div class="col-md-6 mb-3">
                             <input type="text" class="form-control" id="enq_state" placeholder="State *" name="enq_state" required />
                         </div>
                         <div class="col-md-6 mb-3">
                             <input type="text" class="form-control" id="enq_city" placeholder="City *" required name="enq_city" />
                         </div>
                     </div>
                     <div class="form-group">

                         <input type="text" class="form-control" id="" placeholder="Enter Course" required />

                     </div>
                     <div class="custom-control custom-checkbox">
                         <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" />
                         <label class="custom-control-label" for="customCheck">I agree to receive information regarding my submitted
                             enquiry</label>
                     </div>
                     <br />
                     <div class="col-md-10 text-center">
                         <button type="submit" class="btn btn-lg sub_btn">
                             Submit
                         </button>
                     </div>
                 </form>
             </div>
             <div class="modal-footer ml-auto mr-auto" style="font-weight: bold">
                 <p class="ml-auto mr-auto">
                     ADMISSION ENQUIRY
                     <br />
                     admissions@contact.edu.in
                     <br />
                     Helpline: <a href="tel:+918296308193" style="color: #17375d">+91 82963 08193</a><br />
                 </p>
             </div> 
         </div>
     </div>
 </div>
       
 </div>
</div>
 </div>