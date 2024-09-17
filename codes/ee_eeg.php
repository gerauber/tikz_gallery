\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        
        \vertex (g1);
        \vertex[above left=0.5cm and 1cm of g1] (ep){\(e^+\)};
        \vertex[above right=0.5cm and 1cm of g1] (em){\(e^+\)};
        \vertex[below=1cm of g1] (g2);
        \vertex[below left=0.5cm and 1cm of g2] (ep1){\(e^-\)};
        \vertex[below right=0.5cm and 1cm of g2] (em1){\(e^-\)};
        \vertex[above left=0.25cm and 0.5cm of g1] (isr1);
        \vertex[above=0.8cm of g1] (isr2){\(\gamma\)};
        \vertex[above left=0.45cm and 0.9cm of em1] (fsr1);
        \vertex[above=1.4cm of em1] (fsr2){\(\gamma\)};
        
        \diagram* {
        (em) -- [fermion] (g1) -- [fermion] (ep),
        (g1) -- [boson, edge label=\( \gamma\)] (g2),
        (ep1) -- [fermion] (g2) -- [fermion] (em1),
        (isr1) -- [boson] (isr2),
        (fsr1) -- [boson] (fsr2),
        };
        
    \end{feynman}
\end{tikzpicture}