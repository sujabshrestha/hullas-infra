@extends('frontEnd.layout.master')

@push('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<style>
    #ajaxLoader{
        display: none;
    }
    .loader {
        border: 12px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 80px;
        height: 80px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

</style>
@endpush

@section('content')

    <div class="open-form">
        <div class="form-header container">
            <div></div>
            <div class="header-items">

                <div class="university">
                   हब कोअपरेटिभ सर्भिस लिमिटेड
                </div>
                <div class="faculty mt-3 mb-3">
                    भक्तिमार्ग, बालुवाटार, काठमाडौं, नेपाल
                </div>
                <div class="application">
                    अनलाइन फारम  ({{$formType->title}})
                </div>

            </div>
            <div></div>
        </div>
    </div>

    @if(!hasformSession($formType->id))
        <form method="post" action="{{ route('front.form.start',[$formType->slug]) }}" class="open-form">
            @csrf
            <div class="form-content container">
                <div class="selection">
                    <div class="section-wrap row">
                        <div class="col-6 mr-2 ml-2">
                            <div class="form-group">
                                <label for="">पुरा नाम:</label>
                                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-6 mr-2 ml-2">
                            <div class="form-group">
                                <label for="">ईमेल:</label>
                                <input type="email" name="email" class="form-control" placeholder="Email address" required>
                            </div>
                        </div>
                        <div class="col-6 mr-2 ml-2">
                            <div class="form-group">
                                <label for="">मोबाइल (१० अंक):</label>
                                <input type="number" name="phone" class="form-control" placeholder="10 digit phone: 98xxxxxxxx" required>
                            </div>
                        </div>
                        <div class="col-6 mr-2 ml-2 text-right">
                            <div class="form-group">
                                <button class="btn btn-success">सुरु गर्नुहोस्</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    @else

        <div class="container text-center mt-5 mb-5">
            <h3><span class="alert-primary text-dark p-2">{{$formUser->full_name}} ({{$formUser->email}}, {{$formUser->phone}})</span></h3>
            <h5>" {{$formUser->formType->title}} Form "</h5>
            <span><a href="{{ route('front.form.resetEntry') }}">*Change details / Start new form ?</a></span>
        </div>


        <div class="container text-center mb-5">
            <div class="ui ordered steps">
                @if(isset($forms))
                    @foreach($forms->sortBy('fill_order') as $form)
                        <div class=" {{ $form->hasSubmission == 1 ? "completed" : "active"  }} step" data-id="{{$form->id}}">
                            <div class="content">
                                <div class="title">{{$form->title_nepali}}</div>
                                <div class="description">{{$form->title}}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="container text-center mb-3 mt-3" id="ajaxLoader">
            <div class="loader" style="margin: auto"></div>
        </div>
        <div class="container" id="ajaxFormArea">
            <!-- Ajax form loaded here -->
        </div>
        <div class="container" id="ajaxComplete" style="display: none;">
            <div class="text-center alert alert-success text-white">
                <h3>तपाईले यस संस्थामा आवेदन दिनुभएकोमा धन्यावाद !!!</h3>
            </div>
        </div>

    @endif


@endsection

@push('script')

    @if(hasformSession($formType->id))
        <script>
            $('document').ready(function() {
               var active = $('.active.step');
                $('#ajaxComplete').show();
               if(active[0]){
                   var formData = {
                       form_id: $(active[0]).attr('data-id'),
                       form_user_id: "{{$formUser->id}}"
                   };
                   console.log(formData);
                   var myUrl = "{{ route('front.form.ajaxFormLoad') }}";
                   console.log(myUrl);
                   $.ajax({
                       type: "GET",
                       url: myUrl,
                       data: formData,
                       dataType: 'json',
                       beforeSend: function(){
                           $('#ajaxFormArea').html('');
                           $('#ajaxFormArea').hide();
                           $('#ajaxLoader').show();
                       },
                       success: function (data) {
                           $('#ajaxFormArea').html(data);
                       },
                       error: function (data){
                           toastr.error(data.responseText, 'Operation Failed');
                           console.log(data.responseText);
                       },
                       complete: function(){
                           $('#ajaxFormArea').show();
                           $('#ajaxLoader').hide();
                       }
                   })
               }else{
                   $('#ajaxComplete').show();
                   toastr.success("Form Entry Completed", 'Thank You !!');
               }
            });
        </script>
    @endif

@endpush