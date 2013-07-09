var obj4  = '{"name": "","children": [{"name": "Disposiciones Normativas","children": [{"name": "Positivación del DAI","children": [{"name": "1.-", "size": 10000},{"name": "2.-", "size": 9000},{"name": "3.-", "size": 8000},{"name": "4.-", "size": 7000},{"name": "5.-", "size": 6000}]},{"name": "Información restringida","children": [{"name": "6.-", "size": 10000},{"name": "7.-", "size": 9000},{"name": "8.-", "size": 8000}]},{"name": "Sanciones al incumplimiento de la ley","children": [{"name": "9.-", "size": 10000},{"name": "10.-", "size": 10000}]}]},{"name": "Diseño institucional","children": [{"name": "Instituciones internas de acceso a la información","children": [{"name": "11.-", "size": 10000},{"name": "12.-", "size": 9000},{"name": "13.-", "size": 8000},{"name": "14.-", "size": 7000}]},{"name": "Promoción del DAI","children": [{"name": "15.-", "size": 10000},{"name": "16.-", "size": 9000},{"name": "17.-", "size": 8000}]},{"name": "Órganos garantes","children": [{"name": "18.-", "size": 10000},{"name": "19.-", "size": 9000},{"name": "20.-", "size": 8000}]}]},{"name": "Procedimientos","children": [{"name": "Procedimientos de acceso a la información","children": [{"name": "21.-", "size": 10000},{"name": "22.-", "size": 9000},{"name": "23.-", "size": 8000},{"name": "24.-", "size": 7000}]},{"name": "Procedimientos de revisión","children": [{"name": "25.-", "size": 10000},{"name": "26.-", "size": 9000},{"name": "27.-", "size": 8000}]},{"name": "Difusión proactiva de información pública","children": [{"name": "28.-", "size": 10000},{"name": "29.-", "size": 9000},{"name": "30.-", "size": 8000}]}]}]}';
var json4 = JSON.parse(obj4);

var w4 = 650,
    h4 = 500,
    r4 = 500,
    x4 = d3.scale.linear().range([0, r4]),
    y4 = d3.scale.linear().range([0, r4]),
    node4,
    root4;

var pack4 = d3.layout.pack()
    .size([r4, r4])
    .value(function(d4) { return d4.size; })

var vis4 = d3.select("#nchart2").insert("svg:svg", "h2")
    .attr("width", w4)
    .attr("height", h4)
  .append("svg:g")
    .attr("transform", "translate(" + (w4 - r4) / 2 + "," + (h4 - r4) / 2 + ")");

  node4 = root4 = json4;

  var nodes4 = pack4.nodes(root4);
  
  vis4.selectAll("circle")
      .data(nodes4)
    .enter().append("svg:circle")
      .attr("class", function(d2) { return d2.children ? "parent" : "child"; })
      .attr("cx", function(d2) { return d2.x; })
      .attr("cy", function(d2) { return d2.y; })
      .attr("r", function(d2) { return d2.r; })
      .on("click", function(d2) { return zoom4(node4 == d2 ? root4 : d2); });

  vis4.selectAll("text")
      .data(nodes4)
    .enter().append("svg:text")
      .attr("class", function(d2) { return d2.children ? "parent" : "child"; })
      .attr("x", function(d2) { return d2.x; })
      .attr("y", function(d2) { return d2.y; })
      .attr("dy", ".22em")
      .attr("text-anchor", "middle")
      .style("opacity", function(d2) { return d2.r > 60 ? 1 : 0; })
      .text(function(d2) { return d2.name; });
		
  d3.select(window).on("click", function() { zoom4(root4); });


function zoom4(d, i) {
  var k = r4 / d.r / 2;
  x4.domain([d.x - d.r, d.x + d.r]);
  y4.domain([d.y - d.r, d.y + d.r]);
 
 
  var t = vis4.transition()
      .duration(d3.event.altKey ? 7500 : 750);

  t.selectAll("circle")
      .attr("cx", function(d) { return x4(d.x); })
      .attr("cy", function(d) { return y4(d.y); })
      .attr("r", function(d) { return k * d.r; });

	
  t.selectAll("text")
      .attr("x", function(d) { return x4(d.x); })
      .attr("y", function(d) { return y4(d.y); })
      .style("opacity", function(d) { return k * d.r > 60 ? 1 : 0; });
	
  node4 = d;
  d3.event.stopPropagation();
}
