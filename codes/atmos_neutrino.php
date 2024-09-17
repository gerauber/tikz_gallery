\usepackage{tkz-euclide}
...
\begin{tikzpicture}
    \tkzLabelPoint[right=0.05cm, yshift=0cm](0, 4){.}

    \draw[fill=white, dashed] (0,0) -- (0,2) arc[start angle=90, end angle=270,radius=2cm] -- (0,0);
    \draw[dashed] (-1.98,-0.15) arc [start angle=180, end angle=0, x radius=1.98cm, y radius=0.5cm];
    \draw[fill=gray!30] (0,0) -- (0,2) arc[start angle=90, end angle=-90,radius=2cm] -- (0,0);
    \fill[fill=white] (0,0) ellipse (0.5cm and 2cm);
    \draw[] (1.98,-0.15) arc [start angle=0, end angle=-180, x radius=1.98cm, y radius=0.5cm];
    \draw[dashed] (0,2) arc [start angle=90, end angle=270, x radius=0.5cm, y radius=2cm];
    \draw (0,-2) arc [start angle=-90, end angle=90, x radius=0.5cm, y radius=2cm];
    \draw[dashed] (-0.5, 0.35) -- (0.5, -0.65);

    \tkzDefPoint(0, 0){z1} 
    \tkzDefPoint(0, 3){z2} 
    \tkzDefPoint(1.33,4.3){pt1} 
    \tkzDefPoint(-4, -0.9){pdt1}

    \fill[black] (0.33,1.5) circle (0.05cm);

    \tkzDefPoint(1.33,3.5){p1} 
    \tkzDefPoint(0.33+0.25,1.5+0.5){p2} 
    \draw[draw=black, ultra thick] (p1) -- (p2);

    \tkzDefPoint(-3.87, -1.5){pd1} 
    \tkzDefPoint(-2.47, -0.5){pd2} 
    \draw[draw=black, ultra thick] (pd1) -- (pd2);

    \tkzDefPoint(-1.945, -0.125){ie1} 
    \tkzDefPoint(0.33,1.5){ie2}
    \draw[draw=black, dashed] (ie1) -- (ie2);

    \draw[draw=black, dotted] (pd2) -- (-1.9, -0.2);
    \draw[draw=black, dotted] (pd2) -- (-1.8, 0.1);
    \draw[draw=black, dotted] (pd2) -- (-1.8, -0.3);
    \draw[draw=black, dotted] (pd2) -- (-1.9, 0.2);
    \draw[draw=black, dotted] (pd2) -- (-1.7, -0.2);
    \draw[draw=black, dotted] (pd2) -- (-1.7, -0.4);
    \draw[draw=black, dotted] (pd2) -- (-1.8, -0.5);
    \draw[draw=black, dotted] (pd2) -- (ie1);

    \draw[draw=black, dotted] (p2) -- (0.33,1.5);
    \draw[draw=black, dotted] (p2) -- (0.1,1.5);
    \draw[draw=black, dotted] (p2) -- (0.15,1.7);
    \draw[draw=black, dotted] (p2) -- (0.5,1.6);
    \draw[draw=black, dotted] (p2) -- (0.4,1.4);
    \draw[draw=black, dotted] (p2) -- (0.6,1.4);
    \draw[draw=black, dotted] (p2) -- (0.2,1.3);
    \draw[draw=black, dotted] (p2) -- (0.2,1.5);

    \tkzLabelPoint[right=-2.6cm, yshift=0cm](p1){\Large{Downward}}
    \tkzLabelPoint[right=0.2cm, yshift=-0.5cm](pd1){\Large{Upward}}
\end{tikzpicture}