<x-app-web-layout>
    <div class="container mt-5">
        <h1 class="text-center">Review Payment Details</h1>
        <form id="payment_confirmation" action="https://secureacceptance.cybersource.com/pay" method="post">
            <fieldset id="confirmation">
                <div class="row">
                    @php
                        $fieldsToDisplay = [
                            'donorName', 
                            'donorEmail', 
                            'donorPhone', 
                            'donorAddress', 
                            'donationType', 
                            'donationPurpose', 
                            'studentname', 
                            'admissionno', 
                            'studentGrade', 
                            'amount'
                        ];
                    @endphp
                    
                    @foreach ($data["data"] as $name => $value)
                        @if (in_array($name, $fieldsToDisplay))
                            <div class="col-md-12 mb-2">
                                <span class="fieldName font-weight-bold">
                                    @switch($name)
                                        @case("donorName") Donor Name: @break
                                        @case("donorEmail") Donor Email: @break
                                        @case("donorPhone") Contact Number: @break
                                        @case("donorAddress") Address: @break
                                        @case("donationType") Donation Type: @break
                                        @case("donationPurpose") Donation Purpose: @break
                                        @case("studentname") Student's Name: @break
                                        @case("admissionno") Admission No: @break
                                        @case("studentGrade") Student Grade: @break
                                        @case("amount") Donation Amount: LKR @break
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

            <div class="text-center mt-4 d-flex justify-content-center">
                <input type="button" id="cancel" class="btn btn-lg btn-light text-dark w-20 mx-2" value="Cancel" onclick="history.back()">
                <input type="submit" id="submit" class="btn btn-lg text-light w-20 mx-2" style="background-color: #431F50;" value="Confirm">
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

