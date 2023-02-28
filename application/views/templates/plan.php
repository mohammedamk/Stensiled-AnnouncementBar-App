<style media="screen">
  .headertext{
    font-weight: 700;
    color: #808080e6;
    letter-spacing: 0.5px;
    font-size: 16px;
  }
  div.Polaris-Card__Section p {
    font-size: 15px;
    margin-left: 15px;
  }
</style>
<div class="container" style="margin-bottom:20px;">
  <div class="row">
    <div class="col-md-6">
      <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
        <div class="Polaris-Card">
          <div class="Polaris-Card__Header">
            <center><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-TextStyle--variationSubdued headertext">BASIC</span></div></center>
            <div class="">
              <center><span style="font-weight: bold;font-size: 40px;">$ 4.99</span><span>/month</span></center>
            </div>
            <hr>
             <!-- <h2 class="Polaris-Heading">$ 4.99</h2><span>/month</span> -->
          </div>
          <div class="Polaris-Card__Section">
            <p> <span> <i class="fa fa-check"></i> </span> Emoji Supported 🙂</p>
            <p> <span> <i class="fa fa-check"></i> </span> Unlimited Text Bar</p>
            <p> <span> <i class="fa fa-check"></i> </span> Single Countdown Bar</p>
            <p style="color: #645f5fbd;"> <span> <i class="fa fa-times"></i> </span> Unlimited Countdown Bar</p>
            <p> <span> <i class="fa fa-check"></i> </span> Limited Background Theme</p>
            <p> <span> <i class="fa fa-check"></i> </span> Limited Background Theme for Countdown Bar</p>
            <p style="color: #645f5fbd;">  <span> <i class="fa fa-times"></i> </span>Unlimited Theme</p>
            <p style="color: #645f5fbd;"> <span> <i class="fa fa-times"></i> </span> Multiple Bar in Slider</p>
            <p style="color: #645f5fbd;">  <span> <i class="fa fa-times"></i> </span>Other Settings</p>
            <p style="color: #645f5fbd;">  <span> <i class="fa fa-times"></i> </span>Social share button</p>
          </div>
          <?php if ($plan_id == 1): ?>
            <center><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;padding-bottom:20px;"> <a href="<?php echo base_url('Auth/CreateCharge'); ?>?price=basic&shop=<?php echo $shop; ?>"><button style="border-radius: 25px;" type="button" class="Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Buy Now</span></span></button></a> </div></center>
          <?php endif; ?>
          <?php if ($plan_id == 0): ?>
            <center><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;padding-bottom:20px;"><button style="border-radius: 25px;" type="button" class="Polaris-Button btn btn-success"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Acitvated</span></span></button></div></center>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
        <div class="Polaris-Card">
          <div class="Polaris-Card__Header">
            <center><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-TextStyle--variationSubdued headertext">PREMIUM</span></div></center>
            <div class="">
              <center><span style="font-weight: bold;font-size: 40px;">$ 9.99</span><span>/month</span></center>
            </div>
            <hr>
          </div>
          <div class="Polaris-Card__Section">
            <p> <span> <i class="fa fa-check"></i> </span> Emoji Supported 🙂</p>
            <p> <span> <i class="fa fa-check"></i> </span> Unlimited Text Bar</p>
            <p> <span> <i class="fa fa-check"></i> </span> Single Countdown Bar</p>
            <p> <span> <i class="fa fa-check"></i> </span> Unlimited Countdown Bar</p>
            <p> <span> <i class="fa fa-check"></i> </span> Limited Background Theme</p>
            <p> <span> <i class="fa fa-check"></i> </span> Limited Background Theme for Countdown Bar</p>
            <p> <span> <i class="fa fa-check"></i> </span> Unlimited Theme</p>
            <p> <span> <i class="fa fa-check"></i> </span> Multiple Bar in Slider</p>
            <p> <span> <i class="fa fa-check"></i> </span> Other Settings</p>
            <p> <span> <i class="fa fa-check"></i> </span> Social Share Button</p>
          </div>
          <?php if ($plan_id == 0): ?>
            <center><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;padding-bottom:20px;"> <a href="<?php echo base_url('Auth/CreateCharge'); ?>?price=premium&shop=<?php echo $shop; ?>"><button style="border-radius: 25px;" type="button" class="Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Buy Now</span></span></button></a> </div></center>
          <?php endif; ?>
          <?php if ($plan_id == 1): ?>
            <center><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;padding-bottom:20px;"><button style="border-radius: 25px;" type="button" class="Polaris-Button btn btn-success"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Acitvated</span></span></button></div></center>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
