<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/ico" href="http://www.sprymedia.co.uk/media/images/favicon.ico" />
		
		<title>DataTables example</title>
		<style>
					#dt_example {
					    background-color: #FFFFFF;
					    color: #333333;
					    font: 80%/1.45em "Lucida Grande",Verdana,Arial,Helvetica,sans-serif;
					    margin: 0;
					    padding: 0;
					}
					#dt_example #container {
					    margin: 30px auto;
					    padding: 0;
					    width: 800px;
					}
					#dt_example #footer {
					    margin: 50px auto 0;
					    padding: 0;
					}
					#dt_example #demo {
					    margin: 30px auto 0;
					}
					#dt_example .demo_jui {
					    margin: 30px auto 0;
					}
					#dt_example .big {
					    color: #4E6CA3;
					    font-size: 1.3em;
					    font-weight: bold;
					    line-height: 1.6em;
					}
					#dt_example .spacer {
					    clear: both;
					    height: 20px;
					}
					#dt_example .clear {
					    clear: both;
					}
					#dt_example pre {
					    background-color: #F5F5F5;
					    border: 1px solid #CCCCCC;
					    padding: 15px;
					}
					#dt_example h1 {
					    border-bottom: 1px solid #B0BED9;
					    clear: both;
					    color: #4E6CA3;
					    font-size: 1.3em;
					    font-weight: normal;
					    line-height: 1.6em;
					    margin-top: 2em;
					}
					#dt_example h2 {
					    clear: both;
					    color: #4E6CA3;
					    font-size: 1.2em;
					    font-weight: normal;
					    line-height: 1.6em;
					}
					#dt_example a {
					    color: #0063DC;
					    text-decoration: none;
					}
					#dt_example a:hover {
					    text-decoration: underline;
					}
					#dt_example ul {
					    color: #4E6CA3;
					}
					.css_right {
					    float: right;
					}
					.css_left {
					    float: left;
					}
					.demo_links {
					    float: left;
					    margin-bottom: 1em;
					    width: 50%;
					}
					/*********************************************************/
					.dataTables_wrapper {
					    clear: both;
					    min-height: 302px;
					    position: relative;
					}
					.dataTables_processing {
					    background-color: white;
					    border: 1px solid #DDDDDD;
					    color: #999999;
					    font-size: 14px;
					    height: 30px;
					    left: 50%;
					    margin-left: -125px;
					    margin-top: -15px;
					    padding: 14px 0 2px;
					    position: absolute;
					    text-align: center;
					    top: 50%;
					    width: 250px;
					}
					.dataTables_length {
					    float: left;
					    width: 40%;
					}
					.dataTables_filter {
					    float: right;
					    text-align: right;
					    width: 50%;
					}
					.dataTables_info {
					    float: left;
					    width: 60%;
					}
					.dataTables_paginate {
					    float: right;
					    text-align: right;
					    width: 44px;
					}
					.paginate_disabled_previous, .paginate_enabled_previous, .paginate_disabled_next, .paginate_enabled_next {
					    float: left;
					    height: 19px;
					    margin-left: 3px;
					    width: 19px;
					}
					.paginate_disabled_previous {
					    background-image: url("../images/back_disabled.jpg");
					}
					.paginate_enabled_previous {
					    background-image: url("../images/back_enabled.jpg");
					}
					.paginate_disabled_next {
					    background-image: url("../images/forward_disabled.jpg");
					}
					.paginate_enabled_next {
					    background-image: url("../images/forward_enabled.jpg");
					}
					table.display {
					    clear: both;
					    margin: 0 auto;
					    width: 100%;
					}
					table.display thead th {
					    border-bottom: 1px solid black;
					    cursor: pointer;
					    font-weight: bold;
					    padding: 3px 18px 3px 10px;
					}
					table.display tfoot th {
					    border-top: 1px solid black;
					    font-weight: bold;
					    padding: 3px 18px 3px 10px;
					}
					table.display tr.heading2 td {
					    border-bottom: 1px solid #AAAAAA;
					}
					table.display td {
					    padding: 3px 10px;
					}
					table.display td.center {
					    text-align: center;
					}
					.sorting_asc {
					    background: url("../images/sort_asc.png") no-repeat scroll right center transparent;
					}
					.sorting_desc {
					    background: url("../images/sort_desc.png") no-repeat scroll right center transparent;
					}
					.sorting {
					    background: url("../images/sort_both.png") no-repeat scroll right center transparent;
					}
					.sorting_asc_disabled {
					    background: url("../images/sort_asc_disabled.png") no-repeat scroll right center transparent;
					}
					.sorting_desc_disabled {
					    background: url("../images/sort_desc_disabled.png") no-repeat scroll right center transparent;
					}
					table.display tr.odd.gradeA {
					    background-color: #DDFFDD;
					}
					table.display tr.even.gradeA {
					    background-color: #EEFFEE;
					}
					table.display tr.odd.gradeC {
					    background-color: #DDDDFF;
					}
					table.display tr.even.gradeC {
					    background-color: #EEEEFF;
					}
					table.display tr.odd.gradeX {
					    background-color: #FFDDDD;
					}
					table.display tr.even.gradeX {
					    background-color: #FFEEEE;
					}
					table.display tr.odd.gradeU {
					    background-color: #DDDDDD;
					}
					table.display tr.even.gradeU {
					    background-color: #EEEEEE;
					}
					tr.odd {
					    background-color: #E2E4FF;
					}
					tr.even {
					    background-color: white;
					}
					.dataTables_scroll {
					    clear: both;
					}
					.dataTables_scrollBody {
					}
					.top, .bottom {
					    background-color: #F5F5F5;
					    border: 1px solid #CCCCCC;
					    padding: 15px;
					}
					.top .dataTables_info {
					    float: none;
					}
					.clear {
					    clear: both;
					}
					.dataTables_empty {
					    text-align: center;
					}
					tfoot input {
					    color: #444444;
					    margin: 0.5em 0;
					    width: 100%;
					}
					tfoot input.search_init {
					    color: #999999;
					}
					td.group {
					    background-color: #D1CFD0;
					    border-bottom: 2px solid #A19B9E;
					    border-top: 2px solid #A19B9E;
					}
					td.details {
					    background-color: #D1CFD0;
					    border: 2px solid #A19B9E;
					}
					.example_alt_pagination div.dataTables_info {
					    width: 40%;
					}
					.paging_full_numbers {
					    height: 22px;
					    line-height: 22px;
					    width: 400px;
					}
					.paging_full_numbers span.paginate_button, .paging_full_numbers span.paginate_active {
					    border: 1px solid #AAAAAA;
					    border-radius: 5px 5px 5px 5px;
					    cursor: pointer;
					    margin: 0 3px;
					    padding: 2px 5px;
					}
					.paging_full_numbers span.paginate_button {
					    background-color: #DDDDDD;
					}
					.paging_full_numbers span.paginate_button:hover {
					    background-color: #CCCCCC;
					}
					.paging_full_numbers span.paginate_active {
					    background-color: #99B3FF;
					}
					table.display tr.even.row_selected td {demo
					    background-color: #B0BED9;
					}
					table.display tr.odd.row_selected td {
					    background-color: #9FAFD1;
					}
					tr.odd td.sorting_1 {
					    background-color: #D3D6FF;
					}
					tr.odd td.sorting_2 {
					    background-color: #DADCFF;
					}
					tr.odd td.sorting_3 {
					    background-color: #E0E2FF;
					}
					tr.even td.sorting_1 {
					    background-color: #EAEBFF;
					}
					tr.even td.sorting_2 {
					    background-color: #F2F3FF;
					}
					tr.even td.sorting_3 {
					    background-color: #F9F9FF;
					}
					tr.odd.gradeA td.sorting_1 {
					    background-color: #C4FFC4;
					}
					tr.odd.gradeA td.sorting_2 {
					    background-color: #D1FFD1;
					}
					tr.odd.gradeA td.sorting_3 {
					    background-color: #D1FFD1;
					}
					tr.even.gradeA td.sorting_1 {
					    background-color: #D5FFD5;
					}
					tr.even.gradeA td.sorting_2 {
					    background-color: #E2FFE2;
					}
					tr.even.gradeA td.sorting_3 {
					    background-color: #E2FFE2;
					}
					tr.odd.gradeC td.sorting_1 {
					    background-color: #C4C4FF;
					}
					tr.odd.gradeC td.sorting_2 {
					    background-color: #D1D1FF;
					}
					tr.odd.gradeC td.sorting_3 {
					    background-color: #D1D1FF;
					}
					tr.even.gradeC td.sorting_1 {
					    background-color: #D5D5FF;
					}
					tr.even.gradeC td.sorting_2 {
					    background-color: #E2E2FF;
					}
					tr.even.gradeC td.sorting_3 {
					    background-color: #E2E2FF;
					}
					tr.odd.gradeX td.sorting_1 {
					    background-color: #FFC4C4;
					}
					tr.odd.gradeX td.sorting_2 {
					    background-color: #FFD1D1;
					}
					tr.odd.gradeX td.sorting_3 {
					    background-color: #FFD1D1;
					}
					tr.even.gradeX td.sorting_1 {
					    background-color: #FFD5D5;
					}
					tr.even.gradeX td.sorting_2 {
					    background-color: #FFE2E2;
					}
					tr.even.gradeX td.sorting_3 {
					    background-color: #FFE2E2;
					}
					tr.odd.gradeU td.sorting_1 {
					    background-color: #C4C4C4;
					}
					tr.odd.gradeU td.sorting_2 {
					    background-color: #D1D1D1;
					}
					tr.odd.gradeU td.sorting_3 {
					    background-color: #D1D1D1;
					}
					tr.even.gradeU td.sorting_1 {
					    background-color: #D5D5D5;
					}
					tr.even.gradeU td.sorting_2 {
					    background-color: #E2E2E2;
					}
					tr.even.gradeU td.sorting_3 {
					    background-color: #E2E2E2;
					}
					.ex_highlight #example tbody tr.even:hover, #example tbody tr.even td.highlighted {
					    background-color: #ECFFB3;
					}
					.ex_highlight #example tbody tr.odd:hover, #example tbody tr.odd td.highlighted {
					    background-color: #E6FF99;
					}
					.ex_highlight_row #example tr.even:hover {
					    background-color: #ECFFB3;
					}
					.ex_highlight_row #example tr.even:hover td.sorting_1 {
					    background-color: #DDFF75;
					}
					.ex_highlight_row #example tr.even:hover td.sorting_2 {
					    background-color: #E7FF9E;
					}
					.ex_highlight_row #example tr.even:hover td.sorting_3 {
					    background-color: #E2FF89;
					}
					.ex_highlight_row #example tr.odd:hover {
					    background-color: #E6FF99;
					}
					.ex_highlight_row #example tr.odd:hover td.sorting_1 {
					    background-color: #D6FF5C;
					}
					.ex_highlight_row #example tr.odd:hover td.sorting_2 {
					    background-color: #E0FF84;
					}
					.ex_highlight_row #example tr.odd:hover td.sorting_3 {
					    background-color: #DBFF70;
					}
					table.KeyTable td {
					    border: 3px solid transparent;
					}
					table.KeyTable td.focus {
					    border: 3px solid #3366FF;
					}
					table.display tr.gradeA {
					    background-color: #EEFFEE;
					}
					table.display tr.gradeC {
					    background-color: #DDDDFF;
					}
					table.display tr.gradeX {
					    background-color: #FFDDDD;
					}
					table.display tr.gradeU {
					    background-color: #DDDDDD;
					}
					div.box {
					    background-color: #E5E5FF;
					    border: 1px solid #8080FF;
					    height: 100px;
					    overflow: auto;
					    padding: 10px;
					}
		</style>
		<script type="text/javascript" language="javascript" src="/test/js/jquery.js"></script>

		<script type="text/javascript" language="javascript" src="/test/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			/* Global var for counter */
			var giCount = 1;
			
			$(document).ready(function() {
				$('#example').dataTable();
			} );
			
			function fnClickAddRow() {
				$('#example').dataTable().fnAddData( [
					giCount+".1",
					giCount+".2",
					giCount+".3",
					giCount+".4" ] );
				
				giCount++;
			}
		</script>
	</head>
	<body id="dt_example">
		<div id="container">
			<div class="full_width big">
				<i>DataTables</i> add row example
			</div>

			<h1>Preamble</h1>
			<p><i>DataTables</i> adding rows in DataTables is done by assigning the DataTables jQuery object to a variable when initialising it, and then using it's API methods to add a new row. Deleting rows can be done in a similar manner.</p>
			
			<h1>Live example</h1>
			<p><a href="javascript:void(0);" onclick="fnClickAddRow();">Click to add a new row</a></p>
			
			<div id="demo">

<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>Column 1</th>
			<th>Column 2</th>
			<th>Column 3</th>
			<th>Column 4</th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td>allan</td>
			<td>allan</td>
			<td>allan</td>

			<td>allan</td>
		</tr>
	</tbody>
</table>
			</div>
			<div class="spacer"></div>
			
			
			<h1>Initialisation code</h1>
			<pre>/* Global var for counter */
var giCount = 1;

$(document).ready(function() {
	$('#example').dataTable();
} );

function fnClickAddRow() {
	$('#example').dataTable().fnAddData( [
		giCount+".1",
		giCount+".2",
		giCount+".3",
		giCount+".4" ] );
	
	giCount++;
}</pre>

			
			
			<h1>Other examples</h1>
			<h2>Basic initialisation</h2>
			<ul>
				<li><a href="../basic_init/zero_config.html">Zero configuration</a></li>
				<li><a href="../basic_init/filter_only.html">Feature enablement</a></li>
				<li><a href="../basic_init/table_sorting.html">Sorting data</a></li>

				<li><a href="../basic_init/multi_col_sort.html">Multi-column sorting</a></li>
				<li><a href="../basic_init/multiple_tables.html">Multiple tables</a></li>
				<li><a href="../basic_init/hidden_columns.html">Hidden columns</a></li>
				<li><a href="../basic_init/dom.html">DOM positioning</a></li>
				<li><a href="../basic_init/state_save.html">State saving</a></li>
				<li><a href="../basic_init/alt_pagination.html">Alternative pagination styles</a></li>

				<li>Scrolling: 
					<a href="../basic_init/scroll_x.html">Horizontal</a> / 
					<a href="../basic_init/scroll_y.html">Vertical</a> / 
					<a href="../basic_init/scroll_xy.html">Both</a> / 
					<a href="../basic_init/scroll_y_theme.html">Themed</a>
				</li>
				<li><a href="../basic_init/language.html">Change language information (internationalisation)</a></li>

				<li><a href="../basic_init/themes.html">ThemeRoller themes (Smoothness)</a></li>
			</ul>
			
			<h2>Advanced initialisation</h2>
			<ul>
				<li><a href="../advanced_init/events_pre_init.html">Events (pre initialisation)</a></li>
				<li><a href="../advanced_init/events_post_init.html">Events (post initialisation)</a></li>
				<li><a href="../advanced_init/column_render.html">Column rendering</a></li>

				<li><a href="../advanced_init/html_sort.html">Sorting without HTML tags</a></li>
				<li><a href="../advanced_init/dom_multiple_elements.html">Multiple table controls (sDom)</a></li>
				<li><a href="../advanced_init/length_menu.html">Defining length menu options</a></li>
				<li><a href="../advanced_init/dom_toolbar.html">Custom toolbar (element) around table</a></li>
				<li><a href="../advanced_init/highlight.html">Row highlighting with CSS</a></li>
				<li><a href="../advanced_init/complex_header.html">Column grouping through col/row spans</a></li>

				<li><a href="../advanced_init/row_grouping.html">Row grouping</a></li>
				<li><a href="../advanced_init/row_callback.html">Row callback</a></li>
				<li><a href="../advanced_init/footer_callback.html">Footer callback</a></li>
				<li><a href="../advanced_init/language_file.html">Change language information from a file (internationalisation)</a></li>
			</ul>
			
			<h2>Data sources</h2>

			<ul>
				<li><a href="../data_sources/dom.html">DOM</a></li>
				<li><a href="../data_sources/js_array.html">Javascript array</a></li>
				<li><a href="../data_sources/ajax.html">Ajax source</a></li>
				<li><a href="../data_sources/server_side.html">Server side processing</a></li>
			</ul>
			
			<h2>Server-side processing</h2>

			<ul>
				<li><a href="../server_side/server_side.html">Obtain server-side data</a></li>
				<li><a href="../server_side/custom_vars.html">Add extra HTTP variables</a></li>
				<li><a href="../server_side/post.html">Use HTTP POST</a></li>
				<li><a href="../server_side/column_ordering.html">Custom column ordering (in callback data)</a></li>
				<li><a href="../server_side/pipeline.html">Pipelining data (reduce Ajax calls for paging)</a></li>

				<li><a href="../server_side/row_details.html">Show and hide details about a particular record</a></li>
				<li><a href="../server_side/select_rows.html">User selectable rows (multiple rows)</a></li>
			</ul>
			
			<h2>API</h2>
			<ul>
				<li><a href="../api/add_row.html">Dynamically add a new row</a></li>
				<li><a href="../api/multi_filter.html">Individual column filtering (using "input" elements)</a></li>

				<li><a href="../api/multi_filter_select.html">Individual column filtering (using "select" elements)</a></li>
				<li><a href="../api/highlight.html">Highlight rows and columns</a></li>
				<li><a href="../api/row_details.html">Show and hide details about a particular record</a></li>
				<li><a href="../api/select_row.html">User selectable rows (multiple rows)</a></li>
				<li><a href="../api/select_single_row.html">User selectable rows (single row) and delete rows</a></li>
				<li><a href="../api/editable.html">Editable rows (with jEditable)</a></li>

				<li><a href="../api/form.html">Submit form with elements in table</a></li>
				<li><a href="../api/counter_column.html">Index column (static number column)</a></li>
				<li><a href="../api/show_hide.html">Show and hide columns dynamically</a></li>
				<li><a href="../api/api_in_init.html">API function use in initialisation object (callback)</a></li>
				<li><a href="../api/tabs_and_scrolling.html">DataTables scrolling and tabs</a></li>
				<li><a href="../api/regex.html">Regular expression filtering</a></li>

			</ul>
			
			<h2>Plug-ins</h2>
			<ul>
				<li><a href="../plug-ins/plugin_api.html">Add custom API functions</a></li>
				<li><a href="../plug-ins/sorting_plugin.html">Sorting and type detection</a></li>
				<li><a href="../plug-ins/paging_plugin.html">Custom pagination controls</a></li>
				<li><a href="../plug-ins/range_filtering.html">Range filtering / custom filtering</a></li>

				<li><a href="../plug-ins/dom_sort.html">Live DOM sorting</a></li>
				<li><a href="../plug-ins/html_sort.html">Automatic HTML type detection</a></li>
			</ul>
			
			
			<p>Please refer to the <a href="http://www.datatables.net/"><i>DataTables</i> documentation</a> for full information about its API properties and methods.</p>
			
			
			<div id="footer" style="text-align:center;">

				<span style="font-size:10px;">DataTables &copy; Allan Jardine 2008-2010</span>
			</div>
		</div>
	</body>
</html>