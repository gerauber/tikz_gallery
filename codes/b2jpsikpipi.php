\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}
        \vertex (b1) {\(u\)}; 
        \vertex[right=2cm of b1] (b3);
        \vertex[right=2.5cm of b3] (b4);
        \vertex[right=3cm of b4] (b2) {\(u\)};
        \vertex[above=2em of b2] (a4) {\(\overline s\)};
        \vertex[above=4em of a4] (c1) {\(c\)}; 
        \vertex[above=2em of c1] (c3) {\(\overline c\)}; 
        \vertex at ($(c1)!0.5!(a4) - (3cm, 0)$) (c2);
        \vertex[below=3em of b2] (d1) {\(d\)};
        \vertex[below=2em of d1] (d2) {\(\overline u\)};
        \vertex[below=3em of d2] (d3) {\(\overline d\)};
        \vertex[below=2em of d3] (d4) {\(u\)};
        \vertex at ($(d2)!0.5!(d4) - (4cm, 0)$) (e1);
        \vertex at ($(d1)!0.5!(d3) - (2.5cm, 0)$) (e2);
        \vertex [above=8em of b1] (h1) {\(\overline b\)};
        \vertex [right=4.2cm of h1] (h2);
        
        \diagram* {
        (c3) -- [fermion] (h2) -- [fermion] (h1),
        (a4) -- [fermion] (c2) -- [fermion] (c1),
        (c2) -- [boson, edge label=\(W^{+}\)] (h2),
        (b1) -- [fermion] (b3) -- [fermion] (b4) -- [fermion] (b2),
        (d2) -- [fermion] (e1) -- [fermion] (d4), 
        (d3) -- [fermion] (e2) -- [fermion] (d1), 
        (b3) -- [gluon, edge label=\(g\)] (e1), 
        (b4) -- [gluon, edge label=\(g\)] (e2), 
        };
        
        \draw [decoration={brace}, decorate] (b1.south west) -- (h1.north west)
        node [pos=0.5, left] {\(B^{+}\)};
        \draw [decoration={brace}, decorate] (c3.north east) -- (c1.south east)
        node [pos=0.5, right] {\(J/\psi\)};
        \draw [decoration={brace}, decorate] (a4.north east) -- (b2.south east)
        node [pos=0.5, right] {\(K^{+}\)};
        \draw [decoration={brace}, decorate] (d1.north east) -- (d2.south east)
        node [pos=0.5, right] {\(\pi^{-}\)};
        \draw [decoration={brace}, decorate] (d3.north east) -- (d4.south east)
        node [pos=0.5, right] {\(\pi^{+}\)};
    \end{feynman}
\end{tikzpicture}