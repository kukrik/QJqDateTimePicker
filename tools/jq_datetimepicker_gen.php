<?php
require('jq_control.php');

function jq_datetimepicker_gen() {
	$jqControlGen = new JqControlGen();
	$objJqDoc = new JqDoc(null, 'datetimepicker', 'QJqDateTimePicker', 'QDatepickerBox');
	$options = array();

	$options[] = new Option('currentText', 'currentText', 'String', '', 'Default: "Now", A Localization Setting - Text for the Now button.');
	$options[] = new Option('closeText', 'closeText', 'String', '', 'Default: "Done", A Localization Setting - Text for the Close button.');
	$options[] = new Option('amNames', 'amNames', 'Array', '', 'Default: [\'AM\', \'A\'], A Localization Setting - Array of strings to try and parse against to determine AM.');
	$options[] = new Option('pmNames', 'pmNames', 'Array', '', 'Default: [\'PM\', \'P\'], A Localization Setting - Array of strings to try and parse against to determine PM.');
	$options[] = new Option('jqTimeFormat', 'timeFormat', 'String', '', 'Default: "HH:mm", A Localization Setting - String of format tokens to be replaced with the time. See Formatting.');
	$options[] = new Option('timeSuffix', 'timeSuffix', 'String', '', 'Default: "", A Localization Setting - String to place after the formatted time.');
	$options[] = new Option('timeOnlyTitle', 'timeOnlyTitle', 'String', '', 'Default: "Choose Time", A Localization Setting - Title of the wigit when using only timepicker.');
	$options[] = new Option('timeText', 'timeText', 'String', '', 'Default: "Time", A Localization Setting - Label used within timepicker for the formatted time.');
	$options[] = new Option('hourText', 'hourText', 'String', '', 'Default: "Hour", A Localization Setting - Label used to identify the hour slider.');
	$options[] = new Option('minuteText', 'minuteText', 'String', '', 'Default: "Minute", A Localization Setting - Label used to identify the minute slider.');
	$options[] = new Option('secondText', 'secondText', 'String', '', 'Default: "Second", A Localization Setting - Label used to identify the second slider.');
	$options[] = new Option('millisecText', 'millisecText', 'String', '', 'Default: "Millisecond", A Localization Setting - Label used to identify the millisecond slider.');
	$options[] = new Option('microsecText', 'microsecText', 'String', '', 'Default: "Microsecond", A Localization Setting - Label used to identify the microsecond slider.');
	$options[] = new Option('timezoneText', 'timezoneText', 'String', '', 'Default: "Timezone", A Localization Setting - Label used to identify the timezone slider.');
	$options[] = new Option('isRTL', 'isRTL', 'Boolean', 'False', 'Default: false, A Localization Setting - Right to Left support.');
	$options[] = new Option('altFieldTimeOnly', 'altFieldTimeOnly', 'Boolean', 'True', 'Default: true - When altField is used from datepicker altField will only receive the formatted time and the original field only receives date.');
	$options[] = new Option('altSeparator', 'altSeparator', 'String', '', 'Default: (separator option) - String placed between formatted date and formatted time in the altField.');
	$options[] = new Option('altTimeSuffix', 'altTimeSuffix', 'String', '', 'Default: (timeSuffix option) - String always placed after the formatted time in the altField.');
	$options[] = new Option('altTimeFormat', 'altTimeFormat', 'String', '', 'Default: (timeFormat option) - The time format to use with the altField.');
	$options[] = new Option('altRedirectFocus', 'altRedirectFocus', 'Boolean', 'True', 'Default: true - Whether to immediately focus the main field whenever the altField receives focus. Effective at construction time only, changing it later has no effect.');
	$options[] = new Option('timezoneList', 'timezoneList', 'Array', '', 'Default: [generated timezones] - An array of timezones used to populate the timezone select. Can be an array of values or an array of objects: { label: "EDT", value: -240 }.  The value should be the offset number in minutes.  So "-0400" which is the format "-hhmm", would equate to -240 minutes.');
	$options[] = new Option('controlType', 'controlType', 'String', '', 'Default: \'slider\' - Whether to use \'slider\' or \'select\'. If \'slider\' is unavailable through jQueryUI, \'select\' will be used. For advanced usage you may pass an object which implements "create", "options", "value" methods to use controls other than sliders or selects.  See the _controls property in the source code for more details.  {  	create: function(tp_inst, obj, unit, val, min, max, step){	  		// generate whatever controls you want here, just return obj  	},  	options: function(tp_inst, obj, unit, opts, val){  		// if val==undefined return the value, else return obj  	},  	value: function(tp_inst, obj, unit, val){  		// if val==undefined return the value, else return obj  	}  }  			');
	$options[] = new Option('showHour', 'showHour', 'Boolean', '', 'Default: null - Whether to show the hour control.  The default of null will use detection from timeFormat.');
	$options[] = new Option('showMinute', 'showMinute', 'Boolean', '', 'Default: null - Whether to show the minute control.  The default of null will use detection from timeFormat.');
	$options[] = new Option('showSecond', 'showSecond', 'Boolean', '', 'Default: null - Whether to show the second control.  The default of null will use detection from timeFormat.');
	$options[] = new Option('showMillisec', 'showMillisec', 'Boolean', '', 'Default: null - Whether to show the millisecond control.  The default of null will use detection from timeFormat.');
	$options[] = new Option('showMicrosec', 'showMicrosec', 'Boolean', '', 'Default: null - Whether to show the microsecond control.  The default of null will use detection from timeFormat.');
	$options[] = new Option('showTimezone', 'showTimezone', 'Boolean', '', 'Default: null - Whether to show the timezone select.');
	$options[] = new Option('showTime', 'showTime', 'Boolean', 'True', 'Default: true - Whether to show the time selected within the datetimepicker.');
	$options[] = new Option('stepHour', 'stepHour', 'Integer', 1, 'Default: 1 - Hours per step the slider makes.');
	$options[] = new Option('stepMinute', 'stepMinute', 'Integer', 1, 'Default: 1 - Minutes per step the slider makes.');
	$options[] = new Option('stepSecond', 'stepSecond', 'Integer', 1, 'Default: 1 - Seconds per step the slider makes.');
	$options[] = new Option('stepMillisec', 'stepMillisec', 'Integer', 1, 'Default: 1 - Milliseconds per step the slider makes.');
	$options[] = new Option('stepMicrosec', 'stepMicrosec', 'Integer', 1, 'Default: 1 - Microseconds per step the slider makes.');
	$options[] = new Option('hour', 'hour', 'Integer', 0, 'Default: 0 - Initial hour set.');
	$options[] = new Option('minute', 'minute', 'Integer', 0, 'Default: 0 - Initial minute set.');
	$options[] = new Option('second', 'second', 'Integer', 0, 'Default: 0 - Initial second set.');
	$options[] = new Option('millisec', 'millisec', 'Integer', 0, 'Default: 0 - Initial millisecond set.');
	$options[] = new Option('microsec', 'microsec', 'Integer', 0, 'Default: 0 - Initial microsecond set.  Note: Javascript\'s native Date object does not natively support microseconds.  Timepicker adds ability to simply Date.setMicroseconds(m) and Date.getMicroseconds().  Date comparisons will not acknowledge microseconds.  Use this only for display purposes.');
	$options[] = new Option('timezone', 'timezone', 'String', '', 'Default: null - Initial timezone set.  This is the offset in minutes.  If null the browser\'s local timezone will be used.  If you\'re timezone is "-0400" you would use -240.  For backwards compatibility you may pass "-0400", however the timezone is stored in minutes and more reliable.');
	$options[] = new Option('hourMin', 'hourMin', 'Integer', 0, 'Default: 0 - The minimum hour allowed for all dates.');
	$options[] = new Option('minuteMin', 'minuteMin', 'Integer', 0, 'Default: 0 - The minimum minute allowed for all dates.');
	$options[] = new Option('secondMin', 'secondMin', 'Integer', 0, 'Default: 0 - The minimum second allowed for all dates.');
	$options[] = new Option('millisecMin', 'millisecMin', 'Integer', 0, 'Default: 0 - The minimum millisecond allowed for all dates.');
	$options[] = new Option('microsecMin', 'microsecMin', 'Integer', 0, 'Default: 0 - The minimum microsecond allowed for all dates.');
	$options[] = new Option('hourMax', 'hourMax', 'Integer', 23, 'Default: 23 - The maximum hour allowed for all dates.');
	$options[] = new Option('minuteMax', 'minuteMax', 'Integer', 59, 'Default: 59 - The maximum minute allowed for all dates.');
	$options[] = new Option('secondMax', 'secondMax', 'Integer', 59, 'Default: 59 - The maximum second allowed for all dates.');
	$options[] = new Option('millisecMax', 'millisecMax', 'Integer', 999, 'Default: 999 - The maximum millisecond allowed for all dates.');
	$options[] = new Option('microsecMax', 'microsecMax', 'Integer', 999, 'Default: 999 - The maximum microsecond allowed for all dates.');
	$options[] = new Option('hourGrid', 'hourGrid', 'Integer', 0, 'Default: 0 - When greater than 0 a label grid will be generated under the slider.  This number represents the units (in hours) between labels.');
	$options[] = new Option('minuteGrid', 'minuteGrid', 'Integer', 0, 'Default: 0 - When greater than 0 a label grid will be generated under the slider.  This number represents the units (in minutes) between labels.');
	$options[] = new Option('secondGrid', 'secondGrid', 'Integer', 0, 'Default: 0 - When greater than 0 a label grid will be genereated under the slider.  This number represents the units (in seconds) between labels.');
	$options[] = new Option('millisecGrid', 'millisecGrid', 'Integer', 0, 'Default: 0 - When greater than 0 a label grid will be genereated under the slider.  This number represents the units (in milliseconds) between labels.');
	$options[] = new Option('microsecGrid', 'microsecGrid', 'Integer', 0, 'Default: 0 - When greater than 0 a label grid will be genereated under the slider.  This number represents the units (in microseconds) between labels.');
	$options[] = new Option('showButtonPanel', 'showButtonPanel', 'Boolean', 'True', 'Default: true - Whether to show the button panel at the bottom.  This is generally needed.');
	$options[] = new Option('timeOnly', 'timeOnly', 'Boolean', 'False', 'Default: false - Hide the datepicker and only provide a time interface.');
	$options[] = new Option('timeOnlyShowDate', 'timeOnlyShowDate', 'Boolean', 'False', 'Default: false - Show the date and time in the input, but only allow the timepicker.');
	$options[] = new Option('onSelect', 'onSelect', 'String', '', 'Default: null - Function to be called when a date is chosen or time has changed (parameters: datetimeText, datepickerInstance).');
	$options[] = new Option('alwaysSetTime', 'alwaysSetTime', 'Boolean', 'True', 'Default: true - Always have a time set internally, even before user has chosen one.');
	$options[] = new Option('separator', 'separator', 'String', '', 'Default: " " - When formatting the time this string is placed between the formatted date and formatted time.');
	$options[] = new Option('pickerTimeFormat', 'pickerTimeFormat', 'String', '', 'Default: (timeFormat option) - How to format the time displayed within the timepicker.');
	$options[] = new Option('pickerTimeSuffix', 'pickerTimeSuffix', 'String', '', 'Default: (timeSuffix option) - String to place after the formatted time within the timepicker.');
	$options[] = new Option('showTimepicker', 'showTimepicker', 'Boolean', 'True', 'Default: true - Whether to show the timepicker within the datepicker.');
	$options[] = new Option('addSliderAccess', 'addSliderAccess', 'Boolean', 'False', 'Default: false - Adds the sliderAccess plugin to sliders within timepicker');
	$options[] = new Option('sliderAccessArgs', 'sliderAccessArgs', 'String', '', 'Default: null - Object to pass to sliderAccess when used.');
	$options[] = new Option('defaultValue', 'defaultValue', 'String', '', 'Default: null - String of the default time value placed in the input on focus when the input is empty.');
	$options[] = new Option('minDateTime', 'minDateTime', 'String', '', 'Default: null - Date object of the minimum datetime allowed.  Also available as minDate.');
	$options[] = new Option('maxDateTime', 'maxDateTime', 'String', '', 'Default: null - Date object of the maximum datetime allowed. Also Available as maxDate.');
	$options[] = new Option('minTime', 'minTime', 'String', '', 'Default: null - String of the minimum time allowed. \'8:00 am\' will restrict to times after 8am');
	$options[] = new Option('maxTime', 'maxTime', 'String', '', 'Default: null - String of the maximum time allowed. \'8:00 pm\' will restrict to times before 8pm');
	$options[] = new Option('parse', 'parse', 'String', '', 'Default: \'strict\' - How to parse the time string.  Two methods are provided: \'strict\' which must match the timeFormat exactly, and \'loose\' which uses javascript\'s new Date(timeString) to guess the time.  You may also pass in a function(timeFormat, timeString, options) to handle the parsing yourself, returning a simple object:   {  	hour: 19,  	minute: 10,  	second: 23,  	millisec: 45,  	microsec: 23,  	timezone: \'-0400\'  }  			');

	$options[] = new Event('QJqDateTimePicker', 'beforeShow', 'beforeShow', 'function(i, dp_inst, tp_inst)', 'null', '');
	$options[] = new Event('QJqDateTimePicker', 'onChangeMonthYear', 'onChangeMonthYear', 'function(i,year,month,dp_inst,tp_inst)', 'null', '');
	$options[] = new Event('QJqDateTimePicker', 'onClose', 'onClose', 'function(i,dateText,dp_inst,tp_inst)', 'null', '');

	$objJqDoc->options = $options;
	$jqControlGen->GenerateControl($objJqDoc);
}

jq_datetimepicker_gen();

?>
 
