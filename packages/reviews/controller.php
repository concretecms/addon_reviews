<?php   

defined('C5_EXECUTE') or die(_("Access Denied."));

class ReviewsPackage extends Package {

	protected $pkgHandle = 'reviews';
	protected $appVersionRequired = '5.5';
	protected $pkgVersion = '1.4';
	
	public function getPackageDescription() {
		return t("Adds the ability to add ratings and comments to a page.");
	}
	
	public function getPackageName() {
		return t("Reviews");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('reviews', $pkg);
		
	}


}