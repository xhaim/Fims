<a href="javascript:void(0)" onClick="viewFunc({{ $id }})" class="btn btn-info">
    <i class="fa fa-eye"></i> 

<a href="javascript:void(0)" data-toggle="tooltip" onClick="editFunc({{ $id }})" data-original-title="Edit" class="edit btn btn-success">
    <i class="fa fa-pencil"></i> 
</a>

<a href="javascript:void(0)" id="delete-rental" onClick="deleteFunc({{ $id }})" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">
    <i class="fa fa-trash"></i>
</a>
<a href="javascript:void(0);" id="delete-riceseeds" onClick="deleteFunc({{ $id }})" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">
    Delete
</a>