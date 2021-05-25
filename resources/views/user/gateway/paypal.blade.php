<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
{{--<form action="https://secure.paypal.com/cgi-bin/webscr" method="post" id="payment_form">--}}
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="payment_form">
    <input type="hidden" name="cmd" value="_xclick"/>
    <input type="hidden" name="business" value=""/>
    <input type="hidden" name="cbt" value="ticket"/>
    <input type="hidden" name="currency_code" value="USD"/>
    <input type="hidden" name="quantity" value="1"/>
    <input type="hidden" name="item_name" value="Add Money To Account"/>
    <input type="hidden" name="custom" value="12345678"/>
    <input type="hidden" name="amount" value="10"/>
    <input type="hidden" name="return" value="{{route('user.paypal.success')}}"/>
    <input type="hidden" name="cancel_return" value="{{route('user.paypal.cancel')}}"/>
    <input type="hidden" name="notify_url" value="{{route('user.paypal.success')}}"/>
</form>

<script>
    document.getElementById("payment_form").submit();
</script>
</body>

</html>




