<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php if($this->countModules('header-1')): ?>
	<div class="dc-header1">
    	<jdoc:include type="modules" name="header-1" style="s3_header" />
	</div>
<?php endif; ?>
<?php if($this->countModules('header-2')): ?>
	<div class="dc-header2">
    	<jdoc:include type="modules" name="header-2" style="s3_header" />
	</div>
<?php endif; ?>
<?php if($this->countModules('header-3')): ?>
	<div class="dc-header3">
    	<jdoc:include type="modules" name="header-3" style="s3_header" />
	</div>
<?php endif; ?>
<?php if($this->countModules('header-4')): ?>
	<div class="dc-header4">
    	<jdoc:include type="modules" name="header-4" style="s3_header" />
	</div>
<?php endif; ?>