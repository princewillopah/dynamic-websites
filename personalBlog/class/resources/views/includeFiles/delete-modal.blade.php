
<!-- Modal -->
<div class="modal fade" id="deleteUserModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #eee">
                <h5 class="modal-title" id="deleteUserModal-{{$user->id}}">You are about to delete <span style="color: #0b3e6f">{{$user->name}} </span>with Id: <span style="color: #0b3e6f">{{$user->id}}</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span style="color: #0b3e6f; font-weight: bold"> Do You Want To Proceed?</span>
            </div>
            <div class="modal-footer" style="background: #eee">
                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                <form action="{{route('user.delete',$user->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                </form>

            </div>
        </div>
    </div>
</div>