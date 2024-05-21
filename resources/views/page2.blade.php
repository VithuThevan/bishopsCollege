<x-app-web-layout>
    <div class="container mt-5">
        <h1>Review Payment Details</h1>
        <form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/pay" method="post">
            <fieldset id="confirmation">
                <legend>Review Payment Details</legend>
                <div>
                    @foreach ($data as $name => $value)
                        <div>
                            <span class="fieldName">{{ $name }}:</span>
                            @if (is_array($value))
                                <span class="fieldValue">{{ json_encode($value) }}</span>
                            @else
                                <span class="fieldValue">{{ $value }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </fieldset>
            @foreach ($data as $name => $value)
                @if (is_array($value))
                    @foreach ($value as $subKey => $subValue)
                        <input type="hidden" id="{{ $subKey }}" name="{{ $subKey }}"
                            value="{{ $subValue }}">
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