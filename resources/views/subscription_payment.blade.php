<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscription Payment</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
</head>

<body>
    <section class="p-4 p-md-5 vh-100" style="background: #5AB2FF; opacity: 0.9;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-5">
                <div class="card rounded-3">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3>Confirm Order and Pay</h3>
                        </div>
                        <div class="mb-3">
                            <h5>Order ID : {{ $order_id }}</h5>
                            <p><b>Name</b> : {{ $order->notes->name }}</p>
                            <p><b>Email</b> : {{ $order->notes->email }}</p>
                            <p><b>Phone</b> : +91 {{ $order->notes->phone }}</p>
                            <p><b>Type</b> : Subscription Payment</p>
                            <p><b>Amount</b> : &#8377; {{ number_format($order->amount / 100, 2) }}</p>
                        </div>
                        <div class="mb-2">
                            <div id="make-payment" class="btn btn-success d-block h8">MAKE PAYMENT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Razorpay Payemnt Scripts -->
    <script src="{{ asset('plugins/jquery.js') }}"></script>
    <script src="{{ asset('plugins/axios.js') }}"></script>
    <script src="{{ asset('plugins/alert.js') }}"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "{{ env("RAZORPAY_API_KEY") }}",
            "amount": "{{ $order->amount }}",
            "currency": "INR",
            "name": "Digital Fitness Platform",
            "description": "Test Transaction",
            "image": "{{ asset('images/favicon/favicon.png') }}",
            "order_id": "{{ $order->id }}",
            "handler": function (response){
                window.location.href = "http://localhost:8000/pricing/subscription/Info" + "?payment_id=" + response.razorpay_payment_id + "&trainer_id={{ $order->notes->trainer_id }}" + "&type={{ $order->notes->type }}";
            },
            "prefill": {
                "name": "{{ $order->notes->name }}",
                "email": "{{ $order->notes->email }}",
                "contact": "{{ $order->notes->phone }}"
            },
            "notes": {
                "address": "Digital Fitness Platform"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
            alert("Payment Failed");
        });
        document.getElementById('make-payment').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>

</html>