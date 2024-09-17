\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (g1);
        \vertex[above left=0.5cm and 1cm of g1] (ep){\(e^+\)};
        \vertex[above right=0.5cm and 1cm of g1] (em){\(e^+\)};
        \vertex[below=0.7cm of g1] (g2);
        \vertex[below=0.7cm of g2] (g3);
        \vertex[above right=0.5cm and 1cm of g2] (ep2){\(\ell^+\)};
        \vertex[below right=0.5cm and 1cm of g3] (em2){\(\ell^-\)};
        \vertex[below=0.7cm of g3] (g4);
        \vertex[below left=0.5cm and 1cm of g4] (ep1){\(e^-\)};
        \vertex[below right=0.5cm and 1cm of g4] (em1){\(e^-\)};
        
        \diagram* {
        (em) -- [fermion] (g1) -- [fermion] (ep),
        (ep2) -- [fermion] (g2) -- [vertex] (g3) -- [fermion] (em2),
        (g1) -- [boson, edge label'=\( \gamma\)] (g2),
        (g3) -- [boson, edge label'=\( \gamma\)] (g4),
        (ep1) -- [fermion] (g4) -- [fermion] (em1),
        };
    \end{feynman}
\end{tikzpicture}