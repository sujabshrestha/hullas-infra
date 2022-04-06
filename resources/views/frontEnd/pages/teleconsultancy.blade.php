<div class="teleconsultant" style="background-image: url('/assets/images/pharmacy.png');">
    <div class="teleconsultant_box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="teleconsultant_content">
                        <h3>Global Assistance Allince connects you to the best hospitals and specialists in Asia</h3>
                        <ul>
                            <li>
                                <span>
                                    <i class="fa fa-briefcase"></i>
                                </span>
                                <div class="main_title">
                                    <h4>Travel Arrangements</h4>
                                    <p>We arrange visa, flights, airport pickup, accommodation and ground transportation
                                        for you and your companion.</p>
                                </div>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-heartbeat"></i>
                                </span>
                                <div class="main_title">
                                    <h4>Medical Support</h4>
                                    <p>We arrange visa, flights, airport pickup, accommodation and ground transportation
                                        for you and your companion.</p>
                                </div>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-location-arrow"></i>
                                </span>
                                <div class="main_title">
                                    <h4>Concierge Service</h4>
                                    <p>We arrange visa, flights, airport pickup, accommodation and ground transportation
                                        for you and your companion.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="teleconsultant_box">
                        <div class="teleconsultant_form">
                            <div class="form_title">
                                Get Started
                                <h1>Send <span>Inquery</span></h1>
                            </div>
                            <form action="{{ route('front.appointmentSubmit') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-1">
                                        <input type="text" name="name" class="form-control form-control-lg"
                                            id="colFormLabelLg" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-1">
                                        <select name="service" class="form-control form-control-lg">
                                            <option selected>Choose Service</option>
                                            <option value="medial_support">Medical Support</option>
                                            <option value="house_call">House Call</option>
                                            <option value="cost_container">Cost Containment</option>
                                            <option value="air_ambulance">Ambulance and Air Ambulance</option>
                                            <option value="support_service">Linguistic Support Service</option>
                                            <option value="travel_arrangement">Travel Arrangement</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-1">
                                            <input type="text" name="passportnumber"
                                                class="form-control form-control-lg" id=""
                                                placeholder="Passport Number">
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <input type="text" name="address" class="form-control form-control-lg"
                                                id="Address" placeholder="Current Addreess">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-1">
                                            <input type="text" name="nationality" class="form-control form-control-lg"
                                                id="phone" placeholder="Nationality">
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <input type="phone" name="phone" required
                                                class="form-control form-control-lg" id="email"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-1">
                                            <input type="email" name="email" class="form-control form-control-lg"
                                                id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-1">
                                            <textarea class="form-control" name="remarks" placeholder="Your Message" id="exampleFormControlTextarea1"
                                                rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="file" class="fileinput_custom">
                                    </div>

                                    <div class="button_container">
                                        <button class="btn"><i class="fa fa-location-arrow"></i>Submit Your
                                            Inquery</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
