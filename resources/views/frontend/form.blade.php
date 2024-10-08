<x-app-web-layout>

  <div class="container mt-3">
    <div class="card">
      <div class="card-header">Donation Form</div>
      <div class="card-body">
        <!-- <form action="{{url('/products/create')}}" method="POST"> -->
        <form action="{{url('/page1')}}" method="POST">
          @csrf
          <input type="hidden" name="access_key" value="{{env('ACCESS_KEY')}}">
          <input type="hidden" name="profile_id" value="{{env('PROFILE_ID')}}">
          <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
          <input type="hidden" name="reference_number" value="1716203302803">
          <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,bill_to_address_postal_code,signed_date_time,bill_to_email,bill_to_forename,bill_to_phone,bill_to_surname,locale,bill_to_address_state,bill_to_address_country,transaction_type,reference_number,amount,currency,bill_to_address_city,bill_to_address_line1">
          <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
          <input type="hidden" name="unsigned_field_names">
          <input type="hidden" name="locale" value="en">
          <input type="hidden" name="currency" value="USD">
          <input type="hidden" name="transaction_type" value="sale">
          <input type="hidden" name="bill_to_address_city" value="Colombo">
          <input type="hidden" name="bill_to_address_line1" value="15 Boyd Place">
          <input type="hidden" name="bill_to_address_state" value="LK-11">
          <input type="hidden" name="bill_to_address_country" value="LK">
          <input type="hidden" name="bill_to_email" value="dummy@email.com">
          <input type="hidden" name="bill_to_address_postal_code" value="00300">
          <input type="hidden" name="bill_to_forename" value="James">
          <input type="hidden" name="bill_to_phone" value="0112422691">
          <input type="hidden" name="bill_to_surname" value="Chapman">
          <input type="hidden" name="card_type" value="001">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label htmlFor="name">Donor's Name</label>
                <input type="text" class="form-control" name="donorName" placeholder="Enter your name" required />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label htmlFor="email">Donor's Email</label>
                <input type="email" class="form-control" name="donorEmail" placeholder="Enter your email" required />
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Donor's Contact Number</label>
                <input type="number" class="form-control" name="donorPhone" placeholder="Enter your contact number"
                  required />
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Donor's Address</label>
                <input type="text" class="form-control" name="donorAddress" placeholder="Enter your email" required />
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">I am a ...</label>
                <select class="form-control form-select" name="donorType" required>
                  <option selected>Select</option>
                  <option value="PTA Member">PTA Member</option>
                  <option value="PPA Member">PPA Member</option>
                  <option value="PTA and PPA Member">
                    PTA and PPA Member
                  </option>
                  <option value="Well wisher">Well wisher</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mt-2"></div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Type of Donation</label>
                <select class="form-control form-select" name="donationType" id="donationType" required
                  onchange="updatePurposeOptions()">
                  <option selected>Select</option>
                  <option value="School">School</option>
                  <option value="Hostel">Hostel</option>
                  <option value="Parents teachers Association">
                    Parents teachers Association
                  </option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Purpose of Donation</label>
                <select class="form-control form-select" name="donationPurpose" id="donationPurpose" required>
                  <option selected>Select</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Student's Name</label>
                <input type="text" class="form-control" name="studentname" placeholder="Enter your email" required />
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Student's Admission Number</label>
                <input type="text" class="form-control" name="admissionno" placeholder="Enter Student's Name"
                  required />
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Student's Grade</label>
                <input type="number" class="form-control" name="studentGrade" placeholder="Enter Student's Grade"
                  required />
              </div>
            </div>
            <div class="col-md-6 mt-2">
              <div class="form-group">
                <label htmlFor="email">Donation Amount</label>
                <input type="number" class="form-control" name="amount" placeholder="Enter Student's Donation Amount"
                  required />
              </div>
            </div>
          </div>
          <button class="mt-2" type="submit">
            PAY
          </button>
        </form>
      </div>
    </div>
  </div>

</x-app-web-layout>

<script>
  function validateForm() {
    // Get form inputs
    var donorName = document.getElementById("donorName").value;
    var donationAmount = document.getElementById("donationAmount").value;

    // Clear previous error messages
    document.getElementById("donorNameError").innerHTML = "";
    document.getElementById("donationAmountError").innerHTML = "";

    // Perform validations
    if (donorName === "") {
      document.getElementById("donorNameError").innerHTML = "Please enter your name"; // Show error message
      return false;
    }

    if (donationAmount === "") {
      document.getElementById("donationAmountError").innerHTML = "Please enter donation amount"; // Show error message
      return false;
    }

    return true;
  }

  function updatePurposeOptions() {
    var donationType = document.getElementById("donationType").value;
    var purposeDropdown = document.getElementById("donationPurpose");
    purposeDropdown.innerHTML = ""; // Clear existing options

    // Populate options based on selected donation type
    if (donationType === "School") {
      var options = ["Select", "Building Fund", "Scholarship Fund", "Bursary Fund", "Covid Relief Fund", "Smart Board Fund", "Sports Fund"];
    } else if (donationType === "Hostel") {
      var options = ["Select", "Hostel Makeover Fund"];
    } else if (donationType === "Parents teachers Association") {
      var options = ["Select", "Playground Project", "IT Project", "Building Project", "History Book"];
    } else {
      var options = [];
    }

    // Add options to the purpose dropdown
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement("option");
      option.text = options[i];
      option.value = options[i];
      purposeDropdown.add(option);
    }
  }
</script>