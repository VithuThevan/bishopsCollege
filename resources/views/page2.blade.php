<x-app-web-layout>
    <div class="container mt-5">
        <h1>Review Payment Details</h1>
        <form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/pay" method="post">
            <fieldset id="confirmation">
                <legend>Review Payment Details</legend>
                <div>
                    @foreach ($data["data"] as $name => $value)
                                        <div>
                                            @if (
                                                    $name != "_token"
                                                    && $name != "profile_id"
                                                    && $name != "transaction_uuid"
                                                    && $name != "reference_number"
                                                    && $name != "signed_field_names"
                                                    && $name != "signed_date_time"
                                                    && $name != "access_key"
                                                    && $name != "locale"
                                                    && $name != "transaction_type"
                                                    && $name != "currency"
                                                )
                                                                    @if ($name == "donorName")
                                                                        <span class="fieldName">Donor Name:</span>
                                                                    @elseif ($name == "donorEmail")
                                                                        <span class="fieldName">Donor Email:</span>
                                                                    @elseif ($name == "donorPhone")
                                                                        <span class="fieldName">Contact Name:</span>
                                                                    @elseif ($name == "donorAddress")
                                                                        <span class="fieldName">Address:</span>
                                                                    @elseif ($name == "donationType")
                                                                        <span class="fieldName">Donation Type:</span>
                                                                    @elseif ($name == "donationPurpose")
                                                                        <span class="fieldName">Donation Propose:</span>
                                                                    @elseif ($name == "studentname")
                                                                        <span class="fieldName">Name of the students:</span>
                                                                    @elseif ($name == "admissionno")
                                                                        <span class="fieldName">Admission No:</span>
                                                                    @elseif ($name == "studentGrade")
                                                                        <span class="fieldName">Student Grade:</span>
                                                                    @elseif ($name == "amount")
                                                                        <span class="fieldName">Donation Amount:</span>
                                                                    @endif
                                                                    <span class="fieldValue">{{ $value }}</span>
                                            @endif
                                        </div>
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

            <input type="submit" id="submit" value="Confirm">
        </form>
    </div>

</x-app-web-layout>

<script>
    function sign(data) {
        // This is a placeholder for the actual signature generation.
        return 'dummy-signature';
    }
</script>