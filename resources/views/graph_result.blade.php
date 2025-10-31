<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graph Visualization</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.js"></script>
    <style>
        #graph {
            width: 800px;
            height: 600px;
            border: 1px solid lightgray;
        }
    </style>
</head>
<body>
    <h1>Graph Visualization</h1>

    <div id="graph"></div>

    <script>
        // Prepare nodes and edges from the server
        const edges = [
            @foreach($edges as $edge)
                {from: "{{ $edge['from'] }}", to: "{{ $edge['to'] }}", label: "{{ $edge['distance'] }}"},
            @endforeach
        ];

        // Extract unique nodes from the edges
        const nodesSet = new Set();
        edges.forEach(edge => {
            nodesSet.add(edge.from);
            nodesSet.add(edge.to);
        });

        const nodes = Array.from(nodesSet).map(node => ({id: node, label: node}));

        // Create the network graph
        const container = document.getElementById('graph');
        const data = {
            nodes: new vis.DataSet(nodes),
            edges: new vis.DataSet(edges),
        };
        const options = {
            edges: {
                arrows: 'to',
                font: { align: 'top' }
            }
        };
        const network = new vis.Network(container, data, options);
    </script>

    <a href="{{ route('showForm') }}">Go back to the form</a>
</body>
</html>
