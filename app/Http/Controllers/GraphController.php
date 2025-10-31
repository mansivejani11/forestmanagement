<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphController extends Controller
{
    /**
     * Show the input form for edges.
     */
    public function showForm()
    {
        return view('graph_form');
    }

    /**
     * Process the input edges and render the graph.
     */
    public function generateGraph(Request $request)
    {
        $edges = $request->input('edges', []);
        
        // Send edges to the graph view for visualization
        return view('graph_result', [
            'edges' => $edges,
        ]);
    }
}
