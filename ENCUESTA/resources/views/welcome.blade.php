//graphic displayed
        const svgWidthDisplayed = 1500;
        const svgHeightDisplayed = 500;
        const widthDisplayed = svgWidthDisplayed - margin.left - margin.right
        const heightDisplayed = svgWidthDisplayed - margin.top - margin.bottom

        var colorDisplayed = d3.scaleLinear()
            .domain([0, 25, 75, 100])
            .range(["#00A57B", "#FFFF00", "#DF5407", "#DE0808"]);

        const svgDisplayed = d3
            .select('.container')
            .append('svgDisplayed')
            .attr('widthDisplayed', svgWidthDisplayed)
            .attr('heightDisplayed', svgHeightDisplayed);

        const graphAreaDisplayed = svgDisplayed
            .append('g')
            .attr('transform', `translate(${margin.left}, ${margin.top})`);

        const xDisplayed = d3.scaleBand()
            .rangeRound([0, widthDisplayed])
            .domain(data.map(d => d.name))
            .padding(0.4);

        const yDisplayed = d3.scaleLinear()
            .range([heightDisplayed, 0])
            .domain([0,100])
            .nice();

        const xAxisDisplayed = d3.axisBottom(xDisplayed);
        const yAxisDisplayed = d3.axisLeft(y).ticks(5);;

        graphAreaDisplayed
            .append('g')
            .attr('class', 'axis')
            .attr('transform', `translate(0, ${heightDisplayed+20})`)
            .call(xAxis)
            .attr("font-size", 18);

        graphAreaDisplayed
            .append('g')
            .attr('class', 'axis')
            .call(yAxis)
            .attr("font-size", 16);

        const rxDisplayed = 12;
        const ryDisplayed = 12;
        const labelsDispayed = graphAreaDisplayed.append('g');

        graphAreaDisplayed
            .selectAll("bar")
            .data(data)
            .enter().append("path")
            .style("fill", function(d) {
                return colorDisplayed(d.value)
            })
            .attr("d", item => `
        M${xDisplayed(item.name)},${y(item.value) + ryDisplayed}
        a${rxDisplayed},${ryDisplayed} 0 0 1 ${rxDisplayed},${-ryDisplayed}
        h${xDisplayed.bandwidth() - 2 * rxDisplayed}
        a${rxDisplayed},${ryDisplayed} 0 0 1 ${rxDisplayed},${ryDisplayed}
        v${heightDisplayed - y(item.value) - ryDisplayed}
        h${-(xDisplayed.bandwidth())}Z
      `);

        labelsDispayed.selectAll('text')
            .data(data)
            .enter().append('text')
            .text(d => d.value.toFixed(2) + '%')
            .attr('xDisplayed', d => xDisplayed(d.name) + xDisplayed.bandwidth() / 4)
            .attr('y', d => y(d.value) - 10)
            .attr('font-size', 18)
            .attr('font-family', 'sans-serif')

        svgDisplayed.append('text')
            .attr('xDisplayed', svgWidthDisplayed / 2)
            .attr('y', 30)
            .attr('font-size', 18)
            .attr('text-anchor', 'middle')
            .text('SECCIONES')
