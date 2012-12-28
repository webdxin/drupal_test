<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
//print_r($page['highlighted']);
?>
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
     </div>
      <div class="clr"></div>
      
      
      <div class="menu">
       <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array( 'class' => array('links', 'inline', 'clearfix')))); ?>
       
        
        
      </div>
      <div class="click">
        <p>CClick here to live Support Tell Free 1-866-123-675</p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <div class="slider_main">
      <div class="leftt">
        <h2>We'll make sure your <br />
          website works for you...</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        <a href="#"><img src="<?php print drupal_get_path('theme', 'clean') . '/'; ?>images/view_port.gif" alt="picture" width="136" height="33" border="0" /></a></div>
      <div id="slider">
        <!-- start slideshow -->
        <div id="slideshow">
         <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
         
        </div>
        <!-- end #slideshow -->
        <div class="controls-center">
          <h2>Your company's welcome message or slogan. </h2>
          <p>Lorem ipsum dolor sit amet, consectur el.</p>
          
        </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    
    <div class="main_left">
      <div class="search">
      <p>Search: </p><?php print render($page['sidebar_first']['search_form']); ?>
        
        <div class="clr"></div>
      </div>
      
      <?php print render($page['sidebar_first']); ?>
      
      <h2>News and Events<br />
        <span> Lorem ipsum dolor sit amet, consectetur </span> </h2>
      <p><span>12 Dec 2015 | <a href="#">0 comments</a></span><br />
        <strong>Duis nec porttitor lorem</strong><br />
        Mauris et nisi urna nonfaucibus lacus magna. </p>
      <p><span>18 Dec 2015 | <a href="#">5 comments</a></span><br />
        <strong>Aenean interdum</strong><br />
        Vestibulum ante ipsum primis into faucibus orci luctus ultrices antene posuere.</p>
      <p><span>4 Jan 2015 | <a href="#">2 comments</a></span><br />
        <strong>Integer vitae nisl</strong><br />
        Duis volutpat ligula laoreet orci lectus placerat <br />
        Curabitur lectus malesuada pulvinar.</p>
      <p><a href="#">More News »</a><br />
      </p>
      <h2>&nbsp;</h2>
      <h2>What They Say<br />
        <span>Lorem ipsum dolor sit amet, consectetur</span> </h2>
      <img src="images/test.gif" alt="picture" width="18" height="17" class="floated" />
      <p>&quot;Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse voluptas nulla pariatur?&quot;</p>
      <p><em><strong>by: John S., webdesigner</strong></em></p>
    </div>
    
    <div class="main_right">
      <div class="clr"></div>
      <div class="right_text">
        <p><strong>Latest News:</strong> Dipisicing elit, sed do eiusmod tempor incididunt ut labore et?</p>
      </div>
       <?php if ($messages): ?>
        <div id="messages"><div class="section clearfix">
          <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      
      <div class="clr"></div>
      <h2>Welcome to Our Website<br />
        <span> Ut enim ad minim veniam, quis nostrud exercitation </span> </h2>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <p>&nbsp;</p>
      <h2>Featured Works<br />
        <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </span> </h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea</p>
      <img src="images/img_1.jpg" alt="picture" width="168" height="75" class="floated" />
      <p><a href="#"><strong>Webname</strong></a><br />
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis </p>
      <p><a href="#">Read More »</a></p>
      <div class="bg"></div>
      <img src="images/img_2.jpg" alt="picture" width="168" height="75" class="floated" />
      <p><a href="#"><strong>Optimal Design</strong></a><br />
        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
      <p><a href="#">Read More »</a></p>
      <div class="bg"></div>
      <img src="images/img_3.jpg" alt="picture" width="168" height="75" class="floated" />
      <p><a href="#"><strong>Power Design</strong></a><br />
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
      <p><a href="#">Read More »</a></p>
      <p>&nbsp;</p>
    </div>
    
    <div class="clr"></div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="leftt">© Copyright websitename . All Rights Reserved. <a href="#"> Home</a> | <a href="#">Contact</a> | <a href="#">RSS </a></p>
      <p class="right">(Blue) <a href="http://www.bluewebtemplates.com">Website Templates</a></p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>

