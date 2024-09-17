\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        
        \vertex (g1);
        \vertex[above left=1cm and 0.5cm of g1] (ep){\(e^+\)};
        \vertex[below left=1cm and 0.5cm of g1] (em){\(e^-\)};
        \vertex[right=1cm of g1] (g2);
        \vertex[above right=1cm and 0.5cm of g2] (ep1){\(\ell^+\)};
        \vertex[below right=1cm and 0.5cm of g2] (em1){\(\ell^-\)};
        \vertex[below right=0.5cm and 0.25cm of g2] (g3);
        \vertex[above right=0.5cm and 1cm of g3] (g4);
        \vertex[right=1.5cm of ep1] (ep2){\(\ell^+\)};
        \vertex[right=1.5cm of em1] (em2){\(\ell^-\)};
        
        \diagram* {
        (em) -- [fermion] (g1) -- [fermion] (ep),
        (g1) -- [boson, edge label={$ \gamma , \, Z$}] (g2),
        (ep1) -- [fermion] (g2) -- [fermion] (em1),
        (g3) -- [boson, edge label=\( \gamma\), near end] (g4),
        (ep2) -- [fermion] (g4) -- [fermion] (em2),
        };
    
    \end{feynman}
\end{tikzpicture}