<style media="screen">
  .alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
  }
  .alert.info {background-color: #2196F3; margin-top: 50px;}
  .closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php if ($bar_count >= 1 && $plan_id == 0) { ?>
  <div class="alert info">
  <span class="closebtn">&times;</span>
  <strong>Info!</strong> You have not upgrade to premium yet. <?php echo "<a style='color: #054073;' href=". base_url('Auth/CreateCharge')."?price=9.99&shop=". $shop.">Upgrade</a>"; ?>
</div>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

<?php }else{ if ($plan_id == 1) {
  $UpgradeText = "";
  $disableSettings = "";
  $themeText = "";
  $addOpacity = "";
}
else {
  $UpgradeText = "Premium Only "."<a href=". base_url('Auth/CreateCharge')."?price=premium&shop=". $shop.">Upgrade</a>";
  $disableSettings = "disabled";
  $themeText = "<div style='padding-top:10px;'>Note: Remaning theme are unlock after upgrade.</div>";
  $addOpacity = "opacity:0.6";
}

 ?>
<style>
select {
   border:0px;
   outline:0px;
 }
  .Polaris-Layout__AnnotationContent {
    margin-right: 46px!important;
  }
  .Polaris-Card{
    width: 105%;
  }
  .Polaris-Connected {
    z-index: 0;
  }
  .hr{border-bottom: 1px solid #ddd;}
  .Polaris-Select {z-index: 0;}
  #errmsg{color: red;}
  #errmsg1{color: red;}
  #errmsg2{color: red;}
  #end_date_error{color: red;}
  .btn .caret {
      margin-left: 25px;
  }
  .inputPX{
      float: right;
      padding-right: 11px;
      top: 6px;
      padding-top: 5px;
      border-left: 1px solid #ddd;
      height: 35px;
      padding-left: 8px;
  }
  #AnnouncementBarAfter { color: white; }
  div.social-icon ul.dropdown-menu{min-width: auto;}
  div.social-icon button.btn{border-radius: 0px;padding: 7px 12px;}
  div.social-icon2 div.dropdown{bottom: 1px;}
  div.social-icon1 div.dropdown{bottom: 2px;}
  div.social-icon ul{cursor: pointer;}
  div.social-icon li img{cursor: pointer;}

  .flip-clock-divider .flip-clock-label{color: white;right: -33px;top: -1em;font-size: 9px;}
  .flip-clock-wrapper ul{margin-right: -23px;background: transparent;}
  /* .flip-clock-dot{width: 4px;height: 4px;background: white;} */
  .flip-clock-divider.minutes .flip-clock-label {right: -40px;}
  .flip-clock-divider.seconds .flip-clock-label {right: -40px;}
  .flip-clock-divider{height: 1px;width: 10px;}
  .flip-clock-wrapper::before, .flip-clock-wrapper::after {display: unset;}
  .flip-clock-wrapper .flip {box-shadow: none;}
  .setStyle{display: inline-block;width: auto;}
  .abc{position: relative;top: -6px;}
  /* .flip-clock-wrapper ul li a div{border-radius: 5px;} */
  /* Animation CSS */
  .gradient-heading {
    /* font-size: 100px; */
    font-weight: 700;
    /* line-height: 120px; */
    /* letter-spacing: 5px; */
    text-align: center;
    background: linear-gradient(45deg,#ff8a00,#e52e71,#044bea,#7a00ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 300% 300%;
    animation: gradient-text 8s ease infinite;

  }
  @-webkit-keyframes gradient-text {
    0% {
      background-position: 0% 50%;
    }
      50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
  sup {
    top: -1.4em;
    font-size: 21px;
    cursor: pointer;
  }
  /* Blink Animation */

  .blink {
    animation: blink-animation 1s steps(5, start) infinite;
    -webkit-animation: blink-animation 1s steps(5, start) infinite;
  }
  @keyframes blink-animation {
    to {
      visibility: hidden;
    }
  }
  @-webkit-keyframes blink-animation {
    to {
      visibility: hidden;
    }
  }


  :root {
    --animation-delay: 75ms;
  }



  span {
    opacity: 0;
    animation-name: typewriter;
    animation-fill-mode: forwards;
    animation-duration: 0s;
    animation-delay: calc(var(--animation-order) * var(--animation-delay));

  }

  @keyframes typewriter {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }
  div.BarMainDiv div.addMargin img{margin-right: 5px;}
  .switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 20px;
  }

  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }

  .slider:before {
    position: absolute;
    content: "";
    height: 17px;
    width: 17px;
    left: 4px;
    bottom: 2px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }

  input:checked + .slider {
    background-color: #2196F3;
  }

  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }
</style>
<div class="addStyleClass"></div>
<div class="addStyleClass1"></div>
<div class="addStyleClass2"></div>
<div class="addStyleClass3"></div>
<div class="addHeight">
<div class="barinfo ">
  <div class="">
    <div class="BarMainDiv">
      <div class="setStyle abc sentence" id="AnnouncementBarDemo">Your Text</div>
      <div class="clock setStyle" style="margin-bottom: -24px;"></div>
      <div class="setStyle abc sentence" id="AnnouncementBarAfter">After Clock Text</div>
      <div class="setStyle abc addbutton"></div>
      <div class="setStyle abc addMargin"> <span id="addInsta"></span><span id="addTweet"></span><span id="addFace"></span><span id="addLink"></span> </div>
      <span id="addCloseBtn"></span>
    </div><br>
    <p style="color:red;">Note: Star marked field are compulsory</p>

    <form action="<?php echo base_url(); ?>Home/create_bar?shop=<?php echo $shop; ?>" enctype="multipart/form-data" method="post">
      <input type="hidden" class="background_image" name="background_image" value="">
      <input type="hidden" class="btn_style_value" name="btn_style" value="">
      <input type="hidden" class="" name="bar_type" value="count_bar">
      <input type="hidden" class="font_family" name="font_family" value="">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Add Contents</h2>
                      </div>
                      <div class="row">
                        <div class="col-md-9">
                          <div class="p-t-20">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="BarNameLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Bar Name</label>
                              </div>
                            </div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField">
                                  <input id="BarName" class="Polaris-TextField__Input" type="text" name="bar_name" placeholder="e.g Hoodie sale" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="" required="required">
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <span class="clickbtn">dsfsdfsdf</span> -->
                      <div class="row p-t-20">
                        <div class="col-md-6">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="BarTextLabel" for="PolarisTextField3" class="Polaris-Label__Text required">Announcement bar text</label>
                              </div>
                            </div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField">
                                  <input id="BarText" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" type="text" name="bar_text" placeholder="Your bar text" aria-invalid="false" aria-multiline="false" value="" required="required">
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
                            </div>
                            <div id="container"></div>
                          </div>
                          <label class="Polaris-Choice" for="BlinkText">
                            <span class="Polaris-Choice__Control">
                              <span class="Polaris-Checkbox">
                                <input id="BlinkText" value="disable" type="checkbox" name="blink_text" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false">
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                  <span class="Polaris-Icon">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                      <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                    </svg>
                                  </span>
                                </span>
                              </span>
                            </span>
                            <span class="Polaris-Choice__Label">Enable Blink Text</span>
                          </label>
                        </div>
                        <div class="col-md-6">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="BarTextLabelAfter" for="PolarisTextField3" class="Polaris-Label__Text required">Text After Countdown</label>
                              </div>
                            </div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField">
                                  <input id="TextAfterClock" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" type="text" name="after_text" placeholder="Your after text" aria-invalid="false" aria-multiline="false" value="" required="required">
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
                            </div>
                            <div id="container1"></div>
                          </div>
                          <label class="Polaris-Choice" for="BlinkTextAfter">
                            <span class="Polaris-Choice__Control">
                              <span class="Polaris-Checkbox">
                                <input id="BlinkTextAfter" value="disable" type="checkbox" name="blink_text_after" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false">
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                  <span class="Polaris-Icon">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                      <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                    </svg>
                                  </span>
                                </span>
                              </span>
                            </span>
                            <span class="Polaris-Choice__Label">Enable Blink Text</span>
                          </label>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-3">
                          <div class="Polaris-Stack__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="barBackgroundLabel" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Bar Background</label>
                              </div>
                            </div>
                            <div>
                              <input type="color" id="barBackground" class="colorStyle" name="bar_background" value="#000000"><sup class="resetBackground"><i class="fa fa-undo"></i></sup>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="Polaris-Stack__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="textColorLabel" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Bar Text</label>
                              </div>
                            </div>
                            <div>
                              <input type="color" id="textColor" style="width:29%" class="colorStyle" name="text_color" value="#ffffff"><sup class="resetText"><i class="fa fa-undo"></i></sup>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20" style="<?php echo $addOpacity; ?>">
                        <div class="col-md-6">
                          <label class="Polaris-Choice" for="typewriter">
                            <span class="Polaris-Choice__Control">
                              <span class="Polaris-Checkbox">
                                <input id="typewriter" value="disable" <?php echo $disableSettings; ?> type="checkbox" name="typewriter" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false">
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                  <span class="Polaris-Icon">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                      <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                    </svg>
                                  </span>
                                </span>
                              </span>
                            </span>
                            <span class="Polaris-Choice__Label">Enable to add Typewriter Animation for text</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Audio Announcement Bar</h2>
                      </div>
                      <div class="Polaris-Label" style="margin-top: 10px;">
                        <label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text" style="display: inline;">Enable Audio</label>
                        <label class="switch">
                          <input id="AudioFile" type="checkbox">
                          <span class="slider round"></span>
                        </label>
                      </div>
                      <div class="p-t-20">
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label" id="addLabel">

                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div id="addFile" class="Polaris-TextField">

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Button Settings</h2>
                      </div>
                      <div class="Polaris-Label" style="margin-top: 10px;">
                        <label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text" style="display: inline;">Enable Button on bar</label>
                        <label class="switch">
                          <input id="enableButton" type="checkbox">
                          <span class="slider round"></span>
                        </label>
                      </div>
                      <div class="showHideButton" style="display:none;">
                        <div class="Polaris-Label" style="margin-top: 10px;">
                          <label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Reset option by clicking on <i class="fa fa-undo"></i></label>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-6">
                            <div class="">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="ButtonTextLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Button Text</label>
                                </div>
                              </div>
                              <div class="Polaris-Connected">
                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField">
                                    <input id="ButtonText" class="Polaris-TextField__Input" type="text" name="button_name" placeholder="e.g Check the product" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="">
                                    <div class="Polaris-TextField__Backdrop"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="ButtonLinkLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Button Link</label>
                                </div>
                              </div>
                              <div class="Polaris-Connected">
                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField">
                                    <input id="ButtonLink" class="Polaris-TextField__Input" type="text" name="button_link" placeholder="e.g https://google.com/" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="">
                                    <div class="Polaris-TextField__Backdrop"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-6">
                            <div class="">
                              <label class="Polaris-Choice" for="PolarisCheckbox2">
                                <span class="Polaris-Choice__Control">
                                  <span class="Polaris-Checkbox">
                                    <input id="PolarisCheckbox2" type="checkbox" name="target" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value="_blank">
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                      <span class="Polaris-Icon">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                          <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                        </svg>
                                      </span>
                                    </span>
                                  </span>
                                </span>
                                <span class="Polaris-Choice__Label">Open the link in a NEW tab when clicked</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="Polaris-TextContainer" style="margin-top: 15px;">
                          <h2 class="Polaris-Heading">Button Style, Color and Animation</h2>
                        </div>
                        <div class="p-t-20">
                          <div class="row" style="margin-bottom: 20px;">
                            <div class="col-md-4">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="BarPaddingLabel" for="PolarisTextField4" class="Polaris-Label__Text" style="display:inline;">Animations</label><span style="cursor: pointer;margin-left: 15px;" class="resetAnimation"><i class="fa fa-undo"></i></span>
                                </div>
                              </div>
                              <div class="Polaris-Select">
                                <select id="Animation" name="anim_type" class="getAnimation Polaris-Select__Input desktop_bar_position" aria-invalid="false">
                                  <option value="" selected="selected" disabled="disabled">Select Animation</option>
                                  <option value="none">No Animation</option>
                                  <option value="blink">Blink Button</option>
                                  <option value="gradient-heading">Gradient Text</option>
                                  <option value="gradient-heading blink">Gradient + Blink</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true"><span class="Polaris-Select__Icon desktop_bar_icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                  <path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></span>
                                </div>
                                <div class="Polaris-Select__Backdrop"></div>
                              </div>
                            </div>
                            <div class="col-md-4" style="width: 23%;">
                              <div class="Polaris-Stack__Item">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label">
                                    <label id="buttonTextColorLabel" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Button Text</label>
                                  </div>
                                </div>
                                <div>
                                  <input type="color" style="width:32%" class="buttonTextColor colorStyle buttonTextColor1" name="button_text_color" value="#000000"><sup class="resetbtnText"><i class="fa fa-undo"></i></sup>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="Polaris-Stack__Item">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label">
                                    <label id="buttonBackgroundLabel" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Button Background</label>
                                  </div>
                                </div>
                                <div>
                                  <input type="color" style="width:22%" class="buttonBackground colorStyle buttonBackground1" name="button_background" value="#ffffff"><sup class="resetbtnBackground remcl"><i class="fa fa-undo"></i></sup>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="hr">
                          <button type="button" data-btn-style="btn btn-default" class="btn btn-default btn_style" name="button">Original</button>
                          <button type="button" data-btn-style="vw-btn" class="vw-btn btn_style" name="button">Button</button>
                          <button type="button" data-btn-style="vw-btn vw-btn-border2" class="vw-btn vw-btn-border2 btn_style" name="button">Button1</button>
                          <button type="button" data-btn-style="vw-btn vw-btn-border" class="vw-btn vw-btn-border btn_style" name="button">Button2</button>
                          <button type="button" data-btn-style="vw-btn vw-btn-border1" class="vw-btn vw-btn-border1 btn_style" name="button">Button3</button>
                          <button type="button" data-btn-style="vw-btn vw-btn-border3" class="vw-btn vw-btn-border3 btn_style" name="button">Button4</button>
                          <button type="button" data-btn-style="vw-btn vw-btn-border4" class="vw-btn vw-btn-border4 btn_style" name="button">Button5</button>
                          <button type="button" data-btn-style="vw-btn vw-btn-border5" class="vw-btn vw-btn-border5 btn_style" name="button">Button6</button>
                          <button type="button" data-btn-style="vw-btn vw-btn-border6" class="vw-btn vw-btn-border6 btn_style" name="button">Button7</button>
                        </div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;padding-top: 20px;"><span class="Polaris-TextStyle--variationSubdued">Note: In Gradient animation background and text color will disabled</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Desktop Bar Position</h2>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-6">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="BarPositionLabel" for="PolarisSelect12" class="Polaris-Label__Text required">Bar Position</label>
                              </div>
                            </div>
                            <div class="Polaris-Select">
                              <select id="BarPosition" name="bar_position" class="Polaris-Select__Input desktop_bar_position" aria-invalid="false" required="required">
                                <option value="" selected="selected" disabled="disabled">Default</option>
                                <option value="top">Top Sticky</option>
                                <option value="top-scrolling">Top</option>
                                <option value="bottom">Bottom Sticky</option>
                              </select>
                              <div class="Polaris-Select__Content" aria-hidden="true"><span class="Polaris-Select__Icon desktop_bar_icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                <path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></span>
                              </div>
                              <div class="Polaris-Select__Backdrop"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="ShowBarLabel" for="PolarisSelect12" class="Polaris-Label__Text required">Show Bar In</label>
                              </div>
                            </div>
                            <div class="Polaris-Select">
                              <select id="ShowBar" name="show_bar" class="Polaris-Select__Input desktop_bar_position" aria-invalid="false" required="required">
                                <option value="" selected="selected" disabled="disabled">Default</option>
                                <option value="collection">Collection Page</option>
                                <option value="product">Product Page</option>
                                <option value="home">Home Page</option>
                                <option value="all">All Page</option>
                              </select>
                              <div class="Polaris-Select__Content" aria-hidden="true"><span class="Polaris-Select__Icon desktop_bar_icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                <path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></span>
                              </div>
                              <div class="Polaris-Select__Backdrop"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading" style="display: inline;">Background Image and Settings</h2> <?php echo $UpgradeText; ?>
                        <div class="Polaris-Label">
                          <label id="barBackgroundLabel" for="notificationMessageBackgroundText" class="Polaris-Label__Text" style="margin: 8px 0px -6px;">Background Image Settings <span class="resetTemplate" style="color: #337ab7;cursor:pointer">reset to default</span> </label>
                        </div>
                      </div>
                      <div class="p-t-20">
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label">
                            <label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Basic Background</label>
                          </div>
                        </div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/fruits-btn.png'); ?>);" type="button" data-template="fruits-btn.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Fruits</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/texture-btn.png'); ?>);" type="button" data-template="texture-btn.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Yellow</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/sunset.png'); ?>);" type="button" data-template="sunset.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Sunset</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/sun.png'); ?>);" type="button" data-template="sun.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Sunset</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/blu-sky.png'); ?>);" type="button" data-template="blu-sky.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">BlueSky</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/darkblue-btn.jpg'); ?>);" type="button" data-template="darkblue-btn.jpg" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Darkblue</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/lightblue-btn.png'); ?>);" type="button" data-template="lightblue-btn.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Lightblue</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/creased-btn.png'); ?>);" type="button" data-template="creased-btn.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Creased</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/tropical.png'); ?>);" type="button" data-template="tropical.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Tropical</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/texture1-btn.png'); ?>);" type="button" data-template="texture1-btn.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Texture</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/vintage-btn.png'); ?>);" type="button" data-template="vintage-btn.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Vintage</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/cristmas1.png'); ?>);" type="button" data-template="cristmas1.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Cristmas</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/summer.png'); ?>);" type="button" data-template="summer.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;font-weight:600">Summer</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/Universe.png'); ?>);" type="button" data-template="Universe.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Universe</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/glitter.png'); ?>);" type="button" data-template="glitter.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Glitter</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button style="width: 120px;background: white url(<?php echo base_url('assets/templates/texture1.png'); ?>);" type="button" data-template="texture.jpg" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Texture</span></span></button></div>
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label">
                            <label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Premium Background</label>
                          </div>
                        </div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button <?php echo $disableSettings; ?> style="<?php echo $addOpacity; ?>;width: 120px;background: white url(<?php echo base_url('assets/templates/desert.png'); ?>);" type="button" data-template="desert1.jpg" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:black;font-weight:600">Desert</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button <?php echo $disableSettings; ?> style="<?php echo $addOpacity; ?>;width: 120px;background: white url(<?php echo base_url('assets/templates/sparks.png'); ?>);" type="button" data-template="sparks.jpg" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Sparks</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button <?php echo $disableSettings; ?> style="<?php echo $addOpacity; ?>;width: 120px;background: white url(<?php echo base_url('assets/templates/concret.png'); ?>);" type="button" data-template="concret.jpg" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Concret</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button <?php echo $disableSettings; ?> style="<?php echo $addOpacity; ?>;width: 120px;background: white url(<?php echo base_url('assets/templates/Terrazo.png'); ?>);" type="button" data-template="Terrazo.jpg" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:black;font-weight:600">Terrazo</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button <?php echo $disableSettings; ?> style="<?php echo $addOpacity; ?>;width: 120px;background: white url(<?php echo base_url('assets/templates/illusion.png'); ?>);" type="button" data-template="illusion.jpg" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Illusion</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button <?php echo $disableSettings; ?> style="<?php echo $addOpacity; ?>;width: 120px;background: white url(<?php echo base_url('assets/templates/holloween-btn.png'); ?>);" type="button" data-template="holloween-btn.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Holloween</span></span></button></div>
                        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;" class="bgh"><button  <?php echo $disableSettings; ?> style="<?php echo $addOpacity; ?>;width: 120px;background: white url(<?php echo base_url('assets/templates/cristmas.png'); ?>);" type="button" data-template="cristmas.png" class="Polaris-Button getTemplate"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-size:16px;color:white;font-weight:600">Cristmas</span></span></button></div>
                      </div>
                      <div class="p-t-20">
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label">
                            <label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Upload Background Image</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <input id="BackgroundImage" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" type="file" name="bar_image" aria-invalid="false" aria-multiline="false" value="">
                              <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php echo $themeText; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Font Setting</h2>
                      </div>
                      <div class="Polaris-Label" style="margin-top: 10px;">
                        <label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Reset option by clicking on <i class="fa fa-undo"></i></label>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="FontSizeLabel" for="PolarisTextField4" class="Polaris-Label__Text" style="display: inline;">Fonts</label><span style="cursor: pointer;margin-left: 15px;" class="resetFontFamily"><i class="fa fa-undo"></i></span>
                              </div>
                            </div>
                            <div id="loadFont"></div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="FontSizeLabel" for="PolarisTextField4" class="Polaris-Label__Text required" style="display: inline;">Font Size</label><span style="cursor: pointer;margin-left: 15px;" class="resetFont"><i class="fa fa-undo"></i></span>
                              </div>
                            </div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField">
                                  <input id="FontSize" class="Polaris-TextField__Input" type="number" min="0" name="font_size" placeholder="Bar height is determined by Font Size" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="14">
                                  <div class="Polaris-TextField__Backdrop"><span class="inputPX">PX</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="BarPaddingLabel" for="PolarisTextField4" class="Polaris-Label__Text required" style="display: inline;">Bar Padding</label><span style="cursor: pointer;margin-left: 15px;" class="resetPadding"><i class="fa fa-undo"></i></span>
                              </div>
                            </div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField">
                                  <input id="BarPadding" class="Polaris-TextField__Input" type="number" min="0" name="bar_padding" placeholder="Space between the text and the upper/lower borders" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="0" required="required">
                                  <div class="Polaris-TextField__Backdrop"><span class="inputPX">PX</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading" style="display: inline;">Social Share Option </h2><?php echo $UpgradeText; ?>
                      </div>
                      <div class="row p-t-20" style="<?php echo $addOpacity; ?>">
                        <div class="col-sm-6">
                          <div class="Polaris-Labelled__LabelWrapper">
                            <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" style="font-size: 16px;font-style: italic;font-weight: 600;" class="Polaris-Label__Text">Instagram <img width="14" height="14" src="<?php echo base_url('assets/social_icon/instagram.svg'); ?>" alt=""> </label></div>
                          </div>
                          <div class="" style="width:28%;display:inline-block">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label"><label id="PolarisTextField2Label" style="margin-bottom: -3px;" for="PolarisTextField2" class="Polaris-Label__Text">Icon</label></div>
                            </div>
                            <div class="social-icon social-icon2">
                              <div class="dropdown">
                                <button <?php echo $disableSettings; ?> style="width: 100%;" class="btn btn-default dropdown-toggle" type="button" value="" id="instagram" data-toggle="dropdown" style="border-radius: 0px;">Icon<span class="caret"></span></button>
                                  <ul aria-labelledby="menu1" style="width: 100%;; overflow: auto" class="dropdown-menu" id="" role="menu">
                                    <li role="presentation" class="instagram" data-instagram="" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style" style="cursor:pointer">Icon
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="instagram" data-instagram="instagram.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/instagram.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="instagram" data-instagram="instagram1.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/instagram1.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="instagram" data-instagram="instagram3.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/instagram3.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="instagram" data-instagram="instagram2.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/instagram2.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                  </ul>
                                </div>
                             </div>
                          </div>
                          <div class="" style="width:70%;display:inline-block">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Link</label></div>
                                </div>
                                <div class="Polaris-Connected" style="margin-left: -5px;margin-top: -8px;">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--hasValue"><input disabled id="PolarisTextField2" class="insta-input Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" placeholder="https://instagram.com" value="">
                                      <div class="Polaris-TextField__Backdrop" style="border-radius: 0px;"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="Polaris-Labelled__LabelWrapper">
                            <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" style="font-size: 16px;font-style: italic;font-weight: 600;" class="Polaris-Label__Text">Twitter <img width="14" height="14" src="<?php echo base_url('assets/social_icon/twitter.svg'); ?>" alt=""> </label></div>
                          </div>
                          <div class="" style="width:28%;display:inline-block">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label"><label id="PolarisTextField2Label" style="margin-bottom: -3px;" for="PolarisTextField2" class="Polaris-Label__Text">Icon</label></div>
                            </div>
                            <div class="social-icon social-icon2">
                              <div class="dropdown">
                                <button <?php echo $disableSettings; ?> style="width: 100%;" class="btn btn-default dropdown-toggle" type="button" value="" id="twitter" data-toggle="dropdown" style="border-radius: 0px;">Icon<span class="caret"></span></button>
                                  <ul aria-labelledby="menu1" style="width: 100%;; overflow: auto" class="dropdown-menu" id="" role="menu">
                                    <li role="presentation" class="twitter" data-twitter="" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style" style="cursor:pointer">Icon
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="twitter" data-twitter="twitter.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/twitter.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="twitter" data-twitter="twitter2.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/twitter2.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="twitter" data-twitter="twitter4.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/twitter4.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="twitter" data-twitter="twitter3.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/twitter3.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                  </ul>
                                </div>
                             </div>
                          </div>
                          <div class="" style="width:70%;display:inline-block">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Link</label></div>
                                </div>
                                <div class="Polaris-Connected" style="margin-left: -5px;margin-top: -8px;">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="PolarisTextField2" disabled class="tweet-input Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" placeholder="https://www.twitter.com" value="">
                                      <div class="Polaris-TextField__Backdrop" style="border-radius: 0px;"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20" style="<?php echo $addOpacity; ?>">
                        <div class="col-sm-6">
                          <div class="Polaris-Labelled__LabelWrapper">
                            <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" style="font-size: 16px;font-style: italic;font-weight: 600;" class="Polaris-Label__Text">Facebook <img width="14" height="14" src="<?php echo base_url('assets/social_icon/facebook.svg'); ?>" alt=""> </label></div>
                          </div>
                          <div class="" style="width:28%;display:inline-block">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label"><label id="PolarisTextField2Label" style="margin-bottom: -3px;" for="PolarisTextField2" class="Polaris-Label__Text">Icon</label></div>
                            </div>
                            <div class="social-icon social-icon1">
                              <div class="dropdown">
                                <button <?php echo $disableSettings; ?> style="width: 100%;" value="" class="btn btn-default dropdown-toggle" type="button" id="facebook" data-toggle="dropdown" style="border-radius: 0px;">Icon<span class="caret"></span></button>
                                  <ul aria-labelledby="menu1" style="width: 100%;; overflow: auto" class="dropdown-menu" id="" role="menu">
                                    <li role="presentation" class="facebook" data-facebook="" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style" style="cursor:pointer">Icon
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="facebook" data-facebook="facebook.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/facebook.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="facebook" data-facebook="facebook1.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/facebook1.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="facebook" data-facebook="facebook2.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/facebook2.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="facebook" data-facebook="facebook3.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/facebook3.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                  </ul>
                                </div>
                             </div>
                          </div>
                          <div class="" style="width:70%;display:inline-block">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Link</label></div>
                                </div>
                                <div class="Polaris-Connected" style="margin-left: -5px;margin-top: -8px;">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="PolarisTextField2" disabled class="face-input Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" placeholder="https://www.facebook.com" value="">
                                      <div class="Polaris-TextField__Backdrop" style="border-radius: 0px;"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="Polaris-Labelled__LabelWrapper">
                            <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" style="font-size: 16px;font-style: italic;font-weight: 600;" class="Polaris-Label__Text">Linkedin <img width="14" height="14" src="<?php echo base_url('assets/social_icon/linkedin.svg'); ?>" alt=""> </label></div>
                          </div>
                          <div class="" style="width:28%;display:inline-block">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label"><label id="PolarisTextField2Label" style="margin-bottom: -3px;" for="PolarisTextField2" class="Polaris-Label__Text">Icon</label></div>
                            </div>
                            <div class="social-icon social-icon1">
                              <div class="dropdown">
                                <button <?php echo $disableSettings; ?> style="width: 100%;" class="btn btn-default dropdown-toggle" value="" type="button" id="linkedin" data-toggle="dropdown" style="border-radius: 0px;">Icon<span class="caret"></span></button>
                                  <ul aria-labelledby="menu1" style="width: 100%;; overflow: auto" class="dropdown-menu" id="" role="menu">
                                    <li role="presentation" class="linkedin" data-linkedin="" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style" style="cursor:pointer">Icon
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="linkedin" data-linkedin="linkedin.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/linkedin.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="linkedin" data-linkedin="linkedin1.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/linkedin1.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="linkedin" data-linkedin="linkedin2.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/linkedin2.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                    <li role="presentation" class="linkedin" data-linkedin="linkedin3.png" style="line-height: 1.8rem;padding-left: 15px;">
                                      <label for="">
                                        <span class="font_style"><img width="25" height="25" src="<?php echo base_url('assets/social_icon/linkedin3.png'); ?>" alt="">
                                        </span>
                                      </label>
                                    </li>
                                  </ul>
                                </div>
                             </div>
                          </div>
                          <div class="" style="width:70%;display:inline-block">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Link</label></div>
                                </div>
                                <div class="Polaris-Connected" style="margin-left: -5px;margin-top: -8px;">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--hasValue"><input disabled id="PolarisTextField2" class="link-input Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" placeholder="https://www.linkedin.com" value="">
                                      <div class="Polaris-TextField__Backdrop" style="border-radius: 0px;"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20" style="<?php echo $addOpacity; ?>">
                        <div class="col-md-4">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="FontSizeLabel" for="PolarisTextField4" class="Polaris-Label__Text required" style="display:inline">Social Icon Size</label><span style="cursor: pointer;margin-left: 15px;" class="resetSocial"><i class="fa fa-undo"></i></span>
                              </div>
                            </div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField">
                                  <input <?php echo $disableSettings; ?> id="SocialSize" class="Polaris-TextField__Input" type="number" min="0" name="social_font_size" value="20" placeholder="Sociall Icon Size" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="" required="required">
                                  <div class="Polaris-TextField__Backdrop"><span class="inputPX">PX</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading" style="display: inline;">Schedule Bar </h2><?php echo $UpgradeText; ?>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-5">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="BarPositionLabel" for="PolarisSelect12" class="Polaris-Label__Text">Start Time</label>
                              </div>
                            </div>
                            <input type="text" id="start-date" name="start_date" class="form-control" value="">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="ShowBarLabel" for="PolarisSelect12" class="Polaris-Label__Text">End Time</label>
                              </div>
                            </div>
                            <input type="text" disabled id="end-date" name="end_date" class="form-control" value="">
                            <div id="end_date_error"></div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="" style="margin-top: 29px;">
                            <button <?php echo $disableSettings; ?> type="button" data-btn-style="vw-btn" class="btn btn-primary get-date" name="button">Apply Date</button>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20 hideColorSettings">
                        <div class="col-md-4" style="width: 23%;">
                          <div class="Polaris-Stack__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="buttonTextColorLabel" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Countdown Text</label>
                              </div>
                            </div>
                            <div>
                              <input type="color" style="width:32%" class="buttonTextColor colorStyle buttonTextColor1" name="button_text_color" value="#000000"><sup class="resetbtnText"><i class="fa fa-undo"></i></sup>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="Polaris-Stack__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="buttonBackgroundLabel" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Countdown Background</label>
                              </div>
                            </div>
                            <div>
                              <input type="color" style="width:22%" class="buttonBackground colorStyle buttonBackground1" name="button_background" value="#ffffff"><sup class="resetbtnBackground remcl"><i class="fa fa-undo"></i></sup>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr">
      <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading" style="display: inline;">Other Settings </h2> <span><?php echo $UpgradeText; ?></span>
                      </div>
                      <div class="row p-t-20" style="margin-left: 0px;<?php echo $addOpacity; ?>">
                        <label class="Polaris-Choice" for="addToSlider">
                          <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                              <input id="addToSlider" value="noslider" <?php echo $disableSettings; ?> type="checkbox" name="add_to_slider" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false">
                              <span class="Polaris-Checkbox__Backdrop"></span>
                              <span class="Polaris-Checkbox__Icon">
                                <span class="Polaris-Icon">
                                  <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                  </svg>
                                </span>
                              </span>
                            </span>
                          </span>
                          <span class="Polaris-Choice__Label">Do you want to add bar in rotation slider.</span>
                        </label>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4" style="<?php echo $addOpacity; ?>">
                          <div class="Polaris-Labelled__LabelWrapper">
                            <div class="Polaris-Label">
                              <label id="BarPaddingLabel" for="PolarisTextField4" class="Polaris-Label__Text">countdown box style</label>
                            </div>
                          </div>
                          <div class="Polaris-Select">
                            <select id="" <?php echo $disableSettings; ?> name="count_box_style" class="count_box_style Polaris-Select__Input desktop_bar_position" aria-invalid="false">
                              <option value="" selected="selected">Select Style</option>
                              <option value="square">Square</option>
                              <option value="circle">Circle</option>
                              <option value="double_circle">Double Circle</option>
                              <option value="round">Rounded</option>
                            </select>
                            <div class="Polaris-Select__Content" aria-hidden="true"><span class="Polaris-Select__Icon desktop_bar_icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                              <path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></span>
                            </div>
                            <div class="Polaris-Select__Backdrop"></div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="Polaris-Labelled__LabelWrapper">
                            <div class="Polaris-Label">
                              <label id="BarPaddingLabel" for="PolarisTextField4" class="Polaris-Label__Text">disabled/enabled close button</label>
                            </div>
                          </div>
                          <div class="Polaris-Select">
                            <select id="" name="closed_btn" class="closed_btn Polaris-Select__Input desktop_bar_position" aria-invalid="false" required="required">
                              <option value="disable">No</option>
                              <option value="enable">Yes</option>
                            </select>
                            <div class="Polaris-Select__Content" aria-hidden="true"><span class="Polaris-Select__Icon desktop_bar_icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                              <path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></span>
                            </div>
                            <div class="Polaris-Select__Backdrop"></div>
                          </div>
                        </div>
                        <div class="col-md-4 showClosedBtn" style="display:none">
                          <div class="">
                            <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                <label id="FontSizeLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Button Size</label>
                              </div>
                            </div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField">
                                  <input id="closeButtonSize" class="Polaris-TextField__Input" type="number" min="0" name="close_btn_size" placeholder="closed button size" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="24">
                                  <div class="Polaris-TextField__Backdrop"><span class="inputPX">PX</span></div>
                                </div>
                              </div>
                            </div>
                            <div id="errmsg"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <input type="hidden" class="addInstaVal" name="" value="">
      <input type="hidden" class="addFaceVal" name="" value="">
      <input type="hidden" class="addLinkVal" name="" value="">
      <input type="hidden" class="addTweetVal" name="" value="">
      <div id="insertClockStyle"></div>
      <center>
        <button type="button" onClick="javascript:history.go(-1)" class="Polaris-Button Polaris-Button--destructive"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Cancel</span></span></button>
        <button type="submit" class="remAttr Polaris-Button Polaris-Button--primary"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save</span></span></button>
      </center><br><br>
    </form>
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.getTemplate').click(function(){
      var template = $(this).data('template');
      var imagePath = '<?php echo base_url("assets/templates/"); ?>'+template;
      $('.BarMainDiv').css("background","white url('"+imagePath+"')");
      $('.BarMainDiv').css('background-size','cover');
      $('.background_image').val(template);
    });
    $('#start-date').datetimepicker();
    $('#end-date').datetimepicker();
    $("#BarText").emojioneArea({
      tonesStyle: "bullet"
    });
    $("#TextAfterClock").emojioneArea({
      tonesStyle: "bullet"
    });
  let xhr = new XMLHttpRequest();
  xhr.open('GET', 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyAMk-1IS3gKNcbirtn_nAxd7QYPJZ4TfA8');
  xhr.send();
  xhr.onload = function() {
  if (xhr.status != 200) {
     // alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
  } else {
    var fontData = JSON.parse(xhr.response);
    var fontDataArray = fontData.items;
    var html ='';
    html += '<div class="dropdown">';
    html +=	'<button style="width: 100%;" class="btn btn-default dropdown-toggle addFontFamily" type="button" id="menu1" data-toggle="dropdown">Select Font Family <span class="caret"></span></button>'
    html += '<ul aria-labelledby="menu1" style="width: 100%; height: 300px; overflow: auto" class="dropdown-menu" id="font" role="menu">'
    for (x in fontDataArray) {
      html += '<li role="presentation" class="getFont" data-fontname="'+fontDataArray[x].family+'" style="cursor:pointer;font-family: '+fontDataArray[x].family+'; font-weight: 200line-height: 1.8rem;padding-left: 15px;">';
      html += '<label for="'+fontDataArray[x].family+'">';
      html += '<span class="font_style" font_style="'+fontDataArray[x].family+'">';
      html += fontDataArray[x].family;
      html += '</span>';
      html += '</label>';
      html += '</li>';
    }
    html+= '</ul>';
    html+= '</div>';
    $('#loadFont').html(html);
    }
};
$(document).on('click',".getFont", function() {
  var getFont = $(this).data('fontname');
  $('.font_family').val(getFont);
  $('.addFontFamily').css('font-family',getFont);
  $('.addFontFamily').html(getFont+"<span style='float: right;margin-right: 15px;margin-top: 10px;' class='caret'></span>");
  $("#AnnouncementBarAfter").css('font-family',getFont);
  $("#AnnouncementBarDemo").css('font-family',getFont);
  $("#AnnouncementBarBtn").css('font-family',getFont);
});
  });
</script>
<script type="text/javascript">
$(document).ready(function() {
  var currentDate = new Date();
  // var dd = currentDate.getDate();
  var dd = ("0" + (currentDate.getDate())).slice(-2);
  var mm = ("0" + (currentDate.getMonth() + 1)).slice(-2);
  var y = currentDate.getFullYear();

  var cdate = y + '/'+ mm + '/'+ dd + " 00:00";
  var start_date,end_date;
  $('.get-date').click(function(){
    start_date = $('#start-date').val();
    end_date = $('#end-date').val();
    startClock(start_date,end_date);
  });
  $('#start-date').datetimepicker({defaultTime:'00:00'});
  $('#end-date').datetimepicker({defaultTime:'00:00'});
  $('#start-date').on('change',function(){
    if ($(this).val() != '') {
      $('#end-date').removeAttr('disabled');
    }
  });
  $('#end-date').on('change',function(){
    var start_dateVal = $('#start-date').val();
    var end_dateVal = $(this).val();
    if (end_dateVal <= start_dateVal) {
      console.log("if");
      $('.remAttr').attr('disabled','disabled');
      $('.get-date').attr('disabled','disabled');
      $('#end_date_error').show();
      $('#end_date_error').html('End date should be greater than start date and current date').fadeIn(300);
    }else if(end_dateVal <= cdate){
      console.log("end_dateVal",end_dateVal);
      console.log("cdate",cdate);
      $('.remAttr').attr('disabled','disabled');
      $('.get-date').attr('disabled','disabled');
      $('#end_date_error').show();
      $('#end_date_error').html('End date should be greater than start date and current date').fadeIn(300);
    }else{
      $('#end_date_error').hide();
      $('.remAttr').removeAttr('disabled');
      $('.get-date').removeAttr('disabled');
    }
  });
  var currentDate = new Date();
  start_date = currentDate.getTime();
  var someDate = new Date();
  var numberOfDaysToAdd = 5;
  currentDate.setDate(currentDate.getDate() + numberOfDaysToAdd);

  var dd = currentDate.getDate();
  var mm = ("0" + (currentDate.getMonth() + 1)).slice(-2);
  var y = currentDate.getFullYear();

  end_date = y + '/'+ mm + '/'+ dd + " 12:00";
  startClock(start_date,end_date);
  function startClock(start_date,end_date){
    var clock;
    var targetDate = moment.tz(end_date, "Asia/Kolkata");
    var currentDateTime = moment.tz(start_date, "Asia/Kolkata");
    // Calculate the difference in seconds between the future and current date
    var diff = targetDate / 1000 - currentDateTime / 1000;
    if (diff <= 0) {
      // If remaining countdown is 0
      clock = $(".clock").FlipClock(0, {
        clockFace: "DailyCounter",
        countdown: true,
        autostart: false
      });
      console.log("Date has already passed!")

    } else {
      // Run countdown timer
      clock = $(".clock").FlipClock(diff, {
        clockFace: "DailyCounter",
        countdown: true,
        callbacks: {
          stop: function() {
            console.log("Timer has ended!")
          },
        }
      });
      // Check when timer reaches 0, then stop at 0

      setTimeout(function() {
        checktime();
      }, 1000);

      function checktime() {
        t = clock.getTime();
        if (t <= 0) {
          clock.setTime(0);
        }
        setTimeout(function() {
          checktime();
        }, 1000);
      }
    }
  }
  $(window).on('scroll',function() {
    var addHeight = $(".BarMainDiv").height();
    $('.addHeight').css('margin-top',addHeight+"px");
  });

});

</script>
<?php } ?>
