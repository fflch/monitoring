//mesa 1
var rectangle = svgContainer.append("rect")
      .attr("x", 150)
      .attr("y", 10)
      .attr('fill', 'white')
      .attr("width", 100)
      .attr("height", 200);
//texto da mesa 1
var text = svgContainer.append('text')
      .attr('x', 165)
      .attr('y', 205)
      .text('MESA 01')
      .attr ('fill', 'black');  

            //computadores da esquerda
            //computador 1
            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke' ,'black')
            //logica do computador 1
                  @if(empty($sociais_mesa1_equipamento1->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 1
            var text = svgContainer.append('text')
            .attr('x', 165)
            .attr('y', 30)
            .text('1')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

            //computador 2
            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 2
                  @if(empty($sociais_mesa1_equipamento2->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 2
            var text = svgContainer.append('text')
            .attr('x', 165)
            .attr('y', 80)
            .text('2')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

            //computador 3
            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 3
                  @if(empty($sociais_mesa1_equipamento3->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 3
            var text = svgContainer.append('text')
            .attr('x', 165)
            .attr('y', 130)
            .text('3')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black');

            //computador 4
            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 4
                  @if(empty($sociais_mesa1_equipamento4->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 4
            var text = svgContainer.append('text')
            .attr('x', 165)
            .attr('y', 180)
            .text('4')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black');

            //computadores da direita
            //computador 5
            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 5
                  @if(empty($sociais_mesa1_equipamento5->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 5
            var text = svgContainer.append('text')
            .attr('x', 225)
            .attr('y', 30)
            .text('5')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

            //computador 6
            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 6
                  @if(empty($sociais_mesa1_equipamento6->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 6
            var text = svgContainer.append('text')
            .attr('x', 225)
            .attr('y', 80)
            .text('6')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black'); 

            //computador 7
            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 7
                  @if(empty($sociais_mesa1_equipamento7->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 7
            var text = svgContainer.append('text')
            .attr('x', 225)
            .attr('y', 130)
            .text('7')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black');

            //computador 8
            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            //logica do computador 8
                  @if(empty($sociais_mesa1_equipamento8->username))
                        .attr('fill', 'red');
                  @else
                        .attr('fill', 'green');
                  @endif
            //texto do computador 8
            var text = svgContainer.append('text')
            .attr('x', 225)
            .attr('y', 180)
            .text('8')
            .attr("text-anchor", "middle")
            .attr ('fill', 'black');
