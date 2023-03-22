

   <!-- Modal -->
   <div class="modal fade" id="EditCategories{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Categories</h5>

           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <div class="modal-body">
             <form action="{{route('categories.update','test')}}" method="POST" autocomplete="off">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$categorie->id}}">
                 <div class="form-group">
                   <label for="formGroupExampleInput">Category Name in English</label>
                   <input type="text" class="form-control" name="name"  value="{{$categorie->name}}" required >
                 </div>
                 <div class="form-group">
                     <label for="formGroupExampleInput2">Notes</label>
                     <input type="text" class="form-control" name="notes"  value="{{$categorie->notes}}">
                   </div>

                   <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Update changes</button>
               </form>


         </div>

         </div>
       </div>
     </div>
   </div>
