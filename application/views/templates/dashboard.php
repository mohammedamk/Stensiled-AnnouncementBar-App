<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<style>
  body{
    font-family: -apple-system,BlinkMacSystemFont,San Francisco,Roboto,Segoe UI,Helvetica Neue,sans-serif!important;
    background-color: #7d7c7c0f;
  }
  .net-style{overflow-y: auto;
    margin: 15px;
    padding: 15px 15px 15px 15px;
    width: 97%;height: 200px;
    position: relative;
    background: rgb(239 239 239) url('https://apps.vowelweb.com/announcementBar/assets/images/iconnew.png') repeat scroll 0% 0%;
  }
  .Polaris-Card{box-shadow: none!important;}
  #myTable_filter label{color: #716b6b;}
  #myTable_filter input {border: none;border-bottom: 1px solid #ddd;}
  #myTable_length label{color: #716b6b;}
  #myTable{border: 0px;margin-bottom: 10px;}
  .Polaris-DataTable__Table > thead > tr > th {
     border: 0px;
     padding: 15px;
     border-bottom: 1px solid #ddd;
     color: #716b6b;
     text-align: left;
 }
  .Polaris-DataTable__Table > tbody > tr > td {
     border: 0px;
     padding: 15px;
     border-bottom: 1px solid #ddd;
     color: #716b6b;
 }
  .card{width: 95%;}
  .dropdown-menu ul li {line-height: 4rem;}
  table.dataTable{margin: unset;}


  .flip-clock-divider .flip-clock-label{color: white;right: -33px;top: -1em;font-size: 9px;}
  .flip-clock-wrapper ul{margin-right: -23px;background: transparent;}
  .flip-clock-dot{width: 4px;height: 4px;background: white;}
  .flip-clock-dot.top {top: 10px;}
  .flip-clock-dot.bottom {bottom: -23px;}
  .flip-clock-divider.minutes .flip-clock-label {right: -40px;}
  .flip-clock-divider.seconds .flip-clock-label {right: -40px;}
  .flip-clock-divider{height: 1px;width: 10px;}
  .flip-clock-wrapper::before, .flip-clock-wrapper::after {display: unset;}
  .flip-clock-wrapper .flip {box-shadow: none;}
  .setStyle{display: inline-block;width: auto;}
  .abc{position: relative;top: -6px;}
  /* .flip-clock-wrapper ul li a div{border-radius: 5px;} */
.carousel-indicators li{border: 1px solid black;}
.carousel-indicators .active{background-color: black;}
.carousel-indicators{position: absolute;top: 164px;}
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
  div.addMargin img{margin-right: 5px;}
</style>
<div class="container">
<div class="Polaris-Card">
  <div class="setting_card">
    <div class="card">
      <div class="net-style">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- <ol class="carousel-indicators">
            <?php $countV = 0; foreach ($activebardata as $value): ( ($countV == 0) ? $addActive = 'active' : $addActive='' )?>
              <li data-target="#myCarousel" data-slide-to="<?php echo $countV; ?>" class="<?php echo $addActive; ?>"></li>
            <?php $countV++; endforeach; ?>
          </ol> -->
          <div class="carousel-inner">
        <?php $count =1 ; foreach ($activebardata as $activebardata) {
          if ($count == 1) {
            $addClass = 'active';
          }
          else {
            $addClass = 'active';
          }
          if ($activebardata->count_style == 'square') { $countStyle = "0px"; }else if($activebardata->count_style == 'circle'){ $countStyle = "25px"; }else if($activebardata->count_style == 'double_circle'){ $countStyle = "13px"; }else if($activebardata->count_style == 'round' || $activebardata->count_style == ''){ $countStyle = "6px"; }
          $clockWidth = $activebardata->font_size * 2;
          $clockHidth = $activebardata->font_size * 2 + 8;
          $clocklineHeight = $activebardata->font_size + 6;
          ?>
          <style media="screen">
            .flip-clock-wrapper ul li a div div.inn{background-color: <?php echo $activebardata->button_background ?>;color:<?php echo $activebardata->button_text_color; ?> ;background-color: <?php echo $activebardata->button_background; ?>;font-size: <?php echo $activebardata->font_size."px"; ?>;}
            .flip-clock-wrapper ul {width:<?php echo $clockWidth."px"; ?>;height:<?php echo $clockHidth."px"; ?>;}
            .flip-clock-wrapper ul li{line-height: <?php echo $clocklineHeight."px"; ?>;}
            .flip-clock-wrapper ul li a div.down{border-bottom-left-radius:<?php echo $countStyle; ?>;border-bottom-right-radius:<?php echo $countStyle; ?>}
            <?php
            if ($bar_detail->font_size >= 10 && $bar_detail->font_size <= 11) {
              echo " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-17px;}.flip-clock-dot{width:2px;height:2px;}";
            }
            if ($bar_detail->font_size >= 12 && $bar_detail->font_size <= 14) {
              echo " .flip-clock-dot.top{top:10px}.flip-clock-dot.bottom{bottom:-19px;}.flip-clock-dot{width:3px;height:3px;}";
            }
            if ($bar_detail->font_size >= 19 && $bar_detail->font_size <= 22) {
              echo " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-25px;}";
            }
            if ($bar_detail->font_size >= 23 && $bar_detail->font_size <= 25) {
              echo " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-29px;}.flip-clock-dot{width:5px;height:5px;left:5px}";
            }
            if ($bar_detail->font_size >= 26 && $bar_detail->font_size <= 30) {
              echo " .flip-clock-dot.top{top:14px}.flip-clock-dot.bottom{bottom:-31px;}.flip-clock-dot{width:5px;height:5px;left:2px}";
            }
            if ($bar_detail->font_size >= 31 && $bar_detail->font_size <= 37) {
              echo " .flip-clock-dot.top{top:17px}.flip-clock-dot.bottom{bottom:-37px;}.flip-clock-dot{width:5px;height:5px;left:-1px}";
            }
            if ($bar_detail->font_size >= 38 && $bar_detail->font_size <= 43) {
              echo " .flip-clock-dot.top{top:18px}.flip-clock-dot.bottom{bottom:-39px;}.flip-clock-dot{width:6px;height:6px;left:-8px}";
            }
            if ($bar_detail->font_size >= 44 && $bar_detail->font_size <= 50) {
              echo " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-50px;}.flip-clock-dot{width:8px;height:8px;left:-11px}";
            }
            if ($activebardata->count_style == 'double_circle') {?>
              .flip-clock-wrapper ul li a div{ border-radius:13px;}
              .flip-clock-wrapper ul li a div.down{border-bottom-left-radius:<?php echo $countStyle; ?>;border-bottom-right-radius:<?php echo $countStyle; ?>}
            <?php }else{ ?>
            .flip-clock-wrapper ul li a div.down{border-bottom-left-radius:<?php echo $countStyle; ?>;border-bottom-right-radius:<?php echo $countStyle; ?>}
            .flip-clock-wrapper ul li a div div.inn{border-radius:<?php echo $countStyle; ?>;}
            <?php } ?>
          </style>
          <?php
          ( ($activebardata->background_image == 'NULL' ||$activebardata->background_image == NULL || $activebardata->background_image == '') ? $background= "background:".$activebardata->bar_background : $background= "background: url('". base_url('assets/templates/') .$activebardata->background_image."')" );
          ( ($activebardata->blink_text == 'enable') ? $blink_text="blink" : $blink_text="" );
          ( ($activebardata->blink_text_after == 'enable') ? $blink_text_after="blink" : $blink_text_after="" );
          ( ($activebardata->anim_type == 'typewriter') ? $anim_type="typewriter" : $anim_type="" );
          ( ($activebardata->anim_type == 'typewriter') ? $anim_type1="" : $anim_type1= $activebardata->anim_type );
           ?>
          <input type="hidden" class="getAudio" name="" value="<?php echo $activebardata->audio_file; ?>">
          <?php if ($activebardata->bar_type == 'count_bar') {?>
            <input type="hidden" name="" class="getStartDate" value="<?php echo $activebardata->start_time; ?>">
            <input type="hidden" name="" class="getEndDate" value="<?php echo $activebardata->end_time; ?>">
            <input type="hidden" name="" class="getInsta" value="<?php echo $activebardata->social_icon_insta; ?>">
            <input type="hidden" name="" class="getFace" value="<?php echo $activebardata->social_icon_face; ?>">
            <input type="hidden" name="" class="getTweet" value="<?php echo $activebardata->social_icon_tweet; ?>">
            <input type="hidden" name="" class="getLink" value="<?php echo $activebardata->social_icon_link; ?>">
            <input type="hidden" name="" class="iconSize" value="<?php echo $activebardata->social_icon_size; ?>">
            <div class="item <?php echo $addClass; ?>">
            <div id="AnnouncementBarActive" class="announcement_bar_active" style="background-size: cover!important;margin-top: 35px;<?php echo $background; ?>;font-family: <?php echo $activebardata->font_family; ?>;color:<?php echo $activebardata->text_color; ?>; font-size:<?php echo $activebardata->font_size; ?>px; padding:<?php echo $activebardata->bar_padding; ?>px;">
              <div style="position: relative;top: -8px;" class="setStyle <?php echo $blink_text; ?> <?php echo $anim_type; ?>"><?php echo $activebardata->bar_text; ?></div>
              <div style="position: relative;top: -8px;" class="setStyle">
                  <?php  if ($activebardata->audio_file != '') { ?><img style="display:none" height="30" width="40" class="gif" src="<?php echo base_url('assets/images/Sound.gif'); ?>" alt=""><img height="30" class="getimage" width="40" src="<?php echo base_url('assets/images/gifimage.png'); ?>" alt="">
                  <span id="audioFile"><span style="cursor: pointer;" id="play"><i class="fa fa-play-circle"></i></span>
                  <span id="pause" style="cursor: pointer;display:none;padding-right: 5px;"><i class="fa fa-pause-circle"></i></span><span id="restart" style="cursor: pointer;"><i class="fa fa-undo"></i></span></span><?php }?>
              </div>
              <div class="setStyle clock" style="margin-bottom: -24px;"></div>
              <div style="position: relative;top: -8px;" class="setStyle <?php echo $blink_text_after; ?> <?php echo $anim_type; ?>"><?php echo $activebardata->after_text; ?></div>
              <?php if ($activebardata->button_name != ''): ?>
                <div class="setStyle"><a href="<?php echo $activebardata->button_link; ?>" target="<?php echo $activebardata->target; ?>" >
                  <button type="button" class="<?php echo $activebardata->btn_style; ?> <?php echo $anim_type1; ?>" name="button" style="background:<?php if($activebardata->anim_type=='gradient-heading' || $activebardata->anim_type=='gradient-heading blink'){}else{ echo $activebardata->button_background; }?>; color:<?php echo $activebardata->button_text_color; ?>"><?php echo $activebardata->button_name; ?></button></a>
                </div>
              <?php endif; ?>
              <div class="setStyle addMargin"> <span id="addInsta"></span><span id="addTweet"></span><span id="addFace"></span><span id="addLink"></span> </div>
              <span class=""><?php if($activebardata->close_btn == 'enable'){ ?> <span style="float: right;font-size: <?php echo $activebardata->close_btn_size.'px'; ?>;padding-right: 5px;"><i class="fa fa-times"></i></span> <?php } ?></span>
            </div>
            </div>

        <?php  }else{ ?>
          <div class="item <?php echo $addClass; ?>">
          <div id="AnnouncementBarActive" class="announcement_bar_active" style="background-size: cover!important;margin-top: 35px;<?php echo $background; ?>;font-family: <?php echo $activebardata->font_family; ?>;color:<?php echo $activebardata->text_color; ?>; font-size:<?php echo $activebardata->font_size; ?>px; padding:<?php echo $activebardata->bar_padding; ?>px;">
            <div class="setStyle <?php echo $blink_text; ?> <?php echo $anim_type; ?>"><?php echo $activebardata->bar_text; ?></div>
              <div class="setStyle">
                <?php  if ($activebardata->audio_file != '') { ?><img style="display:none" height="30" width="40" class="gif" src="<?php echo base_url('assets/images/Sound.gif'); ?>" alt=""><img height="30" class="getimage" width="40" src="<?php echo base_url('assets/images/gifimage.png'); ?>" alt="">
                <span id="audioFile"><span style="cursor: pointer;" id="play"><i class="fa fa-play-circle"></i></span>
                <span id="pause" style="cursor: pointer;display:none;padding-right: 5px;"><i class="fa fa-pause-circle"></i></span><span id="restart" style="cursor: pointer;"><i class="fa fa-undo"></i></span></span><?php }?>
              </div>
              <?php if ($activebardata->button_name != ''): ?>
              <div class="setStyle <?php echo $anim_type1; ?>"><a href="<?php echo $activebardata->button_link; ?>" target="<?php echo $activebardata->target; ?>" >
                <button type="button" class="<?php echo $activebardata->btn_style; ?>" name="button" style="background:<?php if($activebardata->anim_type=='gradient-heading' || $activebardata->anim_type=='gradient-heading blink'){}else{ echo $activebardata->button_background; } ?>; color:<?php echo $activebardata->button_text_color; ?>"><?php echo $activebardata->button_name; ?></button></a>
              </div>
              <?php endif; ?>
              <div class="setStyle addMargin"> <span id="addInsta"></span><span id="addTweet"></span><span id="addFace"></span><span id="addLink"></span> </div>
              <span class=""><?php if($activebardata->close_btn == 'enable'){ ?> <span style="float: right;font-size: <?php echo $activebardata->close_btn_size.'px'; ?>;padding-right: 5px;"><i class="fa fa-times"></i></span> <?php } ?></span>
              </div>
              </div>
        <?php } $count++; } ?>
      </div>

      </div>
      </div>
    </div>
  </div>
</div>
<div class="Polaris-Card">
  <div class="setting_card">
    <div class="barhead row">
      <h2 style="margin-left:3%;">Dashboard</h2>
    </div>
    <br>
    <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;width: 95%;">
      <div class="Polaris-Page" style="margin-left: -14px;">
        <div class="Polaris-Page__Content">
          <div class="Polaris-Card">
            <div class="">
              <div class="Polaris-DataTable">
                <div class="Polaris-DataTable__ScrollContainer">
                  <table style="width: 96%;" id="myTable" class="Polaris-DataTable__Table">
                    <thead>
                      <tr>
                        <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col">Id</th>
                        <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Bar Name</th>
                        <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Bar Text</th>
                        <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Button Text</th>
                        <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Active</th>
                        <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Action</th>
                      </tr>
                    </thead>
                  </table>
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
<script>
  $(document).ready(function(){
    var getInstaVal = $('.getInsta').val();
    var iconSize = $('.iconSize').val();
    if (getInstaVal != null) {
      var splitInstaVal = getInstaVal.split('$#');
      var createInsta = '<a target="_blank" href="'+splitInstaVal[1]+'"><img width="'+iconSize+'" height="'+iconSize+'" src="<?php echo base_url('assets/social_icon/'); ?>'+splitInstaVal[0]+'"></a>';
      $('#addInsta').html(createInsta);
    }

    var getfaceVal = $('.getFace').val();
    if (getfaceVal != null) {
      var splitfaceVal = getfaceVal.split('$#');
      var createFace = '<a target="_blank" href="'+splitfaceVal[1]+'"><img width="'+iconSize+'" height="'+iconSize+'" src="<?php echo base_url('assets/social_icon/'); ?>'+splitfaceVal[0]+'"></a>';
      $('#addFace').html(createFace);
    }

    var getLinkVal = $('.getLink').val();
    if (getLinkVal != null) {
      var splitLinkVal = getLinkVal.split('$#');
      var createLink = '<a target="_blank" href="'+splitLinkVal[1]+'"><img width="'+iconSize+'" height="'+iconSize+'" src="<?php echo base_url('assets/social_icon/'); ?>'+splitLinkVal[0]+'"></a>';
      $('#addLink').html(createLink);
    }

    var getTweetVal = $('.getTweet').val();
    if (getTweetVal != null) {
      var splitTweetVal = getTweetVal.split('$#');
      var createTweet = '<a target="_blank" href="'+splitTweetVal[1]+'"><img width="'+iconSize+'" height="'+iconSize+'" src="<?php echo base_url('assets/social_icon/'); ?>'+splitTweetVal[0]+'"></a>';
      $('#addTweet').html(createTweet);
    }

    var currentDate = new Date();

    var start_date = $('.getStartDate').val();
    var current_date =  currentDate.getTime();
    var d1 = moment.tz(start_date, "Asia/Kolkata");
    var d2 = moment.tz(current_date, "Asia/Kolkata");
    if (d1 <= d2 ) {
      var dd = currentDate.getDate();
      var mm = currentDate.getMonth() + 1;
      var y = currentDate.getFullYear();
      var hr = currentDate.getHours();
      var min = currentDate.getMinutes();
      var sec = currentDate.getSeconds();

      var cdate = y + '/'+ mm + '/'+ dd + ' ' + hr + ':'+ min + ':' + sec;
    }else {
      cdate = start_date;
    }
    var end_date = $('.getEndDate').val();
    startClock(cdate,end_date);
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
            }
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
    addAudio();
    function addAudio(){
      var audioFileName = $('.getAudio').val();
      var source = '<?php echo base_url('assets/audio_file/'); ?>'+audioFileName;
      // console.log(source);
      var audioElement = document.createElement('audio');
      audioElement.setAttribute('src', source);

      audioElement.addEventListener('ended', function() {
          this.play();
      }, false);

      audioElement.addEventListener("canplay",function(){
          $("#length").text("Duration:" + audioElement.duration + " seconds");
          $("#source").text("Source:" + audioElement.src);
          $("#status").text("Status: Ready to play").css("color","green");
      });

      audioElement.addEventListener("timeupdate",function(){
          $("#currentTime").text("Current second:" + audioElement.currentTime);
      });

      $('#play').click(function() {
          $(this).hide();
          $('#pause').show();
          $('.gif').show();
          $('.getimage').hide();
          audioElement.play();
      });

      $('#pause').click(function() {
        $(this).hide();
        $('#play').show();
        $('.gif').hide();
        $('.getimage').show();
        audioElement.pause();
      });

      $('#restart').click(function() {
        $('#play').hide();
        $('#pause').show();
        $('.gif').show();
        $('.getimage').hide();
        audioElement.currentTime = 0;
      });
    }

    $('#myTable').DataTable({
      ajax: {
        url: "<?php echo base_url(); ?>Home/getBarList?shop=<?php echo $shop; ?>",
      },
      "ordering": false
    });
    // var addHeight = $(".clock").height();
    // $('#AnnouncementBarActive').css('height',addHeight+"px");
  });
</script>
