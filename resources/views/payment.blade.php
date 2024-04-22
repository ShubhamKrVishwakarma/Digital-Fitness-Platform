<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

        body {
            background-color: #e8eaf6;
        }

        p {
            margin: 0
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #e8eaf6;
            padding: 35px;
        }

        .box-right {
            padding: 30px 25px;
            background-color: white;
            border-radius: 15px
        }

        .box-left {
            padding: 20px 20px;
            background-color: white;
            border-radius: 15px
        }

        .textmuted {
            color: #7a7a7a
        }

        .bg-green {
            background-color: #d4f8f2;
            color: #06e67a;
            padding: 3px 0;
            display: inline;
            border-radius: 25px;
            font-size: 11px
        }

        .p-blue {
            font-size: 14px;
            color: #1976d2
        }

        .fas.fa-circle {
            font-size: 12px
        }

        .p-org {
            font-size: 14px;
            color: #fbc02d
        }

        .h7 {
            font-size: 15px
        }

        .h8 {
            font-size: 12px
        }

        .h9 {
            font-size: 10px
        }

        .bg-blue {
            background-color: #dfe9fc9c;
            border-radius: 5px
        }

        .form-control {
            box-shadow: none !important
        }

        .card input::placeholder {
            font-size: 14px
        }

        ::placeholder {
            font-size: 14px
        }

        input.card {
            position: relative
        }

        .far.fa-credit-card {
            position: absolute;
            top: 10px;
            padding: 0 15px
        }

        .fas,
        .far {
            cursor: pointer
        }

        .cursor {
            cursor: pointer
        }

        .btn.btn-primary {
            box-shadow: none;
            height: 40px;
            padding: 11px
        }

        .bg.btn.btn-primary {
            background-color: transparent;
            border: none;
            color: #1976d2
        }

        .bg.btn.btn-primary:hover {
            color: #539ee9
        }

        @media(max-width:320px) {
            .h8 {
                font-size: 11px
            }

            .h7 {
                font-size: 13px
            }

            ::placeholder {
                font-size: 10px
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row m-0">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="row box-right">
                            <div class="col-md-12 ps-0">
                                <p class="ps-3 textmuted fw-bold h6 mb-2">ORDER ID : {{ $order_id }}</p>
                                <p class="ps-3 textmuted fw-bold h6 mb-0">Amount : &#8377; {{ number_format($order->amount / 100, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 mb-4">
                        <div class="box-right">
                            <div class="d-flex flex-column pb-2">
                                <p class="fw-bold h7">Name: <span class="textmuted">{{ $order->notes->name }}</span></p>
                                <p class="fw-bold h7">Email: <span class="textmuted">{{ $order->notes->email }}</span></p>
                                <p class="fw-bold h7">Phone: <span class="textmuted">{{ $order->notes->phone }}</span></p>
                            </div>
                            {{-- <div class="bg-blue p-2">
                                <P class="h8 textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Laborum recusandae dolorem voluptas nemo, modi eos minus nesciunt.
                                <p class="p-blue bg btn btn-primary h8">LEARN MORE</p>
                                </P>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="make-payment" class="btn btn-primary d-block h8">PAY <span
                            class="fas fa-dollar-sign ms-2"></span>1400<span
                            class="ms-3 fas fa-arrow-right"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Razorpay Payemnt Scripts --}}
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
                window.location.href = "http://localhost:8000/payment/info" + "?payment_id=" + response.razorpay_payment_id;
            },
            "prefill": {
                "name": "{{ $order->notes->name }}",
                "email": "{{ $order->notes->email }}",
                "contact": "{{ $order->notes->phone }}"
            },
            "notes": {
                "address": "Digital Fitness Office Kolkata"
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