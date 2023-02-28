<div class="barinfo row">
  <div class="col-md-12">
    <p style="color:red;">Note: Star marked field are compulsory</p>
    <form action="<?php echo base_url(); ?>Home/update_bar?shop=<?php echo $shop; ?>&bar_id=<?php echo $bar_detail->id; ?>" enctype="multipart/form-data" method="post">
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
                            <label id="BarNameLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Bar Name</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <input id="BarName" class="Polaris-TextField__Input" type="text" name="bar_name" placeholder="e.g Hoodie sale" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?php echo $bar_detail->bar_name; ?>" required="required">
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
                            <label id="ButtonTextLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Button Text</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <input id="ButtonText" class="Polaris-TextField__Input" type="text" name="button_name" placeholder="e.g Check the product" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?php echo $bar_detail->button_name; ?>" required="required">
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
                            <label id="ButtonLinkLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Button Link</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <input id="ButtonLink" class="Polaris-TextField__Input" type="text" name="button_link" placeholder="e.g https://google.com/" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?php echo $bar_detail->button_link; ?>" required="required">
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
                        <label class="Polaris-Choice" for="PolarisCheckbox2">
                          <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                              <input id="PolarisCheckbox2" type="checkbox" name="target" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value="_blank" <?php if($bar_detail->target  == '_blank'){ echo "checked=checked";} ?>>
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
                <h2 class="Polaris-Heading">Desktop Bar Position</h2>
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
                            <label id="BarPositionLabel" for="PolarisSelect12" class="Polaris-Label__Text required">Bar Position</label>
                          </div>
                        </div>
                        <div class="Polaris-Select">
                          <select id="BarPosition" name="bar_position" class="Polaris-Select__Input desktop_bar_position" aria-invalid="false" required="required">
                            <option value="top" <?php if($bar_detail->bar_position  == 'top'){ echo "selected=selected";} ?>>Top Sticky</option>
                            <option value="top-scrolling" <?php if($bar_detail->bar_position  == 'top-scrolling'){ echo "selected=selected";} ?>>Top</option>
                            <option value="bottom" <?php if($bar_detail->bar_position  == 'bottom'){ echo "selected=selected";} ?>>Bottom Sticky</option>
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
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="">
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label">
                            <label id="ShowBarLabel" for="PolarisSelect12" class="Polaris-Label__Text required">Show Bar In</label>
                          </div>
                        </div>
                        <div class="Polaris-Select">
                          <select id="ShowBar" name="show_bar" class="Polaris-Select__Input desktop_bar_position" aria-invalid="false" required="required">
                            <option value="collection" <?php if($bar_detail->show_bar == 'collection'){ echo "selected=selected";} ?>>Collection Page</option>
                            <option value="product" <?php if($bar_detail->show_bar == 'product'){ echo "selected=selected";} ?>>Product Page</option>
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
                <h2 class="Polaris-Heading">Background Image</h2>
                <div class="Polaris-Layout__AnnotationDescription">
                  <p>Left blank if want background color.</p>
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
                </div>
              </div>
              <?php if ($bar_detail->background_image == NULL) { ?>
              <?php }else{ ?>
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">
                      <div class="">
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label">
                            <label id="ImageLabel" for="PolarisTextField3" class="Polaris-Label__Text">Background Image</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <img src="<?php echo base_url(); ?>upload/<?php echo $bar_detail->background_image; ?>" class="background_image"/>
                              <a href="<?php echo base_url(); ?>Home/remove_image?shop=<?php echo $shop; ?>&img=<?php echo $bar_detail->background_image; ?>" class="remove_image"><i class="fa fa-minus-circle"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php  } ?>
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
                            <label id="BarTextLabel" for="PolarisTextField3" class="Polaris-Label__Text required">Announcement bar text</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <input id="BarText" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" type="text" name="bar_text" placeholder="Your bar text" aria-invalid="false" aria-multiline="false" value="<?php echo $bar_detail->bar_text; ?>" required="required">
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
                <div class="Polaris-Card__Header">
                  <h2 class="Polaris-Heading">Color Setting (Background, Text)</h2>
                </div>
                <div class="Polaris-Card__Section">
                  <div class="Polaris-Stack Polaris-Stack--distributionFill">
                    <div class="Polaris-Stack__Item">
                      <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Label">
                          <label id="barBackground" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Bar Background</label>
                        </div>
                      </div>
                      <div>
                        <input type="color" id="barBackground" name="bar_background" value="<?php echo $bar_detail->bar_background; ?>">
                      </div>
                    </div>
                    <div class="Polaris-Stack__Item">
                      <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Label">
                          <label id="buttonTextColor" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Button Text</label>
                        </div>
                      </div>
                      <div>
                        <input type="color" id="buttonTextColor" name="button_text_color" value="<?php echo $bar_detail->button_text_color; ?>" required="required">
                      </div>
                    </div>
                    <div class="Polaris-Stack__Item">
                      <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Label">
                          <label id="textColor" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Bar Text</label>
                        </div>
                      </div>
                      <div>
                        <input type="color" id="textColor" name="text_color" value="<?php echo $bar_detail->text_color; ?>" required="required">
                      </div>
                    </div>
                    <div class="Polaris-Stack__Item">
                      <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Label">
                          <label id="buttonBackground" for="notificationMessageBackgroundText" class="Polaris-Label__Text">Button Background</label>
                        </div>
                      </div>
                      <div>
                        <input type="color" id="buttonBackground" name="button_background" value="<?php echo $bar_detail->button_background; ?>" required="required">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Polaris-Card">
                <div class="Polaris-Card__Header">
                  <h2 class="Polaris-Heading">Font Setting (In px)</h2>
                </div>
                <div class="Polaris-Card__Section">
                  <div class="Polaris-Stack Polaris-Stack--distributionFill">
                    <div class="Polaris-Stack__Item">
                      <div class="">
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label">
                            <label id="FontSize4Label" for="PolarisTextField4" class="Polaris-Label__Text required">Font Size</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <input id="FontSize" class="Polaris-TextField__Input" type="number" min="0" name="font_size" placeholder="Bar height is determined by Font Size" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?php echo $bar_detail->font_size; ?>" required="required">
                              <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="Polaris-Stack__Item">
                      <div class="">
                        <div class="Polaris-Labelled__LabelWrapper">
                          <div class="Polaris-Label">
                            <label id="BarPaddingLabel" for="PolarisTextField4" class="Polaris-Label__Text required">Bar Padding</label>
                          </div>
                        </div>
                        <div class="Polaris-Connected">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                              <input id="BarPadding" class="Polaris-TextField__Input" type="number" min="0" name="bar_padding" placeholder="Space between the text and the upper/lower borders" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?php echo $bar_detail->bar_padding; ?>" required="required">
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
      <button type="button" onClick="javascript:history.go(-1)" class="Polaris-Button Polaris-Button--destructive"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Cancel</span></span></button>
      <button type="submit" class="Polaris-Button Polaris-Button--primary"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Update</span></span></button>
    </form>
  </div>
</div>
