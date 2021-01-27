<?php
get_header();
?>

<!-- PHP FUNCTION TO GET IMAGE PATH TO THEME FOLDERS -->
<?php
if (!defined('THEME_IMG_PATH')) {
  define('THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images');
} ?>

<div id="main">
  <div id="slider">
    <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
  </div>
  <div>
    <div id="divider"></div>
    <div id="about-img"></div>
    <div id="about-text">
      <div class="scroll-divider"></div>
      <p>New Horizons Maritime Center provides a dynamic hands-on, apprentice-based
        learning environment, designed specifically for youth development and community
        betterment. These programs have been developed from a concern for at-risk and
        underserved youth who struggle to succeed in the traditional educational system.
        Our goal is to provide life changing programs to those who would never have the
        chance to experience something like this without us.
      </p>
      <p>
        NHMC offers in-school boat building classroom instruction, after-school programs, educational
        workshops, apprentice possibilities, boat building classes, sailing instruction and
        a safe place to pursue productive and useful life changing educational activities.
        Through boat building and the restoration of donated boats needing repair, and under the
        careful supervision of NHMC staff and volunteers, youth groups and other interested people
        in the community will learn a wide variety of trade and social skills necessary for success
        in today’s competitive world. Participants will gain a greater sense of tradition, respect,
        and societal values as they tap into the rich maritime traditions our country has to offer.
        New interests will be developed and innate potential realized.
      </p>
      <div id="about-buttons">
        <a href="/contact" class="button-style-1">CONTACT</a>
        <a href="/support" class="button-style-2">SUPPORT</a>
      </div>
    </div>
    <div id="mission">
      <h4>OUR MISSION</h4>
      <div class="white-border"></div>
      <p>“New Horizons Maritime Center provides maritime educational opportunities to at risk youth,
        as well as the general public. Using a unique curriculum of practical and hands on applications
        new skills are fostered opening doors to self-confidence and new levels of achievement.”
      </p>
    </div>
    <div id="building">
      <div class="building-col">
        <h4>Building Confidence</h4>
        <p>Our programs give our participants the skills, experience and confidence necessary to realize their
          true potentials
        </p>
      </div>
      <div class="building-col">
        <h4>Building Teams</h4>
        <p>Teams build vital communication and work skills, improving performance at home, at school and in their
          community
        </p>
      </div>
      <div class="building-col">
        <h4>Building Community</h4>
        <p>NHMC graduates return to the community, eager to give back, as matured, confident and productive/skilled
          members of our Wasatch Front population
        </p>
      </div>
      <div class="building-col">
        <h4>Building Life Skills</h4>
        <p>New Horizons programs build maritime experience and trade skills in youth, families and adults. Our sailing
          and boat building offerings not only teach students the skills of the craft, but also the confidence to put
          those skills to the test in the real world
        </p>
      </div>
    </div>
    <div class="split-wrapper">
      <img class="half-img" src="<?php echo THEME_IMG_PATH; ?>/boat-building-tools.jpg" alt="Woodworking Tools" />
      <div class="split-content">
        <h4>OUR SERIVCE</h4>
        <div class="black-divider"></div>
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-anchor"></i>
          </div>
          <div class="service-item-text">
            <h4>AT RISK YOUTH</h4>
            <p>In reality, all youth at risk. We help youth build confidence and skills important for resisting peer
              pressure and navigating rough waters.
            </p>
          </div>
        </div>
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-cubes"></i>
          </div>
          <div class="service-item-text">
            <h4>BUDDING CREATIVES</h4>
            <p>Supporting the clear majority of life's students that learn best in hands on situations, with rewarding results
              to be enjoyed for years to come.
            </p>
          </div>
        </div>
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-life-ring"></i>
          </div>
          <div class="service-item-text">
            <h4>YOUR COMMUNITY</h4>
            <p>Building your community through programs focused on education, skills, integrity, team work and more.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="quotes">
      <!-- QUOTE SLIDER PLUGIN -->
      <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
    </div>
    <div class="dark-grey">
      <div id="support-text">
        <h4>WANT TO SUPPORT NHMC? VOLUNTEER OR DONATE</h4>
        <h3>Your support is greatly appreciated by New Horizons
          Maritime Center and our benefactors
        </h3>
      </div>
      <div id="support-button">
        <a href="/support" class="button-style-2">SUPPORT</a>
      </div>
    </div>
    <div class="split-wrapper">
      <div class="split-content">
        <h4>RECENT POSTS</h4>
        <div class="black-divider"></div>
        <!-- WP RECENT POST PLUGIN  -->
        <?php dynamic_sidebar('smartslider_area_1'); ?>
        <div id="blog-button">
          <a href="/blog">BLOG</a>
        </div>
      </div>
      <img class="half-img" src="<?php echo THEME_IMG_PATH; ?>/boat-building.jpg" alt="Boat Project" />
    </div>
    <div class="dark-grey" id="instagram">
      <h4>GALLERY</h4>
      <div class="white-border"></div>
      <div class="gallery-container">
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/24268739 copy.jpg" alt="Kids handling spinnaker in wind" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/62659101 copy.jpg" alt="Kids handling spinnaker in wind" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/good for lesson page copy.JPG" alt="Line handling at mast" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/HPIM5594 copy.JPG" alt="Captain and crew learning in cockpit" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/HPIM5597 copy.JPG" alt="Girl in PFD looking over lake" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/IMG_1943.jpg" alt="Wooden boats on display" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/IMG_2017.jpg" alt="Hull shape interactive experiment" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/IMG_2039.jpg" alt="Boat building presentation" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/IMG_2238.jpg" alt="Teenage boys sailing Utah lake" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/IMG_2278.jpg" alt="Kids sailing vessel on Utah lake" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/IMG_2282.jpg" alt="Kids sailing vessel on Utah lake" />
        <img src="<?php echo THEME_IMG_PATH; ?>/gallery/IMG_5076.jpg" alt="Outdoor classroom sailing presentation" />
      </div>
    </div>
    <div class="form-container">
      <div id="keep-in-touch">
      <i class="fas fa-anchor"></i>
      <h3>KEEP IN TOUCH</h3>
      <div class="black-divider"></div>
      </div>
      <div class="form-header">
        <h3>We’d love to hear from you!</h3>
      </div>
      <div class="form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="46" title="Contact Us" html_class="contact-form"]'); ?>
        <div id="success-message">
          <h4>Message Sent! We will respond to your inquiry shortly.</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>