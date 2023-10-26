<script type="text/javascript">
      
    $(document).ready( function () {
    
     $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
       $('#fert-crud-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ url('fert-crud-datatable') }}",
              columns: [
                       // { data: 'id', name: 'id' },
                       { data: 'seeds_received', name: 'seeds_received' },
                       { data: 'date_received', name: 'date_received' },
                       { data: 'source_of_funds', name: 'source_of_funds' },
                       { data: 'created_at', name: 'created_at' },
                       {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'desc']]
          });
    
     });
      
     function add(){
    
          $('#FertForm').trigger("reset");
          $('#FertModal').html("Add Fertilizer");
          $('#fert-modal').modal('show');
          $('#id').val('');
    
     }   
     function editFunc(id){
        
       $.ajax({
           type:"POST",
           url: "{{ url('edit-fert') }}",
           data: { id: id },
           dataType: 'json',
           success: function(res){
             $('#FertModal').html("Edit Fertilizer");
             $('#fert-modal').modal('show');
             $('#id').val(res.id);
             $('#seeds_received').val(res.seeds_received);
             $('#date_received').val(res.date_received);
             $('#sources_of_funds').val(res.sources_of_funds);
          }
       });
     }  
    
     function deleteFunc(id){
           if (confirm("Delete Record?") == true) {
           var id = id;
             
             // ajax
             $.ajax({
                 type:"POST",
                 url: "{{ url('delete-fert') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function(res){
    
                   var oTable = $('#fert-crud-datatable').dataTable();
                   oTable.fnDraw(false);
                }
             });
          }
     }
    
     $('#FertForm').submit(function(e) {
    
        e.preventDefault();
      
        var formData = new FormData(this);
      
        $.ajax({
           type:'POST',
           url: "{{ url('store-fert')}}",
           data: formData,
           cache:false,
           contentType: false,
           processData: false,
           success: (data) => {
             $("#fert-modal").modal('hide');
             var oTable = $('#fert-crud-datatable').dataTable();
             oTable.fnDraw(false);
             $("#btn-save").html('Submit');
             $("#btn-save"). attr("disabled", false);
           },
           error: function(data){
              console.log(data);
            }
          });
      });
    
   </script>