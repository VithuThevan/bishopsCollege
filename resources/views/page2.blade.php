<x-app-web-layout>
    <div class="container mt-5">
        <h1 class="text-center">Review Payment Details</h1>
        <form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/pay" method="post">
            <fieldset id="confirmation">
                <div class="row">
                    @foreach ($data["data"] as $name => $value)
                        @if (!in_array($name, ["_token", "profile_id", "transaction_uuid", "reference_number", "signed_field_names", "signed_date_time", "access_key", "locale", "transaction_type", "currency"]))
                            <div class="col-md-12 mb-2">
                                <span class="fieldName font-weight-bold">
                                    @switch($name)
                                        @case("donorName") Donor Name: @break
                                        @case("donorEmail") Donor Email: @break
                                        @case("donorPhone") Contact Name: @break
                                        @case("donorAddress") Address: @break
                                        @case("donationType") Donation Type: @break
                                        @case("donationPurpose") Donation Purpose: @break
                                        @case("studentname") Name of the Students: @break
                                        @case("admissionno") Admission No: @break
                                        @case("studentGrade") Student Grade: @break
                                        @case("amount") Donation Amount: @break
                                        @case("bill_to_address_city") City: @break
                                        @case("bill_to_address_line1") Address: @break
                                        @case("bill_to_address_state") State: @break
                                        @case("bill_to_address_country") Country: @break
                                        @case("bill_to_email") Email: @break
                                        @case("bill_to_address_postal_code") Postal Code: @break
                                        @case("bill_to_forename") First Name: @break
                                        @case("bill_to_phone") Phone: @break
                                        @case("bill_to_surname") Last Name: @break
                                        @case("card_type") Card Type: @break
                                        @default {{ $name }}:
                                    @endswitch
                                </span>
                                <span class="fieldValue">{{ $value }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </fieldset>

            @foreach ($data as $name => $value)
                @if (is_array($value))
                    @foreach ($value as $subKey => $subValue)
                        <input type="hidden" id="{{ $subKey }}" name="{{ $subKey }}" value="{{ $subValue }}">
                    @endforeach
                @else
                    <input type="hidden" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">
                @endif
            @endforeach
            <input type="hidden" id="signature" name="signature" value="{{ $signature }}">

            <div class="text-center mt-4">
                <input type="submit" id="submit" class="btn btn-primary btn-lg" value="Confirm">
            </div>
        </form>
    </div>
</x-app-web-layout>


<script>
    const signature = '{{ $signature }}';
    console.log("Signature:", signature);

    function sign(data) {
        // Placeholder for the actual signature generation
        return 'dummy-signature';
    }
</script>