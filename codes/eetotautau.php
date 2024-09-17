\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1.2]
    \begin{feynman}
        \vertex (em) {\(e^-\)};
        \vertex[below=3cm of em] (ep) {\(e^+\)};
        \vertex[below right=1.5cm and 1.5cm of em] (m);
        \vertex[right=2cm of m] (m1);
        \vertex[right=5cm of ep] (mum) {\(\tau^+\)};
        \vertex[right=5cm of em] (mup) {\(\tau^-\)};

        \diagram* {
        (em) -- [fermion] (m) -- [fermion] (ep),
        (m) --[boson, edge label={$ \gamma , \, Z$}] (m1),
        (mum) -- [fermion] (m1) -- [fermion] (mup),
        };
    \end{feynman}
\end{tikzpicture}