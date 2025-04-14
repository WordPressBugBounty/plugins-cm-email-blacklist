<?php
ob_start();
include plugin_dir_path(__FILE__) . 'views/plugin_compare_table.php';
$plugin_compare_table = ob_get_contents();
ob_end_clean();
$cminds_plugin_config = array(
	'plugin-is-pro'				 => FALSE,
	'plugin-is-addon'			 => FALSE,
	'plugin-has-addons'			 => TRUE,
	'plugin-version'			 => '1.5.9',
	'plugin-addons'        => array(
		array(
			'title' => 'Registration and Invitation Codes',
			'description' => 'Manage user registration forms with invitation codes and control access. Simplify login and registration processes using Ajax based solution.',
			'link' => 'https://wordpress.org/plugins/cm-invitation-codes/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPUserRegistrationAndInvitationCodesS.png',
		),
		array(
			'title' => 'Questions and Answers Forum',
			'description' => 'Manage Q&A forums with the WordPress questions and answers plugin. Let users ask questions, provide answers, and engage with your community.',
			'link' => 'https://wordpress.org/plugins/cm-answers/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPQuestionsAndAnswersS.png',
		),
		array(
			'title' => 'Download Manager Plugin',
			'description' => 'Manage downloadable files on your site with the download and file manager plugin. Organize files, control access, and improve user experience.',
			'link' => 'https://wordpress.org/plugins/cm-download-manager/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPDownloadManagerS.png',
		),
		array(
			'title' => 'Map Locations Manager',
			'description' => 'Display locations on an interactive map with Google Maps. Use as a store locator, showcase business locations, and improve navigation.',
			'link' => 'https://wordpress.org/plugins/cm-map-locations/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPMapLocationsandStoreLocaterS.png',
		),
		array(
			'title' => 'Video Lessons Manager',
			'description' => 'Create and display video lessons on your site by importing Vimeo videos. Organize content and track students with this efficient LMS plugin.',
			'link' => 'https://wordpress.org/plugins/cm-video-lesson-manager/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPVideoLessonsManagerS.png',
		),
		array(
			'title' => 'Custom Reports Plugin',
			'description' => 'Generate custom reports and get efficient analytics for your site with the custom reports plugin. Filter data and create tailored reports.',
			'link' => 'https://wordpress.org/plugins/cm-custom-reports/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPReportsS.png',
		),
	),
	'plugin-specials'        => array(
		array(
			'title' => 'MicroPayments Digital Wallet',
			'description' => 'MicroPayments establishes a digital wallet system, allowing users to seamlessly exchange points for goods, gift points, or directly purchase points using credit cards.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/micropayments/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/MicropaymentsS.png',
		),
		array(
			'title' => 'Map Routes Manager',
			'description' => 'Draw map routes and generate a catalog of routes and trails with points of interest using Google maps.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/google-maps-routes-manager-plugin-for-wordpress-by-creativeminds/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPMapRoutesManagerS.png',
		),
		array(
			'title' => 'Site Access and Content Restriction',
			'description' => 'A robust membership solution and content restriction plugin that supports role-based access to content on your WordPress website.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/membership-plugin-for-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPSiteRestrictionS.png',
		),
		array(
			'title' => 'Reviews and Rating Plugin',
			'description' => 'Allow visitors and users to submit reviews and ratings, and display them on any product, posts, or pages.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/customer-reviews-plugin-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPCustomerReviewsS.png',
		),
		array(
			'title' => 'Booking Calendar',
			'description' => 'Enable customers to effortlessly schedule appointments and make payments directly through your website.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/schedule-appointments-manage-bookings-plugin-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBookingCalendarS.png',
		),
		array(
			'title' => 'Invitation Code Content Access',
			'description' => 'Generate restricted access codes for specific content, pages, and files. Each code can have a limited number of uses and an expiration date.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/invitation-code-content-access-plugin-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPContentAccessInvitationCodeS.png',
		),
	),
	'plugin-bundles'        => array(
		array(
			'title' => '99+ Free Pass Plugins Suite',
			'description' => 'Get all CM 99+ WordPress plugins and addons. Includes unlimited updates and one year of priority support.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/cm-wordpress-plugins-yearly-membership/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundleWPSuiteS.png',
		),
		array(
			'title' => 'Essential Publishing Plugin Package',
			'description' => 'Enhance your WordPress publishing with a bundle of seven plugins that elevate content generation, presentation, and user engagement on your site.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/essential-wordpress-publishing-tools-bundle/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundlePublishingS.png',
		),
		array(
			'title' => 'Essential Content Marketing Tools',
			'description' => 'Enhance your WordPress content marketing with seven plugins for improved content generation, presentation, and user engagement.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/essential-wordpress-content-marketing-tools-bundle/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundleContentS.png',
		),
		array(
			'title' => 'Essential Security Plugins',
			'description' => 'Enhance your WordPress security with a bundle of five plugins that provide additional ways to protect your content and site from spammers, hackers, and exploiters.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/essential-wordpress-security-tools-plugin-bundle/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundleSecurityS.png',
		),
	),
	'plugin-services'        => array(
		array(
			'title' => 'WordPress Custom Hourly Support',
			'description' => 'Hire our expert WordPress developers on an hourly basis, offering a-la-carte service to craft your custom WordPress solution.',
			'link' => 'https://www.cminds.com/wordpress-services/wordpress-custom-hourly-support-package/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesHourlySupportS.png',
		),
		array(
			'title' => 'Performance and Optimization Analysis',
			'description' => 'Receive a comprehensive review of your WordPress website with optimization suggestions to enhance its speed and performance.',
			'link' => 'https://www.cminds.com/wordpress-services/wordpress-performance-and-speed-optimization-analysis-service/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesPerformanceS.png',
		),
		array(
			'title' => 'WordPress Plugin Installation',
			'description' => 'We offer professional installation and configuration of plugins or add-ons on your site, tailored to your specified requirements.',
			'link' => 'https://www.cminds.com/wordpress-services/plugin-installation-service-for-wordpress-by-creativeminds/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesExtensionInstallationS.png',
		),
		array(
			'title' => 'WordPress Consulting',
			'description' => 'Purchase consulting hours to receive assistance in designing or planning your WordPress solution. Our expert consultants are here to help bring your vision to life.',
			'link' => 'https://www.cminds.com/wordpress-services/consulting-planning-hourly-support-service-wordpress-creativeminds/#description',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesConsultingS.png',
		),
	),
	'plugin-abbrev'				 => 'cmeb',
	'plugin-file'				 => CMEB_PLUGIN_FILE,
	'plugin-dir-path'			 => plugin_dir_path( CMEB_PLUGIN_FILE ),
	'plugin-dir-url'			 => plugin_dir_url( CMEB_PLUGIN_FILE ),
	'plugin-basename'			 => plugin_basename( CMEB_PLUGIN_FILE ),
    'plugin-campign'             => '?utm_source=blacklistfree&utm_campaign=freeupgrade',
	'plugin-icon'				 => '',
    'plugin-affiliate'               => '',
    'plugin-redirect-after-install'  => admin_url( 'admin.php?page=cmeb_menu' ),
    'plugin-show-guide'              => TRUE,
    'plugin-guide-text'              => '    <div style="display:block">
        <ol>
            <li>The plugin only works when at least one of the General Options is checked. If both are used, then the domain has to be either Whitelisted or not in the Free Domain list.</li>
            <li>Go to <strong>"Plugin Settings"</strong> and decide which method to use: Whitelist or Free Domain List</li>
            <li>If you choose to use the Whitelist method <strong>"add the domains"</strong> from which user can register to your site</li>
            <li>If you chosen to use the Free Domains - registration to your site will be limited and will not include any domain appearing in the free domains list.</li>
            <li>You can use the testing option to test the ability to register with different domains </li>
        </ol>
    </div>',
    'plugin-guide-video-height'      => 240,
    'plugin-guide-videos'            => array(
        array( 'title' => 'Installation tutorial', 'video_id' => '158514903' ),
    ),
	'plugin-name'				 => CMEB_NAME,
	'plugin-license-name'		 => CMEB_NAME,
	'plugin-slug'				 => '',
	'plugin-short-slug'			 => 'email-blacklist',
	'plugin-menu-item'			 => CMEB_MENU_ITEM,
	'plugin-textdomain'			 => CMEB_SLUG_NAME,
    'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Introduction to email blacklist', 'video_time' => '0:00' ),
        array( 'title' => 'Blacklist and Whitelist domain explained', 'video_time' => '0:54' ),
        array( 'title' => 'Blacklist and Whitelist domain settings', 'video_time' => '1:24' ),
        array( 'title' => 'Free domain list from SpamAssassin', 'video_time' => '1:57' ),
        array( 'title' => 'User defined domain blacklist', 'video_time' => '2:46' ),
        array( 'title' => 'Tester', 'video_time' => '3:20' ),
        array( 'title' => 'User defined domain whitelist', 'video_time' => '3:37' ),
        array( 'title' => 'Registration log', 'video_time' => '4:55' ),
        array( 'title' => 'Frontend display of messages', 'video_time' => '5:27' ),
    ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Email Blacklist Premium Features', 'video_id' => '123027044' ),
    ),
	'plugin-userguide-key'		 => '2339-cm-email-blacklist-cmrb-free-version-guide',
	'plugin-store-url'			 => 'https://www.cminds.com/wordpress-plugins-library/purchase-cm-email-registration-blacklist-plugin-for-wordpress?utm_source=blacklistfree&utm_campaign=freeupgrade&upgrade=1',
	'plugin-support-url'		 => 'https://www.cminds.com/contact/',
	'plugin-video-tutorials-url'		 => 'https://www.videolessonsplugin.com/video-lesson/lesson/email-domain-blacklist-plugin/',
	'plugin-review-url'			 => 'https://www.cminds.com/wordpress-plugins-library/email-registration-blacklist-plugin-for-wordpress/#reviews',
	'plugin-changelog-url'		 => 'https://www.cminds.com/wordpress-plugins-library/purchase-cm-email-registration-blacklist-plugin-for-wordpress/#changelog',
	'plugin-licensing-aliases'	 => array( '' ),
	'plugin-compare-table'	 => $plugin_compare_table,
);