<div class="company_sider">
    <!-- Set up your HTML -->
    <div class="container">
        <div class="owl-carousel company_slide">
            @if (isset($companysliders) && $companysliders->count() > 0)
            @foreach ($companysliders as $companyslider)
            <div class="item">
                <div class="company-sider"><img src="{{ asset($companyslider->image) }}" alt=""></div>
            </div>
            @endforeach
            @endif


        </div>
    </div>
</div>
