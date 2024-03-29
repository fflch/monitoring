@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    
    //ESTRUTURA
    
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 1080)
      .attr("height", 1080);
  
    //chão e paredes 
    var rectangle = svgContainer.append("rect")
      .attr("x", 40)
      .attr("y", 40)
      .attr('fill', 'gray')
      .attr("width", 1000)
      .attr("height", 460);
    
    var rectangle = svgContainer.append("rect")
      .attr("x", 36)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 4)
      .attr("height", 464);

    var rectangle = svgContainer.append("rect")
      .attr("x", 36)
      .attr("y", 500)
      .attr('fill', 'black')
      .attr("width", 1008)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 1040)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 4)
      .attr("height", 464);

    var rectangle = svgContainer.append("rect")
      .attr("x", 36)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 406)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 520)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 520)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 880)
      .attr("y", 280)
      .attr('fill', 'black')
      .attr("width", 160)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 880)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 4)
      .attr("height", 244);
      
     //Impressora
     var rectangle = svgContainer.append("rect")
      .attr("x", 175)
      .attr("y", 220)
      .attr('fill', 'purple')
      .attr("width", 50)
      .attr("height", 50);

     //nomes
    var text = svgContainer.append('text')
      .attr('x', 80)
      .attr('y', 375)
      .text('MONITORIA')
      .attr ('fill', 'white');

    var text = svgContainer.append('text')
      .attr('x', 87)
      .attr('y', 280)
      .text('')
      .attr ('fill', 'white');

    var text = svgContainer.append('text')
      .attr('x', 440)
      .attr('y', 60)
      .text('ENTRADA')
      .attr('stroke', 'white')
      .attr ('fill', 'white'); 

    var text = svgContainer.append('text')
      .attr('x', 920)
      .attr('y', 160)
      .text('ANEXO')
      .attr ('fill', 'white');     
     
      
     //MESAS,PCS E CARACTERES
    
     //mesa1
    @include('histgeo.mesas.mesa01')

     //mesa2
    @include('histgeo.mesas.mesa02')

     //mesa3
    @include('histgeo.mesas.mesa03')

     //mesa4
    @include('histgeo.mesas.mesa04')

     //mesa5
    @include('histgeo.mesas.mesa05')

     //mesa6
    @include('histgeo.mesas.mesa06')

     //mesa7
    @include('histgeo.mesas.mesa07')

     //mesa8
    @include('histgeo.mesas.mesa08')

     //mesa9
    @include('histgeo.mesas.mesa09')


  </script>

@endsection