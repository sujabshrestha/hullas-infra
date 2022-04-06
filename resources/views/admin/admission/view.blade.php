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
                           {{ $admission->firstname }}
                       </td>
                   </tr>
                   <tr>
                       <th>
                           Email
                       </th>
                       <td>
                           {{ $admission->email }}
                       </td>
                   </tr>
                   <tr>
                       <th>
                           Phone
                       </th>
                       <td>
                           {{ $admission->phone }}
                       </td>
                   </tr>
                   {{-- <tr>
                       <th>
                           Subject
                       </th>
                       <td>
                           {{ $contact->subject }}
                       </td>
                   </tr> --}}
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
