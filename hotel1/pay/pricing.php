<?php
    require_once "config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <style type="text/css">
        .container {
            margin-top: 100px;
        }

        .card {
            width: 300px;
        }

        .card:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .list-group-item {
            border: 0px;
            padding: 5px;
        }

        .price {
            font-size: 52px;
        }

        .currency {
            position: relative;
            font-size: 25px;
            top: -31px;
        }

        body {
  background-image: url('merchant-payments');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.button {
  background-color:#ff4d4d;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  float:right;
}
    </style>
</head>
<body>
<div class="container">
    <?php
        $colNum = 1;
        foreach ($products as $productID => $attributes) {
            if ($colNum == 1)
                echo '<div class="row">';

            echo '
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2 class="price"><span class="currency">LKR</span>'.($attributes['price']).'</h2>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h2>'.$attributes['title'].'</h2>
                            </div>
                            <ul class="list-group">
                            ';

                            
                              

                        echo '
                            </ul>
                            <br>
                            <form action="stripeIPN.php?id='.$productID.'" method="POST">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="'.$stripeDetails['publishableKey'].'"
                                data-amount="'.$attributes['price'].'"
                                data-name="'.$attributes['title'].'"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto">
                              </script>
                            </form>
                        </div>
                    </div>
                </div>
            ';

            if ($colNum == 3) {
                echo '</div><br>';
                $colNum = 0;
            } else
                $colNum++;
        }
    ?>
	
	<script>
function myFunction() {
  alert("You must Pay!");
  window.location="./pricing.php";
}
</script>
  <button class="button"><a href="../other.php" style="color:white; font-weight:bold; margin:5px;">Recommand</a></button>

</div>
</body>
</html>