var chart = $("#chart"),
    aspect = chart.width() / chart.height(),
    container1 = chart.parent();
$(window).on("resize", function() {
    var targetWidth = container1.width();
    chart.attr("width", targetWidth);
    chart.attr("height", Math.round(targetWidth / aspect));
}).trigger("resize");

(function() {
    var width = 1000,
        height = 600;

    var svg = d3.select("#chart")
        .append("svg")
        .attr("height", height)
        .attr("width", width)
        .append("g")
        .attr("transform","translate(0,0)");

    var defs = svg.append("defs");

    defs.append("pattern")
        .attr("id", "Monash")
        .attr("height", "100%")
        .attr("width", "100%")
        .attr("patternContentUnits","objectBoundingBox")
        .append("image")
        .attr("height", 1)
        .attr("width", 1)
        .attr("preserveAspectRatio", "none")
        .attr("xmlns:xlink", "https://www.w3.org/1999/xlink")
        .attr("xlink:href", "monash.png");

    var radiusScale = d3.scaleSqrt().domain([20,40]).range([40,80]);

    var simulation = d3.forceSimulation()
        .force("x", d3.forceX(width / 2).strength(0.2))
        .force("y", d3.forceY(height / 2.5).strength(0.2))
        .force("charge", d3.forceManyBody())
        .force("collide", d3.forceCollide(function(d) {
            return radiusScale(d.size) + 20;
        }));

    d3.queue()
        .defer(d3.csv, "logo/data.csv")
        .await(ready)

    function ready (error, datapoints) {

        var circles = svg.selectAll(".uni")
            .data(datapoints)
            .enter().append("circle")
            .attr("class", "uni image-popup")
            .attr("r", function(d) {
                return radiusScale(d.size)
            })
            .attr("fill", function(d){
                return "url(#" + d.name.replace(/ /g,"-") + ")";
            })
            .attr("href", function(d) {
                return "#" + d.class;
            })
            .on('mouseover', function(d) {
                d3.select(this).transition()
                    .duration(500)
                    .ease(d3.easeBounce)
                    .attr("r",radiusScale(100))
                    .attr("stroke-width", 5)
                    .attr("stroke", "black");
            })
            .on('mouseout', function(d) {
                d3.select(this).transition()
                    .duration(500)
                    .ease(d3.easeBounce)
                    .attr("r", radiusScale(d.size))
                    .attr("stroke-width", 0)
            })
            .call(d3.drag()
                .subject(dragsubject)
                .on("start", dragstarted)
                .on("drag", dragged)
                .on("end", dragended)
            );

        function dragsubject() {
            return simulation.find(d3.event.x, d3.event.y);
        }

        function dragstarted(d) {
            if (!d3.event.active) simulation.alphaTarget(0.3).restart();
            d3.select(this).raise().classed("active", true);
        }

        function dragged(d) {
            d3.select(this).attr("cx", d.x = d3.event.x).attr("cy", d.y = d3.event.y);
        }

        function dragended(d) {
            d3.select(this).classed("active", false);
        }

        circles.append("title").text(function(d) { return d.name; });

        defs.selectAll(".uni-pattern")
            .data(datapoints)
            .enter().append("pattern")
            .attr("class", "uni-pattern")
            .attr("id", function(d) {
                return d.name.replace(/ /g,"-");
            })
            .attr("height", "100%")
            .attr("width", "100%")
            .attr("patternContentUnits","objectBoundingBox")
            .append("image")
            .attr("height", 1)
            .attr("width", 1)
            .attr("preserveAspectRatio", "none")
            .attr("xmlns:xlink", "https://www.w3.org/1999/xlink")
            .attr("xlink:href", function(d) {
                return d.image_path;
            });

        simulation.nodes(datapoints)
            .on('tick', ticked);

        function ticked() {
            circles
                .attr("cx", function(d) {
                    return d.x;
                })
                .attr("cy", function(d) {
                    return d.y;
                })
        }

    }
})();
