//mesa do monitor
var rectangle = svgContainer.append("rect")
      .attr("x", 10)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 100)
      .attr("height", 100);
//texto da mesa do monitor
var text = svgContainer.append('text')
      .attr('x', 25)
      .attr('y', 395)
      .text('MONITOR')
      .attr ('fill', 'black');

            //computador do monitor
            var circle = svgContainer.append('circle')
            .attr('cx', 45)
            .attr('cy', 345)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador do monitor
                  @if(empty($sociais_mesa_monitor_equipamento1->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador do monitor
            var text = svgContainer.append('text')
            .attr('x', 45)
            .attr('y', 350)
            .text('1')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

