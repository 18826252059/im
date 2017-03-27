define(function(require, exports, module) {

	var Notify = require('common/bootstrap-notify');
	var Widget = require('widget');
	require('jquery.plupload-queue-css');
	require('jquery.plupload-queue');
	require('plupload');
	// 这里require是有顺序要求的
	require('jquery.plupload-queue-zh-cn');

	var VideoQualitySwitcher = require('../widget/video-quality-switcher');

	exports.run = function() {

	};

});