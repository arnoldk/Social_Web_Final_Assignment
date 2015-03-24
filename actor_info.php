<html>
  <head>
    <title>Social Web Final Assessment</title>
    <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab" />
    <meta property="dc:creator" content="Arnold Kraakman, Fleur Fenneker & Elmar Moerman" />
    <link rel="foaf:primaryTopic" href="http://example.org/VU/#assessment" />
    <link href="style.css" rel="stylesheet" type="text/css">
   	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script><script type="text/javascript" src="https://www.google.com/jsapi"></script><script type="text/javascript" src="sgvizler.js"></script><script type="text/javascript">sgvizler.prefix('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#'); sgvizler.prefix('rdfs', 'http://www.w3.org/2000/01/rdf-schema#'); sgvizler.prefix('dbo', 'http://dbpedia.org/ontology/'); sgvizler.prefix('dbp', 'http://dbpedia.org/property/'); sgvizler.prefix('xs', 'http://www.w3.org/2001/XMLSchema#'); sgvizler.prefix('dbr', 'http://dbpedia.org/resource/'); 
	$(document).ready(function() { sgvizler.containerDrawAll(); });
    </script>
</head>
  
  <body about="vu_assessment3" >
  <div id="header" align="center">
       <h2>Social Web - Final Assignment</h2>
  </div>
   <center>

			</br>
			
				Actor name is:  <?php echo $_POST['name']; ?><br>
	 				
	 	<br>
		<br>
		<?php $name = $_POST['name'];?>
		
		<div id="sgvzl_dbpedia_actor_details" 
		data-sgvizler-endpoint="http://dbpedia.org/sparql" 
		data-sgvizler-query="
								SELECT (?l as ?Actor_Name) (?abs as ?Actor_Abstract) ?Actor_Image
								WHERE {
								?f rdf:type dbo:Agent.
								?f rdfs:label ?l.
								?f dbo:abstract ?abs.  
								?f dbo:occupation dbr:Actor.
								?f dbo:thumbnail ?Actor_Image
								FILTER (regex (?l, 'Robert De Niro', 'i')) 
								FILTER (lang(?l) = lang(?abs))
								FILTER (lang(?abs) = 'en')
								} ORDER BY ?location
								LIMIT 1000"
		data-sgvizler-chart="google.visualization.Table" 
		data-sgvizler-loglevel="1" 
		data-sgvizler-chart-options="" 
		style="width:1000px; height:400px;">
	</div>	
	<p>Birthplace of  <?php echo $name ?> </p>
	<div id="sgvzl_dbpedia_actor_map" 
		data-sgvizler-endpoint="http://dbpedia.org/sparql" 
		data-sgvizler-query="
							SELECT ?birthplacelabel (?l as ?name) ?abs 
							WHERE {
							?f rdf:type dbo:Agent.
							?f rdfs:label ?l.
							?f dbo:abstract ?abs.  
							?f dbo:occupation dbr:Actor .
							#?f dbo:thumbnail ?Actor_Image
							?f dbo:birthPlace ?birthplace.
							?birthplace rdfs:label ?birthplacelabel.
							FILTER (regex (?l, 'Robert De Niro', 'i')) 
							FILTER (lang(?l) = lang(?abs))
							FILTER (lang(?abs) = 'en')
							FILTER (lang(?birthplacelabel) = lang(?abs))
							#FILTER (lang(?abs) = 'en')
							} ORDER BY ?location
							LIMIT 1"
		data-sgvizler-chart="google.visualization.Map" 
		data-sgvizler-loglevel="1" 
		data-sgvizler-chart-options="zoomLevel=8|useMapTypeControl=true|showTip=true" 
		style="width:1200px; height:700px;">
	</div>
	<br>
		    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=Robert%20De%20Niro" data-widget-id="580055036975308800">Tweets about Robert De Niro</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</center>
     </br>
	 </br>
   
   <div id="footer" align="center">
    Copyright by:
        <div vocab="http://schema.org/" typeof="Person">
        <span property="name">Fleur</span>, 
        <span property="name">Elmar</span> & 
        <span property="name">Arnold</span>
        </br>
		</div>
        <span property="dtstart" content="2015-03-12T19:00-08:00">12 March 2015</span>
 	</div> 
  </body>
</html>