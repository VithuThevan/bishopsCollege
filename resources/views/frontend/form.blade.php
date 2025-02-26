<x-app-web-layout>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center text-white" style="background-color: #431F50;">
                <img src="{{ asset('https://www.bishopscollege.lk/wp-content/uploads/2023/07/logo.webp') }}" alt="Logo"
                     width="20%"/>
                <h3>Donations</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/page1')}}" method="POST" onsubmit="assignValues()">
                    @csrf

                    <!-- Hidden Fields for Payment -->
                    <input type="hidden" name="override_custom_receipt_page" value="{{ route('payment.result') }}">
                    <input type="hidden" name="access_key" value="{{config('app.ACCESS_KEY')}}">
                    <input type="hidden" name="profile_id" value="{{config('app.PROFILE_ID')}}">
                    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
                    <input type="hidden" name="reference_number"
                           value="<?php echo round(microtime(true) * 1000) . rand(100, 999); ?>">
                    <input type="hidden" name="signed_field_names"
                           value="access_key,profile_id,transaction_uuid,override_custom_receipt_page,signed_field_names,bill_to_address_postal_code,signed_date_time,bill_to_email,bill_to_forename,bill_to_phone,bill_to_surname,locale,bill_to_address_state,bill_to_address_country,transaction_type,reference_number,amount,currency,bill_to_address_city,bill_to_address_line1">
                    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
                    <input type="hidden" name="locale" value="en">
                    <input type="hidden" name="currency" value="LKR">
                    <input type="hidden" name="transaction_type" value="sale">
                    <input type="hidden" name="bill_to_address_city" value="Colombo">
                    <input type="hidden" name="bill_to_address_line1" id="bill_to_address_line1" value="">
                    <input type="hidden" name="bill_to_address_state" value="LK-11">
                    <input type="hidden" name="bill_to_address_country" value="LK">
                    <input type="hidden" name="bill_to_address_postal_code" value="00300">
                    <input type="hidden" name="bill_to_forename" id="bill_to_forename" value="">
                    <input type="hidden" name="bill_to_email" id="bill_to_email" value="">
                    <input type="hidden" name="bill_to_phone" id="bill_to_phone" value="">
                    <input type="hidden" name="bill_to_surname" id="bill_to_surname" value="">
                    <input type="hidden" name="card_type" value="001">

                    <!-- User Data Section -->
                    <div class="card mb-4">
                        <div class="card-header text-white" style="background-color: #431F50;">
                            <h5>Donor Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Donor's Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="donorName">First Name</label>
                                        <input type="text" class="form-control" id="donorName" name="donorName"
                                               placeholder="Enter your first name" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="donorName1">Last Name</label>
                                        <input type="text" class="form-control" id="donorName1" name="donorName1"
                                               placeholder="Enter your last name" required/>
                                    </div>
                                </div>

                                <!-- Donor's Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="donorEmail">Email</label>
                                        <input type="email" class="form-control" id="donorEmail" name="donorEmail"
                                               placeholder="Enter your email" required/>
                                    </div>
                                </div>

                                <!-- Donor's Contact Number -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="donorPhone">Contact Number</label>
                                        <input type="number" class="form-control" id="donorPhone" name="donorPhone"
                                               placeholder="Enter your contact number" required/>
                                    </div>
                                </div>

                                <!-- Donor's Address -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="donorAddress">Address</label>
                                        <input type="text" class="form-control" id="donorAddress" name="donorAddress"
                                               placeholder="Enter your address" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donation Information Section -->
                    <div class="card mb-4">
                        <div class="card-header text-white" style="background-color: #431F50;">
                            <h5>Donation Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- I am a -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="donorType">I am a...</label>
                                        <select class="form-control form-select" name="donorType" required>
                                            <option selected>Select</option>
                                            <option value="PTA Member">PTA Member</option>
                                            <option value="PPA Member">PPA Member</option>
                                            <option value="PTA and PPA Member">PTA and PPA Member</option>
                                            <option value="Well wisher">Well wisher</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Donation Type -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="donationType">Type of Donation</label>
                                        <select class="form-control form-select" name="donationType" id="donationType"
                                                required
                                                onchange="updatePurposeOptions()">
                                            <option selected>Select</option>
                                            <option value="School">School</option>
                                            <option value="Hostel">Hostel</option>
                                            <option value="Parents teachers Association">Parents teachers Association
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Purpose of Donation -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="donationPurpose">Purpose of Donation</label>
                                        <select class="form-control form-select" name="donationPurpose"
                                                id="donationPurpose" required>
                                            <option selected>Select</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Donation Amount -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="donationAmount">Donation Amount</label>
                                        <input type="number" class="form-control" name="amount"
                                               placeholder="Enter donation amount"
                                               required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Information Section -->
                    <div class="card mb-4">
                        <div class="card-header text-white" style="background-color: #431F50;">
                            <h5>Student Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Student's Name -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="studentName">Student's Name</label>
                                        <input type="text" class="form-control" name="studentname"
                                               placeholder="Enter student's name"/>
                                    </div>
                                </div>

                                <!-- Student's Admission Number -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="admissionno">Student's Admission Number</label>
                                        <input type="text" class="form-control" name="admissionno"
                                               placeholder="Enter student's admission number"/>
                                    </div>
                                </div>

                                <!-- Student's Grade -->
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="studentGrade">Student's Grade</label>
                                        <input type="number" class="form-control" name="studentGrade"
                                               placeholder="Enter student's grade"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button class="mt-2 btn btn-lg text-light" type="submit" style="background-color: #431F50;">
                            PROCEED
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-web-layout>

<!-- JavaScript Functions -->
<script>
    function assignValues() {
        // Get values from donor fields
        const donorName = document.getElementById('donorName').value;
        const donorEmail = document.getElementById('donorEmail').value;
        const donorPhone = document.getElementById('donorPhone').value;
        const donorAddress = document.getElementById('donorAddress').value;
        const donorName1 = document.getElementById('donorName1').value;

        // Assign to hidden fields
        document.getElementById('bill_to_forename').value = donorName;
        document.getElementById('bill_to_email').value = donorEmail;
        document.getElementById('bill_to_phone').value = donorPhone;
        document.getElementById('bill_to_address_line1').value = donorAddress;
        document.getElementById('bill_to_surname').value = donorName1;
        document.getElementById('donorName').value = donorName.concat(" ", donorName1);
    }

    function updatePurposeOptions() {
        const donationType = document.getElementById("donationType").value;
        const purposeDropdown = document.getElementById("donationPurpose");
        purposeDropdown.innerHTML = ""; // Clear existing options

        let options = [];
        if (donationType === "School") {
            options = ["Select", "Building Fund", "Scholarship Fund", "Bursary Fund", "Covid Relief Fund", "Smart Board Fund", "Sports Fund"];
        } else if (donationType === "Hostel") {
            options = ["Select", "Hostel Makeover Fund"];
        } else if (donationType === "Parents teachers Association") {
            options = ["Select", "Playground Project", "IT Project", "Building Project", "History Book"];
        }


        // Add options to the purpose dropdown
        options.forEach(function (optionText) {
            const option = document.createElement("option");
            option.text = optionText;
            option.value = optionText;
            purposeDropdown.add(option);
        });
    }
</script>
