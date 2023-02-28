<!-- <!DOCTYPE html>
<html>

<head>
  <link href="<?php echo site_url(); ?>assets/css/seaff.css" type="text/css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@4.17.0/styles.min.css"/>
  <script src="<?php echo base_url() ?>assets/js/app.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/script.js"></script>
  <script type="text/javascript">
    ShopifyApp.init({
      apiKey : '<?php echo $api_key; ?>',
      shopOrigin : '<?php echo 'https://'  . $shop; ?>'
    });
  </script>
  <script type="text/javascript">
    ShopifyApp.ready(function(){
      ShopifyApp.Bar.initialize({
        buttons: {
          primary: {
            label: 'Save',
            message: 'unicorn_form_submit',
            loading: true
          }
        }
      });
    });
  </script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  </nav>
  <div class="container">
    <div class="Polaris-Card">
      <div class="setting_card">
        <div class="barhead row">
          <div class="col-md-12">
            <div class="Polaris-Card">
              <div class="Polaris-Card__Header">
                <h2 class="Polaris-Heading">Announcement Bar Dashboard</h2>
              </div>
              <div class="Polaris-Card__Section">
                <p>You can create a bar by clicking the "Create New Bar" button below</p>
                <button type="button" class="Polaris-Button Polaris-Button--outline create_bar">
                  <span class="Polaris-Button__Content">
                    <span class="Polaris-Button__Text">Create new bar</span>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="barinfo row">
          <div class="col-md-12">
            <div class="Polaris-Layout">
              <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Heading">Bar Name</h2>
                      <div class="Polaris-Layout__AnnotationDescription">
                        <p>Give your bar a name that you can easily identify.</p>
                      </div>
                    </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-Card">
                      <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                          <div class="Polaris-FormLayout__Item">
                            <div class="">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Bar Name</label>
                                </div>
                              </div>
                              <div class="Polaris-Connected">
                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField">
                                    <input id="PolarisTextField4" class="Polaris-TextField__Input" type="text" placeholder="e.g Hoodie sale" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="">
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
            </div>
            <hr>
            <div class="Polaris-Layout">
              <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Heading">Button Name</h2>
                      <div class="Polaris-Layout__AnnotationDescription">
                        <p>Button name that will be seen on the bar.</p>
                      </div>
                    </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-Card">
                      <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                          <div class="Polaris-FormLayout__Item">
                            <div class="">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Button Name</label>
                                </div>
                              </div>
                              <div class="Polaris-Connected">
                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField">
                                    <input id="PolarisTextField4" class="Polaris-TextField__Input" type="text" placeholder="e.g Check the product" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="">
                                    <div class="Polaris-TextField__Backdrop"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="Polaris-Card">
                      <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                          <div class="Polaris-FormLayout__Item">
                            <div class="">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Button Link</label>
                                </div>
                              </div>
                              <div class="Polaris-Connected">
                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField">
                                    <input id="PolarisTextField4" class="Polaris-TextField__Input" type="text" placeholder="e.g https://google.com/" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="">
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
            </div>
            <hr>
            <div class="Polaris-Layout">
              <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Heading">Desktop Position</h2>
                      <div class="Polaris-Layout__AnnotationDescription">
                        <p>Desktop setting for bar position.</p>
                      </div>
                    </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-Card">
                      <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                          <div class="Polaris-FormLayout__Item">
                            <div class="">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="PolarisSelect12Label" for="PolarisSelect12" class="Polaris-Label__Text">Bar Position</label>
                                </div>
                              </div>
                              <div class="Polaris-Select">
                                <select id="PolarisSelect12" class="Polaris-Select__Input desktop_bar_position" aria-invalid="false">
                                  <option value="none" selected="selected" disabled="disabled">Default</option>
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="Polaris-Layout">
              <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Heading">Bar Message, Color and Font Settings</h2>
                    </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-Card">
                      <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                          <div class="Polaris-FormLayout__Item">
                            <div class="">
                              <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                  <label id="PolarisTextField3Label" for="PolarisTextField3" class="Polaris-Label__Text">Announcement bar text</label>
                                </div>
                              </div>
                              <div class="Polaris-Connected">
                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField">
                                    <input id="PolarisTextField3" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" type="text" placeholder="Your bar text" aria-invalid="false" aria-multiline="false" value="">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html> -->
