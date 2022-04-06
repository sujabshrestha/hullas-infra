<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-striped">

                   <tr>
                       <th>
                           Name
                       </th>
                       <td>
                           {{ $callback->name }}
                       </td>
                   </tr>
                   <tr>
                       <th>
                           Email
                       </th>
                       <td>
                           {{ $callback->email }}
                       </td>
                   </tr>
                   <tr>
                       <th>
                           Phone
                       </th>
                       <td>
                           {{ $callback->phone }}
                       </td>
                   </tr>
                   <tr>
                       <th>
                           Service
                       </th>
                       <td>
                           {{ $callback->service }}
                       </td>
                   </tr>
                </table>
            </div>
            {{-- <div class="card" >
                <div class="card-body">
                    <p class="card-text">{{ $contact->message }}</p>
                </div>
            </div> --}}

        </div>
    </div>
</div>
