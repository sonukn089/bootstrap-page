<!DOCTYPE html>
<html>
<head lang="en">
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap.min.css"> <!-- CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--Jquery-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!--bootstrap-->

</head> <body>

	<div class="jumbotron text-center">
		<h1>My First Bootstrap Page</h1>
		<p>Resize this responsive page to see the effect!</p>
 	</div>
    <!-- xs (for phones - screens less than 768px wide) -->
    <!-- sm (for tablets - screens equal to or greater than 768px wide) -->
    <!-- md (for small laptops - screens equal to or greater than 992px wide) -->
    <!-- lg (for laptops and desktops - screens equal to or greater than 1200px wide) -->
 	<div class="container" style="background-color: lightblue;">
		<div class="row">
			<div class="col-sm-3">
				<h3>Column 1</h3>
				<p>Lorem ipsum dolor..</p>
				<p>Ut enim ad..</p>
			</div>
			<div class="col-sm-3">
				<h3>Column 2</h3>	
				<p>Lorem ipsum dolor..</p>
				<p>Ut enim ad..</p>
			</div>
			<div class="col-sm-3">
				<h3>Column 3</h3>
				<p>Lorem ipsum dolor..</p>
				<p>Ut enim ad..</p>
			</div>
			<div class="col-sm-3">
				<h3>Column 3</h3>
				<p>Lorem ipsum dolor..</p>
				<p>Ut enim ad..</p>
			</div>
		</div>
	</div>
	<div class="container" style="background-color: lightgreen;">
  		<h1>My First Bootstrap Page</h1>
  		<p>This part is inside a .container class.</p> 
  		<p>The .container class provides a responsive fixed width container.</p>           
	</div>
	<div class="row">
		<div class="col-*-*">Sonu</div>
		<div class="col-*-*">Monu</div>	
	</div>
	<div class="row">
		<div class="col-*-*">Pushpendra Kumar</div>		
		<div class="col-*-*">Neeraj Sharma</div>		
		<div class="col-*-*">Prem Yaydav</div>		
	</div>
	<div class="row">
		<div class="col-sm-4">Sonu</div>
		<div class="col-sm-4">Monu</div>
		<div class="col-sm-4">Pushpendra</div>
	</div>
	<div class="row">
		<div class="col-sm-4">Sonu</div>
		<div class="col-sm-8">Monu</div>
	</div>
	<!-- ___________________Start Bootstrap Text/Typography__________________________ -->
	<div class="container">
		<h1>h1 Bootstrap heading</h1>
		<h2>h2 Bootstrap heading</h2>
		<h3>h3 Bootstrap heading</h3>
		<h4>h4 Bootstrap heading</h4>
		<h5>h5 Bootstrap heading</h5>
		<h6>h6 Bootstrap heading</h6>
	</div>
	<div class="container">
		<h1>Lighter, Secondary Text</h1>
		<p>The small element is used to create a lighter, secondary text in any heading:</p>
        <!-- <small> element is used to create a lighter, secondary text in any heading: -->
		<h1>h1 heading <small>secondary text</small></h1>
		<h2>h2 heading <small>secondary text</small> </h2>
		<h3>h3 heading <small>secondary text</small> </h3>
		<h4>h4 heading <small>secondary text</small> </h4>
		<h5>h5 heading <small>secondary text</small></h5>
		<h6>h6 heading <small>secondary text</small></h6>
	</div>
	<div class="container">
		<h1>Highlight Text</h1>
        <!-- Bootstrap will style the HTML <mark> element in the following way:  -->
		<p>Use the mark element to <mark>Highlight</mark>Text</p>
	</div>
	<div class="container">
		<h1>Abbreviations</h1>
		<p>The abbr element is used to mark up an abbreviation or acronym:</p>
        <!-- Bootstrap will style the HTML <abbr> element in the following way: -->
		<p>The <abbr title="Health Organization">World</abbr>was founded in 1948.</p>	
	</div>
	<div class="container">
		<h1>Blockquotes</h1>
		<p>The blockquote element is used to present content from another source:</p>
		<blockquote>
            <!-- Bootstrap will style the HTML <blockquote> element in the following way: -->
			<p>
				For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
			</p>
			<footer>From WWF's website</footer>
		</blockquote>
	</div>
	<div class="container">
		<h1>Blockquotes Reverse</h1>
		<p>The blockquote element is used to present content from another source:</p>
        <!-- o show the quote on the right, use the .blockquote-reverse class: -->
		<blockquote class="blockquote-reverse">
			<p>
				For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
			</p>
			<footer>From WWF's website</footer>
		</blockquote>
	</div>
	<div class="container">
		<h1>Description Lists</h1>    
  		<p>The dl element indicates a description list:</p>
  		<dl>
            <!-- dl- definition list  -->
  			<dt>Coffee</dt>

  			<dd>- black hot drink</dd>
            <!-- defined term  -->
  			<dt>Milk</dt>
            <!-- definition description -->
  			<dd>- white cold drink</dd>
  			<dt>Curd</dt>
  			<dd>- white cold drink</dd>
  		</dl>		
	</div>
	<div class="container">
		<h1>Code Snippets</h1>
		<p>Inline snippets of code should be embedded in the code element:</p>
		<p>The following HTML elements:<code>span</code>, <code>section</code>, and <code>div</code> defines a section in a document.</p>		
	</div>
	<div class="container">
  		<h1>Keyboard Inputs</h1>
  		<p>To indicate input that is typically entered via the keyboard, use the kbd element:</p>
  		<p>Use <kbd>ctrl +</kbd> pto open the <kbd>Print dialog</kbd>box.</p>
	</div>
	<div class="container">
		<h1>Multiple Code Lines</h1>
		<p>For multiple lines of code, use the pre element:</p>
		<pre>
			Text in a pre element is displayed in a fixed-width font, and it preserves both spaces and line breaks.
		</pre>
	</div>
	<div class="container">
		<h2>Contextual Colors</h2>
		<p>Use the contextual classes to provide "meaning through colors":</p>
        <!-- The classes for text colors are:.text-muted, .text-primary, .text-success, .text-info, .text-warning, and .text-danger -->
		<p class="text-muted">This text is muted.</p>
		<p class="text-primary">This text is important.</p>
		<p class="text-success">This text indicates success.</p>
		<p class="text-info">This text represents some information.</p>
		<p class="text-warning">This text represents a warning.</p>
		<p class="text-danger">This text represents danger.</p>	
	</div>
	<div class="container">
		<h1>Contextual Backgrounds</h1>
		<p>Use the contextual background classes to provide "meaning through colors":</p>
        <!-- The classes for background colors are:.bg-primary, .bg-success, .bg-info, .bg-warning, and .bg-danger -->
		<p class="bg-primary">This text is important.</p>
		<p class="bg-success">This text indicates success.</p>
		<p class="bg-info">This text represents some information.</p>
		<p class="bg-warning">This text represents a warning.</p>
		<p class="bg-danger">This text represents danger.</p>
	</div>
	<div class="container">
		<h2>Typography</h2>
		<p>Use the .lead class to make a paragraph "stand out":</p>
		<p class="lead">This paragraph stands out.</p> <!-- Makes a paragraph stand out -->
		<p>This is a regular paragraph.</p>
		<p>Use the .small class to make the text smaller:</p>
      	<p class="small">This paragraph is smaller.</p> <!-- Indicates smaller text (set to 85% of the size of the parent)  -->
      	<p>This is a regular paragraph.</p>  
      	<p class="text-left">Left-aligned text.</p>      <!-- Indicates left-aligned text -->
      	<p class="text-right">Right-aligned text.</p>    <!-- Indicates right-aligned text -->
      	<p class="text-center">Center-aligned text.</p>  <!-- Indicates center-aligned text -->
      	<p class="text-justify">Justified text. Justified text. Justified text. Justified text. Justified text. Justified text.</p> <!-- Indicates justified text -->
      	<p class="text-nowrap">No wrap text. No wrap text. No wrap text. No wrap text.</p> <!-- Indicates no wrap text -->
      	<p><strong>Tip :</strong> Try to resize the browser window to see the behaviour of justify and nowrap.</p>
	</div>
	<div class="container">
  		<h2>Typography</h2>
	 	<p class="text-lowercase">Lowercased text.</p> <!-- Indicates lowercased text -->
		<p class="text-uppercase">Uppercased text.</p> <!-- Indicates uppercased text -->     
		<p class="text-capitalized">Capitalized text.</p> <!-- Indicates capitalized text -->
	</div>
	<div class="container">
		<h2>Typography</h2>
  		<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948. (normal abbr)</p>      
  		<p>The <abbr title="World Health Organization" class="initialism">WHO</abbr> was founded in 1948. (slightly smaller abbr)</p>
	</div>
	<div class="container">
		<h2>Typography</h2>
		<p>The class .list-unstyled removes the default list-style and left margin on list items (immediate children only):</p>
        <!-- Removes the default list-style and left margin on list items (works on both <ul> and <ol>). This class only applies to immediate children list items (to remove the default list-style from any nested lists, apply this class to any nested lists as well) -->
		<ul class="list-unstyled">
			<li>Coffee</li>
			<li>Tea
				<ul>
					<li>Black tea</li>
					<li>Green tea</li>
				</ul>
			</li>
			<li>Milk</li>
		</ul>
	</div>
	<div class="container">
	  <h2>Typography</h2>
	  <p>The class .list-inline places all list items on a single line:</p>
	  <ul class="list-inline">  <!-- Places all list items on a single line -->
		 <li>Coffee</li>
		 <li>Tea</li>
	     <li>Milk</li>
	  </ul>
	</div>
	<div class="container">
  		<h2>Typography</h2>
  		<p>Use the .dl-horizontal class line up the description list side-by-side when the browser window expands:</p>
 		 <dl class="dl-horizontal">
    		<dt>Coffee</dt>
    		<dd>- black hot drink</dd>
    		<dt>Milk</dt>
    		<dd>- white cold drink</dd>
 		 </dl>     
        <p><strong>Tip:</strong> Try to resize the browser window to see the behaviour of the description list.</p>      
    </div>
    <div class="container">
  		<h2>Code</h2>    
  		<p>For multiple lines of code, use the pre element:</p>
  		<pre>Text in a pre element
  			is displayed in a fixed-width
			font, and it preserves
  			both      spaces and
  			line breaks.
  		</pre>
  		<p>If you add the .pre-scrollable class, the pre element gets a max-height of 350px and provides a y-axis scrollbar:</p>
        <!-- Makes a <pre> element scrollable -->
  		<pre class="pre-scrollable">Text in a pre element
  		 is displayed in a fixed-width
  		 font, and it preserves
  		 both      spaces and
  		 line breaks.
  	    </pre>
    </div>
    <!-- __________________End Bootstrap Text/Typography____________________________-->

    <!-- __________________Bootstrap Start Basic Table_____________________ -->
    <div class="container">
    	<h2>Basic Table</h2>
    	<p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    	<table class="table">  <!-- class adds basic styling to a table: -->
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
				</tr>
			</thead> 
			<tbody>
				<tr>
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>
				<tr>
					<td>Mary</td>
					<td>Moe</td>
					<td>mary@example.com</td>
				</tr>
				<tr>
					<td>July</td>
					<td>Dooley</td>
					<td>july@example.com</td>
				</tr>
			</tbody>   		
    	</table>
    </div>
    <div class="container">
    	<h2>Striped Rows</h2>
  		<p>The .table-striped class adds zebra-stripes to a table:</p>
    	<table class="table table-striped"> <!-- class adds zebra-stripes to a table: -->
	    	<thead>
	    		<th>Firstname</th>
	    		<th>Lastname</th>
	    		<th>Email</th>
	    	</thead>
	    	<tbody>
			    <tr>
		    		<td>john</td>
		    		<td>Doe</td>
		    		<td>john@example.com</td>
		    	</tr>
		    	<tr>
		    		<td>Mary</td>
		    		<td>Moe</td>
		    		<td>mary@example.com</td>
		    	</tr>
		    	<tr>
		    		<td>July</td>
		    		<td>Dooley</td>
		    		<td>july@example.com</td>
		    	</tr>
		    	<tr>
		    		<td>john</td>
		    		<td>Doe</td>
		    		<td>john@example.com</td>
		    	</tr>
		    	<tr>
		    		<td>Mary</td>
		    		<td>Moe</td>
		    		<td>mary@example.com</td>
		    	</tr>
		    	<tr>
		    		<td>July</td>
		    		<td>Doe</td>
		    		<td>july@example.com</td>
		    	</tr>
			</tbody>	
	    </table>	
    </div>
    <div class="container">
    	<h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders to a table:</p>
    	<table class="table table-bordered"><!-- class adds borders on all sides of the table and cells: -->
    		<thead>
    		    <tr>
    			  <th>Firstname</th>
    			  <th>Lastname</th>
    			  <th>Email</th>
    		    </tr>
    	   </thead>
    	   <tbody>
    	   		<tr>
    	   			<td>John</td>
    	   			<td>Doe</td>
    	   			<td>john@example.com</td>
    	   		</tr>
    	   		<tr>
    	   			<td>Mary</td>
    	   			<td>Moe</td>
    	   			<td>mary@example.com</td>
    	   		</tr>
    	   		<tr>
    	   			<td>July</td>
    	   			<td>Dooley</td>
    	   			<td>july@example.com</td>
    	   		</tr>
    	   		<tr>
    	   			<td>John</td>
    	   			<td>Doe</td>
    	   			<td>john@example.com</td>
    	   		</tr>

    	   </tbody>

    	</table>
    </div>
    <div class="container-fluid">
    	<h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover with bordered state on table rows:</p>
    	<table class="table table-hover table-bordered"> <!-- hover effect (grey background color) on table rows -->
    		<thead>
    			<tr>
    				<th>Firstname</th>
    				<th>Lastname</th>
    				<th>Email</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>John</td>
    				<td>Doe</td>
    				<td>john@example.com</td>
    			</tr>
    			<tr>
    				<td>Mary</td>
    				<td>Moe</td>
    				<td>mary@example.com</td>
    			</tr>
    			<tr>
    				<td>July</td>
    				<td>Dooley</td>
    				<td>july@example.com</td>
    			</tr>
    			<tr>
    				<td>John</td>
    				<td>Doe</td>
    				<td>john@example.com</td>
    			</tr>
    		</tbody>
    	</table>
    </div>
    <div class="container">
    	<h2>Condensed Table</h2>
        <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p> 
    	<table class="table table-condensed"> <!-- class makes a table more compact by cutting cell padding in half -->
    		<thead>
    			<tr>
    				<th>Firstname</th>
    				<th>Lastname</th>
    				<th>Email</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>John</td>
    				<td>Doe</td>
    				<td>john@example.com</td>
    			</tr>
    			<tr>
    				<td>Mary</td>
    				<td>Moe</td>
    				<td>mary@example.com</td>
    			</tr>
    			<tr>
    				<td>July</td>
    				<td>Dooley</td>
    				<td>july@example.com</td>
    			</tr>
    		</tbody>
    	</table>
    </div>
    <div class="container">
    	<h2>Contextual Classes</h2>
  		<p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
    	<table class="table">
    		<thead>
    			<tr>
    				<th>Firstname</th>
    				<th>Lastname</th>
    				<th>Email</th>
    			</tr>
    		</thead>
    		<tbody> <!-- Contextual classes can be used to color table rows (<tr>) or table cells (<td>): -->
    			<tr>
    				<td>Default</td>
    				<td>Defaultson</td>
    				<td>def@somemail.com</td>
    			</tr>
    			<tr class="success"> <!-- Indicates a successful or positive action -->
    				<td>Success</td>
    				<td>Doe</td>
    				<td>john@example.com</td>
    			</tr>
    			<tr class="danger"> <!-- Indicates a dangerous or potentially negative action -->
    				<td>Danger</td>
    				<td>Moe</td>
    				<td>mary@example.com</td>
    			</tr>
    			<tr class="info"> <!-- Indicates a neutral informative change or action -->
    				<td>Info</td>
    				<td>Refs</td>
    				<td>bo@example.com</td>
    			</tr>
    			<tr>
    				<td colspan="active">Active</td> <!-- Applies the hover color to the table row or table cell -->
    				<td>Activeson</td>
    				<td>act@example.com</td>
    			</tr>
    			<tr class="warning"> <!-- Indicates a warning that might need attention -->
    				<td>Default</td>
    				<td>Defaultson</td>
    				<td>def@somemail.com</td>
    			</tr>
    		</tbody>
    	</table>
    </div>
    <div class="container">
    	<h2>Table</h2>
        <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>
    	<table class="table table-condensed"> <!--The .table-responsive class creates a responsive table.  -->
    		<thead>                           <!-- The table will then scroll horizontally on small devices -->
    			<tr>    <!-- (under 768px). When viewing on anything larger than 768px wide, there is no difference:-->
    				
    				<th>##</th>
    				<th>Firstname</th>
    				<th>Lastname</th>
    				<th>Age</th>
    				<th>City</th>
    				<th>Country</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>1</td>
    				<td>Anna</td>
    				<td>Pitt</td>
    				<td>35</td>
    				<td>New York</td>
    				<td>USA</td>
    			</tr>
    			<tr>
    				<td>3</td>
    				<td>Sonu</td>
    				<td>Kumar</td>
    				<td>23</td>
    				<td>Kanpur</td>
    				<td>INDIA</td>
    			</tr>
    		</tbody>
    	</table>
    </div>
    <!--- _________________Bootstrap End Basic Table________________________ -->
    
    <!-- ___________________Bootstrap Start Image Shapes_________________________ -->

    <div class="container">
    	<h2>Rounded Corners</h2>
    	<p>The .img-rounded class adds rounded corners to an image (not available in IE8):</p>
    <!-- The .img-rounded class adds rounded corners to an image (IE8 does not support rounded corners): -->
    	<img src="sssss.JPG" class="img-rounded" height="300" width="400">
    </div>
    <div class="container">
    	<h2>Circle</h2>
    	<p>The .img-circle class shapes the image to a circle (not available in IE8):</p> 
    	<!-- The .img-circle class shapes the image to a circle (IE8 does not support rounded corners):-->
    	<img src="logo.jpg" class="img-circle table-bordered " height="254" width="236" alt="Cinque Terre"l>
    </div>
    <div class="container">
    	<h2>Thumbnail</h2>
    	<p>The .img-thumbnail class creates a thumbnail of the image:</p>
    	<!-- The .img-thumbnail class shapes the image to a thumbnail: -->
    	<img src="img.jpg" class="img-thumbnail" height="236" width="300">
    </div>
    <div class="container">
    	<h2>Image</h2>
    	<p>The .img-responsive class makes the image scale nicely to the parent element (resize the browser window to see the effect):</p>
    	<!-- The .img-responsive class applies display: block; and max-width: 100%; and height: auto; to the image:-->
    	<img src="insurance.jpg" class="img-responsive" height="350" width="500" alt="sonu.jpg">
    </div>
    <div class="container table-bordered">
    	<h2>Image Gallery</h2>
    	<p>The .thumbnail class can be used to display an image gallery.</p>
    	<p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
    	<p>Click on the images to enlarge them.</p>
    	<div class="row">

    		<div class="col-md-4">
    			<div class="thumbnail">
    				<a href="https://www.w3schools.com/w3images/lights.jpg" target="_blank">
    				  <img src="lights.jpg" style="width: 100%" alt="lights">
    				    <div class="caption">
    					  <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
    				    </div>
    				</a>
    			</div>	
    		</div>

	    	<div class="col-md-4">
	          <div class="thumbnail">
		            <a href="https://www.w3schools.com/w3images/nature.jpg" target="_blank">
		             <img src="nature.jpg" alt="nature" style="width:100%">
		               <div class="caption">
		                 <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
		                </div>
		            </a>
	          </div>
	        </div>

	        <div class="col-md-4">
	          <div class="thumbnail">
		            <a href="https://www.w3schools.com/w3images/fjords.jpg" target="_blank">
		             <img src="fjords.jpg" alt="fjords" style="width:100%">
		               <div class="caption">
		                 <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
		                </div>
		            </a>
	          </div>
         	</div> 

        </div>
    </div>
    <div class="container">
    	<h2>Responsive Embed</h2>
  		<p>Create a responsive video and scale it nicely to the parent element with an 16:9 aspect ratio</p>
  		<!--Also let videos or slideshows scale properly on any device.
        Classes can be applied directly to <iframe>, <embed>, <video>, and <object> elements.
        The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video:  -->
  		<div class="embed-responsive embed-responsive-16by9">
  			<iframe src="https://www.youtube.com/embed/XGSy3_Czz8k" class="embed-responsive-item"></iframe>
  		</div>
    </div>
    <div class="container">
    	<h2>Responsive Embed</h2>
  		<p>Create a responsive video and scale it nicely to the parent element.</p>
  		<h2>Aspect ratio 4:3</h2>
  		<div class="embed-responsive embed-responsive-4by3">
  			<iframe src="https://www.youtube.com/embed/XGSy3_Czz8k" class="embed-responsive-item"></iframe>
  		</div>
  		<h2>Aspect ratio 16:9</h2>
  		<div class="embed-responsive embed-responsive-16by9">
  			<iframe src="https://www.youtube.com/embed/lzaJ0rWCfTw" class="embed-responsive-item"></iframe>
  		</div>
    </div>
    <!-- ___________________Bootstrap End Image Shapes_________________________ -->

    <!-- ___Use a <div> element with class .jumbotron to create a jumbotron: ___ -->
    <div class="container">
    	<div class="jumbotron">
    		<h1>Bootstrap Tutorial</h1> 
    		<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
    	</div>
    	<p>This is some text.</p>      
  		<p>This is another text.</p> 
    </div>
    <div class="jumbotron">
    		<h1>Bootstrap Tutorial</h1> 
    		<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
	</div>
	<div class="container">
		<p>This is some text.</p>      
		<p>This is another text.</p>      
	</div>
	<div class="container">
		<div class="page-header">
			<h1>Example Page Header</h1>
		</div>
		<p>This is some text.</p>
		<p>This is another text.</p>
	</div>
	<!-- The .well class adds a rounded border around an element with a gray background color and some padding: -->
	<div class="container">
		<h2>Well</h2>
		<div class="well">Basic Well</div>
	</div>
	<div class="container" >
		<h2>Well Size</h2>
		<div class="well well-sm">Small Well</div>
		<div class="well">Normal Well</div>
		<div class="well well-lg">Large Well</div>
	</div>
	<div class="container">
		<h2>Alerts</h2>
        <!-- Alerts are created with the .alert class, followed by one of the four contextual classes .alert-success, .alert-info, .alert-warning or .alert-dange --> 
		<div class="alert alert-success">
			<strong>Success!</strong>
			This alert box could indicate a successful or positive action.
		</div>
		<div class="alert alert-info">
			<strong>info!</strong>
			This alert box could indicate a neutral informative change or action.
		</div>
		<div class="alert alert-warning">
			<strong>Warning!</strong>
			This alert box could indicate a warning that might need attention.
		</div>
		<div class="alert alert-danger">
			<strong>Danger!</strong>
			This alert box could indicate a Danger that might need attention.
		</div>
	</div>
	<div class="container">
		<h2>Alert Links</h2>
        <p>Add the alert-link class to any links inside the alert box to create "matching colored links".</p>
        <!-- Add the alert-link class to any links inside the alert box to create "matching colored links": -->
        <div class="alert alert-success">
        	<strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
        </div>
        <div class="alert alert-info">
        	<strong>Info!</strong> You should <a href="#" class="alert-link">read this message</a>.
        </div>
        <div class="alert alert-warning">
            <strong>Warning!</strong> You should <a href="#" class="alert-link">read this message</a>.
        </div>
        <div class="alert alert-danger">
            <strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>.
        </div>

        <!-- this is only tst of new branch. -->
	</div>
    <div class="container">
        <h2>Alerts</h2>
        <p>The a element with class="close" and data-dismiss="alert" is used to close the alert box.</p>
        <p>The alert-dismissible class adds some extra padding to the close button.</p>
        <!-- To close the alert message, add a .alert-dismissable class to the alert container. Then add class="close" and data-dismiss="alert" to a link or a button element (when you click on this the alert box will disappear). -->
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">x</a>
            <strong>Success!</strong> This alert box could indicate a successful or positive action.
        </div>
        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">x</a>
            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
        </div>
        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">x</a>
            <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
        </div>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">x</a>
            <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
        </div>

    </div>
    <div class="container">
        <h2>Animated Alerts</h2>
        <p>The .fade and .in classes adds a fading effect when closing the alert message.</p>
        <!-- The .fade and .in classes adds a fading effect when closing the alert message: -->
        <div class="alert alert-success alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
        </div>
        <div class="alert alert-info alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
        </div>
        <div class="alert alert-warning alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
        </div>
        <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
        </div>
    </div>
    <div class="container">
        <h2>Button Styles</h2>
        <!-- The following example shows the code for the different button styles: -->
        <button type="button" class="btn">Basic</button>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
    </div>
    <div class="container">
        <h2>Button Tags</h2>
        <!-- The button classes can be used on an <a>, <button>, or <input> element: -->
        <a href="#" class="btn btn-info" role="button">Link Button</a>
        <button type="button" class="btn btn-info">Button</button>
        <input type="button" class="btn btn-info" value="Input Button">
        <input type="submit" class="btn btn-info" value="Submit Button">
    </div>
    <div class="container">
        <h2>Button Sizes</h2>
        <!-- The following example shows the code for different button sizes: -->
        <button type="button" class="btn btn-primary btn-lg">Large</button>
        <button type="button" class="btn btn-primary btn-md">Medium</button>
        <button type="button" class="btn btn-primary btn-sm">Small</button>
        <button type="button" class="btn btn-primary btn-xs">X-Saml</button>
    </div>
	<div class="container">
        <h2>Block Level Buttons</h2>
        <!-- Add class .btn-block to create a block level button: -->
        <button type="button" class="btn btn-primary btn-block">Button 1</button>
        <button type="button" class="btn btn-default btn-block">Button 2</button>
        <h2>Large Block Level Buttons</h2>
        <button type="button" class="btn btn-primary btn-lg btn-block">Button 1</button>
        <button type="button" class="btn btn-default btn-lg btn-block">Button 2</button>
        <h2>Small Block Level Buttons</h2>
        <button type="button" class="btn btn-primary btn-sm btn-block">Button 1</button>
        <button type="button" class="btn btn-default btn-sm btn-block">Button 2</button>
    </div>
    <div class="container">
        <h2>Button States</h2>
        <!-- The class .active makes a button appear pressed, and the class .disabled makes a button unclickable: -->
        <button type="button" class="btn btn-primary">Primary Button</button>
        <button type="button" class="btn btn-primary active">Active Primary</button>
        <button type="button" class="btn btn-primary disabled">Disabled Primary</button>
    </div>
    <!-- Use a <div> element with class .btn-group to create a button group: -->
    <div class="btn-group container">
    	<button type="button" class="btn btn-primary">Apple</button>
    	<button type="button" class="btn btn-primary">Samsung</button>
    	<button type="button" class="btn btn-primary">Sony</button>
    </div>
    <!-- Tip: Instead of applying button sizes to every button in a group, use class .btn-group-lg|sm|xs to size all buttons in the group: -->
    <div class="btn-group btn-group-lg container">
    	<button type="button" class="btn btn-primary">Apple</button>
    	<button type="button" class="btn btn-primary">Samsung</button>
    	<button type="button" class="btn btn-primary">Sony</button>
    </div>
    <!-- Use the class .btn-group-vertical to create a vertical button group: -->
    <div class="container">
	    <div class="btn-group-vertical">
	    	<h2>Vertical Button Group</h2>
	    	<p>Use the .btn-group-vertical class to create a vertical button group:</p>
	    	<button type="button" class="btn btn-primary">Apple</button>
	    	<button type="button" class="btn btn-primary">Samsung</button>
	    	<button type="button" class="btn btn-primary">Sony</button>
	    </div>
    </div>
    <!-- To span the entire width of the screen, use the .btn-group-justified class: -->
    <div class="container">
    	<div class="btn-group btn-group-justified">
    		<a href="#" class="btn btn-primary">Apple</a>
    		<a href="#" class="btn btn-primary">Samsung</a>
    		<a href="#" class="btn btn-primary">Sony</a>
    	</div>
    </div>
    <!-- Note: For <button> elements, you must wrap each button in a .btn-group class: -->
    <div class="container">
    	<h2>Justified Button Groups</h2>
    	<div class="btn-group btn-group-justified">
    		<div class="btn-group">
    			<button type="button" class="btn btn-primary">Apple</button>
    		</div>
    		<div class="btn-group">
    			<button type="button" class="btn btn-primary">Samsung</button>
    		</div>
    		<div class="btn-group">
    			<button type="button" class="btn btn-primary">Sony</button>
    		</div>
    	</div>
    </div>
    <!-- Nesting Button Groups & Dropdown Menus Nest button groups to create dropdown menus: -->
    <div class="container">
    	<h2>Nesting Button Groups</h2>
    	<p>Nest button groups to create drop down menus:</p>
    	<div class="btn-group">
    		<button type="button" class="btn btn-primary">Apple</button>
    		<button type="button" class="btn btn-primary">Samsung</button>
    	
	    	<div class="btn-group">
	    		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
	    			Sony <span class="caret"></span></button>
	    		<ul class="dropdown-menu" role="menu">
	    			<li><a href="#">Table</a></li>
	    			<li><a href="#">Smartphone</a></li>
	    		</ul>
	    	</div>
    	</div>
    </div>
    <!-- Split Button Dropdowns -->
    <div class="btn-group">
  		<button type="button" class="btn btn-primary">Sony</button>
  		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		<span class="caret"></span>
  		</button>
  		<ul class="dropdown-menu" role="menu">
    		<li><a href="#">Tablet</a></li>
    		<li><a href="#">Smartphone</a></li>
    		<li><a href="#">Tablet</a></li>
    		<li><a href="#">Smartphone</a></li>
    		<li><a href="#">Tablet</a></li>
    		<li><a href="#">Smartphone</a></li>
  		</ul>
	</div>
    <!-- <span class="glyphicon glyphicon-name"></span> -->
    <div>
        <!-- The following example shows different ways to use glyphicons: -->
        <div class="container">
            <h2>Glyphicon Examples</h2>
            <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p>    
            <p>Envelope icon as a link:
                <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
            </p>
            <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>
            <p>Search icon on a button:
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </p>
            <p>Search icon on a styled button:
                <button type="button" class="btn btn-info">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </p>
            <p>Print icon: <span class="glyphicon glyphicon-print"></span></p>      
            <p>Print icon on a styled link button:
                <a href="#" class="btn btn-success btn-lg">
                    <span class="glyphicon glyphicon-print"></span> Print 
                </a>
            </p> 
        </div>
    </div>
    <!-- The numbers (5, 10, and 2) are the badges. -->
    <!-- Use the .badge class within <span> elements to create badges: -->
    <div class="container">
        <h2>Badges</h2>
        <a href="#">News<span class="badge">5</span></a><br>
        <a href="#">Comments<span class="badge">10</span></a><br>
        <a href="#">Updates<span class="badge">2</span></a>
    </div>
    <!-- Badges can also be used inside other elements, such as buttons: -->

    <div class="container">
         <h2>Badges on Buttons</h2>
        <button type="button" class="btn btn-primary">Primary <span class="badge"></span></button>
        <button type="button" class="btn btn-success">Success <span class="badge">3</span></button> 
        <button type="button" class="btn btn-danger">Danger <span class="badge">5</span></button> 
    </div>
    <!-- Use the .label class,  followed by one of the six contextual classes .label-default, .label-primary, .label-success, .label-info, .label-warning or .label-danger, within a <span> element to create a label: -->
    <div class="container">
        <h1>Example <span class="label label-default">New</span></h1>
        <h2>Example <span class="label label-default">New</span></h2>
        <h3>Example <span class="label label-default">New</span></h3>
        <h4>Example <span class="label label-default">New</span></h4>
        <h5>Example <span class="label label-default">New</span></h5>
        <h6>Example <span class="label label-default">New</span></h6>
    </div>
    <!-- The following example shows all contextual label classes: -->
    <div class="container">
        <h2>Contextual Label Classes</h2>
        <p>Contextual classes can be used to color the label.</p>  
        <span class="label label-default">Default Label</span>
        <span class="label label-primary">Primary Label</span>
        <span class="label label-success">Success Label</span>
        <span class="label label-info">Info Label</span>
        <span class="label label-warning">Warning Label</span>
        <span class="label label-danger">Danger Label</span>
    </div>
    <!-- Basic Progress Bar -->
    <!-- A progress bar can be used to show a user how far along he/she is in a process.
         Bootstrap provides several types of progress bars.
         A default progress bar in Bootstrap looks like this: -->
    <div class="container">
        <!-- To create a default progress bar, add a .progress class to a <div> element: -->
        <h2>Basic Progress Bar</h2>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valmax="100" style="width: 60%">
                <span class="sr-only">70% Complete</span>
                
            </div>
        </div>    
    </div>
    <!-- Colored Progress Bars Contextual classes are used to provide "meaning through colors".
        The contextual classes that can be used with progress bars are: -->

<!-- The following example shows how to create progress bars with the different contextual classes: -->

    <div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
               aria-valuemin="0" aria-valuemax="100" style="width:40%">
               40% Complete (success)
            </div>
        </div>

        <div class="progress">
           <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
             aria-valuemin="0" aria-valuemax="100" style="width:50%">
             50% Complete (info)
            </div>
        </div>

        <div class="progress">
           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
             aria-valuemin="0" aria-valuemax="100" style="width:60%">
              60% Complete (warning)
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
             aria-valuemin="0" aria-valuemax="100" style="width:70%">
             70% Complete (danger)
            </div>
        </div>

    </div>   
    <!-- Striped Progress Bars: Add class .progress-bar-striped to add stripes to the progress bars:--> 
    <div>
        <div class="progress">
           <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
               40% Complete (success)
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
               aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                50% Complete (info)
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
              aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
               60% Complete (warning)
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
              aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
              70% Complete (danger)
            </div>
        </div>
    </div>
    <!-- Animated Progress Bar -->
    <!-- Add class .active to animate the progress bar: -->
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
          40%
        </div>
    </div>
    <!-- Stacked Progress Bars -->
    <!-- Create a stacked progress bar by placing multiple bars into the same <div class="progress">:-->
    <div class="progress">
       <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
          Free Space
        </div>
        <div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%">
            Warning
        </div>
        <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
            Danger
        </div>
    </div>  

    <!-- Basic Pagination
    If you have a web site with lots of pages, you may wish to add some sort of pagination to each page. A basic pagination in Bootstrap looks like this: -->

    <div class="container">
        <!-- To create a basic pagination, add the .pagination class to an <ul> element: -->
        <h2>Pagination</h2>
        <p>The .pagination class provides pagination links:</p>
        <ul class="pagination"> 
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
        </ul>
    </div>  
    <!-- Active State The active state shows what is the current page: -->
    <div class="container">
        <!-- Add class .active to let the user know which page he/she is on: -->
        <h2>Pagination - Active State</h2>
        <p>Add class .active to let the user know which page he/she is on:</p>
        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="active"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
        </ul>
    </div>
    <!-- Disabled State A disabled link cannot be clicked: -->
    <div class="container">
        <!-- Add class .disabled if a link for some reason is disabled: -->
        <h2>Pagination - Disabled State</h2>
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li class="disabled"><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
    </div>
    <!-- Pagination Sizing Pagination blocks can also be sized to a larger size or a smaller size: -->
    <div>
        <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks: -->
        <h2>Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks:</h2>
        <ul class="pagination pagination-lg">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
        <ul class="pagination pagination-sm">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
    </div>
    <!-- Breadcrumbs Another form for pagination, is breadcrumbs: -->
    <div>
    <!-- The .breadcrumb class indicates the current page's location within a navigational hierarchy: -->
    <h2>class indicates the current page's location within a navigational hierarchy:</h2>
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Private</a></li>
          <li><a href="#">Pictures</a></li>
          <li class="active">Vacation</li> 
        </ul>
    </div>
    <!-- Pager is also a form of pagination (as described in the previous chapter).Pager provides previous and next buttons (links) To create previous/next buttons, add the .pager class to an <ul> element: -->
    <div class="container">
        <h2>Pager</h2>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
    <!-- Use the .previous and .next classes to align each button to the sides of the page: -->
    <div>
        <ul class="pager">
            <li class="previous"><a href="#">Previous</a></li>
            <li class="next"><a href="#">Next</a></li>
        </ul>
    </div>
    <!-- Basic List Groups The most basic list group is an unordered list with list items: -->
    <div class="container">
        <!-- To create a basic list group, use an <ul> element with class .list-group, and <li> elements with class .list-group-item: -->
        <h2>Basic List Group</h2>
        <ul class="list-group">
            <li class="list-group-item">First item</li>
            <li class="list-group-item">Second item</li>
            <li class="list-group-item">Third item</li>
        </ul>    
    </div>
    <!-- List Group With Badges -->
    <!-- You can also add badges to a list group. The badges will automatically be positioned on the right: -->
    <div class="container">
        <!-- To create a badge, create a <span> element with class .badge inside the list item: -->
        <h2>List Group With Badges</h2>
        <ul class="list-group">
            <li class="list-group-item">New <span class="badge">12</span></li>
            <li class="list-group-item">Deleted <span class="badge">5</span></li>
            <li class="list-group-item">Warning <span class="badge">3</span></li>
            
        </ul>    
    </div>
    <!-- List Group With Linked Items -->
<!-- The items in a list group can also be hyperlinks. This will add a grey background color on hover:-->
    <div class="container">
<!-- To create a list group with linked items, use <div> instead of <ul> and <a> instead of <li>: -->
        <h2>List Group With Linked Items</h2>
        <div class="list-group">
            <a href="#" class="list-group-item">First Item</a>
            <a href="#" class="list-group-item">Second Item</a>
            <a href="#" class="list-group-item">Third Item</a>
        </div>
    </div>
    <!-- Use the .active class to highlight the current item: -->
    <div class="container">
        <h2>Active Item in a List Group</h2>
        <div class="list-group">
            <a href="#" class="list-group-item active">First Item</a>
            <a href="#" class="list-group-item">Second Item</a>
            <a href="#" class="list-group-item">Third Item</a>
        </div>
    </div>
    <!-- Disabled Item The following list group has a disabled item: -->
    <div class="container">
        <!-- To disable an item, add the .disabled class: -->
        <h2>List Group With a Disabled Item</h2>
        <div class="list-group">
            <a href="#" class="list-group-item disabled">First Item</a>
            <a href="#" class="list-group-item">Second Item</a>
            <a href="#" class="list-group-item">First Item</a>
        </div>
    </div>
    <!-- Contextual Classes Contextual classes can be used to color list items: -->
    <div class="container">
        <!-- The classes for coloring list-items are: .list-group-item-success, list-group-item-info, list-group-item-warning, and .list-group-item-danger: -->

        <h2>List Group With Contextual Classes</h2>
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">First item</li>
            <li class="list-group-item list-group-item-info">Second item</li>
            <li class="list-group-item list-group-item-warning">Third item</li>
            <li class="list-group-item list-group-item-danger">Fourth item</li>
        </ul>
          
        <h2>Linked Items With Contextual Classes</h2>
        <p>Move the mouse over the linked items to see the hover effect:</p>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-success">First item</a>
            <a href="#" class="list-group-item list-group-item-info">Second item</a>
            <a href="#" class="list-group-item list-group-item-warning">Third item</a>
            <a href="#" class="list-group-item list-group-item-danger">Fourth item</a>
        </div>
    </div>
    <!-- Custom Content You can add nearly any HTML inside a list group item. -->
    <div class="container">
        <!-- Bootstrap provides the classes .list-group-item-heading and .list-group-item-text which can be used as follows: -->
        <div class="list-group">
            <a href="#" class="list-group-item active">
               <h4 class="list-group-item-heading">First List Group Item Heading</h4>
               <p class="list-group-item-text">List Group Item Text</p>
            </a>
            <a href="#" class="list-group-item">
               <h4 class="list-group-item-heading">Second List Group Item Heading</h4>
               <p class="list-group-item-text">List Group Item Text</p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Third List Group Item Heading</h4>
                <p class="list-group-item-text">List Group Item Text</p>
            </a>
        </div>
    </div>
	<!-- Panels A panel in bootstrap is a bordered box with some padding around its content: -->
    <div class="container">
<!-- Panels are created with the .panel class, and content inside the panel has a .panel-body class: -->
        <h2>Basic Panel</h2>
        <div class="panel panel-default">
            <div class="panel-body">A Basic Panel</div>
        </div>
    </div>
    <!-- Panel Heading -->
    <div class="container">
        <!-- The .panel-heading class adds a heading to the panel: -->
        <h2>Panel Heading</h2>
        <div class="Panel panel-default">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">Panel Content</div>
        </div>
    </div>
    <!-- Panel Footer -->
    <div class="container">
        <!-- The .panel-footer class adds a footer to the panel: -->
        <h2>Panel Footer</h2>
        <div class="Panel panel-default">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">Panel Content</div>
            <div class="panel-footer">Panel Footer</div>
        </div>
    </div>
    <!-- Panel Group -->
    <div class="container">
        <!-- To group many panels together, wrap a <div> with class .panel-group around them. -->
        <!-- The .panel-group class clears the bottom-margin of each panel: -->
        <h2>Panel Group</h2>
       <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Header</div>
                <div class="panel-body">Panel Content</div>
            </div>
           <div class="panel panel-default">
               <div class="panel-heading">Panel Header</div>
               <div class="panel-body">Panel Content</div>
            </div>
           <div class="panel panel-default">
               <div class="panel-heading">Panel Header</div>
               <div class="panel-body">Panel Content</div>
            </div>
        </div>    
    </div>
    <!-- Panels with Contextual Classes -->
    <!-- To color the panel, use contextual classes (.panel-default, .panel-primary, .panel-success, .panel-info, .panel-warning, or .panel-danger): -->

    <div class="container">
      <h2>Panels with Contextual Classes</h2>
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">Panel with panel-default class</div>
          <div class="panel-body">Panel Content</div>
        </div>

        <div class="panel panel-primary">
          <div class="panel-heading">Panel with panel-primary class</div>
          <div class="panel-body">Panel Content</div>
        </div>

        <div class="panel panel-success">
          <div class="panel-heading">Panel with panel-success class</div>
          <div class="panel-body">Panel Content</div>
        </div>

        <div class="panel panel-info">
          <div class="panel-heading">Panel with panel-info class</div>
          <div class="panel-body">Panel Content</div>
        </div>

        <div class="panel panel-warning">
          <div class="panel-heading">Panel with panel-warning class</div>
          <div class="panel-body">Panel Content</div>
        </div>

        <div class="panel panel-danger">
          <div class="panel-heading">Panel with panel-danger class</div>
          <div class="panel-body">Panel Content</div>
        </div>
    </div>

      <!-- Basic Dropdown -->
      <!-- A dropdown menu is a toggleable menu that allows the user to choose one value from a predefined list: -->
    <div class="container">
        <h2>Dropdowns</h2>
        <p>The .dropdown class is used to indicate a dropdown menu.</p>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
            </ul>
        </div>
    </div>
      <!-- Example Explained
      The .dropdown class indicates a dropdown menu.

      To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and the data-toggle="dropdown" attribute.

      The .caret class creates a caret arrow icon (), which indicates that the button is a dropdown.

      Add the .dropdown-menu class to a <ul> element to actually build the dropdown menu. -->
    <div>
          <h2>Dropdowns</h2>
          <p>The .divider class is used to separate links inside the dropdown menu with a thin horizontal line:</p>
          <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorial <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li><a href="#">About Us</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Sonu</a></li>
              </ul>
          </div>
    </div>
          <!-- Dropdown Header -->
      <!-- The .dropdown-header class is used to add headers inside the dropdown menu: -->
    <div class="container">
        <h2>Dropdowns</h2>
        <p>The .dropdown-header class is used to add headers inside the dropdown menu:</p>
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials<span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li class="dropdown-header">Dropdown Header 1</li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Dropdown Header 2</li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
    </div>
      <!-- Disable and Active items -->
      <div class="">
          <h2>Dropdowns</h2>
          <p>The .active class adds a blue background color to the active link.</p>
          <p>The .disabled class disables a dropdown item (grey text color).</p>
          <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#">Normal</a></li>
                  <li class="disabled"><a href="#">Disabled</a></li>
                  <li class="active"><a href="#">Active</a></li>
                  <li><a href="#">Normal</a></li>
              </ul>
          </div>
      </div>
      <!-- Dropdown Position -->
      <!-- To right-align the dropdown, add the .dropdown-menu-right class to the element with .dropdown-menu: -->
      <div>
          <h2>Dropdowns</h2>
          <p>Add the .dropdown-menu-right class to .dropdown-menu to right-align the dropdown menu:</p>
          <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Exmple <span class="caret"></span></button>
              <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li class="divider"></li>
                  <li><a href="#">About Us</a></li>
              </ul>
          </div>
      </div>
      <!-- Dropup -->
      <!-- If you want the dropdown menu to expand upwards instead of downwards, change the <div> element with class="dropdown" to "dropup": -->
       <div class="container">
            <h2>Dropdowns</h2>
            <p>The .dropup class makes the dropdown menu expand upwards instead of downwards:</p>
            <div class="dropup">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropup Example <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li class="divider"></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
        <!-- Dropdown Accessibility -->
        <!-- To help improve accessibility for people using screen readers, you should include the following role and aria-* attributes, when creating a dropdown menu: -->
        <div class="container">
             <h2>Dropdowns</h2>
             <p>The .dropdown class is used to indicate a dropdown menu.</p>
             <p>Use the .dropdown-menu class to actually build the dropdown menu.</p>
             <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials<span class="caret"></span></button>
                 <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                     <li role="presentation" class="divider"></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                 </ul>
             </div>
        </div>
        <!-- Basic Collapsible-->
        <!-- Collapsibles are useful when you want to hide and show large amount of content: -->
        <div class="container">
            <h2>Simple Collapsible</h2>
            <p>Click on the button to toggle between showing and hiding content.</p>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple Collapsible</button>
            <div id="demo" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <!-- Note: For <a> elements, you can use the href attribute instead of the data-target attribute: -->
        <div class="container">
            <h2>Simple Collapsible</h2>
            <a href="#demo" class="btn btn-info" data-toggle="collapse">Simple collapsible</a>
            <div id="demo" class="collapse">
                SSSSS ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>    
        <div class="container">
           <h2>Simple Collapsible</h2>
           <p>Click on the button to toggle between showing and hiding content.</p>
           <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
           <div id="demo" class="collapse in">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </div>
        </div>
        <!-- Collapsible Panel -->
        <!-- The following example shows a collapsible panel: -->
        <div class="container">
            <h2>Collapsible Panel</h2>
            <p>Click on the collapsible panel to open and close it.</p>
            <div class="panel-group">
                <div class="Panel panel-default"> 
                    <div class="panel-heading">
                        <h4 class="Panel-title">
                            <a href="#collapse1" data-toggle="collapse">Collapsible panel</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="Panel-collapse collapse">
                        <div class="panel-body">Body Panel</div>
                        <div class="panel-footer">Panel Footer</div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- Collapsible List Group -->
        <!-- The following shows a collapsible panel with a list group inside: -->
        <div class="container">
          <h2>Collapsible List Group</h2>
          <p>Click on the collapsible panel to open and close it.</p>
          <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">Collapsible list group</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item">One</li>
                            <li class="list-group-item">Two</li>
                            <li class="list-group-item">Three</li>
                        </ul>
                        <div class="panel-footer">Footer</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accordion -->
        <!-- The following example shows a simple accordion by extending the panel component. -->
        <!-- Note: Use the data-parent attribute to make sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown. -->
        <div class="container">
           <h2>Accordion Example</h2>
            <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                         </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                             <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                         </h4>
                     </div>
                      <div id="collapse3" class="panel-collapse collapse">
                           <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicingelit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           </div>
                        </div>
                </div>
            </div> 
        </div>
        <!-- Most web pages have some kind of a menu- In HTML, a menu is often defined in an unordered list <ul> (and styled afterwards), like this: -->
    <!-- If you want to create a horizontal menu of the list above, add the .list-inline class to <ul>: -->    <div class="container">
            <h3>Inline List</h3>
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
        </div>   
        <!-- Tabs are created with <ul class="nav nav-tabs">: -->
        <!-- Tip: Also mark the current page with <li class="active">. -->
        <!-- The following example creates navigation tabs: -->
        <div>
            <h3>Tabs</h3>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Remarks</a></li>
            </ul>
            <br>
            <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)</p>
        </div>
        <!-- Tabs With Dropdown Menu  -->
        <!-- Tabs can also hold dropdown menus The following example adds a dropdown menu to "Menu 1": -->
        <div class="container">
            <h3>Tabs With Dropdown Menu</h3>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Submenu 1-1</a></li>
                        <li><a href="#">Submenu 1-2</a></li>
                        <li><a href="#">Submenu 1-3</a></li>                        
                    </ul>
                </li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
        </div>
        <!-- Pills are created with <ul class="nav nav-pills">. Also mark the current page with <li class="active">: -->    
        <div class="container">
            <h3>Pills</h3>
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
        </div>    
        <!-- Vertical Pills - Pills can also be displayed vertically. Just add the .nav-stacked class: -->
        <div class="container">
            <h3>Vertical Pills</h3>
            <p>Use the .nav-stacked class to vertically stack pills:</p>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Area</a></li>
            </ul>
        </div>
        <!-- Vertical Pills in a Row -->
        <div class="container">
            <h3>Vertical Pills</h3>
            <div class="row">
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-md-3"> 
                   <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-md-3"> 
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 3</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-lg"></div>
            </div>     
        </div>
        <!-- Pills With Dropdown Menu -->
        <!-- Pills can also hold dropdown menus. The following example adds a dropdown menu to "Menu 1":-->
        <div class="container">
            <h3>Pills With Dropdown Menu</h3>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Submenu 1-1</a></li>
                        <li><a href="#">Submenu 1-2</a></li>
                        <li><a href="#">Submenu 1-3</a></li>                        
                    </ul>
                </li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
        </div>
        <!-- Centered Tabs and Pills -->
        <!-- To center/justify the tabs and pills, use the .nav-justified class. -->
        <!-- Note that on screens that are smaller than 768px, the list items are stacked (content will remain centered): -->

        <div class="container">
            <h3>Centered Tabs</h3>
            <p>To center/justify the tabs and pills, use the .nav-justified class. Note that on screens that are smaller than 768px, the list items are stacked (content will remain centered).</p>
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
            <br>
            <h3>Centered Pills</h3>
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
            </ul>
        </div>
        <!--To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a <div> element with class .tab-content. If you want the tabs to fade in and out when clicking on them, add the .fade class to .tab-pane: -->
        <div class="container">
            <h2>Dynamic Tabs</h2>
            <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#menu1" data-toggle="tab">Menu 1</a></li>
                <li><a href="#menu1" data-toggle="tab">Menu 2</a></li>
                <li><a href="#menu1" data-toggle="tab">Menu 3</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
        <!-- Toggleable / Dynamic Pills. The same code applies to pills; only change the data-toggle attribute to data-toggle="pill": -->
        <div class="container">
            <h2>Dynamic Pills</h2>
            <p>To make the tabs toggleable, add the data-toggle="pill" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
                <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
                <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
            </ul>
    
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                   <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
        <!-- Navigation Bars A navigation bar is a navigation header that is placed at the top of the page: A standard navigation bar is created with <nav class="navbar navbar-default">. -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>       
        </nav>
        <div class="container">
            <h3>Basic Navbar Example</h3>
            <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
        </div>
        <!-- Note: All of the examples on this page will show a navigation bar that takes up too much space on small screens (however, the navigation bar will be on one single line on large screens - because Bootstrap is responsive). This problem (with the small screens) will be solved in the last example on this page. -->
        <!-- Inverted Navigation Bar If you don't like the style of the default navigation bar, Bootstrap provides an alternative, black navbar: -->
        <!-- Just change the .navbar-default class into .navbar-inverse: -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h3>Inverted Navbar</h3>
            <p>An inverted navbar is black instead of gray.</p>
        </div>
        <!-- Navigation Bar With Dropdown -->
        <!-- Navigation bars can also hold dropdown menus. The following example adds a dropdown menu for the "Page 1" button: -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
          <h3>Navbar With Dropdown</h3>
          <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
        </div>
        <!-- Right-Aligned Navigation Bar -->
        <!-- The .navbar-right class is used to right-align navigation bar buttons.
        In the following example we insert a "Sign Up" button and a "Login" button to the right in the navigation bar. We also add a glyphicon on each of the two new buttons: -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">WebsiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Page1
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 2-2</a></li>
                            <li><a href="#">Page 3-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h3>Right Aligned Navbar</h3>
            <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
        </div>
        <!-- Navbar Buttons -->
        <!-- To add buttons inside the navbar, add the .navbar-btn class on a Bootstrap button: -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <button class="btn btn-danger navbar-btn">Button</button>
            </div>
        </nav>
        <div class="container">
            <h2>Navbar Button</h2>
            <p>Use the navbar-btn class on a button to vertically align (same padding as links) it inside the navbar.</p>
        </div>
        <!-- Navbar Forms -->
        <!-- To add form elements inside the navbar, add the .navbar-form class to a form element and add an input(s). Note that we have added a .form-group class to the div container holding the input. This adds proper padding if you have more than one inputs (you will learn more about this in the Forms chapter). -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <form class="navbar-form navbar-left" action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </nav> 
        <div class="container">
            <h3>Navbar Forms</h3>
            <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
        </div>
        <!-- You can also use the .input-group and .input-group-addon classes to attach an icon or help text next to the input field. You will learn more about these classes in the Bootstrap Inputs chapter. -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <form class="navbar-form navbar-left" action="/action_page.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
        <div class="container">
            <h3>Navbar Forms</h3>
            <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
            <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
            <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
        </div>
        <!-- Navbar Text  -->
        <!-- Use the .navbar-text class to vertical align any elements inside the navbar that are not links (ensures proper padding and text color). -->
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <p class="navbar-text">Some text</p>
        </nav>
        <div class="container">
            <h3>Navbar Text</h3>
            <p>Use the .navbar-text class to vertical align any elements inside the navbar that are not links (ensures proper padding).</p>
        </div>
        
        <!-- Fixed Navigation Bar -->
        <!-- The navigation bar can also be fixed at the top or at the bottom of the page. A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.-->
        <!-- The .navbar-fixed-top class makes the navigation bar fixed at the top: -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                   <li class="active"><a href="#">Home</a></li>
                   <li><a href="#">Page 1</a></li>
                   <li><a href="#">Page 2</a></li>
                   <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div class="container" style="margin-top:50px">
            <h3>Fixed Navbar</h3>
            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>
        </div>

        <h1>Scroll this page to see the effect</h1>
        <!-- The .navbar-fixed-bottom class makes the navigation bar stay at the bottom: -->
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h3>Fixed Bottom Navbar</h3>
            <div class="row">
                <div class="col-md-3">
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
                <div class="col-md-3"> 
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
                <div class="col-md-3"> 
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
                <div class="col-md-3">
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
                <div class="clearfix visible-lg"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
                <div class="col-md-3"> 
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
                <div class="col-md-3"> 
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
                <div class="col-md-3">
                    <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
                </div>
            <   div class="clearfix visible-lg"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="col-md-3"> 
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="col-md-3"> 
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="col-md-3">
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="clearfix visible-lg"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="col-md-3"> 
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="col-md-3"> 
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="col-md-3">
                <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
            </div>
            <div class="clearfix visible-lg"></div>
        </div>
    </div>
    <!-- Collapsing The Navigation Bar The navigation bar often takes up too much space on a small screen.
    We should hide the navigation bar; and only show it when it is needed.
    In the following example the navigation bar is replaced by a button in the top right corner. Only when the button is clicked, the navigation bar will be displayed: -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h3>Collapsible Navbar</h3>
        <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
        <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
    <!-- Bootstrap Forms -->
    <!-- Bootstrap's Default Settings -->
    <!-- Form controls automatically receive some global styling with Bootstrap: All textual <input>, <textarea>, and <select> elements with class .form-control have a width of 100%. Bootstrap Form Layouts
    Bootstrap provides three types of form layouts: Vertical form (this is default) Horizontal form
    Inline form Standard rules for all three form layouts: Wrap labels and form controls in <div class="form-group"> (needed for optimum spacing)Add class .form-control to all textual <input>, <textarea>, and <select> elements Bootstrap Vertical Form (default) -->
    <div class="container">
  		<h2>Vertical (basic) form</h2>
  		<form action="/action_page.php">
    		<div class="form-group">
      			<label for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    		</div>
    		<div class="form-group">
      			<label for="pwd">Password:</label>
      			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    		</div>
    		<div class="checkbox">
      			<label><input type="checkbox" name="remember"> Remember me</label>
    		</div>
    		<button type="submit" class="btn btn-default">Submit</button>
  		</form>
	</div>

	<!--  Bootstrap Inline Form  -->
	<!-- In an inline form, all of the elements are inline, left-aligned, and the labels are alongside.
      Note: This only applies to forms within viewports that are at least 768px wide! Additional rule for an inline form: Add class .form-inline to the <form> element The following example creates an inline form with two input fields, one checkbox, and one submit button: -->
    <div class="container">
  		<h2>Inline form</h2>
  		<p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
  		<form class="form-inline" action="/action_page.php">
    		<div class="form-group">
      			<label for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    		</div>
    		<div class="form-group">
      			<label for="pwd">Password:</label>
      			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    		</div>
    		<div class="checkbox">
      			<label><input type="checkbox" name="remember"> Remember me</label>
    		</div>
    		<button type="submit" class="btn btn-default">Submit</button>
  		</form>
	</div> 
	<div class="container">
        <h3>Collapsible Navbar</h3>
        <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
        <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
    
    <!-- Tip If you don't include a label for every input, screen readers will have trouble with your forms.You can hide the labels for all devices, except screen readers, by using the .sr-only class: -->
    
    <div class="container">
  		<h2>Inline form with .sr-only class</h2>
  		<p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
  		<form class="form-inline" action="/action_page.php">
    		<div class="form-group">
      			<label class="sr-only" for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter email"  name="email">
    		</div>
    		<div class="form-group">
      			<label class="sr-only" for="pwd">Password:</label>
      			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    		</div>
    		<div class="checkbox">
      			<label><input type="checkbox" name="remember"> Remember me</label>
    		</div>
    		<button type="submit" class="btn btn-default">Submit</button>
  		</form>
	</div>




</div>






</body>
</html>