//mesa 6
var rectangle = svgContainer.append("rect")
      .attr("x", 750)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 100)
      .attr("height", 100);
//texto da mesa 6
var text = svgContainer.append('text')
      .attr('x', 765)
      .attr('y', 395)
      .text('MESA 06')
      .attr ('fill', 'black');

            //bolinhas da esquerda
            //computador 1
            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 1
                  @if(empty($sociais_mesa6_equipamento1->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 1
            var text = svgContainer.append('text')
            .attr('x', 765)
            .attr('y', 320)
            .text('1')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

            //computador 2
            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 2
                  @if(empty($sociais_mesa6_equipamento2->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 2
            var text = svgContainer.append('text')
            .attr('x', 765)
            .attr('y', 370)
            .text('1')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

            //bolinhas da direita
            //computador 3
            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 3
                  @if(empty($sociais_mesa6_equipamento3->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 3
            var text = svgContainer.append('text')
            .attr('x', 825)
            .attr('y', 320)
            .text('3')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

            //computador 4
            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 4
                  @if(empty($sociais_mesa6_equipamento4->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 4
            var text = svgContainer.append('text')
            .attr('x', 825)
            .attr('y', 370)
            .text('4')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 
