@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 1500)
      .attr("height", 400);

     //make the rectangle
     //tamanho da sala
     var rectangle = svgContainer.append("rect")
      .attr("x", 10)
      .attr("y", 10)
      .attr('fill', 'gray')
      .attr("width", 1200)
      .attr("height", 400);
     
     //mesa 1
      @include('sociais.mesas.mesa1')
      //mesa 2
      @include('sociais.mesas.mesa2')
      //mesa 3
      @include('sociais.mesas.mesa3')
      //mesa 4
      @include('sociais.mesas.mesa4')
      //mesa 5
      @include('sociais.mesas.mesa5')
      //mesa 6
      @include('sociais.mesas.mesa6')
      //mesa 7
      @include('sociais.mesas.mesa7')
      //mesa do monitor
      @include('sociais.mesas.mesamonitor')

      //porta da sala
      var rectangle = svgContainer.append("rect")
      .attr("x", 150)
      .attr("y", 380)
      .attr('fill', 'white')
      .attr("width", 100)
      .attr("height", 50)

      //nome indicando a entrada
      var text = svgContainer.append('text')
      .attr('x', 160)
      .attr('y', 395)
      .text('ENTRADA')
      .attr ('fill', 'black'); 

      //impressora da sala
      /*var rectangle = svgContainer.append("rect")
      .attr("x", 175)
      .attr("y", 220)
      .attr('fill', 'blue')
      .attr("width", 50)
      .attr("height", 50);*/

      //Impressora da sala
        var rectangle = svgContainer.append("rect")
      .attr("x", 170)
      .attr("y", 240)
      .attr('fill', 'black')
      .attr("width", 60)
      .attr("height", 40);
      
        var rectangle = svgContainer.append("rect")
      .attr("x", 180)
      .attr("y", 270)
      .attr('fill', 'white')
      .attr("width", 40)
      .attr("height", 20);
      
        var rectangle = svgContainer.append("rect")
      .attr("x", 180)
      .attr("y", 230)
      .attr('fill', 'white')
      .attr("width", 40)
      .attr("height", 10);
      
        var circle = svgContainer.append('circle')
      .attr('cx', 220)
      .attr('cy', 255)
      .attr('r', 3)
      .attr('stroke', 'white')
      .attr('fill', 'white');

        var circle = svgContainer.append('circle')
      .attr('cx', 210)
      .attr('cy', 255)
      .attr('r', 3)
      .attr('stroke', 'white')
      .attr('fill', 'white');

        var rectangle = svgContainer.append("rect")
      .attr("x", 185)
      .attr("y", 275)
      .attr('fill', 'black')
      .attr("width", 20)
      .attr("height", 3);
      
        var rectangle = svgContainer.append("rect")
      .attr("x", 185)
      .attr("y", 280)
      .attr('fill', 'black')
      .attr("width", 30)
      .attr("height", 3);
    
        var rectangle = svgContainer.append("rect")
      .attr("x", 185)
      .attr("y", 285)
      .attr('fill', 'black')
      .attr("width", 30)
      .attr("height", 3);

  </script>

@endsection