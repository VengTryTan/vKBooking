<!DOCTYPE HTML>
<html lang="en" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('frontend/css/checkin.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
@include('header.header')
    <div class="row">
        <div class="col-75">
            <div class="container">
            <form method="POST" action="{{ route('reservation.store')}}">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-50">
                        <h3 id="bill">User Information</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" name="fname" placeholder="Soksan Serey">
                        <label for="phone"><i class="fa fa-phone"></i> Phone</label>
                        <input type="text" name="phone" placeholder="0987654321">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" name="email" placeholder="soksan@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" name="address" placeholder="123 Street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" name="city" placeholder="Kratie">
                    </div>
                    <div class="col-50">
                        <h3 id="bill">Payment</h3>
                        <label for="ac">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <div class="row">
                            <div class="col-50">
                                <label for="cname">Card holder name</label>
                                <input type="text" name="cardname" placeholder="Soksan Serey">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input max="9999" type="text" id="secretCode" name="cvv" placeholder="123">
                            </div>
                        </div>
                        <label for="ccnum">Credit card number</label>
                        <input id="creditCardText" type="text" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <div class="row">
                            <div class="col-50">
                                <label for="exp_month">Exp Month</label>
                                <select name="month">
                                    <option value="January">January</option>
                                    <option value="February">February </option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="col-50">
                                <label for="exp_year">Exp Year</label>
                                <select name="year">
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label> -->
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
            </div>
        </div>
        <div class="col-25">
            <div class="container">
                <h4>Selected Room
                    <span class="price" style="color:black">
                    <i class="fa fa-shopping-cart"></i> 
                    <b>4</b>
                    </span>
                </h4>
                    <p>Bungalow <span class="price">$175</span></p>
                <hr>
                <p>Total <span class="price" style="color:black"><b>$175</b></span></p><br>
                <h4>Date
                    <span class="date" style="color:black">
                        <i class="fa fa-calendar"/></i>
                    </span>
                </h4>
                <p>Checkin : <span class="date" style="color:black">27-June-2018</span></p>
                <p>Checkout : <span class="date" style="color:black">27-June-2018</span></p>
            </div>
        </div>
    </div>
    <script>
        $('#creditCardText').keyup(function() {
        var foo = $(this).val().split("-").join(""); // remove hyphens
        if (foo.length > 0) {
            foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
        }
            $(this).val(foo);
        });
    </script>
@include('footer.footer')
</body>
</html>