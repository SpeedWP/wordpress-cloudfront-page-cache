<?php
/**
 * Intro admin template
 *
 * @package    optimization
 * @subpackage optimization/admin
 * @author     Optimization.Team <info@optimization.team>
 */

if (!defined('ABSPATH')) {
    exit;
}

$module_name = $view->module->name();
$module_version = $view->module->version();

?>
<div class="wrap">

	<div class="metabox-prefs">
		<div class="wrap about-wrap" style="position:relative;">
			<div style="float:right;">
				<a href="https://aws.amazon.com/cloudfront/" target="_blank" rel="noopener"><img src="<?php print $view->module->dir_url(); ?>admin/images/amazon-cloudfront.png" alt="Amazon CloudFront" width="200" height="250" border="0" style="float:right;"></a>
			</div>
			<h1><?php print $module_name; ?> <?php print $module_version; ?></h1>

			<p class="about-text" style="min-height:inherit;">Thank you for using the <?php print $module_name; ?> plugin by <a href="https://github.com/o10n-x/" target="_blank" rel="noopener" style="color:black;text-decoration:none;">Optimization.Team</a></p>

			

			<p class="about-text" style="min-height:inherit;">This plugin enables to use <a href="https://aws.amazon.com/cloudfront/" target="_blank">Amazon CloudFront CDN</a> as a international page cache for WordPress. </p>

			<p class="about-text" style="min-height:inherit;">Getting started? Read the <a href="https://github.com/o10n-x/wordpress-cloudfront-page-cache/tree/master/docs" target="_blank">setup guide</a> on Github. For professional installation support you can ask your question at the <a href="https://forums.aws.amazon.com/forum.jspa?forumID=46" target="_blank">AWS CloudFront Support Forum</a>.</p>

			<p class="about-text" style="min-height:inherit;">If you are happy with the plugin, please consider to <span class="star" style="display:inline-block;vertical-align:middle;"><a class="github-button" data-manual="1" data-size="large" href="https://github.com/o10n-x/wordpress-cloudfront-page-cache" data-icon="octicon-star" data-show-count="true" aria-label="Star o10n-x/wordpress-cloudfront-page-cache on GitHub">Star</a></span> on Github.</p>
			
			<hr />

			<h3>WordPress WPO Collection</h3>

			<img src="<?php print O10N_CORE_URI; ?>admin/images/google-lighthouse.png" alt="Google Lighthouse" height="50" border="0">
			
			<p class="about-text" style="min-height:inherit;">This plugin is part of a <a href="https://github.com/o10n-x/" target="_blank">WPO plugin collection</a> that is designed to achieve perfect <a href="https://developers.google.com/web/tools/lighthouse/" target="_blank">Google Lighthouse</a> scores.</p>
			


		</div>
	</div>

</div>