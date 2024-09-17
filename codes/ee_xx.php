\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (g1);
        \vertex[above left=1cm and 0.5cm of g1] (ep){\(e^+\)};
        \vertex[below left=1cm and 0.5cm of g1] (em){\(e^-\)};
        \vertex[right=1cm of g1] (g2);
        \vertex[above right=1cm and 0.5cm of g2] (ep1){\( \bar{q}, \, \ell^+ \)};
        \vertex[below right=1cm and 0.5cm of g2] (em1){\( q, \, \ell^-\)};
        
        \diagram* {
        (em) -- [fermion] (g1) -- [fermion] (ep),
        (g1) -- [boson, edge label={$ \gamma , \, Z$}] (g2),
        (ep1) -- [fermion] (g2) -- [fermion] (em1),
        };
    \end{feynman}
\end{tikzpicture}