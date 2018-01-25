<?php include "templates/header.php";?>
     <div class="container-fluid">
       <section id="intro">
         <div class="container">
          <div class="row fill-viewport align-items-center">
            <div class="col-12 col-md-6">
              <h1 class="badge-blue">Tip with a Badge</h1>
              <p>Enter the code on your Badge below. You'll confirm your unique Badge on the next screen.</p>
                <form id="codeinput" class="form-inline" method="post">
                  <div class="form-group mx-sm-3">
                    <label for="InputBadgeCode"></label>
                    <input type="number" name="badgecode" minlength="4" maxlength="4" class="form-control" placeholder="Ex. 4356">
                    <label for="InputTipAmount"></label>
                    <input type="number" name="tipamt" min="1" max="100" step="any" class="form-control" placeholder="$1 min, $100 max">
                  </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form> 
                <div>
                  <small id="codeHelp" class="form-text">Must be a 4-digit number.</small>
                </div>
            </div>
          </div>
        </div>
       </section>
       
       <section id="how1" class="text-dark">
        <div class="jumbotron pt-4">
          <div class="col-12 text-center pb-3">
            <h2>How it Works</h2>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">You leave a Badge</h4>
              <p><i class="fa fa-check-circle-o icon-badgeblue fa-2x"></i></p>
              <p>Badge eliminates the need for cash when tipping. Through our secure payment system, you never have to use cash again!</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">Someone uses it</h4>
              <p><i class="fa fa-magic icon-badgeblue fa-2x"></i></p>
              <p>You left your Badge for someone, and they tipped you without cash.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">Get an alert</h4>
              <p><i class="fa fa-bell-o icon-badgeblue fa-2x"></i></p>
              <p>When someone tips you you'll get a text alert with the tip amount and your current balance.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">Get paid</h4>
              <p><i class="fa fa-usd icon-badgeblue fa-2x"></i></p>
              <p>When your balance reaches $100 we'll send your payment via check or paypal, you choose! You can also get paid from our monthly BadgeVan visits to hotels.</p>
            </div>
          </div>
        </div>
      </section>
      <section id="how2">
        <!-- <div class="container pt-3 pb-3"> -->
          <div class="jumbotron">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">You get a Badge</h4>
              <p><i class="fa fa-futbol-o icon-silver fa-2x"></i></p>
              <p>You didn't have cash, or didn't have the right bills, but Badge has you covered! Take the Badge with you and visit badgepayments.com when it's conveient for you.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">Enter the code</h4>
              <p><i class="fa fa-bomb icon-silver fa-2x"></i></p>
              <p>On our website you'll enter the code found on the back of the Badge. Each Badge is unique. Visually confirm the identify of your Badge to tip the right service professional.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">Confirm your Badge</h4>
              <p><i class="fa fa-bomb icon-silver fa-2x"></i></p>
              <p>An image of the unique Badge will come up. Confirm it's your Badge to move to the next step and select your tip.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
              <h4 class="lead">Select your tip</h4>
              <p><i class="fa fa-usd icon-silver fa-2x"></i></p>
              <p>Select a tip, with a minimum amount of $2, and a maximum of $100. Enter your credit card information in our secure payment system powered by Stripe. Congratulations! You've just sent a tip without cash.</p>
            </div>
          </div>
        </div>
      </section>
       <section id="request">
         <div class="container">
          <div class="row fill-viewport align-items-center text-light">
            <div class="col-12 col-md-6">
              <h1>Request Badges</h1>
              <p></p>
                <form class="form-inline" method="post" action="">
                  <div class="form-group mx-sm-3">
                    <label for="RequestBadges"></label>
                    <input type="email" class="form-control"placeholder="email@email.com">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
                <div>
                  <medium id="requestHelp" class="form-text">We never share your contact information with anyone else! When you submit your email address we will contact you within 48 hours. We'll need a physical address where we can ship the badges.</medium>
                </div>
            </div>
          </div>
        </div>
       </section>
<?php include "templates/footer.php"; ?>