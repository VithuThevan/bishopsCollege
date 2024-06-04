<?php include 'security.php' ?>

<html>

<head>
    <title>Secure Acceptance - Payment Form Example</title>
    <link rel="stylesheet" type="text/css" href="payment.css" />
    <!-- <script>
        function handleSubmit(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Serialize form data into a query string
            const formData = new FormData(event.target);
            const queryParams = new URLSearchParams(formData).toString();

            // Display form data in console
            console.log("Form Data: ", queryParams);

            // You can also make an AJAX request here to send form data to the server
            Example:
            fetch('https://testsecureacceptance.cybersource.com/pay', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Error:', error));
        }
    </script> -->
</head>

<body>
    <form id="formcheck" action="https://testsecureacceptance.cybersource.com/pay" method="post" />
    <?php
foreach ($_REQUEST as $name => $value) {
    $params[$name] = $value;
}
    ?>
    <fieldset id="confirmation">
        <legend>Review Payment Details</legend>
        <div>
            <?php
// die(var_dump($params));
foreach ($params as $name => $value) {
    echo "<div>";
    echo "<span class=\"fieldName\">" . $name . "</span><span class=\"fieldValue\">" . $value . "</span>";
    echo "</div>\n";
}
            ?>
        </div>
    </fieldset>
    <?php
foreach ($params as $name => $value) {
    echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
}
echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
    ?>
    <input type="submit" id="submit" value="Confirm" />
    </form>
</body>

</html>