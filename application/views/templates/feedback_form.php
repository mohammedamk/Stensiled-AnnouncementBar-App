<!-- <div class="Polaris-Card" style="background: #7d7c7c00;">
  <div>
    <div class="Polaris-Tabs__Wrapper">
      <ul role="tablist" class="Polaris-Tabs">
        <li class="Polaris-Tabs__TabContainer"><a class="Polaris-Tabs__Tab" href="<?php echo base_url(); ?>Home/Dashboard?shop=<?php echo $shop; ?>"><span class="Polaris-Tabs__Title">Dashboard</span></a></li>
        <li class="Polaris-Tabs__TabContainer"><a class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected" href="<?php echo base_url(); ?>Home/Feedback?shop=<?php echo $shop; ?>"><span class="Polaris-Tabs__Title">Feedback</span></a></li>
        <li class="Polaris-Tabs__TabContainer"><a class="Polaris-Tabs__Tab" href="<?php echo base_url(); ?>Home/create_form?shop=<?php echo $shop; ?>" ><span class="Polaris-Tabs__Title">Create new bar</span></a></li>
      </ul>
    </div>
  </div>
</div> -->
<div class="container">
  <div class="Polaris-Card">
    <div class="setting_card">
<form action="<?php echo base_url(); ?>Home/newFeedback?shop=<?php echo $shop; ?>" enctype="multipart/form-data" method="post">
  <div class="Polaris-Layout">
    <div class="Polaris-Layout__AnnotatedSection">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Feedback</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>Write Your Feedback Here.</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card" style="margin-right: 46px;">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                    <div class="Polaris-Labelled__LabelWrapper">
                      <div class="Polaris-Label"><label id="FeedbackEmailLabel" for="FeedbackEmail" class="Polaris-Label__Text required">Email Address</label></div>
                    </div>
                    <div class="Polaris-Connected">
                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                        <div class="Polaris-TextField"><input id="FeedbackEmail" type="email" name="feedbackemail" placeholder="email address..." class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" aria-invalid="false" aria-multiline="false" required="required">
                          <div class="Polaris-TextField__Backdrop"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                    <div class="Polaris-Labelled__LabelWrapper">
                      <div class="Polaris-Label"><label id="FeedbackDescriptionLabel" for="FeedbackDescription" class="Polaris-Label__Text required">Feedback Description</label></div>
                    </div>
                    <div class="Polaris-Connected">
                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                        <div class="Polaris-TextField"><textarea id="FeedbackDescription" name="feedbackdescription" class="Polaris-TextField__Input" required="required"></textarea>
                          <div class="Polaris-TextField__Backdrop"></div>
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
    <p style="color:red;">Note: Star marked field are compulsory</p>
  </div>
  <button type="button" onClick="javascript:history.go(-1)" class="Polaris-Button Polaris-Button--destructive"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Cancel</span></span></button>
  <button type="submit" class="Polaris-Button Polaris-Button--primary"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Send</span></span></button>
</form>
</div>
</div>
</div>
