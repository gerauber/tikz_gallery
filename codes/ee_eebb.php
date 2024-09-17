\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (g1);
        \vertex[above left=1cm and 0.5cm of g1] (ep){\(e^+\)};
        \vertex[below left=1cm and 0.5cm of g1] (em){\(e^-\)};
        \vertex[right=1cm of g1] (g2);
        \vertex[above right=1cm and 0.5cm of g2] (ep1){\(e^+\)};
        \vertex[below right=1cm and 0.5cm of g2] (em1){\(e^-\)};
        \vertex[below right=0.5cm and 0.25cm of g2] (g3);
        \vertex[above right=0.5cm and 1cm of g3] (g4);
        \vertex[below right=0cm and 1cm of ep1] (ep2);
        \vertex[above right=0cm and 1cm of em1] (em2);
        \vertex[above right=0.1cm and 1cm of em2] (u1){\(\bar{u}\)};
        \vertex[below right=0.1cm and 1cm of em2] (u2){\( d\)};
        \vertex[above right=0.1cm and 1cm of ep2] (d1){\( \bar{d}\)};
        \vertex[below right=0.1cm and 1cm of ep2] (d2){\( u\)};
        \vertex[below right=0.05cm and 0.5cm of ep2] (gg1);
        \vertex[below right=1.3cm and 0.1cm of gg1] (gg2);
        \vertex[above right=0.2cm and 0.6cm of gg2] (uu1){\( \bar{u}\)};
        \vertex[below right=0.2cm and 0.6cm of gg2] (uu2){\( u\)};
        
        \diagram* {
        (em) -- [fermion] (g1) -- [fermion] (ep),
        (g1) -- [boson, edge label=\( \gamma\)] (g2),
        (ep1) -- [fermion] (g2) -- [fermion] (em1),
        (g3) -- [boson, edge label=\( \gamma\), near end] (g4),
        (ep2) -- [boson, edge label'=\( W^+\)] (g4) -- [boson, edge label'=\( W^-\)] (em2),
        (u1) -- [fermion] (em2) -- [fermion] (u2),
        (d1) -- [fermion] (ep2) -- [fermion] (d2),
        (gg1) -- [gluon] (gg2),
        (uu1) -- [fermion] (gg2) -- [fermion] (uu2),
        };
    \end{feynman}
\end{tikzpicture}