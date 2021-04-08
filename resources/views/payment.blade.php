<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <form action="{{ route('stripe.post') }}" method="POST">
            @csrf
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_51IdC5fSHgrybNeXEp4QgRZ1j5S7Z722e8K3l5ndSbe3Y5IL7EzEFZTwsCKmJhrElQNkYdI1esMeFsu6USQ1qzwqi00Q8pzJjLy"
                    data-amount="1999"
                    data-name="Stripe Demo"
                    data-description="Online course about integrating Stripe"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-currency="i">
            </script>
        </form>
    </body>
</html>