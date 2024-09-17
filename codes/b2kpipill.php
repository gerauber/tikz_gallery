\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}
        \vertex (a1) {\(\overline b\)}; 
        \vertex[right=2.5cm of a1] (a2);
        \vertex[right=2.5cm of a2] (a3);
        \vertex[right=2.5cm of a3] (a4) {\(\overline s\)};
        \vertex[below=2em of a1] (b1) {\(u\)}; 
        \vertex[right=2cm of b1] (b3);
        \vertex[right=2.5cm of b3] (b4);
        \vertex[below=2em of a4] (b2) {\(u\)};
        \vertex at ($(a2)!0.5!(a3)!1cm!90:(a3)$) (d); 
        \vertex[above=4em of a4] (c1) {\(\ell^{-}\)}; 
        \vertex[above=2em of c1] (c3) {\(\ell^{+}\)}; 
        \vertex at ($(c1)!0.5!(c3) - (3cm, 0)$) (c2);
        \vertex[below=3em of b2] (d1) {\(d\)};
        \vertex[below=2em of d1] (d2) {\(\overline u\)};
        \vertex[below=3em of d2] (d3) {\(\overline d\)};
        \vertex[below=2em of d3] (d4) {\(u\)};
        \vertex at ($(d2)!0.5!(d4) - (4cm, 0)$) (e1);
        \vertex at ($(d1)!0.5!(d3) - (2.5cm, 0)$) (e2);
        
        \diagram* {
        (a4) -- [fermion] (a3) -- [fermion, edge label={$\overline{u}, \, \overline{c}, \, \overline{t}$}] (a2) -- [fermion] (a1),
        (c3) -- [fermion] (c2) -- [fermion] (c1), 
        (a2) -- [boson, quarter left, edge label=\(W^{+}\)] (d) -- [boson, quarter left] (a3),
        (d) -- [boson, bend left, edge label={$\gamma, \,  Z^{0}$}] (c2),
        (b1) -- [fermion] (b3) -- [fermion] (b4) -- [fermion] (b2),
        (d2) -- [fermion] (e1) -- [fermion] (d4), 
        (d3) -- [fermion] (e2) -- [fermion] (d1), 
        (b3) -- [gluon, edge label=\(g\)] (e1), 
        (b4) -- [gluon, edge label=\(g\)] (e2), 
        };
        
        \draw [decoration={brace}, decorate] (b1.south west) -- (a1.north west)
        node [pos=0.5, left] {\(B^{+}\)};
        \draw [decoration={brace}, decorate] (a4.north east) -- (b2.south east)
        node [pos=0.5, right] {\(K^{+}\)};
        \draw [decoration={brace}, decorate] (d1.north east) -- (d2.south east)
        node [pos=0.5, right] {\(\pi^{-}\)};
        \draw [decoration={brace}, decorate] (d3.north east) -- (d4.south east)
        node [pos=0.5, right] {\(\pi^{+}\)};
    \end{feynman}
\end{tikzpicture}