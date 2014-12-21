<?php

include_once('simple_html_dom.php');

$html = file_get_html('http://trentrichardson.com/examples/timepicker/#tp_options');
$htmlOptions = $html->find('div[id=tp-options] dt');
foreach ($htmlOptions as $htmlOption) {
	$optionName = $htmlOption->plaintext;
	$propName = $optionName === 'timeFormat' ? 'jqTimeFormat' : $optionName;
	$desc = str_replace("'", "\\'", $htmlOption->next_sibling()->plaintext);
	if (strpos($desc, 'Default: true') === 0) {
		echo "\$options[] = new Option('$propName', '$optionName', 'Boolean', 'True', '$desc');\n";
	} else if (strpos($desc, 'Default: false') === 0) {
		echo "\$options[] = new Option('$propName', '$optionName', 'Boolean', 'False', '$desc');\n";
	} else if (strpos($optionName, 'show') === 0) {
		echo "\$options[] = new Option('$propName', '$optionName', 'Boolean', '', '$desc');\n";
	} else if (preg_match('/Default: (\d+)/', $desc, $matches)) {
		$dflt = $matches[1];
		echo "\$options[] = new Option('$propName', '$optionName', 'Integer', $dflt, '$desc');\n";
	} else if (preg_match('/Default: \[/', $desc, $matches)) {
		echo "\$options[] = new Option('$propName', '$optionName', 'Array', '', '$desc');\n";
	} else {
		echo "\$options[] = new Option('$propName', '$optionName', 'String', '', '$desc');\n";
	}
}
