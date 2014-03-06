<?php
require('jq_control.php');

function jq_datetimepicker_gen() {
	$jqControlGen = new JqControlGen();
	$objJqDoc = new JqDoc(null, 'datetimepicker', 'QJqDateTimePicker', 'QDatepickerBox');
	$options = array();
	$options[] = new Option('alwaysSetTime', 'alwaysSetTime', 'Boolean', 'True', '');
	$options[] = new Option('ampm', 'ampm', 'Boolean', 'False', '');
	$options[] = new Option('hour', 'hour', 'Integer', '0', '');
	$options[] = new Option('hourMin', 'hourMin', 'Integer', '0', '');
	$options[] = new Option('hourMax', 'hourMax', 'Integer', '23', '');
	$options[] = new Option('hourGrid', 'hourGrid', 'Integer', '0', '');
	$options[] = new Option('minute', 'minute', 'Integer', '0', '');
	$options[] = new Option('minuteMin', 'minuteMin', 'Integer', '0', '');
	$options[] = new Option('minuteMax', 'minuteMax', 'Integer', '59', '');
	$options[] = new Option('minuteGrid', 'minuteGrid', 'Integer', '0', '');
	$options[] = new Option('second', 'second', 'Integer', '0', '');
	$options[] = new Option('secondMin', 'secondMin', 'Integer', '0', '');
	$options[] = new Option('secondMax', 'secondMax', 'Integer', '59', '');
	$options[] = new Option('secondGrid', 'secondGrid', 'Integer', '0', '');
	$options[] = new Option('millisec', 'millisec', 'Integer', '0', '');
	$options[] = new Option('millisecMin', 'millisecMin', 'Integer', '0', '');
	$options[] = new Option('millisecMax', 'millisecMax', 'Integer', '999', '');
	$options[] = new Option('millisecGrid', 'millisecGrid', 'Integer', '0', '');
	$options[] = new Option('showButtonPanel', 'showButtonPanel', 'Boolean', 'True', '');
	$options[] = new Option('showHour', 'showHour', 'Boolean', 'True', '');
	$options[] = new Option('showMinute', 'showMinute', 'Boolean', 'True', '');
	$options[] = new Option('showSecond', 'showSecond', 'Boolean', 'False', '');
	$options[] = new Option('showMillisec', 'showMillisec', 'Boolean', 'False', '');
	$options[] = new Option('showTimezone', 'showTimezone', 'Boolean', 'True', '');
	$options[] = new Option('showTime', 'showTime', 'Boolean', 'True', '');
	$options[] = new Option('stepHour', 'stepHour', 'Number', '1', '');
	$options[] = new Option('stepMinute', 'stepMinute', 'Number', '1', '');
	$options[] = new Option('stepSecond', 'stepSecond', 'Number', '1', '');
	$options[] = new Option('stepMillisec', 'stepMillisec', 'Number', '1', '');
	$options[] = new Option('jqTimeFormat', 'timeFormat', 'String', 'hh:mm tt', '');
	$options[] = new Option('timeOnly', 'timeOnly', 'Boolean', 'False', '');
	$options[] = new Option('separator', 'separator', 'String', ' ', '');
	$options[] = new Option('altFieldTimeOnly', 'altFieldTimeOnly', 'Boolean', 'True', '');
	$options[] = new Option('showTimepicker', 'showTimepicker', 'Boolean', 'True', '');
	$options[] = new Option('timezone', 'timezone', 'String', '+0000', '');
	$options[] = new Option('timezoneIso8609', 'timezoneIso8609', 'Boolean', 'False', '');
	$options[] = new Option('timezoneList', 'timezoneList', 'array', 'null', '');
	$options[] = new Option('addSliderAccess', 'addSliderAccess', 'Boolean', 'False', '');
	$options[] = new Option('sliderAccessArgs', 'sliderAccessArgs', 'object', 'null', '');

	$options[] = new Event('QJqDateTimePicker', 'beforeShow', 'beforeShow', 'function(i, dp_inst, tp_inst)', 'null', '');
	$options[] = new Event('QJqDateTimePicker', 'onChangeMonthYear', 'onChangeMonthYear', 'function(i,year,month,dp_inst,tp_inst)', 'null', '');
	$options[] = new Event('QJqDateTimePicker', 'onClose', 'onClose', 'function(i,dateText,dp_inst,tp_inst)', 'null', '');

	$objJqDoc->options = $options;
	$jqControlGen->GenerateControl($objJqDoc);
}

jq_datetimepicker_gen();

?>
 
