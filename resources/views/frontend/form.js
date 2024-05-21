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