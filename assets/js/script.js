$(document).ready(function(){
  var url = 'https://apps.vowelweb.com/announcementBar/';
  $('#BlinkText').click(function(){
    if ( $(this).is(":checked") ) {
      $(this).val('enable');
      $('#AnnouncementBarDemo').addClass('blink');
    }
    if ( $(this).is(":not(:checked)") ) {
      $(this).val('disable');
      $('#AnnouncementBarDemo').removeClass('blink');
    }
  });
  $('#typewriter').click(function(){
    if ( $(this).is(":checked") ) {
      $(this).val('enable');
      typeWriter();
    }
    if ( $(this).is(":not(:checked)") ) {
      $(this).val('disable');
    }
  });
  $('#addToSlider').click(function(){
    if ( $(this).is(":checked") ) {
      $(this).val('inslider');
    }
    if ( $(this).is(":not(:checked)") ) {
      $(this).val('noslider');
    }
  });
  $('#BlinkTextAfter').click(function(){
    if ( $(this).is(":checked") ) {
      $(this).val('enable');
      $('#AnnouncementBarAfter').addClass('blink');
    }
    if ( $(this).is(":not(:checked)") ) {
      $(this).val('disable');
      $('#AnnouncementBarAfter').removeClass('blink');
    }
  });
  $("#ButtonText").on("change paste keyup", function() {
    var barname = $(this).val();
    document.getElementById("AnnouncementBarBtn").innerHTML = barname;
  });

  $("#BarText").on("change paste keyup", function() {
    var bartext = $(this).val();
    document.getElementById("AnnouncementBarDemo").innerHTML = bartext;
    if ( $('#typewriter').is(":checked") ) {
      setTimeout(typeWriter,3000);
    }
    // if ( $('#typewriter').is(":not(:checked)") ) {
    // }
    // typeWriter();
  });

  $("#TextAfterClock").on("change paste keyup", function() {
    var baraftertext = $(this).val();
    document.getElementById("AnnouncementBarAfter").innerHTML = baraftertext;
    if ( $('#typewriter').is(":checked") ) {
      // $(this).val('enable');
      setTimeout(typeWriter,3000);
    }
    // if ( $(this).is(":not(:checked)") ) {
    //   $(this).val('disable');
    // }
  });

  $("#barBackground").change(function(){
    $(".BarMainDiv").css('background', $(this).val());
    $(".background_image").val(null);

  });

  $("#textColor").change(function(){
    $("#AnnouncementBarAfter").css('color', $(this).val());
    $("#AnnouncementBarDemo").css('color', $(this).val());
  });

  $(".buttonTextColor").change(function(){
    $('.buttonTextColor1').val($(this).val());
    var addStyleTag1 = "<style type='text/css'> .flip-clock-wrapper ul li a div div.inn{ color:"+$(this).val()+"!important;} </style>";
    $(".addStyleClass1").html(addStyleTag1);
    $('.flip-clock-wrapper ul li a div div.inn').css('color', $(this).val());
    $("#AnnouncementBarBtn").css('color', $(this).val());
  });

  $(".buttonBackground").change(function(){
    $('.buttonBackground1').val($(this).val());
    var addStyleTag2 = "<style type='text/css'> .flip-clock-dot{background:"+$(this).val()+"} .flip-clock-wrapper ul li a div div.inn{ background-color:"+$(this).val()+"!important;} </style>";
    $(".addStyleClass2").html(addStyleTag2);
    $("#AnnouncementBarBtn").css('background', $(this).val());
  });

  $("#SocialSize").on('input', function(){
    var socialSize = $(this).val()+"px";
    $('#addInsta img').css({"width":socialSize,"height":socialSize});
    $('#addFace img').css({"width":socialSize,"height":socialSize});
    $('#addLink img').css({"width":socialSize,"height":socialSize});
    $('#addTweet img').css({"width":socialSize,"height":socialSize});
  });

  $("#FontSize").on('input', function(){
    if ($(this).val().length == 2) {
      var addStyleTag = '';
      var fontSize = $(this).val();
      $(".BarMainDiv").css("font-size", $(this).val() + "px");
      $("#AnnouncementBarBtn").css("font-size", $(this).val() + "px");
      var setWidth = parseInt($(this).val()) * 2;
      var setHeight = parseInt($(this).val()) * 2 + 8;
      var setLineHeight = parseInt($(this).val()) + 6;
      var clockLineHeight = setLineHeight + "px";
      var clockFontSize = $(this).val()+"px";
      var clockWidth = setWidth + "px";
      var clockHeight = setHeight + "px";
      $('.clockFontSize').val(clockFontSize);
      $('.clockLineHeight').val(clockLineHeight);
      $('.clockWidth').val(clockWidth);
      $('.clockHeight').val(clockHeight);
      addStyleTag += "<style type='text/css'>";
      addStyleTag += " .flip-clock-wrapper ul {width:"+clockWidth+"!important;height:"+clockHeight+"!important;}";
      addStyleTag += " .flip-clock-wrapper ul li{line-height:"+clockLineHeight+"!important;}";
      addStyleTag += " .flip-clock-wrapper ul li a div div.inn{ font-size:"+clockFontSize+"!important;}";
      if (fontSize >= 10 && fontSize <= 11) {
        addStyleTag += " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-17px;}.flip-clock-dot{width:2px;height:2px;}";
      }
      if (fontSize >= 12 && fontSize <= 14) {
        addStyleTag += " .flip-clock-dot.top{top:10px}.flip-clock-dot.bottom{bottom:-19px;}.flip-clock-dot{width:3px;height:3px;}";
      }
      if (fontSize >= 19 && fontSize <= 22) {
        addStyleTag += " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-25px;}"
      }
      if (fontSize >= 23 && fontSize <= 25) {
        addStyleTag += " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-29px;}.flip-clock-dot{width:5px;height:5px;left:5px}";
      }
      if (fontSize >= 26 && fontSize <= 30) {
        addStyleTag += " .flip-clock-dot.top{top:14px}.flip-clock-dot.bottom{bottom:-31px;}.flip-clock-dot{width:5px;height:5px;left:2px}";
      }
      if (fontSize >= 31 && fontSize <= 37) {
        addStyleTag += " .flip-clock-dot.top{top:17px}.flip-clock-dot.bottom{bottom:-37px;}.flip-clock-dot{width:5px;height:5px;left:-1px}";
      }
      if (fontSize >= 38 && fontSize <= 43) {
        addStyleTag += " .flip-clock-dot.top{top:18px}.flip-clock-dot.bottom{bottom:-39px;}.flip-clock-dot{width:6px;height:6px;left:-8px}";
      }
      if (fontSize >= 44 && fontSize <= 50) {
        addStyleTag += " .flip-clock-dot.top{top:12px}.flip-clock-dot.bottom{bottom:-50px;}.flip-clock-dot{width:8px;height:8px;left:-11px}";
      }
      addStyleTag += " </style>";
      $(".addStyleClass").html(addStyleTag);
    }
  });

  $("#BarPadding").on('input', function(){
    $(".BarMainDiv").css('padding', $(this).val());
  });

  $('#FontSize').keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g,'');
  });
  $('#SocialSize').keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g,'');
  });

  $('#BarPadding').keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g,'');
  });
  $("#inputHourField").keypress(function(e) {
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $("#errmsg").html("Digits Only!").show().fadeOut(5000);
          return false;
      }
  });
  $("#inputMinuteField").keypress(function(e) {
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $("#errmsg1").html("Digits Only!").show().fadeOut(5000);
          return false;
      }
  });
  $("#inputSecondsField").keypress(function(e) {
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $("#errmsg2").html("Digits Only!").show().fadeOut(5000);
          return false;
      }
  });
  if ( $('#AudioFile').is(":checked") ) {
    var addLabel = '<label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Upload Audio File</label>';
    var addContent = '<input id="BackgroundImage" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" type="file" name="audio_file" aria-invalid="false" aria-multiline="false" value="">';
    addContent +='<div class="Polaris-TextField__Backdrop"></div>';
    $('#addLabel').html(addLabel);
    $('#addFile').html(addContent);
  }
  if ( $('#AudioFile').is(":not(:checked)") ) {
    $('#AudioFileVal').val(null);
    $('#addLabel').empty();
    $('#addFile').empty();
  }
  $('#AudioFile').click(function(){
    if ( $(this).is(":checked") ) {
      var addLabel = '<label id="BackgroundImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Upload Audio File</label>';
      var addContent = '<input id="BackgroundImage" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" type="file" name="audio_file" aria-invalid="false" aria-multiline="false" value="">';
      addContent +='<div class="Polaris-TextField__Backdrop"></div>';
      $('#addLabel').html(addLabel);
      $('#addFile').html(addContent);
      $('.ShowHideAudio').show();
    }
    if ( $(this).is(":not(:checked)") ) {
      $('#AudioFileVal').val(null);
      $('#addLabel').empty();
      $('#addFile').empty();
    }
  });
  //Button Show and Hide
  if ($('#enableButton').is(':checked')) {
    $('.showHideButton').show();
    $('.hideColorSettings').hide();
  }
  if ($('#enableButton').is(':not(:checked)')) {
    $('.showHideButton').hide();
    $('.hideColorSettings').show();
  }
  $('#enableButton').click(function(){
    if ( $(this).is(":checked") ) {
      $('#Animation').prop('selectedIndex',0);
      $('.buttonTextColor').val()
      $('#AnnouncementBarBtn').css('font-family',$('.font_family').val());
      $('.showHideButton').show();
      $('.hideColorSettings').hide();
      var addbutton = '<button id="AnnouncementBarBtn" type="button" class="btn btn-default setAnimation" name="button">Click</button>';
      $('.addbutton').html(addbutton);
      $('#ButtonText').attr("required","required");
      $('#ButtonLink').attr("required","required");
      $('.buttonTextColor').removeAttr("disabled");
      $('.buttonBackground').removeAttr("disabled");
      $('#AnnouncementBarBtn').css({'color':$('.buttonTextColor').val(),'background':$('.buttonBackground').val()});
    }
    if ( $(this).is(":not(:checked)") ) {
      $('.hideColorSettings').show();
      $('#ButtonText').val(null);
      $('#ButtonLink').val(null);
      $('#ButtonText').removeAttr("required","required");
      $('#ButtonLink').removeAttr("required","required");
      $('.btn_style_value').val(null);
      $('#PolarisCheckbox2').prop("checked",false);
      $('.addbutton').empty();
      $('.showHideButton').hide();
    }
  });

  $('.resetBackground').click(function(){
    $('#barBackground').val('#000000');
    $(".BarMainDiv").css('background', '#000000');
  });
  $('.resetText').click(function(){
    $('#textColor').val('#ffffff');
    $("#AnnouncementBarAfter").css('color', '#ffffff');
    $("#AnnouncementBarDemo").css('color', '#ffffff');
  });
  $('.resetbtnText').click(function(){
    $('.buttonTextColor').val('#000000');
    var addStyleTag1 = "<style type='text/css'> .flip-clock-wrapper ul li a div div.inn{ color:#000000!important;} </style>";
    $(".addStyleClass1").html(addStyleTag1);
    $("#AnnouncementBarBtn").css('color', '#000000');
    $('.flip-clock-wrapper ul li a div div.inn').css('color', '#000000');
  });
  $('.resetbtnBackground').click(function(){
    $('.buttonBackground').val('#ffffff');
    var addStyleTag2 = "<style type='text/css'> .flip-clock-dot{background:#ffffff} .flip-clock-wrapper ul li a div div.inn{ background-color:#ffffff!important;} </style>";
    $(".addStyleClass2").html(addStyleTag2);
    $("#AnnouncementBarBtn").css('background', '#ffffff');
  });
  $('.resetFontFamily').click(function(){
    $('#AnnouncementBarDemo').css('font-family','unset');
    $('.font_family').val(null);
    $('#AnnouncementBarBtn').css('font-family','unset');
    $('#AnnouncementBarAfter').css('font-family','unset');
    $('.addFontFamily').css('font-family','unset');
    $('.addFontFamily').html("Select Font Family <span style='float: right;margin-right: 15px;margin-top: 10px;' class='caret'></span>");
  });
  $('.resetFont').click(function(){
    $('#FontSize').val(14);
    $('.BarMainDiv').css('font-size','14px');
    $('#AnnouncementBarBtn').css('font-size','14px');
    var addStyleTag = '';
    addStyleTag += "<style type='text/css'>";
    addStyleTag += " .flip-clock-wrapper ul {width:32px!important;height:40px!important;}";
    addStyleTag += " .flip-clock-wrapper ul li{line-height:22px!important;}";
    addStyleTag += " .flip-clock-wrapper ul li a div div.inn{ font-size:16px!important;}";
    addStyleTag += " .flip-clock-dot.top{top:10px}.flip-clock-dot.bottom{bottom:-23px;}.flip-clock-dot{width:4px;height:4px;left:5px}";
    addStyleTag += " </style>";
    $(".addStyleClass").html(addStyleTag);
  });
  $('.resetPadding').click(function(){
    $('#BarPadding').val(0);
    $('.BarMainDiv').css('padding','0px');
  });
  $('.resetSocial').click(function(){
    $('#SocialSize').val(20);
    $('span#addInsta img').css({'width':'20px','height':'20px'});
    $('span#addLink img').css({'width':'20px','height':'20px'});
    $('span#addFace img').css({'width':'20px','height':'20px'});
    $('span#addTweet img').css({'width':'20px','height':'20px'});
  });

  $('.resetAnimation').click(function(){
    $('#AnnouncementBarBtn').removeClass('blink gradient-heading');
    $('#Animation').prop('selectedIndex',0);
  });
  $('.resetTemplate').click(function(){
    $('.BarMainDiv').css('background','black');
    $('.background_image').val(null);
  });
  $('.btn_style').click(function(){
    var btnStyle = $(this).data('btn-style');
    $('.btn_style_value').val(btnStyle);
    var getAnimation1 = $( ".getAnimation option:selected" ).val();
    $('#AnnouncementBarBtn').removeClass();
    $('#AnnouncementBarBtn').addClass(btnStyle);
    // $('#buttonTextColor').removeAttr('disabled');
    // $('#buttonBackground').removeAttr('disabled');
    if (getAnimation1 == "gradient-heading") {
      $('#AnnouncementBarBtn').css('background','');
      $('#AnnouncementBarBtn').removeClass("blink");
      $('#AnnouncementBarBtn').addClass("gradient-heading");
    }
    if (getAnimation1 == "blink") {
      $('#AnnouncementBarBtn').removeClass("gradient-heading");
      $('#AnnouncementBarBtn').addClass("blink");
    }
    if (getAnimation1 == "gradient-heading blink") {
      $('#AnnouncementBarBtn').css('background','');
      $('#AnnouncementBarBtn').removeClass("gradient-heading blink");
      $('#AnnouncementBarBtn').addClass("gradient-heading blink");
    }
  });
  if ($("select.closed_btn").children("option:selected").val() == 'enable') {
    $('.showClosedBtn').show();
  }
  if ($("select.closed_btn").children("option:selected").val() == 'disable') {
    $('.showClosedBtn').hide();
  }
  $("select.closed_btn").change(function(){
    var dataValue = $(this).children("option:selected").val();
    if (dataValue == 'enable') {
      $('.showClosedBtn').show();
      var loadCloseBtn = '<span class="increaseSize" style="font-size: 24px;color: white;float: right;margin-right: 16px;margin-top:9px"><i class="fa fa-times"></i></span>';
      $('#addCloseBtn').html(loadCloseBtn);
    }
    if (dataValue == 'disable') {
      $('#closeButtonSize').val(null);
      $('.showClosedBtn').hide();
      $('#addCloseBtn').empty();
    }
  });
  $("select.getAnimation").change(function(){
    var dataValue = $(this).children("option:selected").val();
    if (dataValue == 'marquee') {
      $('.showDirection').show()
    }
    if (dataValue == 'blink') {
      $('.showDirection').hide()
    }
  });
  $("#closeButtonSize").keypress(function(e) {
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $("#errmsg").html("Digits Only!").show().fadeOut(5000);
          return false;
      }
  });
  $(document).on('change',"#closeButtonSize",function() {
    var getSize = $(this).val();
    $('.increaseSize').css('font-size',getSize+'px');
  });

  $("select.getAnimation"). change(function(){
    var getAnimation = $( ".getAnimation option:selected" ).val();
    if (getAnimation == "none" || getAnimation =='') {
      $('.buttonTextColor').removeAttr('disabled');
      $('.buttonBackground').removeAttr('disabled');
      $('.remcl').addClass("resetbtnBackground");
      $('#AnnouncementBarBtn').removeClass("gradient-heading blink");
    }
    if (getAnimation == "gradient-heading") {
      $('#AnnouncementBarBtn').css('background','');
      $('.buttonTextColor').attr('disabled','disabled');
      $('.buttonBackground').attr('disabled','disabled');
      $('#AnnouncementBarBtn').removeClass("blink");
      $('.remcl').removeClass("resetbtnBackground");
      $('#AnnouncementBarBtn').addClass("gradient-heading");
    }
    if (getAnimation == "blink") {
      $('.buttonTextColor').removeAttr('disabled');
      $('.buttonBackground').removeAttr('disabled');
      $('.remcl').addClass("resetbtnBackground");
      $('#AnnouncementBarBtn').removeClass("gradient-heading");
      $('#AnnouncementBarBtn').addClass("blink");
    }
    if (getAnimation == "gradient-heading blink") {
      $('#AnnouncementBarBtn').css('background','');
      $('.buttonTextColor').attr('disabled','disabled');
      $('.buttonBackground').attr('disabled','disabled');
      $('#AnnouncementBarBtn').removeClass("gradient-heading blink");
      $('.remcl').removeClass("resetbtnBackground");
      $('#AnnouncementBarBtn').addClass("gradient-heading blink");
    }
  });
  function typeWriter() {
    let sentences = document.querySelectorAll('.sentence');
    let characterCount = 0;

    for (let i = 0; i < sentences.length; i++) {
      let sentence = sentences[i];
      let newContent = '';

      // go through all characters of the sentence
      for (let j = 0; j < sentence.textContent.length; j++) {
        let substring = sentence.textContent.substr(j, 1);
        // if we have a character, wrap it
        if (substring !== " ") {
          newContent += `<span style="--animation-order: ${characterCount};">${substring}</span>`;
        } else {
          newContent += substring;
        }
        characterCount++;
      }
      sentence.innerHTML = newContent;
    }
  }

  $('.count_box_style').change(function() {
    var count_box_style = $(this).val();
    var addStyleTag3 = '';
    if (count_box_style == 'square') {
      addStyleTag3 += "<style type='text/css'>";
      addStyleTag3 += " .flip-clock-wrapper ul li a div{ border-radius:unset;}";
      addStyleTag3 += ".flip-clock-wrapper ul li a div div.inn{border-radius:0px;} ";
      addStyleTag3 += ".flip-clock-wrapper ul li a div.down{border-bottom-left-radius:0px;border-bottom-right-radius:0px} ";
      addStyleTag3 += "</style>";
      $(".addStyleClass3").html(addStyleTag3);
      // $('.flip-clock-wrapper ul li a div').css('border-radius','unset');
      // $('.flip-clock-wrapper ul li a div div.inn').css('border-radius',count_box_style);
      // $('.flip-clock-wrapper ul li a div.down').css({'border-bottom-left-radius':count_box_style,'border-bottom-right-radius':count_box_style});
      // $('.count_style_type').val('square')
      // $('.set_count_style').val(count_box_style);
    }
    if (count_box_style == 'round') {
      addStyleTag3 += "<style type='text/css'>";
      addStyleTag3 += " .flip-clock-wrapper ul li a div{ border-radius:unset;}";
      addStyleTag3 += ".flip-clock-wrapper ul li a div div.inn{border-radius:6px;} ";
      addStyleTag3 += ".flip-clock-wrapper ul li a div.down{border-bottom-left-radius:6px;border-bottom-right-radius:6px} ";
      addStyleTag3 += "</style>";
      $(".addStyleClass3").html(addStyleTag3);
      // $(".addStyleClass3").html(addStyleTag3);
      // $('.flip-clock-wrapper ul li a div').css('border-radius','unset');
      // $('.flip-clock-wrapper ul li a div div.inn').css('border-radius',count_box_style);
      // $('.flip-clock-wrapper ul li a div.down').css({'border-bottom-left-radius':count_box_style,'border-bottom-right-radius':count_box_style});
      // $('.count_style_type').val('round')
      // $('.set_count_style').val(count_box_style);
    }
    if (count_box_style == 'circle') {
      addStyleTag3 += "<style type='text/css'>";
      addStyleTag3 += " .flip-clock-wrapper ul li a div{ border-radius:unset;}";
      addStyleTag3 += ".flip-clock-wrapper ul li a div div.inn{border-radius:25px;} ";
      addStyleTag3 += ".flip-clock-wrapper ul li a div.down{border-bottom-left-radius:25px;border-bottom-right-radius:25px} ";
      addStyleTag3 += "</style>";
      $(".addStyleClass3").html(addStyleTag3);
      // $('.flip-clock-wrapper ul li a div').css('border-radius','unset');
      // $('.flip-clock-wrapper ul li a div div.inn').css('border-radius',count_box_style);
      // $('.flip-clock-wrapper ul li a div.down').css({'border-bottom-left-radius':count_box_style,'border-bottom-right-radius':count_box_style});
      // $('.count_style_type').val('circle')
      // $('.set_count_style').val(count_box_style);
    }
    if (count_box_style == 'double_circle') {
      addStyleTag3 += "<style type='text/css'>";
      addStyleTag3 += " .flip-clock-wrapper ul li a div{ border-radius:13px;}";
      addStyleTag3 += ".flip-clock-wrapper ul li a div.down{border-bottom-left-radius:13px;border-bottom-right-radius:13px} ";
      // addStyleTag3 += ".flip-clock-wrapper ul li a div div.inn{border-radius:0px;} ";
      // addStyleTag3 += ".flip-clock-wrapper ul li a div.down{border-bottom-left-radius:0px;border-bottom-right-radius:0px} ";
      addStyleTag3 += "</style>";
      $(".addStyleClass3").html(addStyleTag3);
      // $('.flip-clock-wrapper ul li a div').css('border-radius','11px');
      // // $('.flip-clock-wrapper ul li a div div.inn').css('border-radius',count_box_style);
      // // $('.flip-clock-wrapper ul li a div.down').css({'border-bottom-left-radius':count_box_style,'border-bottom-right-radius':count_box_style});
      // $('.count_style_type').val('double_circle')
      // $('.set_count_style').val(count_box_style);
    }
    if (count_box_style == '') {
      $(".addStyleClass3").html("");
    }
  });
  $('.instagram').click(function(){
    var iconName = $(this).data('instagram');
    if (iconName == "") {
      $('#instagram').html("Icon<span class='caret'></span>");
      $('.insta-input').val(null);
      $('#instagram').val(null);
      $('#addInsta').empty();
      $('.insta-input').attr("disabled","disabled");
    }else {
      $('.insta-input').val(null);
      $('.insta-input').removeAttr("disabled");
      var socialImage = '<img src="'+url+'assets/social_icon/'+iconName+'" alt="" width="18" height="18">'
      $('#instagram').val(iconName);
      $('#instagram').html(socialImage+"<span style='float: right;margin-right: 15px;margin-top: 10px;' class='caret'></span>");
    }
  });
  $('.twitter').click(function(){
    var iconName1 = $(this).data('twitter');
    if (iconName1 == "") {
      $('#twitter').html("Icon<span class='caret'></span>");
      $('.tweet-input').val(null);
      $('#twitter').val(null);
      $('#addTweet').empty();
      $('.tweet-input').attr("disabled","disabled");
    }else {
      $('.tweet-input').val(null);
      $('.tweet-input').removeAttr("disabled");
      var socialImage1 = '<img src="'+url+'assets/social_icon/'+iconName1+'" alt="" width="18" height="18">'
      $('#twitter').val(iconName1);
      $('#twitter').html(socialImage1+"<span style='float: right;margin-right: 15px;margin-top: 10px;' class='caret'></span>");
    }
  });
  $('.facebook').click(function(){
    var iconName2 = $(this).data('facebook');
    if (iconName2 == "") {
      $('#facebook').html("Icon<span class='caret'></span>");
      $('.face-input').val(null);
      $('#facebook').val(null);
      $('#addFace').empty();
      $('.face-input').attr("disabled","disabled");
    }else {
      $('.face-input').val(null);
      $('.face-input').removeAttr("disabled");
      var socialImage2 = '<img src="'+url+'assets/social_icon/'+iconName2+'" alt="" width="18" height="18">'
      $('#facebook').val(iconName2);
      $('#facebook').html(socialImage2+"<span style='float: right;margin-right: 15px;margin-top: 10px;' class='caret'></span>");
    }
  });
  $('.linkedin').click(function(){
    var iconName3 = $(this).data('linkedin');
    if (iconName3 == "") {
      $('#linkedin').html("Icon<span class='caret'></span>");
      $('.link-input').val(null);
      $('#linkedin').val(null);
      $('#addLink').empty();
      $('.link-input').attr("disabled","disabled");
    }else {
      $('.link-input').val(null);
      $('.link-input').removeAttr("disabled");
      var socialImage3 = '<img src="'+url+'assets/social_icon/'+iconName3+'" alt="" width="18" height="18">'
      $('#linkedin').val(iconName3);
      $('#linkedin').html(socialImage3+"<span style='float: right;margin-right: 15px;margin-top: 10px;' class='caret'></span>");
    }
  });
// Add Social Icon
  $('.insta-input').change(function(){
    var socialName = $('#instagram').val();
    var addInstaVal = socialName+"$#"+$(this).val();
    if ($('#SocialSize').val() == '') {
      var widthnheight = 20;
    }else {
      var widthnheight = $('#SocialSize').val();
    }
    var createInsta = '<a target="_blank" href="'+$(this).val()+'"><img width="'+widthnheight+'" height="'+widthnheight+'" src="'+url+"assets/social_icon/"+socialName+'"></a>';
    $('#addInsta').html(createInsta);
    $('.addInstaVal').val(addInstaVal);
  });
  $('.face-input').change(function(){
    var socialName1 = $('#facebook').val();
    var addFaceVal = socialName1+"$#"+$(this).val();
    $('.addFaceVal').val(addFaceVal);
    if ($('#SocialSize').val() == '') {
      var widthnheight = 20;
    }else {
      var widthnheight = $('#SocialSize').val();
    }
    var createFace = '<a target="_blank" href="'+$(this).val()+'"><img width="'+widthnheight+'" height="'+widthnheight+'" src="'+url+"assets/social_icon/"+socialName1+'"></a>';
    $('#addFace').html(createFace);
  });
  $('.tweet-input').change(function(){
    var socialName2 = $('#twitter').val();
    var addTweetVal = socialName2+"$#"+$(this).val();
    $('.addTweetVal').val(addTweetVal);
    if ($('#SocialSize').val() == '') {
      var widthnheight = 20;
    }else {
      var widthnheight = $('#SocialSize').val();
    }
    var createTweet = '<a target="_blank" href="'+$(this).val()+'"><img width="'+widthnheight+'" height="'+widthnheight+'" src="'+url+"assets/social_icon/"+socialName2+'"></a>';
    $('#addTweet').html(createTweet);
  });
  $('.link-input').change(function(){
    var socialName3 = $('#linkedin').val();
    var addLinkVal = socialName3+"$#"+$(this).val();
    $('.addLinkVal').val(addLinkVal);
    if ($('#SocialSize').val() == '') {
      var widthnheight = 20;
    }else {
      var widthnheight = $('#SocialSize').val();
    }
    var createLink = '<a target="_blank" href="'+$(this).val()+'"><img width="'+widthnheight+'" height="'+widthnheight+'" src="'+url+"assets/social_icon/"+socialName3+'"></a>';
    $('#addLink').html(createLink);
  });
})
