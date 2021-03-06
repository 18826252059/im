define(function(require, exports, module){

	require("jquery.bootstrap-datetimepicker");

	exports.run = function(){
		$("#nextExcutedStartTime,#nextExcutedEndTime").datetimepicker({
			// autoclose: true,
      format: 'yyyy-mm-dd',
      minView: 'month'
		});	

		$("#log-table").on('click', '.show-data', function(){
			$(this).hide().parent().find('.hide-data').show().end().find('.data').show();
		});	

		$("#log-table").on('click', '.hide-data', function(){
			$(this).hide().parent().find('.show-data').show().end().find('.data').hide();
		});	

		$("#tips").popover({
		    html: true,
		    trigger: 'hover',//'hover','click'
		    content: $("#tips-html").html()
		});
	};

});