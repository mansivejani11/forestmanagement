<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graph Input Form</title>
</head>
<body>
    <h1>Graph Input Form</h1>

    <form action="{{ route('generateGraph') }}" method="POST">
        @csrf

        <div id="edges-input">
            <div class="edge">
                <label for="from">From:</label>
                <input type="text" name="edges[0][from]" required>

                <label for="to">To:</label>
                <input type="text" name="edges[0][to]" required>

                <label for="distance">Distance:</label>
                <input type="number" name="edges[0][distance]" required>
            </div>
        </div>

        <button type="button" onclick="addEdge()">Add Edge</button>
        <button type="submit">Generate Graph</button>
    </form>

    <script>
        let edgeCount = 1;

        function addEdge() {
            const edgesInput = document.getElementById('edges-input');
            const newEdge = document.createElement('div');
            newEdge.classList.add('edge');
            newEdge.innerHTML = `
                <label for="from">From:</label>
                <input type="text" name="edges[${edgeCount}][from]" required>
                <label for="to">To:</label>
                <input type="text" name="edges[${edgeCount}][to]" required>
                <label for="distance">Distance:</label>
                <input type="number" name="edges[${edgeCount}][distance]" required>
            `;
            edgesInput.appendChild(newEdge);
            edgeCount++;
        }
    </script>
</body>
</html>
