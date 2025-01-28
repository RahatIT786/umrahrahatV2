
<div class="card ">
    <div class="card-body">
      <div class="d-flex align-items-center">
         <h5 class="mb-0">AgentSignUp Enquiry</h5>
         
          <form class="ms-auto position-relative" style="margin-right: 5rem">
            {{-- <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
            <input class="form-control ps-5" type="text" placeholder="search"> --}}
          </form>
          {{-- <button href="{{route('admin.package-add')}}" wire:navigate class="btn btn-primary shadow-lg"><i class="bi bi-bag-plus"></i>&nbsp; CREATE</button> --}}
      </div>
      <div class="table-responsive mt-3 ">
        <table class="table align-middle">
          <thead class="table-secondary">
            <tr>
             <th>S.No</th>
             <th>Name</th>
             <th>Mobile</th>
             <th>Email</th>
             <th>City</th>
             
            
            
             
            </tr>
          </thead>
          <tbody>
           @foreach ($agentSignUps as $key => $q)
         
               
       <tr>
           <td> {{$key+1}} </td>
         
           <td>{{$q->name}}</td>
           <td>{{$q->mobile}}</td>
           <td>{{$q->email}}</td>
           <td>{{$q->city}}</td>
        

       </tr>
               
           @endforeach
           
          
          </tbody>
        </table>

        



       {{-- popup box end --}}
{{-- <div class="modal fade @if($showModal) show @endif" 
id="exampleVerticallycenteredModal" 
tabindex="-1" 
aria-labelledby="exampleModalCenterTitle" 
aria-hidden="true"
@if($showModal) style="display: block;" @endif>
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
   <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Deletion</h5>
   <button type="button" class="btn-close" 
           data-bs-dismiss="modal" 
           aria-label="Close"
           wire:click="closeConfirmDeletPopup"></button>
</div>
<div class="modal-body">
   Are you sure you want to delete this ?
</div>
<div class="modal-footer">
   <button type="button" class="btn btn-secondary" 
           data-bs-dismiss="modal" 
           wire:click="closeConfirmDeletPopup">Cancel</button>
   <button type="button" class="btn btn-danger" 
           wire:click="deletePackage"
           data-bs-dismiss="modal">Delete</button>
</div>
</div>
</div>
</div> --}}


      </div>
    </div>
  </div>
