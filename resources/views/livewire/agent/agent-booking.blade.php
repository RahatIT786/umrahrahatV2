<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Forms Steps</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form action="#">
                                <ul class="wizard-nav mb-5">
                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Seller Details">
                                                <i class="uil uil-list-ul"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Company Document">
                                                <i class="uil uil-clipboard-notes"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bank Details">
                                                <i class="uil uil-university"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- wizard-nav -->

                                <div class="wizard-tab">
                                    <div class="text-center mb-4">
                                        <h5>Package & PNR Details</h5>
                                        <p class="card-title-desc">Fill all information below</p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Service Type</label>
                                                <select class="form-select">
                                                    <option selected>Select Service Type</option>
                                                    <option value="Hajj">Hajj</option>
                                                    <option value="Umrah">Umrah</option>
                                                    <option value="Ramzan">Ramzan</option>
                                                    <option value="Ziyarat">Ziyarat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input" class="form-label">Departure City</label>
                                                    <select class="form-select">
                                                        <option selected>Select Service Type</option>
                                                        @foreach ($departCitys as $city)
                                                            <option value="{{$city->CityName}}">{{$city->CityName}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-lastname-input" class="form-label">Travel Date*</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-lastname-input" placeholder="Enter Last Name">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-lastname-input" class="form-label">Last
                                                        name</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-lastname-input" placeholder="Enter Last Name">
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input" class="form-label">Departure City</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-firstname-input" placeholder="Enter First Name">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-lastname-input" class="form-label">Last
                                                        name</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-lastname-input" placeholder="Enter Last Name">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-lastname-input" class="form-label">Last
                                                        name</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-lastname-input" placeholder="Enter Last Name">
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>

                                </div>
                                <!-- wizard-tab -->

                                <div class="wizard-tab">
                                    <div>
                                        <div class="text-center mb-4">
                                            <h5>Company Document</h5>
                                            <p class="card-title-desc">Fill all information below</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-pancard-input" class="form-label">PAN
                                                            Card</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-pancard-input" placeholder="Enter PAN Number">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-vatno-input"
                                                            class="form-label">VAT/TIN No.</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-vatno-input" placeholder="Enter VAT/TIN Number">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-cstno-input" class="form-label">CST
                                                            No.</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-cstno-input" placeholder="Enter CST No.">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-servicetax-input"
                                                            class="form-label">Service Tax No.</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-servicetax-input" placeholder="Enter Service Tax No.">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-companyuin-input"
                                                            class="form-label">Company UIN</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-companyuin-input" placeholder="Enter Company UIN">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-declaration-input"
                                                            class="form-label">Declaration</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-declaration-input" placeholder="Enter Declaration">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row-->
                                        </div><!-- end form -->
                                    </div>
                                </div>
                                <!-- wizard-tab -->

                                <div class="wizard-tab">
                                    <div>
                                        <div class="text-center mb-4">
                                            <h5>Bank Details</h5>
                                            <p class="card-title-desc">Fill all information below</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-namecard-input"
                                                            class="form-label">Name on Card</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-namecard-input" placeholder="Enter Name of Card">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Credit Card Type</label>
                                                        <select class="form-select">
                                                            <option selected>Select Card Type</option>
                                                            <option value="AE">American Express</option>
                                                            <option value="VI">Visa</option>
                                                            <option value="MC">MasterCard</option>
                                                            <option value="DI">Discover</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-cardno-input"
                                                            class="form-label">Credit Card Number</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-cardno-input" placeholder="Enter Credit Number">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-card-verification-input"
                                                            class="form-label">Card Verification Number</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-card-verification-input" placeholder="Enter Verification number">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-expiration-input"
                                                            class="form-label">Expiration Date</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-expiration-input" placeholder="Expiration Date">
                                                    </div>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end form -->
                                    </div>
                                </div>
                                <!-- wizard-tab -->

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </form><!-- end form -->
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> &copy; Vuesy.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
